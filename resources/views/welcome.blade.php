<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Powerplant</title>
        <link rel="stylesheet" type="text/css" href="/style/main-layout.css">
    </head>
    <body>
        @if($isAuth)
            <a href={{ route('login.delete') }}>{{ __('welcome.logout')}}</a>   
            {{__('welcome.hello',["name" => $user->name])}}  
        @else
            <a href={{ route('login.show') }}>{{ __('welcome.login')}}</a> 
        @endif
        {{ __('welcome.itWorks')}}
        <a href={{ route('languages.show') }}>{{ __('welcome.changeLang')}}</a>
    </body>
</html>
