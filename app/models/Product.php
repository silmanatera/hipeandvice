<?php

class Product extends Eloquent{

	protected $table = 'product';
	protected $fillable = array('id', 'user_id', 'category_id', 'college_id', 'title', 'short_resume', 'medium_resume', 'quantity_available', 'price', 'large_description', 'publish', 'status', 'created_at', 'updated_at');

}