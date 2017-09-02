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
        $list = Category::get_list();
        return View::make('admin/category/list_category', array('list' => $list));
    }

    /************************************************************************
     *   Funcion:       register
     *   Descripcion:   Registra una nueva categoria
     ************************************************************************/
    public function register(){
        $reg_cat = Category::register(Input::all());

        if($reg_cat['error'] == true){

            Session::flash('danger', "Problemas Al registrar..");
            return Redirect::back()->withErrors($reg_cat['mensaje'])->withInput();

        }elseif($reg_cat['error'] == false){

            Session::flash('success', "Al registrar la categoria.");
            return Redirect::back();
        }
    }

    /************************************************************************
     *   Funcion:       see_products
     *   Descripcion:   Permite ver los productos
     ************************************************************************/
    public function see_products($id){
        if(Category::exist($id)){

            $list = Product::get_by_category($id);
            return View::make('admin/category/list_products', array('list' => $list, 'id_categ' => $id));

        }else{
            return View::make('errors/404');
        }
    }

    /************************************************************************
     *   Funcion:       form_edit
     *   Descripcion:   Retorna el formulario para editar una categoria
     ************************************************************************/
    public function form_edit($id){
        if(Category::exist($id)){

            $category = Category::get_category($id);
            return View::make('admin/category/form_edit_category', array('category' => $category));

        }else{
            return View::make('errors/404');
        }
    }

    /************************************************************************
     *   Funcion:       change_status
     *   Descripcion:   Permite modificar los status de las categorias
     ************************************************************************/
    public function change_status($status, $id){
        if(Category::exist($id)){

            $result = Category::change_status($status, $id);

            if($result == 1){
                Session::flash('success', "Al publicar la categoria.");
            }elseif($result == 2){
                Session::flash('success', "Al cerrar la categoria.");
            }
            
            return Redirect::back();

        }else{
            return View::make('errors/404');
        }
    }

    /************************************************************************
     *   Funcion:       modify_category
     *   Descripcion:   Modifica una categoria
     ************************************************************************/
    public function modify_category($id){
        if(Category::exist($id)){

            $edit_cat = Category::modify(Input::all(), $id);

            if($edit_cat['error'] == true){

                Session::flash('danger', "Problemas Al registrar..");
                return Redirect::back()->withErrors($edit_cat['mensaje'])->withInput();

            }elseif($edit_cat['error'] == false){

                Session::flash('success', "Al modificar la categoria.");
                return Redirect::to('/admin/category/list');
            }

        }else{
            return View::make('errors/404');
        }
    }

    /************************************************************************
     *   Funcion:       remove
     *   Descripcion:   Permite eliminar las categorias
     ************************************************************************/
    public function remove($id){
        if(Category::exist($id)){

            Category::remove($id);
            Session::flash('success', "Al eliminar la categoria.");
            return Redirect::back();

        }else{
            return View::make('errors/404');
        }
    }

}