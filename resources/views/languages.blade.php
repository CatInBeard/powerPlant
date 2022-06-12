<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>PowerPlant</title>
        <link rel="stylesheet" type="text/css" href="/style/main-layout.css">
    </head>
    <body>
        {{ __('welcome.chooseLanguage')}}
        </br>
        @foreach ($languages as $lang)
            <a href="{{ route('languages.set', $lang) }}" > {{$lang}} </a></br>
        @endforeach
        <a href="{{ route('root.show') }}" > {{ __('welcome.goRoot')}} </a></br>
    </body>
</html>
