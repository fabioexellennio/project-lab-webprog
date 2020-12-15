@extends('layouts.app')

@section('content')
<div class="container">

    @if(count($transactions))
        <h2>Transaction History</h2>
    @endif

    <div class="row justify-content-center">
        @if(!count($transactions))
            <h2>There is no history transactions</h2>
        @endif

        @foreach ($transactions as $transaction)
            <div class="col-md-12">
                <div class="card" style="width: 18rem;">
                    <p>{{$transaction->created_at}}<p>
                    <a href="/transaction-detail/{{$transaction->id}}" class="btn btn-secondary">View Detail</a>
                </div>
            </div>
        @endforeach

    </div>
</div>
@endsection





