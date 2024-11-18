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
        $password = Auth::user()->password;
        $request->validate([
            'n_pass' => 'nullable|string|min:6',
            'nc_pass' => 'nullable|same:n_pass',
            'o_user' => 'nullable|string',
            'n_user' => 'nullable|string|unique:users,username',
        ]);

        if($request->n_user){
            $request->validate([
                'n_user' => 'string|unique:users,username',
            ]);

            User::where('id', $id)->update([
                'username' => $request->n_user,
            ]);
        }

        if($request->nc_pass){
            $request->validate([
                'nc_pass' => 'nullable|same:n_pass',
            ]);

            User::where('id', $id)->update([
                'password' => Hash::make($request->nc_pass),
            ]);
        }
        
        
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