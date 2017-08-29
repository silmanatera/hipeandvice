<?php

/*
|--------------------------------------------------------------------------
| 								Home
|--------------------------------------------------------------------------
|
*/

// Retorna fomulario de login 
Route::get('/login','HomeController@form_login');
// Valida el ingreso del usuario
Route::post('validate-login', 'HomeController@login_validate');

/*
|--------------------------------------------------------------------------
| 								Admin
|--------------------------------------------------------------------------
|
*/

// Retorna el inicio de admin
Route::get('/admin','HomeController@home_admin');