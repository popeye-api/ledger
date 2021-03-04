<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Exports\LedgerExport;
use Maatwebsite\Excel\Facades\Excel;
class Report_controller extends Controller
{

    public function index()
    {
        return view('Report.v_report');
    }


    public function export() 
    {
        return Excel::download(new LedgerExport, 'users.xlsx');
    }
}
