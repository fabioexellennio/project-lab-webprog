@extends('layouts.app')

@section('content')

    <div class="container">
        <h1 class="font-weight-bold"> Admin Page </h1>

         <a href="/admin/view-product" class="btn btn-outline-primary">View Product</a>
         <a href="/admin/insert-product" class="btn btn-outline-primary">Add Product</a>
         <a href="/admin/view-category" class="btn btn-outline-secondary ml-4">View Category</a>
         <a href="/admin/insert-category" class="btn btn-outline-secondary">Add Category</a>

        <h3 class="mt-5"> View Product </h3>
         <div class="mt-3">
            <table class="table">
                <thead class="thead-light">
                    <tr>
                    <th scope="col">Product ID</th>
                    <th scope="col">Product Image</th>
                    <th scope="col">Product Name</th>
                    <th scope="col">Product Category</th>
                    <th scope="col">Product Price</th>
                    <th scope="col">Product Description</th>
                    <th scope="col">Product Action</th>
                    </tr>
                </thead>

                @foreach($products as $product)
                <tbody>
                    <tr>
                    <th scope="row">{{$product->id}}</th>
                    <td><img src="{{Storage::url('images/'.$product['image'])}}" alt="{{$product['image']}}"></td>
                    <td>{{$product->name}}</td>
                    <td>{{$product->category->name}}</td>
                    <td>{{$product->price}}</td>
                    <td>{{$product->description}}</td>
                    <td>
                        <form action="/admin/delete-product/{{$product->id}}" method="POST">
                            {{method_field('DELETE')}}
                            @csrf
                            <input type="submit" class="btn btn-danger" value="Delete"/>
                        </form></td>
                    </tr>
                </tbody>
                @endforeach

            </table>
         </div>

    </div>


@endsection