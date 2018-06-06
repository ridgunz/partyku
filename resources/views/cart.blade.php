@extends('layouts.home_customer_layouts')

@section('content')

 <section id="cart_items">

    <div class="row">
                <div class="col text-center">
                    <div class="section_title new_arrivals_title" style="margin:12% 0 2% 0;">
                        <h2>Keranjang</h2>
                    </div>
                </div>
            </div>
    <div class="container">
        <div class="table-responsive cart_info">
        @if(count($cart))
            <table class="table table-condensed">
                <thead>
                    <tr class="cart_menu">
                        <td class="image">Item</td>
                        <td class="description"></td>
                        <td class="price">Price</td>
                        <td class="quantity">Quantity</td>
                        <td class="total">Total</td>
                        <td>Action</td>
                    </tr>
                </thead>
                <tbody>
                   @foreach($cart as $item)
                    <tr>
                        <td class="cart_product">
                            <a href=""><img src="images/product_1.png" alt=""></a>
                        </td>
                        <td class="cart_description" style="width:30%">
                            <h4><a href="#">{{$item->name}}</a></h4>
                            <p>Jasa ID: {{$item->id}}</p>
                            <p>Keterangan : Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                            consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                            cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                            proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                        </td>
                        <td class="cart_price">
                            <p>Rp. {{ $item->price }}</p>
                        </td>
                        <td class="cart_quantity">
                            <div class="cart_quantity_button">
                                <button><a class="cart_quantity_down" href=""> - </a></button>
                                <input class="cart_quantity_input" type="text" name="quantity" value="1" autocomplete="off" size="2">
                                <button><a class="cart_quantity_up" href=""> + </a></button>
                            </div>
                        </td>
                        <td class="cart_total">
                            <p class="cart_total_price">Rp. {{$item->subtotal}}</p>
                        </td>
                        <td class="cart_delete">
                            <a class="cart_quantity_delete" href=""><i class="fa fa-times"></i></a>
                        </td>
                    @endforeach
                    @else
                <p>You have no items in the shopping cart</p>
                @endif
                    </tr>
                </tbody>
            </table>
            <hr>
        </div>

                <p style="text-align:right;"><b></b> </p>
        </tr>
            <div class="col-md-6 col-md-offset-2">
                <input type="submit" class="btn btn-primary" value="Bayar Sekarang !"></input>
                <a class="btn btn-default update" href="{{url('clearCart')}}">Clear Cart</a>
            </div>
    </div>
</section> <!--/#cart_items-->
@endsection