<?php

namespace App\Http\Controllers;

use App\Models\User;
use Hash;
use Auth;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function login()
    {
        return view('login');
    }

    public function register()
    {
        return view('register');
    }

    public function post_register(Request $request)
    {
        User::create($request->all());
      return redirect()->route('login');
    }

    public function post_login(Request $request)
    {
        if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            $user = Auth::user();
    
            if ($user->role == 1) {
                return redirect()->route('admin');
            } else {
                return redirect()->route('index');
            }
        }
        return redirect()->back();
    }

    public function logout(){
        Auth::logout();
        return redirect()->route('index');
    }
}