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




Route::group(['middleware' => ['web','auth']], function()
{
	Route::get('/home', 'HomeController@index');
	Route::get('/', function(){

		if(Auth::user()->role == 2)
		{
			return view('home_vendor');
		}else
		{
			return view('home');
		}

	});
});

Route::get('role', ['middleware' => ['web', 'auth', 'role'], function()
{
	return view('role/home_vendor');
}]);