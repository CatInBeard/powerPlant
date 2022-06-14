<?php

namespace App\Http\Controllers;

use Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class WelcomeController extends Controller
{
    public function show()
    {
        $isAuth = Auth::check();
        $params = ["isAuth"=>$isAuth];
        if ($isAuth) {
            $params['user'] = Auth::user();
        }
        return view('welcome', $params);
    }
}
