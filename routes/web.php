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

Route::get('/', "Frontend\DefaultController@index");
Route::get('/model', "Frontend\ModelController@index");
Route::get('/manual', "Frontend\DefaultController@manual");
Route::get('/contact', "Frontend\DefaultController@contact");


