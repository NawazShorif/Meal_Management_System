<?php

namespace App\Http\Controllers;
use App\Http\Controllers\totalviewController;
use App\Http\Controllers\statusController;
use Illuminate\Http\Request;
use App\usermealmodel;
use App\usertotalviewmodel;

class mealController extends Controller
{
    public function index(){


    	return view("Tabs/mytodaymeal");
    }
    public function store(Request $request){

    	$login_UserID=auth()->user()->id;
		$data=$request->all();
		$data['userid']=$login_UserID;
		$toDayTotalMeal=$data['lunch']+$data['diner'];
		usermealmodel::create($data);
		usertotalviewmodel::where('id',$login_UserID)->increment('meal',$toDayTotalMeal);
		 totalviewController::mealRate();
		 return  statusController::statusMethod();
    }
}
