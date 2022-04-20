@extends('layouts.layout')

@section('content')

<div class="container flow-text center">
    Transaction number {{ $transaction->id }}
</div>
<div class="container flow-text center">
    {{ $transaction->type }} - {{ $transaction->amount }} - {{ $transaction->description }} - {{ $transaction->date }}
</div>

@endsection