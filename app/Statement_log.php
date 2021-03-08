<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class Statement_log extends Model
{
    //กำหนด primary key ของ model Users
    protected $primaryKey = 'log_id';
    //กำหนด fill ที่ใช้งานให้กับ model Users
    protected $fillable=['product_name','balance','description','log_statement_id','log_type_id'];

    public function get_log(){
        $rs_log = DB::table('statement_log')
            ->select('product_name','balance','description','log_statement_id','log_type_id');
        return $rs_log->get();
    }

}
