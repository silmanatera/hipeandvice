<?php

class CollegeController extends BaseController{

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
     *   Funcion: 		form_new_college
     *   Descripcion:   Redirecciona al formulario de registo de colegio
     ************************************************************************/
	public function form_new_college(){
		return View::make('admin/college/form_college');
	}

	/************************************************************************
     *   Funcion: 		list_college
     *   Descripcion:   Redirecciona a la lista de colegios
     ************************************************************************/
	public function list_college(){
        $list = College::get_list();
		return View::make('admin/college/list_college', array('list' => $list));
	}

    /************************************************************************
     *   Funcion:       register
     *   Descripcion:   Registra una nueva escuela
     ************************************************************************/
    public function register(){
        $reg_coll = College::register(Input::all());

        if($reg_coll['error'] == true){

            Session::flash('danger', "Problemas Al registrar..");
            return Redirect::back()->withErrors($reg_coll['mensaje'])->withInput();

        }elseif($reg_coll['error'] == false){

            Session::flash('success', "Al registrar el college.");
            return Redirect::back();
        }
    }

    /************************************************************************
     *   Funcion:       product_list
     *   Descripcion:   Retorna una lista de poductos de cada escuela
     ************************************************************************/
    public function product_list($id){
        if(College::exist($id)){

            $list = College::get_products($id);
            return View::make('admin/college/school_product_list', array('list' => $list, 'id' => $id));

        }else{
            return View::make('errors/404');
        }
    }

     /************************************************************************
     *   Funcion:       form_edit
     *   Descripcion:   Retorna el formulario para editar una escuela
     ************************************************************************/
    public function form_edit($id){
        if(College::exist($id)){

            $college = College::get_college($id);
            return View::make('admin/college/form_edit_college', array('college' => $college));

        }else{
            return View::make('errors/404');
        }
    }

    /************************************************************************
     *   Funcion:       change_status
     *   Descripcion:   Permite modificar los status de las escuelas
     ************************************************************************/
    public function change_status($status, $id){
        if(College::exist($id)){

            $result = College::change_status($status, $id);

            if($result == 1){
                Session::flash('success', "Al publicar la escuela.");
            }elseif($result == 2){
                Session::flash('success', "Al cerrar la escuela.");
            }
            
            return Redirect::back();

        }else{
            return View::make('errors/404');
        }
    }

    /************************************************************************
     *   Funcion:       modify_college
     *   Descripcion:   Modifica una escuela
     ************************************************************************/
    public function modify_college($id){
        if(College::exist($id)){

            $edit_coll = College::modify(Input::all(), $id);

            if($edit_coll['error'] == true){

                Session::flash('danger', "Problemas Al registrar..");
                return Redirect::back()->withErrors($edit_coll['mensaje'])->withInput();

            }elseif($edit_coll['error'] == false){

                Session::flash('success', "Al modificar la escuela.");
                return Redirect::to('/admin/college/list');
            }

        }else{
            return View::make('errors/404');
        }
    }

    /************************************************************************
     *   Funcion:       remove
     *   Descripcion:   Permite eliminar las escuelas
     ************************************************************************/
    public function remove($id){
        if(College::exist($id)){

            College::remove($id);
            Session::flash('success', "Al eliminar la escuela.");
            return Redirect::back();

        }else{
            return View::make('errors/404');
        }
    }

}