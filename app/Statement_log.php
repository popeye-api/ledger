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

    public function get_log($statement_id){
        $rs_log = DB::table('statement_log')
            ->select('log_id','product_name','balance','description','log_statement_id','log_type_id','type_name',DB::raw("DATE_FORMAT(statement.created_at,'%d/%m/%Y') as created_at"))
            ->LEFTjoin('ledger_type','ledger_type.type_id','=','statement_log.log_type_id')
            ->LEFTjoin('statement','statement.statement_id','=','statement_log.log_statement_id')
            ->where('log_statement_id',$statement_id);
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
