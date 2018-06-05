<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="./css/bootstrap.css"/>
	<link rel="stylesheet" type="text/css" href="./css/avatar.css">
	<script type="text/javascript" src="./js/jquery.js"></script>
	<script type="text/javascript" src="./js/popper.js"></script>
	<script type="text/javascript" src="./js/bootstrap.js"></script>
</head>

<header>

<nav class="navbar navbar-expand-sm navbar-light fixed-top" style="background-color: #00B7C3; font-color: white">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="collapsibleNavbar">
  <ul class="nav navbar-nav">

   <a class="navbar-brand" href="./inicio.php">
    <img src="./img/petto.png" alt="logo" style="width: 40px">
  </a>
  <li>
   <a class="nav-link" href="./vistas/mismascotas.php" style="color: #E0F7FA">Mis Mascotas</a>
   </li>

   <li class="nav-item">
    <a class="nav-link" href="./vistas/servicios.php" style="color: #E0F7FA">Servicios</a>
   </li>
   <li class="nav-item">
    <a class="nav-link" href="./vistas/buscarmascota.php" style="color: #E0F7FA">Centro de Adopción</a>
   </li>
   <li class="nav-item">
    <a class="nav-link" href="./vistas/emparejarmascota.php" style="color: #E0F7FA">Emparejar Mascotas</a>
   </li>

    <li class="nav-item dropdown">
    <a class="nav-link dropdown-toggle" href="" id="mascotas" data-toggle="dropdown" style="color: #E0F7FA">Perfil</a>
     <div class="dropdown-menu ">
      <a class="dropdown-item" href="./vistas/notificaciones.php">Notificaciones</a>
      <a class="dropdown-item" href="./vistas/perfil.php">Configuraci&oacute;n</a>
      <a class="dropdown-item" href="./vistas/ayuda.php">Ayuda</a>
      <hr style="border-top: 3px double #8c8b8b;">
      <a class="dropdown-item" href="../conexionbd/desconectar_usuario.php">Cerrar Sesi&oacute;n</a>
     </div>
   </li>
  </ul>
 </div>
 </nav>
</header>
