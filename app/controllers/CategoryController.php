<?php

class CategoryController extends BaseController {

	/************************************************************************
     *   Funcion:       __construct
     *   Descripcion:   Constructor de la clase (verifica que el usuario
     *                  este logeado)
     *
     ************************************************************************/
    public function __construct(){
        $this->beforeFilter('auth');
    }

    /************************************************************************
     *   Funcion:       form_new_category
     *   Descripcion:   Redirecciona al formulario de registo de categoria
     ************************************************************************/
    public function form_new_category(){
        return View::make('admin/category/form_category');
    }

    /************************************************************************
     *   Funcion:       list_category
     *   Descripcion:   Redirecciona a la lista de categorias
     ************************************************************************/
    public function list_category(){
        return View::make('admin/category/list_category');
    }

}