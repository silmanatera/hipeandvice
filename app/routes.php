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
// Registra un nuevo blog
Route::post('/admin/blog/register','BlogController@register');
// Publica o quita un blog
Route::get('/admin/blog/publish/{id}','BlogController@publish');
// Remueve un blog
Route::get('/admin/blog/remove/{id}','BlogController@remove');
// Retorna el formulario para edita un blog
Route::get('/admin/blog/edit/{id}','BlogController@form_edit');
// Edita un blog
Route::post('/admin/blog/modify/{id}','BlogController@edit_blog');
// Redirecciona al formulario de colegio
Route::get('/admin/college/new','CollegeController@form_new_college');
// Rediecciona al listado de los colegios
Route::get('/admin/college/list','CollegeController@list_college');
// Registra una nueva escuela
Route::post('/admin/college/register','CollegeController@register');
// Retorna una lista de poductos de cada escuela
Route::get('/admin/college/product_list/{id}','CollegeController@product_list');
// Retorna el formulario para editar una escuela
Route::get('/admin/college/edit/{id}','CollegeController@form_edit');
// Moifica el status de una escuela
Route::get('/admin/college/change/{status}/{id}','CollegeController@change_status');
// Elimina una escuela
Route::get('/admin/college/remove/{id}','CollegeController@remove');
// Modifica una escuela
Route::post('/admin/college/modify/{id}','CollegeController@modify_college');
// Redirecciona al formulario de producto
Route::get('/admin/poduct/new','ProductController@form_new_product');
// Rediecciona al listado de los productos
Route::get('/admin/product/list','ProductController@list_product');
// Redirecciona al formulario de categoria
Route::get('/admin/category/new','CategoryController@form_new_category');
// Rediecciona al listado de los categorias
Route::get('/admin/category/list','CategoryController@list_category');
// Registra una nueva categoria
Route::post('/admin/category/register','CategoryController@register');
// Retorna listado de los productos relacionados a la categoria
Route::get('/admin/category/see-products/{id}','CategoryController@see_products');
// Retorna el formulario para editar una categoria
Route::get('/admin/category/edit/{id}','CategoryController@form_edit');
// Modifica el status de una categoria
Route::get('/admin/category/change/{status}/{id}','CategoryController@change_status');
// Elimina una categoria
Route::get('/admin/category/remove/{id}','CategoryController@remove');
// Modifica una categoia
Route::post('/admin/category/modify/{id}','CategoryController@modify_category');