<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use app\User;
use Session;

class UserController extends Controller{

    public function __construct() {
        @session_start();  
    }  

    public function postlogin(Request $request){

        if($request->username == '' || $request->password == ''){
            return redirect('/')->with('notice', 'Tài khoản và mật khẩu không được để trống.');
        }

        if($request->username != '' && $request->password != ''){
            $tendangnhap = $request->username;
            $matkhau = $request->password;

            $users = DB::table('NguoiDung')->where([['tendangnhap', '=', $tendangnhap],['matkhau', '=', $matkhau]])->get();
           if(count($users) > 0){
               foreach($users as $user){
                  session(['admin' => $tendangnhap]);       
               }  
               return redirect('/');       
           } 
        }else{
            return redirect('/')->with('notice', 'Tài khoản hoặc mật khẩu chưa chính xác.');
        }        
    }  
    
    public function logout(Request $request){
        session()->forget('admin');
        return redirect('/')->with('notice', 'Bạn đã đăng xuất thành công khỏi hệ thống');
    } 
}
?>