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
				<h1>Notificaciones</h1>
			</div>
		</div>

		<div class="row">


		<?php 
			include($_SERVER['DOCUMENT_ROOT']."/conexionbd/abrir_conexion.php"); 

			//Iniciar Sesión
			session_start();


			$consulta="SELECT correo FROM $tablaus WHERE id='$id_usuario'";
			$resultado=mysqli_query($conexion,$consulta) or die(mysqli_error($conexion));
			$resultado_obtenido=mysqli_fetch_array($resultado);
			$correorec= $resultado_obtenido['correo'];



			$query = "SELECT * FROM notificacion WHERE receptor='$id_usuario'";
			$resultado=mysqli_query($conexion,$query) or die(mysqli_error($conexion));
			$contador=0; //cuenta el numero de mascotas

			echo "<table><tr>";
			while ($fila = mysqli_fetch_array($resultado)) {


					//nombre mascota
					$consulta5="SELECT nombre FROM $tablamas WHERE id_mascota='$fila[mascota]'";
					$resultado5=mysqli_query($conexion,$consulta5) or die(mysqli_error($conexion));
					$resultado5_obtenido=mysqli_fetch_array($resultado5);
					$mascota= $resultado5_obtenido['nombre'];

					$consulta6="SELECT disp_adop FROM $tablamas WHERE id_mascota='$fila[mascota]'";
					$resultado6=mysqli_query($conexion,$consulta6) or die(mysqli_error($conexion));
					$resultado6_obtenido=mysqli_fetch_array($resultado6);
					$dispadop= $resultado6_obtenido['disp_adop'];

					$consulta7="SELECT nombre FROM $tablamas WHERE id_mascota='$fila[mascotaemisor]'";
					$resultado7=mysqli_query($conexion,$consulta7) or die(mysqli_error($conexion));
					$resultado7_obtenido=mysqli_fetch_array($resultado7);
					$masemisor= $resultado7_obtenido['nombre'];

					$consulta8="SELECT disp_rep FROM $tablamas WHERE id_mascota='$fila[mascota]'";
					$resultado8=mysqli_query($conexion,$consulta8) or die(mysqli_error($conexion));
					$resultado8_obtenido=mysqli_fetch_array($resultado8);
					$disprep= $resultado8_obtenido['disp_rep'];

					echo "<td>";
					echo "El usuario $fila[nombre] $fila[apepat] $fila[apemat] <br>Ha solicitado para";
					if ($fila[tipo]==1) {
						echo " adopción";
						echo "<br>A tu mascota $mascota";
						if ($dispadop==2) {
							echo "<form action='aceptarnotificacion.php' role='form' name='frm_ingreso' method='post'>
								<input class='form-control' type='hidden' name='mascota' id='mascota' value='$fila[mascota]' />
								<input class='form-control' type='hidden' name='receptor' id='receptor' value='$fila[emisor]' />
								<input class='form-control' type='hidden' name='tipotra' id='tipotra' value='1' />
								<input class='btn btn-xl' name='Submit' type='submit' value='Aceptar'>
								</form>";
							echo "</td>";
							}
						elseif ($dispadop==1) {
							echo "<br>Mascota ya no disponible";
						}

					}

					elseif ($fila[tipo]==2) {
						echo " pareja";
						echo "<br>A tu mascota $mascota";
						echo ", su mascota es $masemisor";
						echo "<form action='perfilmuestramascota.php' role='form' name='frm_ingreso' method='post'>
						<input class='form-control' type='hidden' name='id_mascota' id='id_mascota' value='$fila[mascotaemisor]' />
						<input class='btn btn-xl' name='submit' type='submit' value='Ver perfil'>
						</form>";

						if ($disprep==2) {
							echo "<form action='aceptarnotificacion.php' role='form' name='frm_ingreso' method='post'>
								<input class='form-control' type='hidden' name='mascota' id='mascota' value='$fila[mascota]' />
								<input class='form-control' type='hidden' name='receptor' id='receptor' value='$fila[emisor]' />
								<input class='form-control' type='hidden' name='tipotra' id='tipotra' value='2' />
								<input class='btn btn-xl' name='Submit' type='submit' value='Aceptar'>
								</form>";
							echo "</td>";
							}
						elseif ($disprep==1) {
							echo "<br>Mascota ya no disponible para reproduccion";
						}
					}
	

					$contador++;
			}echo "</tr></table>";
			if ($contador==1) {
				echo "<br>1 Notificación";
			}
			elseif ($contador>1) {
				echo "<br>$contador Notificaciones";
			}
			
			?>
		</div>	

		<div class="row">
			<div class="col-md-3">
				<h3>Aceptado</h3>
			</div>
		</div>		
		<div class="row">

		<?php 
			include($_SERVER['DOCUMENT_ROOT']."/conexionbd/abrir_conexion.php"); 

			//Iniciar Sesión
			session_start();


			$query = "SELECT * FROM $tablaaceptarnot WHERE receptor='$id_usuario'";
			$resultado=mysqli_query($conexion,$query) or die(mysqli_error($conexion));
			$contador=0; //cuenta el numero de mascotas

			echo "<table><tr>";
			while ($fila = mysqli_fetch_array($resultado)) {

					//nombre usuario

					$consulta6="SELECT nombre FROM $tablaus WHERE id='$fila[emisor]'";
					$resultado6=mysqli_query($conexion,$consulta6) or die(mysqli_error($conexion));
					$resultado6_obtenido=mysqli_fetch_array($resultado6);
					$nombreus= $resultado6_obtenido['nombre'];


					echo "<td>";
					echo "El usuario $nombreus Ha a aceptado tu solicitud para su mascota $fila[mascota]<br>";
					echo "Contactate con el: $fila[correo]";

					$contador++;
			}echo "</tr></table>";

			if ($contador==1) {
				echo "<br>1 Notificación";
			}
			elseif ($contador>1) {
				echo "<br>$contador Notificaciones";
			}
			
			
			?>
		</div>	
		<div class="row"><p>&nbsp;</p></div>			
		<div class="row"><p>&nbsp;</p></div>
	</div>
	<?php include('../estructura/footer.php'); ?>

</body>
</html>
