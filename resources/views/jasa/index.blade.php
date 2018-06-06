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
                    <div class="product-grid" data-isotope='{ "itemSelector": ".product-item", "layoutMode": "fitRows" }'>

                        <!-- Product 1 -->
                         @foreach ($jasa as $jasa)
                        <div class="product-item men">
                            <div class="product discount product_filter">
                             <form method="POST" action="{{url('cart')}}">
                             <input type="hidden" name="jasaID" value="{{$jasa->jasaID}}">
                                {{ csrf_field() }}
                               <div class="product_image">
                                    <img src="{{ url('storage/images/'.$jasa->fotoJasa) }}" alt="">
                                    </div>
                                    <div class="favorite favorite_left"></div>
                                    <div class="product_info">
                                    <h6 class="product_name"><a href="#">{{ $jasa->namaJasa }}</a></h6>
                                    <div class="product_price">Rp. {{ $jasa->harga }}</div>
                                    <div class="status_jasa">{{ $jasa->statusJasa }}</div>
                                    </div>
                                    <center>
                                <a href="{{ url('/jasa/'.$jasa->jasaID.'/edit') }}" class="btn btn-info">Edit</a>
                                    <a href="deleteJasa/{{ $jasa->jasaID }}" class="btn btn-info" onclick="alert('Apakah anda yakin ingin menghapus data?')">Delete</a></td>
                                    </center>
                            </form>
                        </div>

                    </div>
                    @endforeach
                </div>

            </div>
        </div>

@endsection