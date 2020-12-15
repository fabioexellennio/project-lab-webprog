@extends('layouts.app')

@section('content')

    <div class="container">
        <h1 class="font-weight-bold"> Admin Page </h1>

         <a href="/admin/view-product" class="btn btn-outline-primary">View Product</a>
         <a href="/admin/insert-product" class="btn btn-outline-primary">Add Product</a>
         <a href="/admin/view-category" class="btn btn-outline-secondary ml-4">View Category</a>
         <a href="/admin/insert-category" class="btn btn-outline-secondary">Add Category</a>

         <h3 class="mt-5 mb-3"> Add Category </h3>
            <form method="POST" action="/admin/insert-category/inserted">
                @csrf
                <div class="d-flex align-items-center">
                    <input id="category" placeholder="Category Name" name="categoryname" type="text" class="form-control">
                </div>
                <button type="submit" class="btn btn-secondary mt-3"> Add Category </button>
            </form>
            <span style="color:red;">
                @if($errors->any())
                    {{$errors->first()}}
                @endif
            </span>

         </div>

    </div>


@endsection