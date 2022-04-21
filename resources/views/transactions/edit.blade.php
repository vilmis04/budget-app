@extends('layouts.layout')

@section('content')

<div class="container flow-text center">
    Edit a transaction
</div>

<form class="container flow-text center" action="/transactions/{{$transaction->id}}" method="POST">
    @csrf
    @method('PUT')
    <div class="row">
        <div class="container center">Transaction type</div>
        <label class="col s3 offset-s3">
            <input
                name="type"
                type="radio" 
                value="Income"
                @checked($transaction->type === 'Income')
            >
            <span>Income</span>
        </label>
        <label class="col s3">
            <input 
                name="type" 
                type="radio" 
                value="Expense" 
                @checked($transaction->type === 'Expense')
            >
            <span>Expense</span>
        </label>
    </div>

    <div class="row">
        <div class="input-field col s4 offset-s4">
            <input 
                id="date" 
                type="date" 
                class="validate" 
                name="date" 
                value={{$transaction->date}}
            >
            <label for="Date">Date</label>
        </div>
    </div>
    <div class="row">
        <div class="input-field col s4 offset-s4">
            <input 
                placeholder="Enter amount" 
                id="amount" 
                type="number" 
                step='0.01' 
                class="validate" 
                name="amount" 
                value={{$transaction->amount}}
            >
            <label for="amount">Amount</label>
        </div>
    </div>
    <div class="row">
        <div class="input-field col s4 offset-s4">
            <input 
                placeholder="Enter short description" 
                id="description" 
                type="text" 
                class="validate" 
                name="description" 
                value={{$transaction->description}}
            >
            <label for="description">Description</label>
        </div>
    </div>

    <div class="row">
        <!-- <label for="category">Category</label> -->
        <select class="browser-default col s4 offset-s4" name="category" id="category">
            <option value="" disabled>Select a category</option>
            <option value="Salary" @selected($transaction->category === 'Salary')>Salary</option>
            <option value="Food" @selected($transaction->category === 'Food')>Food</option>
            <option value="Transport" @selected($transaction->category === 'Transport')>Transport</option>
        </select>
    </div>
    <input type="submit" value="Update" class="btn">

</form>

@endsection