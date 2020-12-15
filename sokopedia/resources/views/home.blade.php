@extends('layouts.app')

@section('content')
<div class="container">

    <div class="row justify-content-center">
        @foreach ($data as $product)
            <div class="col-md-4">
                <div class="card" style="width: 18rem;">
                    <img class="card-img-top" src="{{Storage::url('images/'.$product['image'])}}" alt="{{$product['image']}}">
                    <div class="card-body">
                        <h5 class="card-title font-weight-bold">{{$product->name}}</h5>
                        <p class="card-text">Rp.{{$product->price}}</p>
                        @if(!Auth::guest())
                            <a href="/product/{{$product->id}}" class="btn btn-secondary">View Detail</a>
                        @endif
                    </div>
                </div>
            </div>
        @endforeach
    </div>
    <div class="row justify-content-center mt-5">
            {{$data->links()}}
    </div>
</div>
@endsection





