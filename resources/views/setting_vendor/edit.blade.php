@extends('layouts.setting_layouts')

@section('content')

 <div class="container">
            <div class="row">
                <div class="col text-center">
                    <div class="section_title new_arrivals_title" style="margin:15% 0 0 0;">
                        <h2>Setting</h2>
                    </div>
                </div>
            </div>
          
            <div class="row">
                <div class="col">
                    <div class="basic-profile">

                        <div class="basic-profile-vendor">
                            <div class="basic-profile-vendor-1">
                                <h3>Basic Profile</h3>

                             	<form class="form-horizontal" method="post" action="{{ url('/setting_vendor/'.$vendor->vendorID) }}">
                    					{{ method_field('PUT') }}
                    					{{ csrf_field() }}

                        			<div class="form-group">
                            		<label class="col-md-2">Nama Vendor</label>
                            		<div class="col-md-6">
                                	<input type="text" name="nama" class="form-control" value="{{ $vendor->namaVendor }}"></input>
                            		</div>
                        			</div>

                        			<div class="form-group">
                            		<label class="col-md-2">Phone</label>
                            		<div class="col-md-6">
                                	<input type="text" name="nama" class="form-control" value="{{ $vendor->phone }}"></input>
                            		</div>
                        			</div>

                        			<div class="form-group">
                            		<label class="col-md-2">Description</label>
                            		<div class="col-md-6">
                                	<input type="text" name="nama" class="form-control" value="{{ $vendor->desciprion }}"></input>
                            		</div>
                        			</div>

                        			<div class="form-group">
                            		<label class="col-md-2">Alamat</label>
                            		<div class="col-md-6">
                                	<input type="text" name="nama" class="form-control" value="{{ $vendor->alamat }}"></input>
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