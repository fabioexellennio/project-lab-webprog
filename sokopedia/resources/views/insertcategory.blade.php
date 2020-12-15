@extends('layouts.app')

@section('content')

    <div class="container">
        <h1 class="font-weight-bold"> Admin Page </h1>

         <a href="/admin/view-product" class="btn btn-outline-primary">View Product</a>
         <a href="/admin/add-product" class="btn btn-outline-primary">Add Product</a>
         <a href="/admin/view-category" class="btn btn-outline-secondary ml-4">View Category</a>
         <a href="/admin/add-category" class="btn btn-outline-secondary">Add Category</a>

    </div>


@endsection