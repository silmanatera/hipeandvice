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
// Home de la pagina
Route::get('/','HomeController@index');
// Vista acerca de nosotros
Route::get('/about','HomeController@about');
// Vista de Blog de noticias
Route::get('/blog','HomeController@blog');
// Vista de politicas
Route::get('/policy','HomeController@policy');

/*
|--------------------------------------------------------------------------
| 								Admin
|--------------------------------------------------------------------------
|
*/

// Retorna el inicio de admin
Route::get('/admin','HomeController@home_admin');
