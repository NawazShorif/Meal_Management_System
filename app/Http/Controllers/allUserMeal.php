<?php

namespace App\Http\Controllers;
use App\User;
use Illuminate\Http\Request;
use App\usermealmodel;
class allUserMeal extends Controller
{
    public function aum(){
    	$userMealInfo=usermealmodel::all();
    	foreach ($userMealInfo as $user){
    	$userdata=User::where('id',$user->userid)->value('name');
    	$user['uzzerKarirnam']=$userdata;
    	}
    	return view('Tabs/allUserMeal',compact('userMealInfo',$userMealInfo));
    }
}
