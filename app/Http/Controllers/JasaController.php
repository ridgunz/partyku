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
use App\vendor;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;
use Auth;

class JasaController extends Controller
{
    public function read()
    {
    	$jasa = Jasa::where('id','=',Auth::id())->get();;

    	return view('jasa.index', compact('jasa'));
    }

    public function read2()
    {
      $jasa = Jasa::all();

      return view('jasa_customer.index', compact('jasa'));
    }

     public function create(){

      return view('jasa.create');
    }

     public function store(Request $request){
      
      
        //$jasa = new Jasa;
        //$vendor = vendor::find('vendorID')->get();
        //$jasa->vendorID = $request->$vendor; 
        //$jasa->vendorID;
        //$jasa->namaJasa = $request->namaJasa;
        //$jasa->harga = $request->harga;
        //$jasa->statusJasa = $request->statusJasa;
        //$jasa->save();

        //$vendor = new Vendor();
        //$vendor->vendorID = $request->vendorID;
        //$jasa = new Jasa();
        //$jasa->namaJasa = $request->namaJasa;
        //$jasa->harga = $request->harga;
        //$jasa->statusJasa = $request->statusJasa;
        //$jasa = $jasa::where('vendorID', $vendorID)->firstOrFail();
        //$jasa->vendors()->save($vendor);

        $jasa = new Jasa();

            
        $jasa->namaJasa = $request->namaJasa;
        $jasa->harga = $request->harga;
        $jasa->statusJasa = $request->statusJasa;
        $jasa->deskripsi = $request->deskripsi;
        $jasa->id = Auth::id();
        
        $file = $request->file('fotoJasa');
   		  $extension = $file->getClientOriginalExtension();
    	  Storage::disk('public')->put($file->getFilename().'.'.$extension,  File::get($file));
    
    	//$jasa->mime = $file->getClientMimeType();
    	//$jasa->original_filename = $file->getClientOriginalName();
    	  $jasa->fotoJasa = $file->getFilename().'.'.$extension;

        $jasa->save();


     
      
      return redirect('home');
    }

    public function edit($jasaID)
    {
      $jasa = Jasa::find($jasaID); 

      return view('jasa.edit',compact('jasa'));
    }

     public function update(Request $request, $jasaID)
    {
        $jasa = Jasa::find($jasaID);
        $jasa->namaJasa=$request->input('namaJasa');
        $jasa->harga=$request->input('harga');
        $jasa->statusJasa=$request->input('statusJasa');
        $jasa->deskripsi=$request->input('deskripsi');

        $file = $request->file('fotoJasa');
   		$extension = $file->getClientOriginalExtension();
    	Storage::disk('public')->put($file->getFilename().'.'.$extension,  File::get($file));
    
    	//$jasa->mime = $file->getClientMimeType();
    	//$jasa->original_filename = $file->getClientOriginalName();
    	$jasa->fotoJasa = $file->getFilename().'.'.$extension;
        
        $jasa->update();

      return redirect('/jasa');
    }

     public function delete($jasaID)
   {
      	$jasa = Jasa::where('jasaID','=',$jasaID)->delete();

      	return Redirect::to('/jasa');
    }

 }
