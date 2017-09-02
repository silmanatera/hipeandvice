<?php

class Category extends Eloquent{

	protected $table = 'category';
	protected $fillable = array('id', 'name', 'status', 'created_at', 'updated_at');

	/************************************************************************
     *   Funcion: 		get_all_list
     *   Descripcion:   Retorn la lista de categorias
     ************************************************************************/
	public static function get_all_list(){
		return Category::where('status', '=', 1)->get();
	}

	/************************************************************************
     *   Funcion: 		get_list
     *   Descripcion:   Retorn la lista de categorias
     ************************************************************************/
	public static function get_list(){
		return Category::where('status', '!=', 0)->orderBy('id','asc')->paginate(10);
	}

	/************************************************************************
     *   Funcion: 		get_category
     *   Descripcion:   Retorna una categoria
     ************************************************************************/
	public static function get_category($id){
		return Category::find($id);
	}

	/************************************************************************
     *   Funcion: 		get_total_register
     *   Descripcion:   Retorna la lista de todas las categorias
     ************************************************************************/
	public static function get_total_register(){
		return Category::where('status', '!=', 0)->count();
	}

    /************************************************************************
     *   Funcion:       exist
     *   Descripcion:   Indica si una categoria existe
     ************************************************************************/
    public static function exist($id){
        return (is_null(Category::find($id)))? false : true ;
    }

	/************************************************************************
     *   Funcion: 		register
     *   Descripcion:   Registra una nueva categoria
     ************************************************************************/
	public static function register($inputs){
		$rules = array(
        	'name'        		=> array('required'),
            );

        $validator = Validator::make($inputs, $rules);

        if ($validator->fails()){
            // si no cumple las reglas se van a devolver los errores al controlador
            $response['mensaje']     = $validator;
            $response['error']       = true;

            return $response;

        }else {

            try {
            	DB::beginTransaction();
				
                $category               	= New Category();
                $category->name             = $inputs['name'];
                $category->status           = 1;

                if ($category->save()) {

                    // se retorna un mensaje de Exito al controlador
                    $response['error']  = false;
                    $response['data']   = $category;

                    DB::commit();

                    return $response;

                }

            }catch(\Exception $e){

                DB::rollback();

                $errores                =   New ErrorIncidence();
                $errores->script        =   "Category";
                $errores->funcion       =   "register";
                $errores->codigo        =   $e->getCode();
                $errores->linea         =   $e->getLine();
                $errores->descripcion   = 	$e->getMessage();
                $errores->save();
				//$error_anwser = ErrorIncidence::error_incidences('User','register_user',$e->getLine(),$e->getMessage());

			}
        }
	}

	/************************************************************************
     *   Funcion: 		modify
     *   Descripcion:   Modifica una categoria
     ************************************************************************/
	public static function modify($inputs, $id){
		$rules = array(
        	'name'        		=> array('required'),
            );

        $validator = Validator::make($inputs, $rules);

        if ($validator->fails()){
            // si no cumple las reglas se van a devolver los errores al controlador
            $response['mensaje']     = $validator;
            $response['error']       = true;

            return $response;

        }else {

            try {
            	DB::beginTransaction();
				
                $category               	= Category::find($id);
                $category->name             = $inputs['name'];

                if ($category->save()) {

                    // se retorna un mensaje de Exito al controlador
                    $response['error']  = false;
                    $response['data']   = $category;

                    DB::commit();

                    return $response;

                }

            }catch(\Exception $e){

                DB::rollback();

                $errores                =   New ErrorIncidence();
                $errores->script        =   "Category";
                $errores->funcion       =   "modify";
                $errores->codigo        =   $e->getCode();
                $errores->linea         =   $e->getLine();
                $errores->descripcion   = 	$e->getMessage();
                $errores->save();
				//$error_anwser = ErrorIncidence::error_incidences('User','register_user',$e->getLine(),$e->getMessage());

			}
        }
	}
	
	/************************************************************************
     *   Funcion: 		change_status
     *   Descripcion:   Modifica el status de una categoria
     ************************************************************************/
	public static function change_status($status, $id){
		try{

            DB::beginTransaction();

            $category = Category::find($id);

            $category->status = $status;
            $result = $category->status;
            
            $category->save();

            DB::commit();

            return $result;

        }catch(\Exception $e){

            DB::rollback();

            $errores                =   New ErrorIncidence();
            $errores->script        =   "Category";
            $errores->funcion       =   "change_status";
            $errores->codigo        =   $e->getCode();
            $errores->linea         =   $e->getLine();
            $errores->descripcion   =   $e->getMessage();
            $errores->save();
        }
	}

	/************************************************************************
     *   Funcion: 		remove
     *   Descripcion:   Elimina una categoria
     ************************************************************************/
	public static function remove($id){
		try{

            DB::beginTransaction();

            $category = Category::find($id);

            $category->status = 0;
            
            $category->save();

            DB::commit();

            return 1;

        }catch(\Exception $e){

            DB::rollback();

            $errores                =   New ErrorIncidence();
            $errores->script        =   "Category";
            $errores->funcion       =   "remove";
            $errores->codigo        =   $e->getCode();
            $errores->linea         =   $e->getLine();
            $errores->descripcion   =   $e->getMessage();
            $errores->save();
        }
	}

}