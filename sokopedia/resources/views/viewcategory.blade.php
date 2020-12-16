@extends('layouts.adminnav')

@section('content2')

    <div class="container">
        <h3 class="mt-5 mb-3"> View Category </h3>
        @foreach ($categories as $category)
             <a href="/admin/view-category-product/{{$category->id}}" class="btn btn-outline-secondary btn-lg btn-block">{{$category->name}}</a>
        @endforeach    
    </div>
@endsection