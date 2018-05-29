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

<?php include('../estructura/header.php'); ?>

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
