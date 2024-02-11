<?php

namespace App\Http\Controllers\auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function showLoginForm()
    {
        return view('auth.login');
    }

   
    public function login(Request $request)
    {
       $email = $request['email'];
       $password = $request['password'];
        if (Auth::attempt(['email' => $email, 'password' => $password, 'active' => 1])) {
            return redirect()->intended('/home');
        }

       
        return redirect()->back()->withErrors(['email' => 'бб друг ты лошпек']);
    }

  
    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }
}
