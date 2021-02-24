<?php
/*
* Users
* Users จัดการข้อมูล
* @author Thanach Jintakanont
* @Create Date 08-08-2563
*/

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

/*
* Users
* Users จัดการข้อมูล
* @author Thanach Jintakanont
* @Create Date 08-08-2563
* @Update Date 21-11-2563
*/
class Users extends Model {
    //กำหนด primary key ของ model Users
    protected $primaryKey = 'user_id';
    //กำหนด fill ที่ใช้งานให้กับ model Users
    protected $fillable=['first_name','last_name','email','user_name','password'];

    /*
    * get_user_id
    * get data of user by user_id
    * @author Thanach Jintakanont
    * @create Date 08-08-2563
    * @Update Date 12-10-2563
    */
    public function get_user_id($user_id){
        $rs_user = DB::table('users')
            ->select('user_id', 'firstname','lastname','email','password')
            ->where('user_id',$user_id);
        return $rs_user->get();
    }
}
