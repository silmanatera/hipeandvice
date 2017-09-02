<?php

/*
|--------------------------------------------------------------------------
| 								Home
|--------------------------------------------------------------------------
|
*/

// Retorna fomulario de login 
Route::get('/login','HomeController@form_login');
// Deslogea al usuario
Route::get('/logout','HomeController@logout');
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
// Vista de cart
Route::get('/cart','HomeController@cart');
// Vista de terms
Route::get('/terms','HomeController@terms');

/*
|--------------------------------------------------------------------------
| 								Admin
|--------------------------------------------------------------------------
|
*/

// Retorna el inicio de admin
Route::get('/admin','HomeController@home_admin');
// Aprueba o rechaza una compra 
Route::get('/admin/change/{status}/{id}','PurchaseController@change_status');
// Redirecciona al formulario de blog
Route::get('/admin/blog/new','BlogController@form_new_blog');
// Rediecciona al listado de los blogs
Route::get('/admin/blog/list','BlogController@list_blog');
// Registra un nuvo blog
Route::post('/admin/blog/register','BlogController@register');
// Publica o quita un blog
Route::get('/admin/blog/publish/{id}','BlogController@publish');
// Remueve un blog
Route::get('/admin/blog/remove/{id}','BlogController@remove');
// Retorna el formulario para edita un blog
Route::get('/admin/blog/edit/{id}','BlogController@form_edit');
// Edita un blog
Route::post('/admin/blog/modified/{id}','BlogController@edit_blog');
// Redirecciona al formulario de colegio
Route::get('/admin/college/new','CollegeController@form_new_college');
// Rediecciona al listado de los colegios
Route::get('/admin/college/list','CollegeController@list_college');
// Redirecciona al formulario de producto
Route::get('/admin/poduct/new','ProductController@form_new_product');
// Rediecciona al listado de los productos
Route::get('/admin/product/list','ProductController@list_product');
// Redirecciona al formulario de categoria
Route::get('/admin/category/new','CategoryController@form_new_category');
// Rediecciona al listado de los categorias
Route::get('/admin/category/list','CategoryController@list_category');