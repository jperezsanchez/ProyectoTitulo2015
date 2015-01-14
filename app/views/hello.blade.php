@extends('layouts.master')

@section('content')
        <h1>Bienvenido {{ Auth::user()->name; }}</h1>
        <a href="/logout">Cerrar sesión.</a>
@stop
