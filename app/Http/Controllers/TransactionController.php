<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\App;

class TransactionController extends Controller
{
    public function index() {

        $transactions = DB::table('transactions')->get();
        
        return view('transactions.index', [
            'transactions' => $transactions
        ]);
    }

    public function show($id) {

        $transaction = DB::table('transactions')->find($id);
        if (empty($transaction)) {
            App::abort(404);
            // return View::make('errors.404');
        }
        
        return view('transactions.show', [
            'transaction' => $transaction
        ]);
    }
}
