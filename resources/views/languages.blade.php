@extends('layouts.window')

@section('title', "Sing in")

@section('window')
{{ __('welcome.chooseLanguage')}}
        </br>
        @foreach ($languages as $lang)
            <a href="{{ route('languages.set', $lang) }}" > {{$lang}} </a></br>
        @endforeach
@endsection
