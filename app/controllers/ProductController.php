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

    /************************************************************************
     *   Funcion:       save_product
     *   Descripcion:   Registra un nuevo producto.
     ************************************************************************/
    public function save_product(){
        $new_product = Product::register_new_product(Input::all());
        
        if($new_product['error'] == true){
            Session::flash('danger', "Problemas Al registrar el Producto. Revise los campos obligatorios. Si el problema persiste cominiquese con soporte tectico !!");
            return Redirect::back()->withErrors($new_product['mensaje'])->withInput();

        }elseif($new_product['error'] == false){
            //var_dump('no errore');exit();
            Session::flash('success', "Al registrar su Producto.");
            return Redirect::back();
        }
    }

}