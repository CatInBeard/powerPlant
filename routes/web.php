<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\LoginController;
use App\Http\Controllers\LanguageController;
use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\RegController;

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

Route::get('/', [WelcomeController::class, 'show'])
->name('root.show');
Route::get('/signin', [LoginController::class, 'show'])
->name('login.show');
Route::post('/signin', [LoginController::class, 'authenticate'])
->name('login.post');
Route::get('/logout', [LoginController::class, 'logout'])
->name('login.delete');
Route::get('/signup', [RegController::class, 'show'])
->name('reg.show');
Route::post('/signup', [RegController::class, 'signup'])
->name('reg.post');
Route::get('locales/{locale}', [LanguageController::class, 'setLang'])
->name('languages.set');
Route::get('/locales', [LanguageController::class, 'show'])->name('languages.show');