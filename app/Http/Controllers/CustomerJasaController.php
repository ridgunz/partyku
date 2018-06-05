<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Input;
use DB;
use Redirect;
use View;
use App\jasa;
use Auth;

class CustomerJasaController extends Controller
{
     public function read()
    {
    	$jasa = Jasa::all();

    	return view('customer_jasa.index', compact('jasa'));
    }
}
