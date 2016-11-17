<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('index');
});

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/
/*
 * 注册
 */
Route::get('register', function () {
    return view('register');
});
Route::group(['middleware' => ['web']], function () {
    //
});
Route::any('/login','LoginController@login');
Route::any('/list','IndexController@lists');
Route::any('/collection','IndexController@collection');
Route::any('/show','IndexController@show');
Route::post('register_do','RegisterController@register_do');
Route::post('send','RegisterController@send');
Route::get('link','RegisterController@link');
