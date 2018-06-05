<?php
//Proceso de conexión con la base de datos
include("../conexionbd/abrir_conexion.php");
//Iniciar Sesión
session_start();
//Validar si se está ingresando con sesión correctamente
if (!$_SESSION){
	header("location: /");
}else{
	$id_usuario= $_SESSION['id_usuario'];
	$consulta="SELECT usuario FROM usuarios WHERE id='$id_usuario'";
	$resultado=mysqli_query($conexion,$consulta) or die(mysqli_error($conexion));
	$resultado_obtenido=mysqli_fetch_array($resultado);
	$usuario= $resultado_obtenido['usuario'];
}

?>
<!DOCTYPE html>
<html lang="en">
<!-- head y barra de navegacion-->
<?php include('./estructura/header_index.php'); ?>


<body style="background-color: #F8FCFD">
<!--contenido-->
	<div class="container-fluid" style="margin-top: 100px">
		<div class="jumbtron text-center" style="color: #7f8c8d; justify-content: center">
		<h1 class="display-3" style="font-family: impact">Bienvenido <?php echo $usuario;?> <div style="width: 100px; height: 100px; background-image: url(../img/bienv.jpg); background-size: cover; display: inline-block;"></div>
  </div></h1>

  </div>
		<div class="row" style="margin-top: 60px; background-color:#bdc3c7; background-size: 100% 100%; background-repeat: no-repeat;" >
            <div class="col-lg-6" >
            <div class="text-center" style="background-color: rgba(176, 184, 196,0.8)"><h3 style="font-size: 35px; font-family: Arial-black" >Nuevas mascotas disponibles</h3></div>
			<?php

			$query = "SELECT * FROM mascota WHERE disp_adop='2' order by id_mascota DESC ";
			$resultado=mysqli_query($conexion,$query) or die(mysqli_error($conexion));
			$contador=0; //cuenta el numero de mascotas

			echo "<table><tr>";
			while ($fila = mysqli_fetch_array($resultado)) {

					/*echo "<td>";
					echo "<img class='img-circle' style='width: 200px; height: 200px' src='vistas/foto_mascota/$fila[foto]'<br><br>";
					echo "$fila[nombre] <br>";
*/

 echo "<div class='container_avatar rounded-circle' style='width: 200px;height:200px'>";
  echo "<img src='vistas/foto_mascota/$fila[foto]' alt='Avatar' class='image_avatar rounded-circle' style='width:100%;height:100%; background-size: cover'>";
  echo "<div class='middle_avatar' style='max-width: 50%; max-height: 50%;'>";
    echo "<div class='text_avatar' style='font-size: 150%'>$fila[nombre] <br>";
  echo "</div>";
echo "</div>";
echo "</div>";

					$contador++;

					if ($contador>2) {
						break;
					}
			}
			echo "</tr></table>";
			?>
			</div>

			<div class="col-lg-6 text-center">
				<div style="background-color: rgba(176, 184, 196,0.8)"><h3 style="font-size: 35px;"><h3 style="font-size: 35px; font-family: Arial-black">Nuevas parejas</h3></div>
			<?php

			$query = "SELECT * FROM mascota WHERE disp_rep='2' order by id_mascota DESC ";
			$resultado=mysqli_query($conexion,$query) or die(mysqli_error($conexion));
			$contador=0; //cuenta el numero de mascotas

			echo "<table><tr>";
			while ($fila = mysqli_fetch_array($resultado)) {

					echo "<div class='container_avatar rounded-circle' style='width: 200px;height:200px'>";
     echo "<img src='vistas/foto_mascota/$fila[foto]' alt='Avatar' class='image_avatar rounded-circle' style='width:100%;height:100%; background-size: cover'>";
     echo "<div class='middle_avatar' style='max-width: 50%; max-height: 50%;'>";
     echo "<div class='text_avatar' style='font-size: 150%'>$fila[nombre] <br>";
     echo "</div>";
     echo "</div>";
     echo "</div>";

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
	<?php include('./estructura/footer.php'); ?>
</body>
</html>
