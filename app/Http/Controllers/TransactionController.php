<?php

namespace App\Http\Controllers;

use App\Models\Transaction;
use Illuminate\Http\Request;

class TransactionController extends Controller
{
    public function index() {

        $transactions = Transaction::all();
        
        return view('transactions.index', [
            'transactions' => $transactions
        ]);
    }

    public function create() {

        return view('transactions.create');
    }

    public function show($id) {

        $transaction = Transaction::findOrFail($id);
          
        return view('transactions.show', [
            'transaction' => $transaction
        ]);
    }

    public function store() {

        $transaction = new Transaction();

        $transaction->date = request('date');
        $transaction->description = request('description');
        $transaction->category = request('category');
        $transaction->type = request('type');
        $transaction->amount = request('amount');

        $transaction->save();

        return redirect('/dashboard');
    }
}
