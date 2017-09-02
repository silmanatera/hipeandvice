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
		return View::make('admin/college/list_college');
	}

}