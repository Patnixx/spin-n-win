<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

use App\Models\User;

class AuthController extends Controller
{
    //
    public function loginIndex()
    {
        return view('auth.login');
    }

    public function loginAuth(Request $request)
    {
        $validator = $request->validate([
            'username' => 'required',
            'password' => 'required'
        ]);

        $credentials = $request->only('username', 'password');
        if (Auth::attempt($credentials)) {
            /*if (Auth::user()->role == 'Admin') {
                return redirect()->intended('admin')->withSuccess('Signed in');
            }*/ //NOTE - Admin panel
            $credentials = $request->only('username', 'password');
            return redirect('home')->withSuccess('Signed in');
        }
        $validator['emailPassword'] = 'Email is missing';
        $validator['password'] = 'Password is missing';
        $validator['emailPassword'] = 'Email address or password is incorrect';
        return redirect('login')->withErrors($validator);

    }

    public function registerIndex()
    {
        return view('auth.register');
    }

    public function registerAuth(Request $request)
    {
        $request->validate([
            'f_name' => 'required',
            'l_name' => 'required',
            'username' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6',
            'cpassword' => 'required|same:password',
        ]);

        $data = $request->all();
        $check = $this->create($data);

        return redirect('welcome')->withSuccess('You have signed-in');
    }

    public function create(array $data)
    {
        return User::create([
            'f_name' => $data['f_name'],
            'l_name' => $data['l_name'],
            'username' => $data['username'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
        ]);

    }

    public function logout()
    {
        Auth::logout();
        return redirect('home');
    }
}
