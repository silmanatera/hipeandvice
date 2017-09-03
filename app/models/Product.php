<?php

class Product extends Eloquent{

	protected $table = 'product';
	protected $fillable = array('id', 'user_id', 'category_id', 'college_id', 'title', 'short_resume', 'medium_resume', 'quantity_available', 'price', 'large_description', 'publish', 'status', 'created_at', 'updated_at');

	/************************************************************************
     *   Funcion: 		get_by_category
     *   Descripcion:   Retorna lista de productos por categorias 
     ************************************************************************/
	public static function get_by_category($id){
		return Product::where('category_id', '=', $id)->orderBy('id', 'asc')->paginate(10);
	}

	/************************************************************************
     *   Funcion: 		exist
     *   Descripcion:   Indica si un producto existe
     ************************************************************************/
	public static function exist($id){
		return (is_null(Product::find($id)))? false : true ;
	}

	/************************************************************************
     *   Funcion: 		exist
     *   Descripcion:   Indica si un producto existe
     ************************************************************************/
	public static function register_new_product($input){
		//var_dump($product);exit();
		$rules = array(
            'college'  	=> array('required'),
            'category'  => array('required'),  
            'title'  	=> array('required'),
            'short_resume'  => array('required'),
            'medium_resume'	=> array('required'),
            'quantity'  => array('required'),
            'price'  	=> array('required'),
            'large_resume'  => array('required')

            );

        $validator = Validator::make($input, $rules);

        if ($validator->fails()){
            $response['mensaje']     = $validator;
            $response['error']       = true;

            return $response;

        }else {

            try {

                DB::beginTransaction(); 
                $publish = '';

                if(isset($input['publish_yes'])){
                	$publish = $input['publish_yes'];
                }else{
                	$publish = $input['publish_no'];
                }

                //var_dump($product);exit();
                $product = New Product();
                $product->college_id   	= $input['college'];
                $product->category_id  	= $input['category'];
                $product->user_id      	= Auth::user()->id;
                $product->title      	= $input['title'];
                $product->short_resume  = $input['short_resume'];
                $product->medium_resume     	= $input['medium_resume'];
                $product->quantity_available   	= $input['quantity'];
                $product->price     	= $input['price'];
                $product->publish     	= $publish;
                $product->large_description     = $input['large_resume'];
                $product->status     	= 1;

                //var_dump($product); exit();
                if ($product->save()) {

                    $response['error']  = false;
                    $response['data']   = $product;
                    DB::commit();

                    return $response;

                }
                
            }catch(\Exception $e){

                DB::rollback();
                //var_dump('en el catch');exit();
                $response['error']  = true;
                $response['mensaje']     = $validator;
                //$response['data']   = $product;
                $errores                =   New ErrorIncidence();
                $errores->script        =   "Product";
                $errores->funcion       =   "register_new_product";
                $errores->codigo        =   $e->getCode();
                $errores->linea         =   $e->getLine();
                $errores->descripcion   =   $e->getMessage();
                $errores->save();

                 return $response;
                
            }
        }
	}

}