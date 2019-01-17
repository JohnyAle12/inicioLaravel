<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

//Route::get('/', 'WelcomeController@index');

Route::get('/', function(){
	return 'Inicio de la app';
});

Route::get('home', 'HomeController@index');

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);

//enrutando controladores 
Route::get('inicio1', 'inicioController@index');

// controlador restful genera multiples rutas GET POST PUT DELETE DISTROY	

Route::resource('inicio', 'inicioController');

Route::resource('movie', 'movieController');

Route::resource('usuario', 'usuarioController');