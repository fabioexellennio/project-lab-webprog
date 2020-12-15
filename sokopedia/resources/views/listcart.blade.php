@extends('layouts.app')

@section('content')
<div class="container">

    <div class="row justify-content-center">
        @foreach ($carts as $cart)
            <div class="col-md-4">
                <div class="card" style="width: 18rem;">
                    <img class="card-img-top" src="{{Storage::url('images/'.$cart->product['image'])}}" alt="{{$cart->product['image']}}">
                    <div class="card-body">
                        <h5 class="card-title font-weight-bold">{{$cart->product->name}}</h5>
                        <p class="card-text">{{$cart->product->description}}</p>
                        @if(!Auth::guest())
                            <a href="/product/{{$cart->product->id}}" class="btn btn-secondary">View Detail</a>
                        @endif
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
@endsection





