<?php

declare(strict_types = 1);

namespace App\Charts;

use App\Ledger_account;
use ConsoleTVs\Charts\BaseChart;
use Illuminate\Http\Request;
use Chartisan\PHP\Chartisan;

class SampleChart extends Ledger_account
{
    
    public ?array $middlewares = ['auth'];

    /**
     * Handles the HTTP request for the given chart.
     * It must always return an instance of Chartisan
     * and never a string or an array.
     */

    public function get_ledger_account(){
        $rs_ledger = DB::table('Ledger_account')
            ->select('data','balance','statement_balance','is_active','product_name','balance','description')
            ->LEFTjoin('statement','statement.statement_ledger_account_id','=','statement_log.log_id');
        return $rs_ledger->get();
    }

    public function handler(Request $request): Chartisan
    {
        return Chartisan::build()
            ->labels(['First', 'Second', 'Third'])
            ->dataset('Sample', ['111','555'])
            ->dataset('Sample 2', [3, 2, 1]);
    }
}