@extends('layouts.jasa_vendor_layouts')

@section('content')

 <div class="container">
            <div class="row">
                <div class="col text-center">
                    <div class="section_title new_arrivals_title" style="margin:15% 0 0 0;">
                        <h2>Form</h2>
                    </div>
                </div>
            </div>
          
            <div class="row">
                <div class="col">
                    <div class="jasa">

                        <div class="tambah-jasa-vendor">
                            <div class="basic-profile-vendor-1">
                                <h3>Tambah Jasa</h3>
                              <form class="form-horizontal" method="post" action="{{ url('/jasa') }}" enctype="multipart/form-data">
                   				 {{ csrf_field() }}
                              <div class="form-group">
                            	<label for="namaJasa" class="col-md-2">Nama Jasa</label>
                            		<div class="col-md-6">
                                <input id="namaJasa" type="text" class="form-control" name="namaJasa">
                            		</div>
                        	  </div> 

                              <div class="form-group">
                                <label for="harga" class="col-md-2">Harga</label>
                                    <div class="col-md-6">
                                <input id="harga" type="text" class="form-control" name="harga">
                                    </div>
                              </div>   

                              <div class="form-group">
                                <label for="harga" class="col-md-2">Deskripsi</label>
                                    <div class="col-md-6">
                                <input id="deskripsi" type="text" class="form-control" name="harga">
                                    </div>
                              </div>  

                                <div class="form-group">
                                <label for="statusJasa" class="col-md-2">Status Jasa</label>
                                    <div class="col-md-6">
                                <select id="statusJasa" name="statusJasa" class="form-control">
                                    <option value="" selected></option>
                                    <option value="Tersedia">Tersedia</option>
                                    <option value="Tidak Tersedia">Tidak Tersedia</option>
                                </select>
                                    </div>
                              </div> 



                              <div class="form-group">
                                <label for="fotoJasa" class="col-md-2">Foto</label>
                                    <div class="col-md-6">
                                <input id="fotoJasa" type="file" class="form-control" name="fotoJasa" multiple>
                                    </div>
                              </div>   

                        	   <div class="form-group">
                           		<div class="col-md-6 col-md-offset-2">
                                	<input type="submit" class="btn btn-primary" value="Save"></input>
                            	</div>
                       		  </div>          			

                    			</form>

                            </div>
                            
                        </div>

                    </div>
                </div>
            </div>
        </div>


@endsection