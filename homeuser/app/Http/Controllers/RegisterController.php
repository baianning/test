<?php
namespace App\Http\Controllers;
use Mail;
use DB;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;
use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
class RegisterController extends Controller{
    public function register_do(){
        $input = Input::all();
        $users = DB::table('user')->where('u_mail', '=', $input['u_mail'])->get();
        if($users){
            echo 2;
            die;
        }
        $data=DB::table('user')->insert(array(
            array('u_mail' => $input['u_mail'],
                'u_name' => $input['u_name'],
                'u_pwd' => md5($input['u_pwd']),
                'u_phone' => $input['u_phone']),
        ));
        if($data){
            echo 1;
        }else{
            echo 0;
        }
    }
    //发送邮箱验证码
    public function send(){
                 //view页面信息
        \Mail::send('link',[],function($message){
         $message->to(Input::get('u_mail'))->subject('欢迎注册八维网房屋租赁系统');
        });                 //收件人邮箱账号                   邮件内容
    }
    public function link(){
        return view('link');
    }
}
