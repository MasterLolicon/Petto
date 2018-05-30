<?php
//Proceso de conexión con la base de datos
  include("../../conexionbd/abrir_conexion.php"); 


//Iniciar Sesión
session_start();
$id_usuario= $_SESSION['id_usuario'];
//Validar si se está ingresando con sesión correctamente
if (!$_SESSION){
	header("location:../../index.php");	
}


?>
<!DOCTYPE html>
<html lang="es">

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
			<div class="col-md-3">
				<h1>Mis Mascotas</h1>
			</div>
			<div class="col-md-3">
				<h1></h1>
			</div>
			<div class="col-md-3">		   	        	
	            <a href="http://localhost/pag/vistas/buscarmascota.php" id="buscamas" class="btn btn-primary btn-lg" data-toggle="modal">Buscar Mascota</a>
	        </div>
	        <div class="col-md-3">		   	        	
	            <a href="#registrar" class="btn btn-primary btn-lg" data-toggle="modal">Registrar Mascota</a>
	        </div>
		</div>

		<div class="row">
			<?php 
			include($_SERVER['DOCUMENT_ROOT']."/conexionbd/abrir_conexion.php"); 

			$mascotaid= $_POST['id_mascota'];

			//Iniciar Sesión
			session_start();
			$id_usuario= $_SESSION['id_usuario'];
			$query = "SELECT * FROM mascota WHERE id_mascota='$mascotaid'";
			$resultado=mysqli_query($conexion,$query) or die(mysqli_error($conexion));

			$contador = 0; //cuenta el numero de mascotas

			echo "<table><tr>";
			while ($fila = mysqli_fetch_array($resultado)) {
				echo "<td>";
				echo "<img class='img-circle' style='width: 200px; height: 200px' src='/pag/vistas/foto_mascota/$fila[foto]'<br><br>";
				echo "Nombre: $fila[nombre] <br>";
				echo "Tipo:";
				if ($fila[tipo]==1) {
					echo "Perro<br>";
				}
				elseif($fila[tipo]==2) {
					echo "Gato<br>";
				}
				echo "Raza: $fila[raza] <br>";
				echo "Edad: $fila[edad] años <br>";
				echo "Genero: ";
				if ($fila[sexo]==1) {
					echo "Macho<br>";
				}
				elseif($fila[sexo]==2) {
					echo "Hembra<br>";
				}
				
			}
			echo "</tr></table>";


			?>
		</div>
			 <a href="http://localhost/pag/vistas/notificaciones.php" class="btn btn-primary btn-lg" data-toggle="modal">Volver</a>

			<br><br>

		        <div><p><h1>&nbsp;</h1></p></div>


	</div>
	<?php include('../estructura/footer.php'); ?>

</body>
</html>
