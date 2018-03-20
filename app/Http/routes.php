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

Route::get('/', function () {
	return view('login');
});

Route::resource('users', 'UserController');

Route::post('/authenticate', 'Auth\AuthController@authenticate');

Route::get('/logout', 'UserController@logout');

Route::post('/dealer', 'UserController@dealer')->name('dealer');

Route::post('/handle_store', 'UserController@handleStore');

Route::get('/test', 'UserController@test');
