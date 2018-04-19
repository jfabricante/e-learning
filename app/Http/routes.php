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

Route::get('/', ['middleware' => 'guest', function () {
	return view('login');
}])->name('login');

Route::group(['middleware' => 'auth'], function() {
	Route::resource('users', 'UserController');

	Route::resource('categories', 'CategoryController');

	Route::resource('subcategories', 'SubCategoryController');

	Route::resource('modules', 'ModuleController');

	Route::resource('questions', 'QuestionBankController');

	Route::get('questions/form/{id}', 'QuestionBankController@createQuestion')->name('questions.form');

	Route::get('modules/completed/{id}', 'ModuleController@moduleCompleted')->name('modules.completed');

	Route::get('categories/form/{id}', 'CategoryController@configForm')->name('categories.form');
});

Route::post('/authenticate', 'Auth\AuthController@authenticate');

Route::get('/logout', 'UserController@logout')->name('logout');

Route::post('/dealer', 'UserController@dealer')->name('dealer');

Route::post('/handle_store', 'UserController@handleStore');

Route::get('/test', 'UserController@test');
