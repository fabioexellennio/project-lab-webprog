@extends('layouts.app')

@section('content')
<div class="container">

    <div class="row justify-content-center">

        @foreach ($details as $detail)
            <div class="col-md-4">
                <div class="card" style="width: 18rem;">
                        <img class="card-img-left" src="{{Storage::url('images/'.$detail->product['image'])}}" alt="{{$detail->product['image']}}">
                        
                        <div class="card-body">
                            <h5 class="card-title font-weight-bold">{{$detail->product->name}}</h5>
                            <p class="card-text">Price: Rp.{{$detail->product->price}}</p>
                            <p class="card-text">Quantity: {{$detail->quantity}}</p>
                        </div>
                </div>
            </div>
        @endforeach

    </div>
</div>
@endsection





