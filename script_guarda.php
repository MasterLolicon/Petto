<?php

include("conexionbd/abrir_conexion.php"); 
//
	$nombre= $_POST['nombre'];
	$apepat= $_POST['apepat'];
	$apemat= $_POST['apemat'];
	$usuario= $_POST['usuario'];
	$correo= $_POST['correo'];
	$contrasenia= $_POST['contrasenia'];
	$ubicacion= $_POST['ubicacion'];

	$conexion->query("INSERT INTO $tablaus (nombre,apepat,apemat,usuario,correo,contrasenia,id_ubicacion) values ('$nombre','$apepat','$apemat','$usuario','$correo','$contrasenia','$ubicacion')"); 

	mysql_close($conexion); 
	header("location:index.php#iniciosesion");

?>