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
use Auth;

class ProfileVendorController extends Controller
{

     public function read()
    {
    	$vendor = Vendor::where('id','=',Auth::id())->get();

    	return view('setting_vendor.index', compact('vendor'));
    }

      public function create(){
      return view('setting_vendor.create');
    }

    public function store(Request $request){
      
        $vendor = new Vendor;
        $vendor->namaVendor = $request->namaVendor;
        $vendor->phone = $request->phone;
        $vendor->description = $request->description;
        $vendor->alamat = $request->alamat;
        $vendor->id = Auth::id();
        $vendor->save();
     
      
      return view('/home_vendor');
    }

    public function edit($vendorID)
    {
      $vendor= Vendor::find($vendorID); 

      return view('setting_vendor.edit',compact('vendor'));
    }

      public function update(Request $request, $vendorID)
    {
        $vendor = vendor::find($vendorID);
        $vendor->namaVendor=$request->input('namaVendor');
        $vendor->phone=$request->input('phone');
        $vendor->description=$request->input('description');
        $vendor->alamat=$request->input('alamat');
        
        $vendor->update();

      return redirect('/setting_vendor');
    }
}
