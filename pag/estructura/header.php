		<head>
			<meta charset="utf-8">
			<title>Petto</title>
			<link rel="shortcut icon" href="favicon.ico">
			<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
			<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css">
			<link rel="stylesheet" type="text/css" href="/pag/css/estilo.css">
			<link href="/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Roboto:400,100,300,700' rel='stylesheet' type='text/css'>
		</head>

			<body>
		<header>
	<script src="http://code.jquery.com/jquery-latest.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>
			<nav class="navbar navbar-default navbar-fixed-top">
			  <div class="container">
			    <!-- Brand and toggle get grouped for better mobile display -->
			    <div class="navbar-header">
			      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
			        <span class="sr-only">Toggle navigation</span>
			        <span class="icon-bar"></span>
			        <span class="icon-bar"></span>
			        <span class="icon-bar"></span>
			      </button>

			     <h1><a class="navbar-brand" href="<?php echo($_SERVER['DOCUMENT_ROOT']).'/pag/inicio.php' ?>">Petto</a><h1>
			    </div>

			    <!-- Collect the nav links, forms, and other content for toggling -->
			    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
			      <ul class="nav navbar-nav navbar-right">
			      	<li><a href="http://localhost/Petto/pag/vistas/mismascotas.php">Mis Mascotas</a></li>
			        <li><a href="http://localhost/Petto/pag/vistas/servicios.php">Servicios</a></li>
			        <li class="dropdown">
			          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Perfil <span class="caret"></span></a>
			          <ul class="dropdown-menu">
			          	<li><a href="http://localhost/Petto/pag/vistas/notificaciones.php">Notificaciones</a></li>
			            <li><a href="http://localhost/Petto/pag/vistas/perfil.php">Configuración</a></li>
			            <li><a href="http://localhost/Petto/pag/vistas/ayuda.php">Ayuda</a></li>
			            <li role="separator" class="divider"></li>
			            <li><a href="http://localhost/Petto/conexionbd/desconectar_usuario.php">Cerrar Sesión</a></li>
			          </ul>
			        </li>
			      </ul>
			    </div><!-- /.navbar-collapse -->
			  </div><!-- /.container-fluid -->
			</nav>
		</header>
