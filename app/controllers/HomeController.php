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
     *   Funcion:       index
     *   Descripcion:   Redirecciona al home de la pagina
     ************************************************************************/
    public function index(){
        return View::make('home/home');
    }

    /************************************************************************
     *   Funcion:       about
     *   Descripcion:   Redirecciona a la seccion about de la pagina
     ************************************************************************/
    public function about(){
        return View::make('home/about');
    }

    /************************************************************************
     *   Funcion:       policy
     *   Descripcion:   Redirecciona a la seccion politicas de la pagina
     ************************************************************************/
    public function policy(){
        return View::make('home/policy');
    }

    /************************************************************************
     *   Funcion:       blog
     *   Descripcion:   Redirecciona a la seccion blog de la pagina
     ************************************************************************/
    public function blog(){
        return View::make('home/blog');
    }

    /************************************************************************
     *   Funcion:       detail
     *   Descripcion:   Redirecciona a la seccion detalles de un producto
     ************************************************************************/
    public function detail(){
        return View::make('home/detail');
    }

    /************************************************************************
     *   Funcion:       detailblog
     *   Descripcion:   Redirecciona a la seccion detalles de un blog
     ************************************************************************/
    public function detailblog(){
        return View::make('home/detailblog');
    }

    /************************************************************************
     *   Funcion:       lookbook
     *   Descripcion:   Redirecciona a la seccion lookbook
     ************************************************************************/
    public function lookbook(){
        return View::make('home/lookbook');
    }

    /************************************************************************
     *   Funcion:       shopbycolor
     *   Descripcion:   Redirecciona a la seccion shopbycolor
     ************************************************************************/
    public function shopbycolor(){
        return View::make('home/shopbycolor');
    }

    /************************************************************************
     *   Funcion:       shop
     *   Descripcion:   Redirecciona a la seccion shop
     ************************************************************************/
    public function shop(){
        return View::make('home/shop');
    }

    /************************************************************************
     *   Funcion:       cart
     *   Descripcion:   Redirecciona a la seccion cart
     ************************************************************************/
    public function cart(){
        return View::make('home/cart');
    }

    /************************************************************************
     *   Funcion:       terms
     *   Descripcion:   Redirecciona a la seccion terms
     ************************************************************************/
    public function terms(){
        return View::make('home/terms');
    }


	/************************************************************************
     *   Funcion: 		home_admin
     *   Descripcion:   Redirecciona al inicio de admin
     ************************************************************************/
	public function home_admin(){
        $list = Purchase::get_list();
		return View::make('admin/home', array('list'=>$list));
	}

	/************************************************************************
     *   Funcion: 		login_validate
     *   Descripcion:   Validamos el inicio de sesion
     ************************************************************************/
	public function login_validate(){
		if(Auth::attempt(array('username' => Input::get('username'), 'password' => Input::get('password')), true)){

            if (Auth::user()->type == 1 && Auth::user()->status == 1) {
                return Redirect::to('admin');
            }

        }else{
            Session::flash('danger', "Username or Password invalid.");
            return Redirect::back();
        }
	}

    /************************************************************************
    *   Funcion: logout                                                    
    *   Descripcion: Se encarga de desloguear al usuario.
    *                                             
    ************************************************************************/
    protected function logout(){
    
        Auth::logout();
       
        return Redirect::to('/');
    }
}
