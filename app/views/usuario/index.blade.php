@extends('layouts.master')

@section('content')
        <h1>Administración de usuarios</h1>
        {{-- Preguntamos si hay algún mensaje de error y si hay lo mostramos  --}}
                    @if(Session::has('mensaje_error'))
                        <div class="alert alert-danger">{{ Session::get('mensaje_error') }}</div>
                    @endif
        <legend>Listado de usuarios</legend>
        <table class="table table-striped table-bordered">
            <thead>
                <tr>
                    <td>ID</td>
                    <td>Nombre</td>
                    <td>Nombre de usuario</td>
                    <td>Correo electrónico</td>
                    <td>Acciones</td>
                </tr>
            </thead>
            <tbody>
            @foreach($usuarios as $key => $usuario)
                <tr>
                    <td>{{ $usuario->id }}</td>
                    <td>{{ $usuario->name }}</td>
                    <td>{{ $usuario->username }}</td>
                    <td>{{ $usuario->email }}</td>
                    <td>
                        {{ Form::open(array('url' => 'usuario/' . $usuario->id, 'class' => 'pull-right')) }}
                            {{ Form::hidden('_method', 'DELETE') }}
                            {{ Form::submit('Eliminar', array('class' => 'btn btn-warning')) }}
                        {{ Form::close() }}
                        <a class="btn btn-small btn-success" href="{{ URL::to('usuario/' . $usuario->id) }}">Detalles</a>
                        <a class="btn btn-small btn-info" href="{{ URL::to('usuario/' . $usuario->id . '/edit') }}">Editar</a>
                       
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>

@stop
