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

/*Route::get('/', function()
{
	return View::make('hello');
});*/

Route::get('login', array('as' => 'login', 'uses' => 'AuthController@index'));
Route::post('login/local', array('as' => 'local', 'uses' => 'AuthController@local'));
Route::get('login/google', 'AuthController@google');
Route::get('login/authenticated', function()
{
	if (Session::has('user'))
	{
		return Session::get('user');
	}
	else {
		return null;
	}
});
Route::get('logout', array('as' => 'logout', 'uses' => 'AuthController@logout'));
Route::get('signup', array('as' => 'signup', 'uses' => 'UserController@create'));
Route::get('forgot', array('as' => 'forgot', 'uses' => 'AuthController@forgot'));
Route::resource('users', 'UserController');
Route::get('/', array('as' => 'home', 'uses' => 'HomeController@index'));