<?php

  include("../../conexionbd/abrir_conexion.php"); 


	//Iniciar Sesión
	session_start();
	if (!$_SESSION){
		header("location:../../index.php");	
	}

	$id_usuario= $_SESSION['id_usuario'];

	$correo =$_POST['correo'];
	$mascota =$_POST['id_mascota'];

	$consulta8="SELECT id FROM usuarios WHERE correo='$correo'";
	$resultado8=mysqli_query($conexion,$consulta8) or die(mysqli_error($conexion));
	$resultado8_obtenido=mysqli_fetch_array($resultado8);
	$duenionuevo= $resultado8_obtenido['id'];



//Transferimos mascota a nuevo dueño
	$sql = "UPDATE $tablamas SET id='2' WHERE id_mascota=$mascota";
				if(mysqli_query($conexion, $sql)){
				    echo "Records were updated successfully.";
				} else {
				    echo "ERROR: Could not able to execute $sql. " . mysqli_error($conexion);
				}

	header("location:http://localhost/pag/vistas/mismascotas.php");

?>

<!-- 
TRANSFERIR MASCOTA (Va en mismascotas.php, acompletar)
				<tr><td><form action='transferirmascota.php' role='form' name='frm_transfer' method='post'>
				<input class='form-control' type='text' name='correo' id='correo' />
				<input class='form-control' type='hidden' name='mascota_id' id='mascota_id' value='$fila[id_mascota]' />
				<input class='btn btn-xl' name='Submit' type='submit' value='Cambiar dueño'>
				</td></tr></form>
				</table>"; -->