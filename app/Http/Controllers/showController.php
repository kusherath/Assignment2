<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class showController extends Controller
{
    public function show() { 
        // Your logic here 
        return view('show'); 
       } 

       public function create() { 
        // Your logic here 
        return view('welcome'); 
       }  
}
