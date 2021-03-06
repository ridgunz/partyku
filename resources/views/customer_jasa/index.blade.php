@extends('layouts.jasa_vendor_layouts')

@section('content')

 <div class="container">
            <div class="row">
                <div class="col text-center">
                    <div class="section_title new_arrivals_title" style="margin:15% 0 0 0;">
                        <h2>Jasa</h2>
                    </div>
                </div>
            </div>
          
            <div class="row">
                <div class="col">
                    <div class="Layanan Jasa">

                        <div class="jasa-vendor">
                            <div class="jasa-vendor-1">
                                <h3>Layanan Jasa</h3>
                                @foreach ($jasa as $jasa)
                             	<form class="form-horizontal" method="post" >
                        			<div class="product-item men">
                            		<div class="product discount product_filter">
                                	<div class="product_image">
                                    <img src="{{ url('storage/images/'.$jasa->fotoJasa) }}">
                                	</div>
                                	<div class="favorite favorite_left"></div>
                                	<div class="product_info">
                                    <h6 class="product_name"><a href="#">{{ $jasa->namaJasa }}</a></h6>
                                    <div class="product_price">Rp. {{ $jasa->harga }}</div>
                                    <a href="{{ url('/jasa/'.$jasa->jasaID.'/edit') }}" class="btn btn-info">Tambahkan ke Cart</a>
                                    <a href="deleteJasa/{{ $jasa->jasaID }}" class="btn btn-info">Detail</a></td>
                                	</div>
                            		</div>
                        			</div>
                        		
                    			</form>
                    			@endforeach
                            </div>
                           
                        </div>

                    </div>
                </div>
            </div>
        </div>

@endsection