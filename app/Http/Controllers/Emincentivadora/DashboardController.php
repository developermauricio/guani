<?php

namespace App\Http\Controllers\Emincentivadora;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(){
        return view('emincentivadora.dashboard.dashboard');
    }
}
