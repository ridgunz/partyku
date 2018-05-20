@extends('layouts.setting_layouts_customer')

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

                        <div class="basic-profile-customer">
                            <div class="basic-profile-customer-1">
                                <h3>Basic Profile</h3>
                                @foreach ($customer as $customer)
                             	<form class="form-horizontal" method="post" >
                        			<div class="form-group">
                            		<label class="col-md-2">Nama customer</label>
                            		<div class="col-md-6">
                                	<input type="text" name="namaCustomer" class="form-control" readonly value="{{ $customer->namaCustomer }}"></input>
                            		</div>
                        			</div>

                        			<div class="form-group">
                            		<label class="col-md-2">Phone</label>
                            		<div class="col-md-6">
                                	<input type="text" name="phone" class="form-control" readonly value="{{ $customer->phone }}"></input>
                            		</div>
                        			</div>

                                    <div class="form-group">
                                    <label class="col-md-2">Alamat</label>
                                    <div class="col-md-6">
                                    <input type="text" name="alamat" class="form-control" readonly value="{{ $customer->alamat }}"></input>
                                    </div>
                                    </div>

                                      <div class="form-group">
                                <label for="alamat" class="col-md-2">Gender</label>
                                    <div class="col-md-6">
                                <select id="gender" name="gender" class="form-control">
                                    <option value="" selected></option>
                                    <option readonly value="M">Pria</option>
                                    <option readonly value="W">Wanita</option>
                                </select>
                                    </div>
                              </div>  

                                    <div class="form-group">
                                    <label class="col-md-2">Birth Date</label>
                                    <div class="col-md-6">
                                    <input type="date" name="birtDate" class="form-control" readonly value="{{ $customer->birthDate }}"></input>
                                    </div>
                                    </div>

                        			<div class="form-group">
                            		<label class="col-md-2">Description</label>
                            		<div class="col-md-6">
                                	<input type="text" name="description" class="form-control" readonly value="{{ $customer->description }}"></input>
                            		</div>
                        			</div>

                                  

                        			<div class="form-group">
                            		<div class="col-md-6 col-md-offset-2">
                                	<a href="{{ url('/setting_customer/'.$customer->customerID.'/edit') }}" class="btn btn-info">Edit</a>
                            		</div>
                        			</div>
                        			@endforeach
                    			</form>

                            </div>
                           
                        </div>

                    </div>
                </div>
            </div>
        </div>
       

@endsection