<?php

namespace App\Http\Controllers;

use App\Models\Game;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    //

    public function homeIndex(){
        if(Auth::check()){
            $credentials = Auth::user();
            //$slots = Game::where('type', 'slot');
            $slots = Game::inRandomOrder()->take(10)->get();
            return view('homepage.index', compact('credentials', 'slots'));
        }
        return view('auth.login');
    }
    
}
