<?php

namespace App\Http\Middleware;

use Closure;
use App;
use Config;
use Session;
use Illuminate\Http\Request;

class Locale
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle($request, Closure $next)
    {   
        $raw_locale = Session::get('locale');     # If locale already set

        if (in_array($raw_locale, Config::get('app.locales'))) {  # If language exists in config 
            $locale = $raw_locale;                                #
        }                                                         # Set locale
        else $locale = Config::get('app.locale');                 # Else set default locale

        App::setLocale($locale);                                  # Setup locale

        return $next($request);                                   # Return to app execution
    }
}
