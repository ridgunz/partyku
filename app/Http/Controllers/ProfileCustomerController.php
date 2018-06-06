<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Input;
use DB;
use Redirect;
use View;
use App\customer;
use App\jasa;
use Auth;

class ProfileCustomerController extends Controller
{
     public function read()
    {
    	$customer = Customer::where('id','=',Auth::id())->get();

    	return view('setting_customer.index', compact('customer'));
    }

      public function create()
    {
      return view('setting_customer.create');
    }

      public function store(Request $request){
        
        $customer = new Customer;
        $jasa = Jasa::all();
        $customer->namaCustomer = $request->namaCustomer;
        $customer->phone = $request->phone;
        $customer->alamat = $request->alamat;
        $customer->gender = $request->gender;
        $customer->birthDate = $request->birthDate;
        $customer->description = $request->description;
        $customer->id = Auth::id();
        $customer->save();  
     
      return view('/home_customer', compact('jasa'));
    }

     public function edit($customerID)
    {
      $customer= Customer::find($customerID); 

      return view('setting_customer.edit',compact('customer'));
    }

    public function update(Request $request, $customerID)
    {
        $customer = Customer::find($customerID);
        $customer->namaCustomer=$request->input('namaCustomer');
        $customer->phone=$request->input('phone');
        $customer->alamat=$request->input('alamat');
        $customer->gender=$request->input('gender');
        $customer->birthDate=$request->input('birthDate');
        $customer->description=$request->input('description');   
        $customer->update();

      return redirect('/setting_customer');
    }
}
