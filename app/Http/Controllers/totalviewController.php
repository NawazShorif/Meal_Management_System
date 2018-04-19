<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\usertotalviewmodel;

class totalviewController extends Controller
{
    public static function mealRate(){
    	$allData=usertotalviewmodel::all();
    	//return $allData;
    	$totalBuzzerCost=0;
    	$totalMeal=0;
    	foreach ($allData as $data) {
    		$totalMeal+=$data->meal;
    		$totalBuzzerCost+=$data->giventk;
    	}
    	//$totalBuzzerCost=usertotalviewmodel::sum('giventk')->get();
    	//$totalMeal=usertotalviewmodel::sum('meal')->get();
    	$currentMealRate=$totalBuzzerCost/$totalMeal;
    	//return $currentMealRate;
    	foreach ($allData as $data) {
    		$avbl=($data->giventk)-($currentMealRate*$data->meal);
    		usertotalviewmodel::where('id',$data->id)->update(['availabletk'=>$avbl]);
    	}
    	//usertotalviewmodel::update('availabletk',);
    }
}
