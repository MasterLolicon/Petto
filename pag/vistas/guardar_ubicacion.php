<?php

  include("../../conexionbd/abrir_conexion.php"); 


//Iniciar Sesión
session_start();

//Validar si se está ingresando con sesión correctamente
if (!$_SESSION){
	header("location:../../index.php");
}

$id_usuario= $_SESSION['id_usuario'];

	$deci = $_POST['lilo'];
	$latitud= $_POST['lati'];
	$longitud= $_POST['longi'];
	$sql = "UPDATE usuarios SET latitud='$latitud', longitud='$longitud' WHERE id='$id_usuario'";
	if(mysqli_query($conexion, $sql)){
			    echo "Records were updated successfully.";
			} else {
			    echo "ERROR: Could not able to execute $sql. " . mysqli_error($conexion);
			}

	$sql2 = "UPDATE mascota SET latitud='$latitud', longitud='$longitud' WHERE id='$id_usuario'";
	if(mysqli_query($conexion, $sql2)){
			    echo "Records were updated successfully.";
			} else {
			    echo "ERROR: Could not able to execute $sql. " . mysqli_error($conexion);
			}
		?>

	?>


		<html>
		<head>
		<script type="text/javascript">
		function cerrar_this() {
			opener.window.location.href += "?actualizado=exito";
			opener.window.location.reload();
			self.close(); return false;
			}
		   cerrar_this();
		</script>
		</head>
		</html>

