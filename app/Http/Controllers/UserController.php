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
    
        // Validate input, ensuring password is optional
        $request->validate([
            'f_name' => 'nullable|string',
            'l_name' => 'nullable|string',
            'email' => 'nullable|email|unique:users,email,' . $id,
            'username' => 'nullable|string',
            'password' => 'nullable|string|min:6|confirmed',
        ]);
    
        // Prepare the data for update, hashing password only if provided
        $data = [
            'f_name' => $request->f_name,
            'l_name' => $request->l_name,
            'email' => $request->email,
            'username' => $request->username,
        ];
    
        if ($request->filled('password')) {
            $data['password'] = Hash::make($request->password);
        }
    
        // Update the user's information in the database
        DB::table('users')->where('id', $id)->update($data);
    
        session()->flash('success', 'Profile updated successfully!');

        // Redirect back to the profile page
        return redirect()->route('profile');
    }
    
}