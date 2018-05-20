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
                    <form class="form-horizontal" method="post" action="{{ url('/setting_customer/'.$customer->customerID) }}">
                    {{ method_field('PUT') }}
                    {{ csrf_field() }}
                        <div class="form-group">
                            <label class="col-md-2">Nama</label>
                            <div class="col-md-6">
                                <input type="text" name="namaCustomer" class="form-control" value="{{ $customer->namaCustomer }}"></input>
                            </div>
                        </div>

                         <div class="form-group">
                            <label class="col-md-2">Nomor Telepon</label>
                            <div class="col-md-6">
                                <input type="text" name="phone" class="form-control" value="{{ $customer->phone }}"></input>
                            </div>
                        </div>

                         <div class="form-group">
                            <label class="col-md-2">Alamat</label>
                            <div class="col-md-6">
                                <input type="text" name="alamat" class="form-control" value="{{ $customer->alamat }}"></input>
                            </div>
                        </div>

                         <div class="form-group">
                                <label for="alamat" class="col-md-2">Gender</label>
                                    <div class="col-md-6">
                                <select id="gender" name="gender" class="form-control">
                                    <option value="" selected></option>
                                    <option value="M">Pria</option>
                                    <option value="W">Wanita</option>
                                </select>
                                    </div>
                        </div>  

                        <div class="form-group">
                                <label for="birthDate" class="col-md-2">Birth Date</label>
                                    <div class="col-md-6">
                                <input id="birthDate" type="date" class="form-control" name="birthDate">
                                    </div>
                              </div>  

                         <div class="form-group">
                            <label class="col-md-2">Deskripsi</label>
                            <div class="col-md-6">
                                <input type="text" name="description" class="form-control" value="{{ $customer->description }}"></input>
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