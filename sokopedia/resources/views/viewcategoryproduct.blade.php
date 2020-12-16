@extends('layouts.adminnav')

@section('content2')

    <div class="container">

        <h3 class="mt-5 mb-3"> View Category </h3>
        @foreach ($categories as $category)
             <a href="/admin/view-category-product/{{$category->id}}" class="btn btn-outline-secondary btn-lg btn-block">{{$category->name}}</a>
        @endforeach
        
        <h3 class="mt-5"> View Product </h3>
         <div class="mt-3">
            <table class="table">
                <thead class="thead-light">
                    <tr>
                    <th scope="col">Product ID</th>
                    <th scope="col">Product Image</th>
                    <th scope="col">Product Name</th>
                    <th scope="col">Product Price</th>
                    <th scope="col">Product Description</th>
                    </tr>
                </thead>

                @foreach($products as $product)
                <tbody>
                    <tr>
                    <th class="align-middle" scope="row">{{$product->id}}</th>
                    <td class="align-middle"><img width="200px" src="{{Storage::url('images/'.$product['image'])}}" alt="{{$product['image']}}"></td>
                    <td class="align-middle" >{{$product->name}}</td>
                    <td class="align-middle">{{$product->price}}</td>
                    <td class="align-middle">{{$product->description}}</td>
                </tbody>
                @endforeach

            </table>
         </div>

    </div>


@endsection