<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Powerplant @yield('title')</title>
        <link rel="stylesheet" type="text/css" href="/style/window-layout.css">
    </head>
    <body>
        <main>
            <a href="{{ route('root.show') }}">{{ __('welcome.goRoot')}}</a></br>
            @yield('window')
        <main>
    </body>
</html>
