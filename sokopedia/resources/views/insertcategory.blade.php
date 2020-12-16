@extends('layouts.adminnav')

@section('content2')

    <div class="container">

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