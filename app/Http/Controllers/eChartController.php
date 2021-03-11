<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use eCharts ,App\Ledger_account;

class eChartController extends Controller
{
    public function index()
    {
    $echarts = eCharts::database(Ledger_account::all(), 'bar', 'echarts')
    ->elementLabel("Total")
    ->GroupByYear();
        return redirect('v_dashboard',compact('echarts'));
    }
}
