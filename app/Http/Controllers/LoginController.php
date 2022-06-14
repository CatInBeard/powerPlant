<?php

namespace App\Http\Controllers;

use Session;
use Validator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function show()
    {
        if (Auth::check()) {
            return redirect()->intended('root.show');
        }
        return view('login');
    }
    public function logout(Request $request)
    {
        Auth::logout();
        return redirect(route('login.show'));
    }
    public function authenticate(Request $request)
    {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required','min:3']
        ]);
        if ($credentials) {
            $add = []; //['active' => 1];
            if (Auth::attempt(array_merge($credentials, $add))) {
                $request->session()->regenerate();

                return redirect()->intended(route('root.show'));
            }
        }
        return back()->withErrors([__('auth.failed')]);
    }
}
