<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

use DB;

use Session;

header("content-type:text/html;charset=utf-8");

class AdminController extends Controller
{	
	public function login(){
		return view("admin.login");
	}
	public function index(){
		return view("admin.index");
	}
	public function design(){
		return view("admin.design");
	}
	
}
