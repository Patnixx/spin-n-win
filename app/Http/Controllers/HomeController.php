<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    //

    public function homeIndex(){
        if(Auth::check()){
            $credentials = Auth::user();
            return view('homepage.index', compact('credentials'));
        }
        return view('homepage.index');
    }
    
}
