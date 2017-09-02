<?php

use Illuminate\Auth\UserTrait;
use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableTrait;
use Illuminate\Auth\Reminders\RemindableInterface;

class User extends Eloquent implements UserInterface, RemindableInterface {

	use UserTrait, RemindableTrait;

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'users';

	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */
	protected $hidden = array('password', 'remember_token');

	/************************************************************************
     *   Funcion: 		get_list
     *   Descripcion:   Retorn la lista de usuarios
     ************************************************************************/
	public static function get_list(){
		return User::where('id', '!=', Auth::user()->id)->orderBy('id', 'asc')->paginate(10);
	}

}
