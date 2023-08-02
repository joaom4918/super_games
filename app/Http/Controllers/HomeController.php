<?php

namespace App\Http\Controllers;

use App\Games;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    
    public function index(Request $req){
        $registros= Games::all();

       
        
        return view("home",compact('registros'));
    }



  
}
