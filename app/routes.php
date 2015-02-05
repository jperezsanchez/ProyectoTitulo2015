<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('login', 'AuthController@showLogin');

Route::post('login', 'AuthController@postLogin');

Route::group(array('before' => 'auth'), function(){
	Route::get('/', function()
	{
		return View::make('auth/hello');
	});
	
	Route::get('logout', 'AuthController@logOut');
	Route::resource('usuario', 'UsuarioController');
	Route::resource('agenda', 'AgendaController');
});