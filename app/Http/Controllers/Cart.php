<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Cart extends Controller
{
    public function indexes()
    {
        return view('cart');
    }
}
