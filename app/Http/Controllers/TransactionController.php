<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TransactionController extends Controller
{
    public function index() {

        return view('transactions.index');
    }

    public function show($id) {
        
        return view('transactions.show', [
            'id' => $id
        ]);
    }
}
