<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/



Auth::routes();

Route::resource('/', 'IndexController');
Route::get('/home', 'HomeController@index');

Route::group(['prefix'=>'admin'],function (){
    Route::resource('/','IndexController');
    Route::resource('prType','ProductTypeController');
    Route::resource('product','ProductController');
});
