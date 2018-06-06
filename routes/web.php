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
Route::get('/setting_customer/create','ProfileCustomerController@create');

Route::group(['middleware' => ['web','auth']], function()
{
	
	Route::get('/home', function(){

		if(Auth::user()->role == 2)
		{
			$jasa = App\Jasa::all();

			return view('home_vendor',compact('jasa'));
		}else
		{
			$jasa = App\Jasa::all();
			return view('home_customer',compact('jasa'));
		}

	});

	Route::get('/jasa', function(){

		if(Auth::user()->role == 2)
		{
			return view('jasa');
		}else
		{
			return view('jasa_customer');
		}

	});

	


	Route::get('/setting_vendor','ProfileVendorController@read');

	Route::post('/setting_vendor','ProfileVendorController@store');


	Route::get('/setting_vendor/{vendorID}/edit','ProfileVendorController@edit');
	Route::put('/setting_vendor/{vendorID}','ProfileVendorController@update');


	Route::get('/setting_customer','ProfileCustomerController@read');

	Route::post('/setting_customer','ProfileCustomerController@store');

	Route::get('/setting_customer/{customerID}/edit','ProfileCustomerController@edit');
	Route::put('/setting_customer/{customerID}','ProfileCustomerController@update');



	Route::get('/jasa','JasaController@read');

	Route::get('/jasa/create','JasaController@create');
	Route::post('/jasa','JasaController@store');

	Route::get('/jasa/{jasaID}/edit','JasaController@edit');
	Route::put('/jasa/{jasaID}','JasaController@update');
	Route::get('deleteJasa/{jasaID}','JasaController@delete');



	Route::get('/jasa_customer','JasaController@read2');
	
	Route::get('cart','CartController@cart');
	Route::post('/cart', 'CartController@cart');

	Route::get('deleteCart/{id}','CartController@delete');

	Route::get('clearCart','CartController@clear');
});

Route::get('/form', function(){

		if(Auth::user()->role == 2)
		{
			return view('setting_vendor/create');
		}else
		{
			return view('setting_customer/create');
		}

	});


Route::get('role', ['middleware' => ['web', 'auth', 'role'], function()
{
	return view('role/home_vendor');
}]);
