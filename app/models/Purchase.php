<?php

class Purchase extends Eloquent{

	protected $table = 'purchase';

	protected $fillable = array('id', 'user_id', 'product_id', 'cantidad', 'talla', 'color', 'status');

	/************************************************************************
     *   Funcion: 		get_list
     *   Descripcion:   Retorn la lista de compras
     ************************************************************************/
	public static function get_list(){
		return DB::table('purchase')
		->where('purchase.status', '=', 0)
		->join('users','purchase.user_id','=','users.id')
		->join('product','purchase.product_id','=','product.id')
		->select('purchase.id','users.first_name','users.last_name','users.email','product.college_id','product.title','purchase.cantidad')
		->paginate(10);
	}

	/************************************************************************
     *   Funcion:       get_total_approved
     *   Descripcion:   Retorna el total de las compras aprovadas
     ************************************************************************/
    public static function get_total_approved(){
        
        return Purchase::where('status', '=', 1)->count();

    }

    /************************************************************************
     *   Funcion:       get_total_rejected
     *   Descripcion:   Retorna el total de las compras recazadas
     ************************************************************************/
    public static function get_total_rejected(){
        
        return Purchase::where('status', '=', 2)->count();

    }

    /************************************************************************
     *   Funcion:       exist
     *   Descripcion:   Indica si una compra existe
     ************************************************************************/
    public static function exist($id){

        $purchase = Purchase::find($id);

        if(is_null($purchase)){
            return false;
        }

        return true;

    }

    /************************************************************************
     *   Funcion:       change_status
     *   Descripcion:   Cambia el status de la compra
     ************************************************************************/
    public static function change_status($status, $id){
    	try{

            DB::beginTransaction();

            $purchase = Purchase::find($id);

            $purchase->status = $status;
            $result = $purchase->status;
            
            $purchase->save();

            DB::commit();

            return $result;

        }catch(\Exception $e){

            DB::rollback();

            $errores                =   New ErrorIncidence();
            $errores->script        =   "Purchase";
            $errores->funcion       =   "change_status";
            $errores->codigo        =   $e->getCode();
            $errores->linea         =   $e->getLine();
            $errores->descripcion   =   $e->getMessage();
            $errores->save();
        }
    }

}