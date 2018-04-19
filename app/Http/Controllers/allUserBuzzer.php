<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\userbuzzermodel;
class allUserBuzzer extends Controller
{
    public function aub(){
    	$userBazzerInfo=userbuzzermodel::all();
    	foreach ($userBazzerInfo as $user){
    	$userdata=User::select('name')->where('id',$user->userid)->first();
    	$user['uzzerKarirnam']=$userdata->name;
    	}
    	//return $userBazzerInfo;
    	    	return view('Tabs/allUserBuzzer',compact('userBazzerInfo',$userBazzerInfo));
    }

}
