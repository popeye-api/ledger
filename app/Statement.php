<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class Statement extends Model
{
    protected $primaryKey = 'statement_id';
    //กำหนด fill ที่ใช้งานให้กับ model Users
    protected $fillable=['data','balance','statement_balance','is_active','statement_ledger_account_id'];

    public function get_statement(){

        return ;
    }
}
