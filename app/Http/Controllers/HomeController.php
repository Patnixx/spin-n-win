<?php

namespace App\Http\Controllers;

use App\Models\Game;
use App\Models\User;
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
            $slotss = Game::inRandomOrder()->take(7)->get();
            $users = User::inRandomOrder()->take(7)->get();
            return view('homepage.index', compact('credentials', 'slots', 'slotss', 'users'));
        }
        return view('auth.login');
    }
    
}
