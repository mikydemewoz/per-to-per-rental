<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\selling_info;

class FirstFormController extends Controller
{
    
    public function index(){
        $selling_info = selling_info::all()->toArray();
        // print_r($selling_info);
        return view('welcome',compact('selling_info'));
    }

    public function secondPage(Request $request){

        // return view('secondPage');
    }

}
