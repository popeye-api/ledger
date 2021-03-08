<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ledger_account extends Model
{
    //กำหนด primary key ของ model Ledger_account_id
    protected $primaryKey = 'ledger_account_id';
    //กำหนด fill ที่ใช้งานให้กับ model Ledger_account_id
    protected $fillable=['data','balance','statement_balance','is_active','statement_ledger_account_id'];

    public function get_ledger_account(){
        $rs_ledger = DB::table('Ledger_account')
            ->select('data','balance','statement_balance','is_active','product_name','balance','description')
            ->LEFTjoin('statement','statement.statement_ledger_account_id','=','statement_log.log_id');
        return $rs_ledger->get();
    }
}
