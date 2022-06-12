<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
})->name('root.show');
Route::get('locales/{locale}', function ($locale) {
    if (in_array($locale, \Config::get('app.locales'))) {   # Check if exists language
    	Session::put('locale', $locale);                    # Set language to session
    }
    return redirect()->back();                              # Go back
})->name('languages.set');
Route::get('/locales', function () {
    return view('languages', ["languages"=>Config::get('app.locales')]);
})->name('languages.show');