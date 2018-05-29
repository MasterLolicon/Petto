<?php 
	// Parametros a configurar para la conexion de la base de datos 
	$host = "localhost";    // sera el valor de nuestra BD 
	$basededatos = "petto";    // sera el valor de nuestra BD 
	$usuariodb = "root";    // sera el valor de nuestra BD 
	$clavedb = "";    // sera el valor de nuestra BD 

	//Lista de Tablas
	$tablaus = "usuarios"; 		//tabla de usuarios
	$tablaub = "ubicacion";	   // tabla de ubicacion
	$tablaser = "servicio";	   // tabla de servicio
	$tablamas = "mascota";
	$tablanot = "notificacion";
	$tablaaceptarnot = "aceptarnot";

	error_reporting(0); //No me muestra errores
	
	$conexion = new mysqli($host,$usuariodb,$clavedb,$basededatos);


	if ($conexion->connect_errno) {
	    echo "Nuestro sitio experimenta fallos....";
	    exit();
	}

?>