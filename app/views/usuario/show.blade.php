@extends('layouts.master')

@section('content')
        <h1>Administración de usuarios</h1>
        {{-- Preguntamos si hay algún mensaje de error y si hay lo mostramos  --}}
                    @if(Session::has('mensaje_error'))
                        <div class="alert alert-danger">{{ Session::get('mensaje_error') }}</div>
                    @endif
                    {{ HTML::ul($errors->all()) }}

					<legend>Datos del usuario: {{ $usuario->username }}</legend>

					    <div class="jumbotron text-center">
					        <h2>{{ $usuario->username }}</h2>
					        <p>
					            <strong>Nombre:</strong> {{ $usuario->name }}<br>
					            <strong>Email:</strong> {{ $usuario->email }}<br>
					        </p>
					    </div>
@stop