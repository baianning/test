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
class IndexController extends Controller{
    public function index(){
        return view("index");
    }
    public function login(){
        return view("login");
    }
    public function collection(){
        return view("collection");
    }
    public function lists(){
        return view("list");
    }
    public function register(){
        return view("register");
    }
    public function show(){
        return view("show");
    }
}