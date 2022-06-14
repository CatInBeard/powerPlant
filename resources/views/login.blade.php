@if ($errors->any())
    <div>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
{{session('error')}}
{{ Form::open(array('route' => 'login.post')) }}
    {{Form::email('email')}}
    {{Form::password('password')}}
    {{Form::submit('Ok')}}
{{ Form::close() }}