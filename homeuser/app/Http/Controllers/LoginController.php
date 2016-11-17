<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2016/11/10
 * Time: 19:09
 */
namespace App\Http\Controllers;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use DB;
use Illuminate\Support\Facades\Input;
use Illuminate\Contracts\View\View;
class LoginController extends Controller{
//    public function index(){
//       $input=Input::all();
//        $name=$input['u_name'];
//        $pwd=$input['u_pwd'];
//        $users = DB::table('user')->where(['u_name'=>$name,'u_pwd'=>$pwd])->get();
//        if($users){
//            return redirect()->action("IndexController@index");
//        }else{
//          echo  "登录失败";
//        }
//    }
    public function login(){
        return view('login');
    }
}