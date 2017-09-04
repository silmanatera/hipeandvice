<?php

class PurchaseController extends BaseController{

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
     *   Funcion:       change_status
     *   Descripcion:   Cambia el status de la compra
     ************************************************************************/
    public function change_status($status, $id){
        if(Purchase::exist($id)){
            $result = Purchase::change_status($status, $id);

            if($result == 1){
                Session::flash('success', "When approving the purchase.");
            }elseif($result == 2){
                Session::flash('success', "Refusing to buy.");
            }

            return Redirect::back();
        }else{
            //redireccionamos a la vista de error
            return View::make('errors/404');
        }
    }

}