@extends('layouts.window')

@section('title', "Sing in")

@section('window')
@if ($errors->any())
    <div class="errors">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
{{ Form::open(array('route' => 'login.post')) }}
    {{Form::email('email')}}
    {{Form::password('password')}}
    {{Form::submit('Ok')}}
{{ Form::close() }}
@endsection