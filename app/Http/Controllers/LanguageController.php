<?php

namespace App\Http\Controllers;

use Session;
use Config;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LanguageController extends Controller
{
    public function show()
    {
        return view('languages', ["languages" => Config::get('app.locales')]);
    }
    public function setLang($locale)
    {
        if (in_array($locale, Config::get('app.locales'))) {    # Check if exists language
            Session::put('locale', $locale);                    # Set language to session
        }
        return redirect()->back();                              # Go back
    }
}
