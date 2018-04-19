<?php

namespace App\Http\Controllers;
use App\Http\Controllers\totalviewController;
use Illuminate\Http\Request;
use App\userbuzzermodel;
use App\usertotalviewmodel;
use App\Http\Controllers\statusController;

class buzzerController extends Controller
{
	public function index(){
		return view('Tabs/myTodayBuzzer');
	}


	public function store(Request $request){
		$login_UserID=auth()->user()->id;
		$data=$request->all();
		$data['userid']=$login_UserID;
		userbuzzermodel::create($data);
		usertotalviewmodel::where('id',$login_UserID)->increment('giventk',$data['price']);
		totalviewController::mealRate();
		return statusController::statusMethod();
	}
    
}
