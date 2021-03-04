<?php
/*
* Ledger
* Ledger จัดการข้อมูล
* @author Thanach Jintakanont
* @Create Date 08-08-2563
*/

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

/*
* Ledger
* Ledger จัดการข้อมูล
* @author Thanach Jintakanont
* @Create Date 08-08-2563
* @Update Date 21-11-2563
*/
class Ledger extends Model {
    //กำหนด primary key ของ model Ledger
    protected $primaryKey = 'ledger_account_id';
    //กำหนด fill ที่ใช้งานให้กับ model Ledger
    protected $fillable=['first_name','last_name','email','ledger_account_name','is_active'];

    /*
    * get_ledger_account_id
    * get data of ledger_account by ledger_account_id
    * @author Thanach Jintakanont
    * @create Date 08-08-2563
    * @Update Date 12-10-2563
    */
    public function get_ledger_id($ledger_account_id){
        $rs_ledger_account = DB::table('ledger_account')
            ->select('ledger_account_id', 'ledger_account_balance','is_active');
        return $rs_ledger_account->get();
    }
}
