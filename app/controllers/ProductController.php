<?php

class ProductController extends BaseController{

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
     *   Funcion: 		form_new_product
     *   Descripcion:   Redirecciona al formulario de registo de producto
     ************************************************************************/
	public function form_new_product(){
		return View::make('admin/product/form_product');
	}

	/************************************************************************
     *   Funcion: 		list_product
     *   Descripcion:   Redirecciona a la lista de productos
     ************************************************************************/
	public function list_product(){
		return View::make('admin/product/list_product');
	}

}