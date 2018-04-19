<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\usermealmodel;

class mealHistry extends Controller
{
    public function mymh(){
    	$login_UserID=auth()->user()->id;
    	$userMealInfo=usermealmodel::where('userid',$login_UserID)->get();
    	//return $userMealInfo;
    	return view('Tabs/myMeal',compact('userMealInfo',$userMealInfo));
    }
}
