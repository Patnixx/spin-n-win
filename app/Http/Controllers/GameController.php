<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class GameController extends Controller
{
    //
    public function coinflip()
    {
        if(Auth::check())
        {
            $user_info = Auth::user();
            return view('games.cf.coinflip', compact('user_info'));
        }
        else
        {
            return redirect()->route('login');
        }
    }
}
