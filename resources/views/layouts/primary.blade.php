<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Powerplant @yield("titlePage")</title>
        <link rel="stylesheet" type="text/css" href="/style/main.css">
        <link rel="icon" type="image/x-icon" href="/img/favicon.png">
    </head>
    <body>
        <header>
        <img class="logo" src="/img/logo-name.png">
            @if($isAuth)
                <a href={{ route('login.delete') }}>{{ __('welcome.logout')}}</a>   
                {{__('welcome.hello',["name" => $user->name])}}  
            @else
                <a class="button-log" href={{ route('login.show') }}>{{ __('welcome.login')}}</a> 
                <a class="button-reg" href={{ route('reg.show') }}>{{ __('welcome.reg')}}</a> 
            @endif
            <a class="language" href="#">
                <img class="language-img" src="/img/languages/{{__('welcome.currentlanguage')}}.png">
            </a>
        </header>
        @yield("content")
    </body>
</html>