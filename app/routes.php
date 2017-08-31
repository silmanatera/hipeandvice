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
// Vista de detalle del producto
Route::get('/detail','HomeController@detail');
// Vista de detalle del blog
Route::get('/blogdetail','HomeController@detailblog');
// Vista de LookBook
Route::get('/lookbook','HomeController@lookbook');
// Vista de LookBook
Route::get('/shopbycolor','HomeController@shopbycolor');
// Vista de shop
Route::get('/shop','HomeController@shop');

/*
|--------------------------------------------------------------------------
| 								Admin
|--------------------------------------------------------------------------
|
*/

// Retorna el inicio de admin
Route::get('/admin','HomeController@home_admin');