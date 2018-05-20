@extends('layouts.setting_layouts_vendor')

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
                    <div class="basic-profile">

                        <div class="basic-profile-vendor">
                            <div class="basic-profile-vendor-1">
                                <h3>Basic Profile Vendor</h3>
                              <form class="form-horizontal" method="post" action="{{ url('/setting_vendor') }}">
                   				 {{ csrf_field() }}
                              <div class="form-group">
                            	<label for="namaVendor" class="col-md-2">Nama Vendor</label>
                            		<div class="col-md-6">
                                <input id="namaVendor" type="text" class="form-control" name="namaVendor">
                            		</div>
                        	  </div>   

                        	   <div class="form-group">
                            	<label for="phone" class="col-md-2">Nomor Telepon</label>
                            		<div class="col-md-6">
                                <input id="phone" type="text" class="form-control" name="phone">
                            		</div>
                        	  </div>  

                        	   <div class="form-group">
                            	<label for="description" class="col-md-2">Deskripsi Jasa</label>
                            		<div class="col-md-6">
                                <input id="description" type="text" class="form-control" name="description">
                            		</div>
                        	  </div> 

                        	   <div class="form-group">
                            	<label for="alamat" class="col-md-2">Alamat</label>
                            		<div class="col-md-6">
                                <input id="alamat" type="text" class="form-control" name="alamat">
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