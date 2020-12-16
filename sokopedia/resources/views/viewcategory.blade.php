@extends('layouts.app')

@section('content')

    <div class="container">
        <h1 class="font-weight-bold"> Admin Page </h1>

         <a href="/admin/view-product" class="btn btn-outline-primary">View Product</a>
         <a href="/admin/insert-product" class="btn btn-outline-primary">Add Product</a>
         <a href="/admin/view-category" class="btn btn-outline-secondary ml-4">View Category</a>
         <a href="/admin/insert-category" class="btn btn-outline-secondary">Add Category</a>


        <h3 class="mt-5 mb-3"> View Category </h3>
        @foreach ($categories as $category)
             <a href="/admin/view-category-product/{{$category->id}}" class="btn btn-outline-secondary btn-lg btn-block">{{$category->name}}</a>
        @endforeach
        

    </div>


@endsection