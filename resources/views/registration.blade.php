@extends('layouts.window')

@section('title', "Sing up")

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
    {{ Form::open(array('route' => 'reg.post')) }}
        {{Form::email('email')}}
        {{Form::text('name')}}
        {{Form::password('password')}}
        {{Form::submit('Ok')}}
    {{ Form::close() }}
@endsection
