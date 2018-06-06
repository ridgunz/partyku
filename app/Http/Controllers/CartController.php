<?php

namespace App\Http\Controllers;
use Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Input;
use DB;
use Redirect;
use View;
use App\jasa;
use Cart;

class CartController extends Controller
{
    public function cart() {
    if (Request::isMethod('post')) {

        $jasaID = Request::get('jasaID');
        $jasa = Jasa::find($jasaID);

        Cart::add(array('id' => $jasaID, 'name' => $jasa->namaJasa, 'qty' => 1, 'price' => $jasa->harga));
    }

     //increment the quantity
    if (Request::get('jasaID') && (Request::get('increment')) == 1) {
        $rowId = Cart::search(array('id' => Request::get('jasaID')));
        $item = Cart::get($rowId[0]);

        Cart::update($rowId[0], $item->qty + 1);
    }

    //decrease the quantity
    if (Request::get('jasaID') && (Request::get('decrease')) == 1) {
        $rowId = Cart::search(array('id' => Request::get('jasaID')));
        $item = Cart::get($rowId[0]);

        Cart::update($rowId[0], $item->qty - 1);
    }

    $cart = Cart::content();

    return view('cart', array('cart' => $cart, 'title' => 'Welcome', 'description' => '', 'page' => 'home'));
}

	public function delete()
	{
		$rowId = Cart::search(array('id' => Request::get('jasaID')));
		Cart::remove($rowId[0]);
	}

	public function clear()
	{
		Cart::destroy();
		
		return Redirect::away('cart');
	}

}


