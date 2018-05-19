<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Input;
use DB;
use Redirect;
use View;
use App\vendor;

class ProfileVendorController extends Controller
{

     public function read()
    {
    	$vendor = Vendor::all();

    	return view('setting_vendor.index', compact('vendor'));
    }

      public function create(){
      return view('setting_vendor.create');
    }

    public function store(Request $request){
      Vendor::create([
        
        'namaVendor'=>$request->input('namaVendor'),
        'phone'=>$request->input('phone'),
        'description'=>$request->input('description'),
        'alamat'=>$request->input('alamat')
     
      ]);
      return Redirect('/home_vendor');
    }

    public function update(Request $request, $vendorID)
    {
        $vendor = Vendor::find($vendorID);
        $vendor->namaVendor=$request->input('namaVendor');
        $vendor->phone=$request->input('phone');
        $vendor->description=$request->input('description');
        $vendor->alamat=$request->input('alamat');
       
        $vendor->update();

      return redirect('/setting_vendor');
    }

    public function edit($vendorID)
    {
    	$vendor = Vendor::find($vendorID); 

      return view('setting_vendor.edit',compact('vendor'));
    }
}
