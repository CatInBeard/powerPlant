<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Powerplant</title>
        <link rel="stylesheet" type="text/css" href="/style/main-layout.css">
    </head>
    <body>
        {{ __('welcome.itWorks')}}
        <a href={{ route('languages.show') }}>{{ __('welcome.changeLang')}}</a>
    </body>
</html>
