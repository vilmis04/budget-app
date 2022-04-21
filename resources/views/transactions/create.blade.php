@extends('layouts.layout')

@section('content')

<div class="container flow-text center">
    Create a new transaction
</div>

<!-- <form class="container flow-text center" action="/transactions" method="POST"> -->
<form class="container flow-text center" action="/transactions" method="POST">
<!-- <form class="container flow-text center" action="http://127.0.0.1:8000/transactions" method="POST"> -->
    @csrf
    <div class="row">
        <div class="container center">Transaction type</div>
        <label class="col s3 offset-s3">
            <input name="type" type="radio" value="Income" />
            <span>Income</span>
        </label>
        <label class="col s3">
            <input name="type" type="radio" value="Expense" />
            <span>Expense</span>
        </label>
    </div>
    <div class="row">
        <div class="input-field col s4 offset-s4">
            <input id="date" type="date" class="validate" name="date">
            <label for="Date">Date</label>
        </div>
    </div>
    <div class="row">
        <div class="input-field col s4 offset-s4">
            <input placeholder="Enter amount" id="amount" type="number" step='0.01' class="validate" name="amount">
            <label for="amount">Amount</label>
        </div>
    </div>
    <div class="row">
        <div class="input-field col s4 offset-s4">
            <input placeholder="Enter short description" id="description" type="text" class="validate" name="description">
            <label for="description">Description</label>
        </div>
    </div>
    <div class="row">
        <!-- <label for="category">Category</label> -->
        <select class="browser-default col s4 offset-s4" name="category" id="category">
            <option value="" disabled selected>Select a category</option>
            <option value="Salary">Salary</option>
            <option value="Food">Food</option>
            <option value="Transport">Transport</option>
        </select>
    </div>
    <input type="submit" value="Submit" class="btn">

</form>

@endsection