<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Ledger_account;
use DB;

class LinechartController extends Controller
{
    public function index()
    {
        $Ledger_account = Ledger_account::select(\DB::raw("COUNT(*) as count"))
                    ->whereYear('created_at', date('Y'))
                    ->groupBy(\DB::raw("Month(created_at)"))
                    
          
        return view('dashboard.v_dashboard', compact('Ledger_account'));
    }
}
