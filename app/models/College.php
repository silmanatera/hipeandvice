<?php

class College extends Eloquent{

	protected $table = 'college';
	protected $fillable = array('id', 'user_id', 'name', 'logo', 'status', 'created_at', 'updated_at');

	/************************************************************************
     *   Funcion: 		get_total_registered
     *   Descripcion:   Retorna la catidad de escuelas regitradas
     ************************************************************************/
	public static function get_total_registered(){
		return College::where('status', '!=', 0)->count();
	}

	/************************************************************************
     *   Funcion: 		get_total_sold
     *   Descripcion:   Retorna la catidad de compras de las escuelas 
     ************************************************************************/
	public static function get_total_sold(){
		return Purchase::where('status', '=', 1)->count();
	}

	/************************************************************************
     *   Funcion: 		get_products
     *   Descripcion:   Retorna la catidad de productos de las escuelas 
     ************************************************************************/
	public static function get_count_products($id){
		return DB::table('product')->where('college_id', '=', $id)->count();
	}

	/************************************************************************
     *   Funcion: 		get_list
     *   Descripcion:   Retorna la lista de escuelas regitradas
     ************************************************************************/
	public static function get_list(){
		return College::where('status', '!=', 0)->orderBy('id','asc')->paginate(10);
	}

	/************************************************************************
     *   Funcion: 		get_college
     *   Descripcion:   Retorna una escuela
     ************************************************************************/
	public static function get_college($id){
		return College::find($id);
	}

	/************************************************************************
     *   Funcion: 		exist
     *   Descripcion:   Indica si una escuela existe
     ************************************************************************/
	public static function exist($id){
		return (is_null(College::find($id)))? false : true ;
	}

	/************************************************************************
     *   Funcion: 		register
     *   Descripcion:   Registra una nueva escuela
     ************************************************************************/
	public static function register($inputs){
		$rules = array(
        	'name'         => array('required'),
            'photo'		   => array('required'),
            );

        $validator = Validator::make($inputs, $rules);

        if ($validator->fails()){
            // si no cumple las reglas se van a devolver los errores al controlador
            $response['mensaje']     = $validator;
            $response['error']       = true;

            return $response;

        }else {

            try {
                DB::beginTransaction();
				
                $college              	   = New College();
                $college->user_id          = Auth::user()->id;
                $college->name             = $inputs['name'];
                $college->status           = 1;
                     
                $image = $inputs['photo'];
                        
				//guarda el achivo
        		$name_file = $image->getClientOriginalName();
				$destination = public_path().'/uploads/';
				$image->move($destination, $name_file);
				
        		$college->logo       = $name_file;

                if ($college->save()) {

                    // se retorna un mensaje de Exito al controlador
                    $response['error']  = false;
                    $response['data']   = $college;

                    DB::commit();

                    return $response;

                }

            }catch(\Exception $e){

                DB::rollback();

                $errores                =   New ErrorIncidence();
                $errores->script        =   "College";
                $errores->funcion       =   "register";
                $errores->codigo        =   $e->getCode();
                $errores->linea         =   $e->getLine();
                $errores->descripcion   = 	$e->getMessage();
                $errores->save();
				//$error_anwser = ErrorIncidence::error_incidences('User','register_user',$e->getLine(),$e->getMessage());

			}
        }
	}

	/************************************************************************
     *   Funcion: 		get_products
     *   Descripcion:   Retorna la lista de productos relacionado a
     *                  una escuelas regitrada
     ************************************************************************/
	public static function get_products($id){
		return Product::where('college_id', '=', $id)->orderBy('id','asc')->paginate(10);
	}

	/************************************************************************
     *   Funcion: 		modify
     *   Descripcion:   Modifica una escuela
     ************************************************************************/
	public static function modify($inputs, $id){
		$rules = array(
        	'name'         => array('required'),
            );

        $validator = Validator::make($inputs, $rules);

        if ($validator->fails()){
            // si no cumple las reglas se van a devolver los errores al controlador
            $response['mensaje']     = $validator;
            $response['error']       = true;

            return $response;

        }else {

            try {
                DB::beginTransaction();
				
                $college              	   = College::find($id);
                $college->name             = $inputs['name'];
                     
                $image = $inputs['photo'];

                if(!is_null($image)){
                	//guarda el achivo
	        		$name_file = $image->getClientOriginalName();
					$destination = public_path().'/uploads/';
					$image->move($destination, $name_file);
					
	        		$college->logo       = $name_file;
                }    

                if ($college->save()) {

                    // se retorna un mensaje de Exito al controlador
                    $response['error']  = false;
                    $response['data']   = $college;

                    DB::commit();

                    return $response;

                }

            }catch(\Exception $e){

                DB::rollback();

                $errores                =   New ErrorIncidence();
                $errores->script        =   "College";
                $errores->funcion       =   "modify";
                $errores->codigo        =   $e->getCode();
                $errores->linea         =   $e->getLine();
                $errores->descripcion   = 	$e->getMessage();
                $errores->save();
				//$error_anwser = ErrorIncidence::error_incidences('User','register_user',$e->getLine(),$e->getMessage());

			}
        }
	}
	
	/************************************************************************
     *   Funcion: 		change_status
     *   Descripcion:   Modifica el status de una escuela
     ************************************************************************/
	public static function change_status($status, $id){
		try{

            DB::beginTransaction();

            $college = College::find($id);

            $college->status = $status;
            $result = $college->status;
            
            $college->save();

            DB::commit();

            return $result;

        }catch(\Exception $e){

            DB::rollback();

            $errores                =   New ErrorIncidence();
            $errores->script        =   "College";
            $errores->funcion       =   "change_status";
            $errores->codigo        =   $e->getCode();
            $errores->linea         =   $e->getLine();
            $errores->descripcion   =   $e->getMessage();
            $errores->save();
        }
	}

	/************************************************************************
     *   Funcion: 		remove
     *   Descripcion:   Elimina una categoria
     ************************************************************************/
	public static function remove($id){
		try{

            DB::beginTransaction();

            $college = College::find($id);

            $college->status = 0;
            
            $college->save();

            DB::commit();

            return 1;

        }catch(\Exception $e){

            DB::rollback();

            $errores                =   New ErrorIncidence();
            $errores->script        =   "College";
            $errores->funcion       =   "remove";
            $errores->codigo        =   $e->getCode();
            $errores->linea         =   $e->getLine();
            $errores->descripcion   =   $e->getMessage();
            $errores->save();
        }
	}

}