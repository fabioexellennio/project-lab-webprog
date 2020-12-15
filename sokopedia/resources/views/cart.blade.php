@extends('layouts.app')

@section('content')
    <div class="row justify-content-center">
        <div class="d-flex">
            <img class="card-img-top" src="{{Storage::url('images/'.$product['image'])}}" alt="{{$product['image']}}" style="width: 28rem;">
        </div>
        <div class="col-md-4" style="height:100%;">
            <div class="card" style="width: 18rem;">
                <div class="card-body">
                    <h5 class="card-title font-weight-bold">{{$product->name}}</h5>
                    <p class="card-text">Price: {{$product->price}}</p>
                    <p class="card-text">Description: {{$product->description}}</p>
                    <form method="POST" action="/insert-cart/{{$product->id}}">
                        @csrf
                        <div class="d-flex align-items-center">
                            <p style="margin:0 8px 0 0;">Quantity: </p>
                            <input id="quantity" name="quantity" type="number" class="form-control">
                        </div>
                        <button type="submit" class="btn btn-secondary mt-3"> Add to Cart </button>
                    </form>
                    <span style="color:red;">
                        @if($errors->any())
                            {{$errors->first()}}
                        @endif
                    </span>
                </div>
            </div>
        </div>   
    </div>
@endsection