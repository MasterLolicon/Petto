<?php

  include("../../conexionbd/abrir_conexion.php"); 


//Iniciar Sesión
session_start();

//Validar si se está ingresando con sesión correctamente
if (!$_SESSION){
	header("location:../../index.php");	
}
	
$id_usuario= $_SESSION['id_usuario'];
	$contacto=$_POST["contacto"];
	$deci = $_POST['lilo'];
	$latitud= $_POST['lati'];
	$longitud= $_POST['longi'];
	
	$sql = "UPDATE servicio SET latitud='$latitud',longitud='$longitud' WHERE contacto='$contacto'";
			if(mysqli_query($conexion, $sql)){
			    echo "Records were updated successfully.";
			} else {
			    echo "ERROR: Could not able to execute $sql. " . mysqli_error($conexion);
			}
			header("location:servicios.php");
	?>
		