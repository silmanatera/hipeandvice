<?php

class College extends Eloquent{

	protected $table = 'college';
	protected $fillable = array('id', 'user_id', 'name', 'logo', 'status', 'created_at', 'updated_at');

}