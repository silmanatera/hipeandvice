<?php

class Category extends Eloquent{

	protected $table = 'category';
	protected $fillable = array('id', 'name', 'status', 'created_at', 'update_at');

	/************************************************************************
     *   Funcion: 		get_all_list
     *   Descripcion:   Retorn la lista de categorias
     ************************************************************************/
	public static function get_all_list(){
		return Category::where('status', '=', 1)->get();
	}
}