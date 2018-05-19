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

Auth::routes();

Route::get('/setting_vendor/create','ProfileVendorController@create');

Route::group(['middleware' => ['web','auth']], function()
{
	
	Route::get('/home', function(){

		if(Auth::user()->role == 2)
		{
			return view('home_vendor');
		}else
		{
			return view('home');
		}

	});


	Route::get('/setting_vendor','ProfileVendorController@read');
	
	Route::post('/setting_vendor','ProfileVendorController@store');
	Route::get('/setting_vendor/{vendorID}/edit','ProfileVendorController@edit');
	Route::put('/setting_vendor/{vendorID}','ProfileVendorController@update');

});

Route::get('role', ['middleware' => ['web', 'auth', 'role'], function()
{
	return view('role/home_vendor');
}]);
