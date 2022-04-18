<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Dashboard;

use Illuminate\Http\Request;
// use App\Dashboard;

class DashboardController extends Controller
{
    public function index() {

        return view('dashboard.index');
    }
}
