<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function profile($username){
        $db_username = Auth::user()->username;
        $user_info = User::where('username', $db_username)->first();
        return view('user.profile', compact('user_info'));
    }

    public function updateProfile(Request $request, $username){
        $request->validate([
            'f_name' => 'required',
            'l_name' => 'required',
            'email' => 'required|email|unique:users',
            'username' => 'required',
            //'password' => 'required|min:6',
        ]);

        User::where('email', $request->email)->update([
            'f_name' => $request->f_name,
            'l_name' => $request->l_name,
            'email' => $request->email,
            'username' => $request->username,
            //'password' => $request->password,
        ]);
        return redirect('profile', $username);
    }
}