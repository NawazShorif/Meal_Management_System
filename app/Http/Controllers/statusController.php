<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\usertotalviewmodel;

class statusController extends Controller
{
	public static function statusMethod(){
		$login_UserID=auth()->user()->id;
		$userStatusData=usertotalviewmodel::where('id',$login_UserID)->first();
		return view('Tabs/myStatus',compact('userStatusData',$userStatusData));
	}
    
}
