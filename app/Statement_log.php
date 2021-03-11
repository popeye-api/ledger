<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class Statement_log extends Model
{
    protected $table = 'Statement_log';
    //กำหนด primary key ของ model Users
    protected $primaryKey = 'log_id';
    //กำหนด fill ที่ใช้งานให้กับ model Users
    protected $fillable=['product_name','balance','description','log_statement_id','log_type_id','created_at'];

    public function get_date(){
        $rs_log = DB::table('statement_log')
            ->select(DB::raw("DATE_FORMAT(statement_log.created_at,'%d/%m/%Y') as created_at"))
            ->groupBy('created_at');
        return $rs_log->get();
    }

    public function get_log(){
        $rs_log = DB::table('statement_log')
            ->select('balance',DB::raw("DATE_FORMAT(statement_log.created_at,'%d/%m/%Y') as created_at"),'log_type_id','log_user_id');
        return $rs_log->get();
    }

    public function get_log_id($created_at){
        $rs_log = DB::table('statement_log')
            ->select('statement_log.created_at as created_at','log_id','product_name','balance','description','log_statement_id','log_type_id','type_name',DB::raw("DATE_FORMAT(statement.created_at,'%d/%m/%Y') as created_at"))
            ->LEFTjoin('ledger_type','ledger_type.type_id','=','statement_log.log_type_id')
            ->where('statement_log.created_at',$created_at);
        return $rs_log->get();
    }

    public function get_log_year($user){
        $rs_log = DB::table('statement_log')
            ->select('product_name','balance','description','log_statement_id','log_type_id','created_at')
            ->whereYear('created_at', '=', date('Y'))
            ->where('log_user_id',$user);
        return $rs_log->get();
    }

}
