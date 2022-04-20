@extends('layouts.layout')

@section('content')

<div class="container flow-text center">
    Index of transactions
</div>

@foreach($transactions as $transaction)

    <div class="container flow-text center">
        {{ $transaction->type }} - {{ $transaction->amount }} - {{ $transaction->description }} - {{ $transaction->date }}
    </div>

@endforeach

@endsection