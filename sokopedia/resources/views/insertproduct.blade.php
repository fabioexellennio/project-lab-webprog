@extends('layouts.app')

@section('content')

    <div class="container">
        <h1 class="font-weight-bold"> Admin Page </h1>

        <a href="/admin/view-product" class="btn btn-outline-primary">View Product</a>
        <a href="/admin/insert-product" class="btn btn-outline-primary">Add Product</a>
        <a href="/admin/view-category" class="btn btn-outline-secondary ml-4">View Category</a>
        <a href="/admin/insert-category" class="btn btn-outline-secondary">Add Category</a>

         <h3 class="mt-5 mb-1"> Add Product </h3>
            <form enctype="multipart/form-data" method="POST" action="/admin/insert-product/inserted">
                @csrf
                <label class="mt-4 mb-2">Product Name</label>
                <div class="d-flex align-items-center mb-2">
                    <input id="productName" placeholder="Product Name" name="name" type="text" class="form-control">
                </div>

                <label class="mt-4 mb-2">Select Category</label>
                <div class="d-flex align-items-center mb-2">
                    <select class="form-control" id="Category Select" name="category">
                    <option value="">Choose One Category</option>
                    @foreach ($categories as $category)
                        <option value="{{$category->id}}">{{$category->name}}</option>
                    @endforeach
                    </select>
                </div>

                <label class="mt-4 mb-2">Product Description</label>
                <div class="d-flex align-items-center mb-2">
                    <input id="productDescription" placeholder="Product Description" name="description" type="text" class="form-control">
                </div>

                <label class="mt-4 mb-2">Product Price</label>
                <div class="d-flex align-items-center mb-2">
                    <input id="productPrice" placeholder="Product Price" name="price" type="number" class="form-control">
                </div>

                <label class="mt-3 mb-2">Product Image</label>
                <div class="d-flex align-items-center mb-2">
                    <input id="productImage" name="image" type="file" class="form-control-file">
                </div>

                <button type="submit" class="btn btn-secondary mt-4 mb-1"> Add Product </button>
            </form>
            <span style="color:red;">
                @if($errors->any())
                    {{$errors->first()}}
                @endif
            </span>

         </div>

    </div>


@endsection