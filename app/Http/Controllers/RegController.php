<?php

namespace App\Http\Controllers;

use Session;
use Validator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Hash;

class RegController extends Controller
{
    public function show()
    {
        if (Auth::check()) {
            return redirect()->intended('root.show');
        }
        return view('registration');
    }
    public function signup(Request $request)
    {
        $credentials = $request->validate([
            'email' => ['required', 'unique:users', 'email'],
            'name' => ['required', 'unique:users', 'min:4'],
            'password' => ['required','min:3']
        ]);
        $auth['email'] = $credentials['email'];
        $auth['password'] = $credentials['password'];
        $credentials['password'] = Hash::make($credentials['password']);
        $user = User::create($credentials);

        if (Auth::attempt($auth)) {
            $request->session()->regenerate();
            return redirect()->intended(route('root.show'));
        }

        return back()->withErrors([__('auth.failed')]);
    }
}
