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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/produk', 'AdminController@index');
Route::get('/index', 'UserController@index');

Route::get('/produk/create', 'AdminController@create');
Route::post('/produk', 'AdminController@store');
Route::get('/produk/{id}/edit', 'AdminController@edit');
Route::patch('/produk/{id}', 'AdminController@update');
Route::delete('/produk/{id}', 'AdminController@destroy');
