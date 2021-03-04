<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class Dashboard_controller extends Controller
{
    public function show_dashboard(){
        return view('Dashboard/v_dashboard');
    }

    public function show_dashboard_year(){
        return view('Dashboard/v_dashboard_year');
    }


    public function __construct(){
        $this->middleware('auth');
    }

    
}
