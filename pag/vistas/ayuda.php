<?php
//Proceso de conexión con la base de datos
  include("../../conexionbd/abrir_conexion.php"); 

//Iniciar Sesión
session_start();

//Validar si se está ingresando con sesión correctamente
if (!$_SESSION){
	header("location:../../index.php");	
}

?>
<!DOCTYPE html>
<html lang="en">

<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
 <link rel="stylesheet" href="../css/bootstrap.css"/>
 <script type="text/javascript" src="../js/jquery.js"></script>
 <script type="text/javascript" src="../js/popper.min.js"></script>
 <script type="text/javascript" src="../js/bootstrap.js"></script>

<!--barra de navegacion-->
<nav class="navbar navbar-expand-sm navbar-light fixed-top" style="background-color: orange">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="collapsibleNavbar">
  <ul class="nav navbar-nav">
   <li class="nav-item">
    <a class="nav-link" href="../inicio.php">Inicio</a>
   </li>
   <a class="nav-link" href="mismascotas.php">Mis Mascotas</a>
   </li>
   
   <li class="nav-item">
    <a class="nav-link active" href="servicios.php">Servicios</a>
   </li>
    
    <li class="nav-item dropdown">
    <a class="nav-link dropdown-toggle" href="" id="mascotas" data-toggle="dropdown">Perfil</a>
     <div class="dropdown-menu ">
      <a class="dropdown-item" href="vistas/notificaciones.php">Notificaciones</a>
      <a class="dropdown-item" href="vistas/perfil.php">Configuraci&oacute;n</a>
      <a class="dropdown-item" href="vistas/ayuda.php">Ayuda</a>
      <hr style="border-top: 3px double #8c8b8b;">
      <a class="dropdown-item" href="conexionbd/desconectar_usuario.php">Cerrar Sesi&oacute;n</a>
     </div>
   </li>
  </ul>
 </div>
 </nav>

<!--contenido-->
	<div class="container-fluid">
		<div class="row">
			<h1>Ayuda</h1>
		</div>
		<div class="row">
            <h3>¿En qué necesitas ayuda?</h3>
            <a href="#preguntas" class="btn btn-primary btn-lg" data-toggle="modal">Preguntas Frecuentes</a>

        </div>
<!-- Modal preguntas -->
        <div class="modal fade" id="preguntas">
        	<div class="modal-dialog">
        		<div class="modal-content">
        		<!-- Header ventana -->
        			<div class="modal-header">
        				<button tyle="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        				<h2 class="modal-title">Preguntas Frecuentes</h2>
        			</div>
        		<!-- Header ventana -->
        			<div class="modal-body">
        				<p>
        				<h4>Pregunta 1</h4>
        					Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse tincidunt eget quam a commodo. Suspendisse quis sapien vulputate, scelerisque sapien non, lobortis odio.
        				</p>
        				<p>
        				<h4>Pregunta 2</h4>
        					Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse tincidunt eget quam a commodo. Suspendisse quis sapien vulputate, scelerisque sapien non, lobortis odio.
        				</p>
        				<p>
        				<h4>Pregunta 3</h4>
        					Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse tincidunt eget quam a commodo. Suspendisse quis sapien vulputate, scelerisque sapien non, lobortis odio.
        				</p>

        			</div>
        		<!-- Footer ventana -->
        			<div class="modal-footer">
        				<button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>

        				<center><p>Para más dudas contactar a contactopetto@gmail.com</p></center>
        			</div>

        		</div>
        	</div>
        </div>
    </div>
	
	</div>
	<?php include('../estructura/footer.php'); ?>
</body>
</html>
