<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

use DB;

use Session;

header("content-type:text/html;charset=utf-8");

class HomeController extends Controller
{	
	public function service(){
		return view("home.service");
	}
	public function cases(){
		return view("home.case");
	}
	public function about(){
		return view("home.about");
	}
	public function apply(){
		return view("home.apply");
	}
}
