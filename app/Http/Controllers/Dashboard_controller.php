<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\Statement_log;

class Dashboard_controller extends Controller
{
    public function show_dashboard(){
        $data = new Statement_log();
        $rs_log_year = $data->get_log_year();
        return view('Dashboard/v_dashboard')->with('result',$rs_log_year);
    }

    public function show_dashboard_year(){
        return view('Dashboard/v_dashboard_year');
    }


    public function __construct(){
        $this->middleware('auth');
    }

    
}
