<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Exports\LedgerExport;
use App\Statement_log;
use Illuminate\Support\Facades\Auth;
use Maatwebsite\Excel\Facades\Excel;
class Report_controller extends Controller
{

    public function index()
    {
        $user = Auth::User()->user_id;
        $data = new Statement_log();
        $rs_log_year = $data->get_log_year($user);
        return view('Report.v_report')->with('result',$rs_log_year);
    }


    public function export() 
    {
        return Excel::download(new LedgerExport, 'ledger.xlsx');
    }
}
