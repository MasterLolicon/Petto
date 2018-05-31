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
 <link rel="stylesheet" type="text/css" href="../css/paseador.css">
 <script type="text/javascript" src="../js/jquery.js"></script>
 <script type="text/javascript" src="../js/popper.min.js"></script>
 <script type="text/javascript" src="../js/bootstrap.js"></script>

<!--barra de navegacion-->
<?php include('../estructura/header.php'); ?>

<!--contenido-->

	<div class="container-fluid">
		<div class="row">
			<div class="col-md-12" style="margin-top: 60px;background-color: ">
			<?php $mascota =$_POST['mascota'];  
			echo "<h1>Buscar pareja para $mascota</h1>";
			?>
				
			</div>
		</div>

		<div class="row">
			<?php 
			include($_SERVER['DOCUMENT_ROOT']."/conexionbd/abrir_conexion.php"); 

			$sexo = $_POST['sexo'];
			$tipo = $_POST['tipo'];
			$raza = $_POST['raza'];
			$id_mascotaemisor = $_POST['mascota_id'];


			//Varuables de rango

			  $query0 = "SELECT * FROM usuarios WHERE id='$id_usuario'";
			  $res0 = mysqli_query($conexion,$query0) or die(mysqli_error($conexion));
			  $usuario = mysqli_fetch_array($res0);
			  $latitude1=$usuario[latitud]; //Poner aqui la latitud del usuario
			  $longitude1=$usuario[longitud]; //Poner aqui la longitud del usuario
			  define("PI", 3.14159265359);
				define("R", 6371);
			$contador = 0; //cuenta el numero de mascotas

			//Iniciar Sesión
			session_start();
			$id_usuario= $_SESSION['id_usuario'];
			$query = "SELECT * FROM mascota WHERE disp_rep='2' AND sexo!='$sexo' AND tipo='$tipo' AND raza='$raza' order by id_mascota DESC ";
			$resultado=mysqli_query($conexion,$query) or die(mysqli_error($conexion));
			$contador=0; //cuenta el numero de mascotas






			echo "<table><tr>";
			while ($fila = mysqli_fetch_array($resultado)) {


					$latitude2=$fila[latitud]; //Poner aqui la latitud del servicio/mascota
					$longitude2=$fila[longitud]; //Poner aqui la longitud del servicio/mascota

					$earth_radius = 6371;  
	      
					$dLat = deg2rad($latitude2 - $latitude1);  
					$dLon = deg2rad($longitude2 - $longitude1);  
					      
					$a = sin($dLat/2) * sin($dLat/2) + cos(deg2rad($latitude1)) * cos(deg2rad($latitude2)) * sin($dLon/2) * sin($dLon/2);  
					$c = 2 * asin(sqrt($a));  
					$d = $earth_radius * $c;
					$dist = substr($d,0,4);


				if ($fila[id]!=$id_usuario) {
					echo "<td>";
 				echo "<div class='container_avatar img-thumbnail text-center'>";
					echo "<img class='img_avatar img-thumbnail' style='width: 400px; height: 400px' src='foto_mascota/$fila[foto]'>";
 				echo "<div class='middle_avatar' style='width: 90%; max-height: 90%;margin-top: -25px'>";
					echo "<div class='text_avatar'>";
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
					echo "Distancia de ti: $dist KM";
					echo "<form action='adoptar.php' role='form' name='frm_ingreso' method='post'>
					<input class='form-control' type='hidden' name='mascota' id='mascota' value='$fila[id_mascota]' />
					<input class='form-control' type='hidden' name='tipo' id='tipo' value='2' />
					<input class='form-control' type='hidden' name='emisor' id='emisor' value='$fila[id]' />
					<input class='form-control' type='hidden' name='mascotaemisor' id='mascotaemisor' value='$id_mascotaemisor' />
					<input class='btn' style='background-color: #fc92f9' name='Submit' type='submit' value='<3'>
					</form></div></div>$fila[nombre] </td>";
					$contador++;

					if ($contador==4) {
						echo "</tr><tr>";
						$contador = 0;
					}
					
				}
			}
			echo "</tr></table>";
			?>
		</div>	
		<div class="row"><p>&nbsp;</p></div>			
		<div class="row"><p>&nbsp;</p></div>
		<a href="http://localhost/pag/vistas/mismascotas.php" class="btn btn-primary btn-lg" data-toggle="modal">Volver</a>
	</div>
	<?php include('../estructura/footer.php'); ?>

</body>
</html>
