<?php

namespace App\Http\Controllers;

use App\Models\Game;
use App\Models\User;
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

    public function cf_toss(Request $request)
    {
        $user = auth()->user(); // Get the authenticated user
        $betAmount = $request->input('bet_amount');
        $balance = $user->token_amount;

        // Basic validation
        if ($betAmount <= 0 || $betAmount > $balance) {
            return response()->json(['error' => 'Invalid bet amount.'], 400);
        }

        // Deduct the bet from the user's balance
        $balance -= $betAmount;

        // Simulate a coin flip (50/50 chance)
        $result = rand(0, 1) ? 'win' : 'lose';

        // If win, double the bet and add to the balance
        if ($result === 'win') {
            $balance += $betAmount * 2;
            User::where('id', $user->id)->update([
                'token_amount' => $balance
            ]);
        }

        // Return the result and updated balance
        return response()->json([
            'result' => $result,
            'new_balance' => $balance,
        ]);
    }

    public function slot($id){
        if(Auth::check())
        {
            $credentials = Auth::user();
            $slot = Game::where('id', $id)->first();
            return view('games.slots.index', compact('credentials', 'slot'));
        }
        else
        {
            return redirect()->route('login');
        }
    }
}
