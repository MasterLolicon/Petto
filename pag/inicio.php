<?php
//Proceso de conexión con la base de datos
include("../conexionbd/abrir_conexion.php");

//Iniciar Sesión
session_start();

//Validar si se está ingresando con sesión correctamente
if (!$_SESSION){
	header("location: http://localhost/Petto/index.php");
}

$id_usuario= $_SESSION['id_usuario'];

$consulta="SELECT usuario FROM usuarios WHERE id='$id_usuario'";
$resultado=mysqli_query($conexion,$consulta) or die(mysqli_error($conexion));
$resultado_obtenido=mysqli_fetch_array($resultado);
$usuario= $resultado_obtenido['usuario'];

?>

<!DOCTYPE html>
<html lang="en">

<?php include('estructura/header.php'); ?>

	<div class="container-fluid">
		<div class="row">
		<h1>Bienasdsavenido <?php echo $usuario;?></h1>
		</div>
		<div class="row">

				<br><a href="vistas/buscarmascota.php" id="buscamas" class="btn btn-primary btn-lg" data-toggle="modal">Buscar Mascota</a>
			</div>

		</div>
		<div class="row">
            <div class="col-lg-6 text-center">
            <h3>Nuevas mascotas disponibles</h3>
			<?php

			$query = "SELECT * FROM mascota WHERE disp_adop='2' order by id_mascota DESC ";
			$resultado=mysqli_query($conexion,$query) or die(mysqli_error($conexion));
			$contador=0; //cuenta el numero de mascotas

			echo "<table><tr>";
			while ($fila = mysqli_fetch_array($resultado)) {

					echo "<td>";
					echo "<img class='img-circle' style='width: 200px; height: 200px' src='/pag/vistas/foto_mascota/$fila[foto]'<br><br>";
					echo "$fila[nombre] <br>";

					$contador++;

					if ($contador>2) {
						break;
					}
			}
			echo "</tr></table>";
			?>
			</div>

			<div class="col-lg-6 text-center">
				<h3>Nuevas parejas</h3>
			<?php

			$query = "SELECT * FROM mascota WHERE disp_rep='2' order by id_mascota DESC ";
			$resultado=mysqli_query($conexion,$query) or die(mysqli_error($conexion));
			$contador=0; //cuenta el numero de mascotas

			echo "<table><tr>";
			while ($fila = mysqli_fetch_array($resultado)) {

					echo "<td>";
					echo "<img class='img-circle' style='width: 200px; height: 200px' src='/pag/vistas/foto_mascota/$fila[foto]'<br><br>";
					echo "$fila[nombre] <br>";

					$contador++;

					if ($contador>1) {
						break;
					}
			}
			echo "</tr></table>";
			?>
			</div>
		</div>
			<!--<div class="row">
			<div class="col-lg-9"><h2>Servicios</h2></div>
			</div>
		    <div class="row">
		        <div class="col-lg-3 text-center">

			</div>
		 </div>
		 <div class="col-lg-3">
            <div class="custolgiv">
				<h2>Promociones</h2>
                </div>
            /sidebar-nav-fixed -->
        </div>
	</div>
</div>
	<?php include('estructura/footer.php'); ?>
</body>
</html>
