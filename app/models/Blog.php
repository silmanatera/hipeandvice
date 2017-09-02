<?php

class Blog extends Eloquent{

	protected $table = 'blog';
	protected $fillable = array('id', 'user_id', 'category', 'title', 'resume', 'date', 'description', 'status', 'image_route', 'publish', 'likes', 'created_at', 'updated_at');

	/************************************************************************
     *   Funcion: 		get_list
     *   Descripcion:   Retorn la lista de blogs
     ************************************************************************/
	public static function get_list(){
		return Blog::where('status', '=', 1)->orderBy('id', 'asc')->paginate(10);
	}

	/************************************************************************
     *   Funcion: 		register
     *   Descripcion:   Registra un nuevo blog
     ************************************************************************/
	public static function register($inputs){
		$rules = array(
        	'category'        		=> array('required'),
            'title'                 => array('required'),
            'resume'			    => array('required'),
            'photo'				    => array('required'),
            'date'				    => array('required'),
            'description'			=> array('required'),
            );

        $validator = Validator::make($inputs, $rules);

        if ($validator->fails()){
            // si no cumple las reglas se van a devolver los errores al controlador
            $response['mensaje']     = $validator;
            $response['error']       = true;

            return $response;

        }else {

            try {
				
                $blog               	= New Blog();
                $blog->user_id          = Auth::user()->id;
                $blog->category         = $inputs['category'];
                $blog->title            = $inputs['title'];
                $blog->resume        	= $inputs['resume'];
                $blog->date         	= $inputs['date'];
                $blog->publish         	= $inputs['optionsRadios'];
                $blog->status           = 1;
                $blog->likes            = 0;
                $blog->description      = $inputs['description'];
                     
                $image = $inputs['photo'];
                        
				//guarda el achivo
        		$name_file = $image->getClientOriginalName();
				$destination = public_path().'/uploads/';
				$image->move($destination, $name_file);
				
        		$blog->image_route       = $name_file;

                if ($blog->save()) {

                    // se retorna un mensaje de Exito al controlador
                    $response['error']  = false;
                    $response['data']   = $blog;

                    DB::commit();

                    return $response;

                }

            }catch(\Exception $e){

                DB::rollback();

                $errores                =   New ErrorIncidence();
                $errores->script        =   "Blog";
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
     *   Funcion:       get_total_likes
     *   Descripcion:   Retorna el total de likes entre los blogs
     ************************************************************************/
    public static function get_total_likes(){
        try {

            $list = Blog::where('status', '=', 1)->select('likes')->get();

            $total = 0;
            foreach ($list as $likes) {
                $total += $likes->likes;
            }

            DB::commit();

            return $total;

        }catch(\Exception $e){

            DB::rollback();

            $errores                =   New ErrorIncidence();
            $errores->script        =   "Blog";
            $errores->funcion       =   "get_total_likes";
            $errores->codigo        =   $e->getCode();
            $errores->linea         =   $e->getLine();
            $errores->descripcion   =   $e->getMessage();
            $errores->save();
        }
    }

    /************************************************************************
     *   Funcion:       get_total_hidden
     *   Descripcion:   Retorna el total de los blogs ocultos
     ************************************************************************/
    public static function get_total_hidden(){
        
        return Blog::where('publish', '=', 0)->count();

    }

    /************************************************************************
     *   Funcion:       get_total_online
     *   Descripcion:   Retorna el total de los blogs en linea
     ************************************************************************/
    public static function get_total_online(){
        
        return Blog::where('publish', '=', 1)->count();

    }

    /************************************************************************
     *   Funcion:       exist
     *   Descripcion:   Indica si un blog existe
     ************************************************************************/
    public static function exist($id){

        $blog = Blog::find($id);

        if(is_null($blog)){
            return false;
        }

        return true;

    }

    /************************************************************************
     *   Funcion:       get_blog
     *   Descripcion:   Retorna un blog
     ************************************************************************/
    public static function get_blog($id){

        return Blog::find($id);
        
    }

    /************************************************************************
     *   Funcion:       publish
     *   Descripcion:   Publica o quita un blog
     ************************************************************************/
    public static function publish($id){
        try{

            DB::beginTransaction();

            $blog = Blog::find($id);

            $blog->publish = !$blog->publish;
            $publish = $blog->publish;
            
            $blog->save();

            DB::commit();

            return $publish;

        }catch(\Exception $e){

            DB::rollback();

            $errores                =   New ErrorIncidence();
            $errores->script        =   "Blog";
            $errores->funcion       =   "publish";
            $errores->codigo        =   $e->getCode();
            $errores->linea         =   $e->getLine();
            $errores->descripcion   =   $e->getMessage();
            $errores->save();
        }
    }

    /************************************************************************
     *   Funcion:       edit
     *   Descripcion:   Edita un blog
     ************************************************************************/
    public static function edit($inputs, $id){
        $rules = array(
            'category'              => array('required'),
            'title'                 => array('required'),
            'resume'                => array('required'),
            'date'                  => array('required'),
            'description'           => array('required'),
            );

        $validator = Validator::make($inputs, $rules);

        if ($validator->fails()){
            // si no cumple las reglas se van a devolver los errores al controlador
            $response['mensaje']     = $validator;
            $response['error']       = true;

            return $response;

        }else {

            try {
                
                $blog                   = Blog::find($id);
                $blog->category         = $inputs['category'];
                $blog->title            = $inputs['title'];
                $blog->resume           = $inputs['resume'];
                $blog->date             = $inputs['date'];
                $blog->publish          = $inputs['optionsRadios'];
                $blog->description      = $inputs['description'];
                     
                $image = $inputs['photo'];
                
                if(!is_null($image)){
                    //guarda el achivo
                    $name_file = $image->getClientOriginalName();
                    $destination = public_path().'/uploads/';
                    $image->move($destination, $name_file);
                    
                    $blog->image_route       = $name_file;
                }        
                

                if ($blog->save()) {

                    // se retorna un mensaje de Exito al controlador
                    $response['error']  = false;
                    $response['data']   = $blog;

                    DB::commit();

                    return $response;

                }

            }catch(\Exception $e){

                DB::rollback();

                $errores                =   New ErrorIncidence();
                $errores->script        =   "Blog";
                $errores->funcion       =   "edit";
                $errores->codigo        =   $e->getCode();
                $errores->linea         =   $e->getLine();
                $errores->descripcion   =   $e->getMessage();
                $errores->save();
                //$error_anwser = ErrorIncidence::error_incidences('User','register_user',$e->getLine(),$e->getMessage());

            }
        }
    }

}