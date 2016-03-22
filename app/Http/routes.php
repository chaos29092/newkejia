<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('index');
});
Route::get('/products',function(){
    return view('products.category');
});
Route::get('/products/test',function(){
    return view('products.category_in');
});
Route::get('/products/testp',function(){
    return view('products.productf');
});
Route::get('/products/testt',function(){
    return view('products.productt');
});
Route::get('/contact-service',function(){
    return view('contact_service');
});
Route::get('/company',function(){
    return view('company');
});
Route::get('/news',function(){
    return view('news.list');
});
Route::get('/news/test',function(){
    return view('news.news_detals');
});
Route::get('/news/newsletter',function(){
    return view('news.newsletter');
});
Route::get('/news/events',function(){
    return view('news.dates_events');
});
Route::get('/downloads',function(){
    return view('downloads');
});
Route::get('/downloads/operating',function(){
    return view('downloads_operating');
});
Route::get('/downloads/brochures',function(){
    return view('downloads_brochures');
});
Route::get('/downloads/miscellaneous',function(){
    return view('downloads_miscellaneous');
});


/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/

Route::group(['middleware' => 'web'], function () {
    Route::auth();

    Route::get('/admin', 'ProductController@index');
});
