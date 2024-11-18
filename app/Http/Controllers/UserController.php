<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function profile(){
        $user = Auth::user();
        return view('user.index', compact('user'));
    }

    public function updateProfile(Request $request){
        $id = Auth::id();
        $request->validate([
            'n_pass' => 'nullable|string|min:6',
            'nc_pass' => 'nullable|same:n_pass',
            'o_user' => 'nullable|string',
            'n_user' => 'nullable|string|unique:users,username',
        ]);
        User::where('id', $id)->update([
            'password' => Hash::make($request->nc_pass),
            'username' => $request->n_user,
        ]);
        
        /*$data = [
            'f_name' => $request->f_name,
            'l_name' => $request->l_name,
            'email' => $request->email,
            'username' => $request->username,
        ];*/


        session()->flash('success', 'Changes made successfully!');

        return redirect()->route('profile');
    }
}