<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\userbuzzermodel;
class buzzerHistry extends Controller
{
    public function mybh(){
    	$login_UserID=auth()->user()->id;
    	$userBazzerInfo=userbuzzermodel::where('userid',$login_UserID)->get();
    	return view('Tabs/myBuzzer',compact('userBazzerInfo',$userBazzerInfo));
    }
}
