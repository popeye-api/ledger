<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class Statement extends Model
{
    protected $primaryKey = 'statement_id';
    //กำหนด fill ที่ใช้งานให้กับ model Users
    protected $fillable=['created_at','statement_balance','is_active','statement_ledger_account_id','statement_user_id'];

    public function get_statement(){
        $rs_log = DB::table('statement')
            ->select('statement_id',DB::raw("DATE_FORMAT(statement.created_at,'%d/%m/%Y') as created_at"),'statement_balance','statement.is_active as is_active','statement_user_id')
            ->LEFTjoin('ledger_account','statement.statement_ledger_account_id','=','ledger_account.ledger_account_id')
            ->orderBy('created_at','asc');
        return $rs_log->get();
    }

}
