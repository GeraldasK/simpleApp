@extends('layouts.app')
@section('content')
    <h1>This is contacts page!</h1>
    {!! Form::open(['url' => '/contacts/submit']) !!}
        <div class="form-group">
            {{Form::label('name', 'Name')}}
            {{Form::text('name', '', ['class' => 'form-control', 'placeholder' => 'Enter name'])}}
        </div>
        <div class="form-group">
            {{Form::label('email', 'E-mail Address')}}
            {{Form::text('email', '', ['class' => 'form-control', 'placeholder' => 'Enter e-mail'])}}
        </div>
        <div class="form-group">
            {{Form::label('message', 'Message')}}
            {{Form::textarea('message', '', ['class' => 'form-control', 'placeholder' => 'Enter message'])}}
        </div>
        <div>
            {{Form::submit('Submit', ['class' => 'btn btn-primary'])}}
        </div>
    {!! Form::close() !!}
@endsection