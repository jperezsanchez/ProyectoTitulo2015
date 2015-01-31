@extends('layouts.master')

@section('content')
        <h1>Administración de usuarios</h1>
        {{-- Preguntamos si hay algún mensaje de error y si hay lo mostramos  --}}
                    @if(Session::has('mensaje_error'))
                        <div class="alert alert-danger">{{ Session::get('mensaje_error') }}</div>
                    @endif
                    {{ HTML::ul($errors->all()) }}
                    {{ Form::open(array('url' => 'usuario')) }}
                        <legend>Nuevo usuario</legend>
                        <div class="form-group">
                            {{ Form::label('nombre', 'Nombre') }}
                            {{ Form::text('name', Input::old('name'), array('class' => 'form-control')); }}
                        </div>
                        <div class="form-group">
                            {{ Form::label('usuario', 'Nombre de usuario') }}
                            {{ Form::text('username', Input::old('username'), array('class' => 'form-control')); }}
                        </div>
                        <div class="form-group">
                            {{ Form::label('contraseña', 'Contrase&ntilde;a') }}
                            {{ Form::password('password', array('class' => 'form-control')); }}
                        </div>
                        <div class="form-group">
                            {{ Form::label('recontraseña', 'Repita su contrase&ntilde;a') }}
                            {{ Form::password('repassword', array('class' => 'form-control')); }}
                        </div>
                        <div class="form-group">
                            {{ Form::label('email', 'Correo electrónico') }}
                            {{ Form::text('email', Input::old('email'), array('class' => 'form-control')); }}
                        </div>
                        {{ Form::submit('Enviar', array('class' => 'btn btn-primary')) }}
                    {{ Form::close() }}
@stop
