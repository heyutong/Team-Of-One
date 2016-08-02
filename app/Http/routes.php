<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/
//前台页面
Route::get('/', function () {
    return view('home/index');
});
Route::get("home/index","HomeController@index");

Route::get("home/service","HomeController@service");

Route::get("home/cases","HomeController@cases");

Route::get("home/about","HomeController@about");

Route::get("home/apply","HomeController@apply");

Route::get("home/login","HomeController@login");

//后台页面
Route::get("admin/login","AdminController@login");

Route::post("admin/index","AdminController@index");

Route::get("admin/design","AdminController@design");

