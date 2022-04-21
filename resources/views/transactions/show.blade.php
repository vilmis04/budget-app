@extends('layouts.layout')

@section('content')

<div class="container flow-text center">
    Transaction number {{ $transaction->id }}
</div>
<div class="container flow-text center">
    {{ $transaction->type }} - {{ $transaction->amount }} - {{ $transaction->description }} - {{ $transaction->date }}
</div>

<form class="container center" action="/transactions/{{ $transaction->id }}" method="POST">
    @csrf
    @method('DELETE')
    <input type="submit" value="DELTE" class="btn">
</form>

@endsection