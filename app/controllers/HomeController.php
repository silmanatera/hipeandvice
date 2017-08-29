<?php

class HomeController extends BaseController {

	/************************************************************************
     *   Funcion: 		form_login
     *   Descripcion:   Redirecciona al formulario de inicio de sesion de
     *					usuario.
     ************************************************************************/
	public function form_login(){
		return View::make('home/login');
	}

	/************************************************************************
     *   Funcion: 		home_admin
     *   Descripcion:   Redirecciona al inicio de admin
     ************************************************************************/
	public function home_admin(){
		return View::make('admin/home');
	}

	/************************************************************************
     *   Funcion: 		login_validate
     *   Descripcion:   Validamos el inicio de sesion
     ************************************************************************/
	public function login_validate(){
		return Redirect::to('admin');
	}
}
