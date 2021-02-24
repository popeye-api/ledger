<?php
/*
* Profile_manage_resource
* Profile_manage_resource จัดการข้อมูลของ user
* @author Witthaya Thepnuan
* @Create Date 29-08-2563
* @author Thanisorn Amnuay 
* @Update Date 12-10-2563
*/
namespace App\Http\Controllers;
use App\Users;
use Response;
use App\Http\Controllers\Controller;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;
class Profile_manage_controller extends Controller{   
    /*
    * index
    * Show profile of user from database
    * @input - 
    * @output profile of user from database
    * @author Witthaya Thepnuan
    * @Create Date 23-10-2563
    */
    public function index(){   
        // return view('ชื่อโฟลเดอร์.ชื่อไฟล์')  เป็นการโชว์หน้าview
        $data = new Users();
        $user_id = Auth::user()->user_id; 
        $qu_user = $data->get_user_id($user_id);
        return view('Profile.v_user_profile')->with('result',$qu_user);
    }
    /*
    * update
    * Update user into database
    * @input user_id
    * @output update(uesr_id)
    * @author Witthaya Thepnuan
    * @create Date 17-08-2563
    * @author Witthaya Thepnuan 
    * @Update Date 12-10-2563
    */
    public function update(Request $request){
        // ======================================== //
        // if form 1 is form of update user profile
        // ======================================== //
        if($request->get('num_form')=="1"){
            $validator = $this->validate($request,[
                'user_id'=>'required',
                'full_name'=>'required',
                'email'=>'required',
            ]);
            if ($validator){
                $name = explode(' ',$request->get('full_name'));
                $first_name = $name[0];
                $last_name = $name[1];
                $qu_user = Users::find($request->get('user_id'));
                $qu_user->firstname = $first_name;
                $qu_user->lastname = $last_name;
                $qu_user->email = $request->get('email');
                $qu_user->save();
                return response()->json(['data' => $qu_user]);
            }
        }
        // ======================================== //
        // form 2 is form of update user password
        // ======================================== //
        else if($request->get('num_form')=="2"){
            $requestData = $request->All();
                $validator = $this->validate($request,[
                'user_id'=>'required',
                'password' => 'required',
                'usernew_password' => ['required', 'same:usernew_password_confirmation', 'min:8'],
                'usernew_password_confirmation' => 'required|same:usernew_password',
                ]);
            if ($validator){
                $currentPassword = Auth::User()->password;
                if(Hash::check($request->get('password'),  Auth::User()->password))
                {
                    $user = Users::find($request->get('user_id'));
                    $user->password = Hash::make($requestData['usernew_password']);;
                    $user->save();
                    return response()->json(['success'=>'User Password updated.']);
                }else{
                    return response()->json(['error'=>$qu_user]);
                }
            }
        }
    }
    
    /*
    * __construct
    * Set access path 
    * @author Tanat Wongmolee 
    * @Create Date 21-11-2563
    */
    public function __construct(){
        $this->middleware('auth');
    }
}