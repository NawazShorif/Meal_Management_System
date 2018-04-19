<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\usertotalviewmodel;

class aluserStatus extends Controller
{
    public function allUS(){
    	$allUserTotalView=usertotalviewmodel::all();

    	return view('Tabs/allView',compact('allUserTotalView',$allUserTotalView));
    }
}
