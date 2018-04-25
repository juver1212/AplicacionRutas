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
//Login
Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/usuarios','UsuarioController@index');
//Clientes
Route::get('/clientes','ClienteController@index');
Route::get('/clientes/nuevo','ClienteController@create');
Route::post('/clientes','ClienteController@store');
Route::get('/clientes/{cliente}','ClienteController@show');
Route::get('/clientes/{cliente}/edit','ClienteController@edit');
Route::patch('/clientes/{cliente}', 'ClienteController@update');
Route::delete('/clientes/{cliente}','ClienteController@destroy');
//automovil
Route::get('/automoviles','AutomovilController@index');
Route::get('/automoviles/nuevo','AutomovilController@create');
Route::post('/automoviles','AutomovilController@store');
Route::get('/automoviles/{automovil}','AutomovilController@show');
Route::get('/automoviles/{automovil}/edit','AutomovilController@edit');
Route::patch('/automoviles/{automovil}', 'AutomovilController@update');
Route::delete('/automoviles/{automovil}','AutomovilController@destroy');

