<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Laravel PHP Framework</title>
    {{ HTML::style('css/bootstrap.css'); }}
</head>
<body>

	<nav class="navbar navbar-default">
	  <div class="container-fluid">
		<!-- Brand and toggle get grouped for better mobile display -->
		<div class="navbar-header">
		  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
			<span class="sr-only">Toggle navigation</span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
		  </button>
		  <a class="navbar-brand" href="#">Sistema salud - PT 2015</a>
		</div>

		<!-- Collect the nav links, forms, and other content for toggling -->
		<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
		  <ul class="nav navbar-nav">
			<li class="active"><a href="/"><span class="glyphicon glyphicon-home"></span>&nbsp;Inicio</a></li>
            <li><a href="#"><span class="glyphicon glyphicon-calendar"></span>&nbsp;Agenda</a></li>
			<li><a href="#"><span class="glyphicon glyphicon-list-alt"></span>&nbsp;Directorio</a></li>
			<li><a href="#"><span class="glyphicon glyphicon-time"></span>&nbsp;Encuentro</a></li>	
			<li class="dropdown">
			  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
			  	<span class="glyphicon glyphicon-cog"></span>&nbsp;Administración<span class="caret"></span></a>
			  <ul class="dropdown-menu" role="menu">
				<li><a href="/usuario">Listado de usuarios</a></li>
				<li><a href="/usuario/create">Nuevo usuario</a></li>
			  </ul>
			</li>
			<li class="dropdown">
			  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Dropdown <span class="caret"></span></a>
			  <ul class="dropdown-menu" role="menu">
				<li><a href="#">Action</a></li>
				<li><a href="#">Another action</a></li>
				<li><a href="#">Something else here</a></li>
				<li class="divider"></li>
				<li><a href="#">Separated link</a></li>
				<li class="divider"></li>
				<li><a href="#">One more separated link</a></li>
			  </ul>
			</li>
		  </ul>
		  <ul class="nav navbar-nav navbar-right">
			<li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown"><span
                    class="glyphicon glyphicon-user"></span>&nbsp;{{ Auth::user()->name; }}<b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li><a href="#"><span class="glyphicon glyphicon-cog"></span>&nbsp;Cambiar contrase&ntilde;a</a></li>
						<li><a href="#"><span class="glyphicon glyphicon-envelope"></span>&nbsp;Contacto soporte</a></li>
                        <li class="divider"></li>
                        <li><a href="/logout"><span class="glyphicon glyphicon-off"></span>&nbsp;Cerrar sesi&oacute;n</a></li>
                    </ul>
                </li>
		  </ul>
		</div><!-- /.navbar-collapse -->
	  </div><!-- /.container-fluid -->
	</nav>

    <div class="container">
			@yield('content')
    </div>
    <script src="https://code.jquery.com/jquery.js"></script>
    {{ HTML::script('js/bootstrap.js'); }}
</body>
</html>