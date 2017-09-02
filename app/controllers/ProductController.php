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

    /************************************************************************
     *   Funcion:       form_edit
     *   Descripcion:   Retorna el formulario de registro de productos
     ************************************************************************/
    public function form_edit($id){
        if(Product::exist($id)){

        }else{
            return View::make('errors/404');
        }
    }

    /************************************************************************
     *   Funcion:       change_status
     *   Descripcion:   Permite modificar los status de los productos
     ************************************************************************/
    public function change_status($id){
        if(Product::exist($id)){

        }else{
            return View::make('errors/404');
        }
    }

    /************************************************************************
     *   Funcion:       remove
     *   Descripcion:   Permite eliminar los productos
     ************************************************************************/
    public function remove($id){
        if(Product::exist($id)){

        }else{
            return View::make('errors/404');
        }
    }

}