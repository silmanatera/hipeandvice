<?php

class Product extends Eloquent{

	protected $table = 'product';
	protected $fillable = array('id', 'user_id', 'category_id', 'college_id', 'title', 'short_resume', 'medium_resume', 'quantity_available', 'price', 'large_description', 'publish', 'status', 'created_at', 'updated_at');

	/************************************************************************
     *   Funcion: 		get_by_category
     *   Descripcion:   Retorna lista de productos por categorias 
     ************************************************************************/
	public static function get_by_category($id){
		try{

            DB::beginTransaction();

            $result = Product::where('category_id', '=', $id)->orderBy('id', 'asc')->paginate(10);

            DB::commit();

			return $result;

		}catch(\Exception $e){

            DB::rollback();

            $errores                =   New ErrorIncidence();
            $errores->script        =   "Product";
            $errores->funcion       =   "get_by_category";
            $errores->codigo        =   $e->getCode();
            $errores->linea         =   $e->getLine();
            $errores->descripcion   =   $e->getMessage();
            $errores->save();
        }
	}

	/************************************************************************
     *   Funcion: 		exist
     *   Descripcion:   Indica si un producto existe
     ************************************************************************/
	public static function exist($id){
		try{

            DB::beginTransaction();

            $result = (is_null(Product::find($id)))? false : true ;

            DB::commit();

			return $result;

		}catch(\Exception $e){

            DB::rollback();

            $errores                =   New ErrorIncidence();
            $errores->script        =   "Product";
            $errores->funcion       =   "exist";
            $errores->codigo        =   $e->getCode();
            $errores->linea         =   $e->getLine();
            $errores->descripcion   =   $e->getMessage();
            $errores->save();
        }
	}

}