<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Login</title>
        {{ HTML::style('css/bootstrap.css'); }}
    </head>
    <body>
        <div class="container">
            <div class="panel panel-default">
                <div class="panel-body">
                    {{-- Preguntamos si hay alg�n mensaje de error y si hay lo mostramos  --}}
                    @if(Session::has('mensaje_error'))
                        <div class="alert alert-danger">{{ Session::get('mensaje_error') }}</div>
                    @endif
                    {{ Form::open(array('url' => '/login')) }}
                        <legend>Iniciar sesi&oacute;n</legend>
                        <div class="form-group">
                            {{ Form::label('usuario', 'Nombre de usuario') }}
                            {{ Form::text('username', Input::old('username'), array('class' => 'form-control')); }}
                        </div>
                        <div class="form-group">
                            {{ Form::label('contrase�a', 'Contrase&ntilde;a') }}
                            {{ Form::password('password', array('class' => 'form-control')); }}
                        </div>
                        <div class="checkbox">
                            <label>
                                Recordar contrase&ntilde;a
                                {{ Form::checkbox('rememberme', true) }}
                            </label>
                        </div>
                        {{ Form::submit('Enviar', array('class' => 'btn btn-primary')) }}
                    {{ Form::close() }}
                </div>
            </div>
        </div>
        <script src="https://code.jquery.com/jquery.js"></script>
        {{ HTML::script('js/bootstrap.js'); }}
    </body>
</html>