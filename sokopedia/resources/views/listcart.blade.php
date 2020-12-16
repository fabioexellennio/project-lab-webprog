@extends('layouts.app')

@section('content')
<div class="container">

    @if(count($carts))
        <h2>Cart</h2>
    @endif

    <div class="row justify-content-center">
        @if(!count($carts))
            <h2>There is no item in cart</h2>
        @endif

        @foreach ($carts as $cart)
            <div class="col-md-4 mt-2">
                <div class="card flex-row flex-wrap" style="width: 18rem;">
                    <img class="card-img-left" src="{{Storage::url('images/'.$cart->product['image'])}}" alt="{{$cart->product['image']}}">
                    
                    <div class="card-body">
                        <h5 class="card-title font-weight-bold">{{$cart->product->name}}</h5>
                        <p class="card-text">Total Price: Rp.{{$cart->quantity * $cart->product->price}}</p>
                        <p class="card-text">Quantity: {{$cart->quantity}}</p>

                        <form action="/remove-cart/{{$cart->id}}" method="POST">
                            {{method_field('DELETE')}}
                            @csrf
                            <input type="submit" class="btn btn-danger" value="Delete"/>
                            <a href="/cart/{{$cart->product->id}}" class="btn btn-secondary">Edit</a>
                        </form>                           
                    </div>
                </div>
            </div>
        @endforeach

        @if(count($carts))
        <div class="col-md-12 justify-content-center d-flex">
            <a href="/list-cart/checkout" class="btn btn-secondary mt-5">Checkout</a>
        </div>
        @endif
    </div>
</div>
@endsection





