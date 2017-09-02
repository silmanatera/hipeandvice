<?php

class BlogController extends BaseController{

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
     *   Funcion: 		form_new_blog
     *   Descripcion:   Redirecciona al formulario de registo de blog
     ************************************************************************/
	public function form_new_blog(){
        $category = Category::get_all_list();
		return View::make('admin/blog/form_blog', array('category' => $category));
	}

	/************************************************************************
     *   Funcion: 		list_blog
     *   Descripcion:   Redirecciona a la lista de blogs
     ************************************************************************/
	public function list_blog(){
        $list = Blog::get_list();
		return View::make('admin/blog/list_blog', array('list' => $list));
	}

    /************************************************************************
     *   Funcion:       register
     *   Descripcion:   Registra un nuevo blog
     ************************************************************************/
    public function register(){
        $reg_blog = Blog::register(Input::all());

        if($reg_blog['error'] == true){

            Session::flash('danger', "Problemas Al registrar..");
            return Redirect::back()->withErrors($reg_blog['mensaje'])->withInput();

        }elseif($reg_blog['error'] == false){

            Session::flash('success', "Al registrar el blog.");
            return Redirect::back();
        }
    }

    /************************************************************************
     *   Funcion:       publish
     *   Descripcion:   Publica o quita un blog
     ************************************************************************/
    public function publish($id){
        $publish = Blog::publish($id);

        if($publish){
            Session::flash('success', "Al publicar el blog.");
        }else{
            Session::flash('success', "Al cerrar el blog.");
        }
        
        return Redirect::back();
    }

    /************************************************************************
     *   Funcion:       form_edit
     *   Descripcion:   Retorna el formulario de edicion del blog
     ************************************************************************/
    public function form_edit($id){

        if(Blog::exist($id)){

            $blog = Blog::get_blog($id);
            $category = Category::get_all_list();
            return View::make('admin/blog/form_edit_blog', array('blog' => $blog, 'category' => $category));

        }else{
            //redireccionamos a la vista de error
            return View::make('errors/404');
        }
    }

    /************************************************************************
     *   Funcion:       edit_blog
     *   Descripcion:   Edita un blog
     ************************************************************************/
    public function edit_blog($id){ 
        $edit_blog = Blog::edit(Input::all(), $id);

        if($edit_blog['error'] == true){

            Session::flash('danger', "Problemas Al actualizar.");
            return Redirect::to('/admin/blog/edit/'.$id)->withErrors($edit_blog['mensaje'])->withInput();

        }elseif($edit_blog['error'] == false){

            Session::flash('success', "Al actualizar el blog.");
            return Redirect::to('/admin/blog/list');
        }
    }

}