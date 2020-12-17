@extends('layouts.app')

@section('content')
    <div class="row justify-content-center">
        <div class="d-flex">
            <img class="card-img-top"  src="{{Storage::url('images/'.$product['image'])}}" alt="{{$product['image']}}" style="width: 28rem;">
        </div>
        <div class="col-md-4" style="height:100%;">
            <div class="card" style="width: 18rem;">
                <div class="card-body">
                    <h5 class="card-title font-weight-bold">{{$product->name}}</h5>
                    <p class="card-text">Price: {{$product->price}}</p>
                    <p class="card-text">Description: {{$product->description}}</p>
                    <a href="/cart/{{$product->id}}" class="btn btn-secondary">Add to Cart</a>
                </div>
            </div>
        </div>   
    </div>
@endsection