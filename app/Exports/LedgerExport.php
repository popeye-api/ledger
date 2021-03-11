<?php

namespace App\Exports;

use App\Statement_log;
use Illuminate\Support\Facades\Auth;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;

class LedgerExport implements FromView
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function view(): View
    {
        $user = Auth::User()->user_id;
        $data = new Statement_log();
        $rs_log_year = $data->get_log_year($user);
        return view('Report.v_export', [
            'result'=>$rs_log_year
        ]);
    }
}
