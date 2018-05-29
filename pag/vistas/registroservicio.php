<?php
  include("../../conexionbd/abrir_conexion.php"); 


if (!$_SESSION){
	header("location:../../index.php");	
}

session_start();

	$nombre= $_POST['nombre'];
	$descripcion= $_POST['descripcion'];
	$tipo= $_POST['tipo'];
	$foto= $_POST['foto'];
	$contacto= $_POST['contacto'];

// variables imagen
	$nombre_foto=$_FILES["foto"]["name"];
	$tipo_foto=$_FILES["foto"]["type"];
	$tamagno_foto=$_FILES["foto"]["size"];


	//Ruta de la carpeta fotoes
	$carpeta_destino=$_SERVER['DOCUMENT_ROOT']."/pag/vistas/foto_servicio/";

	//Validación del archivo

	if($tamagno_foto<=3000000){
	if($tipo_foto=="image/jpeg" || $tipo_foto=="image/jpg" || $tipo_foto=="image/png" || $tipo_foto=="image/gif"){

	move_uploaded_file($_FILES["foto"]["tmp_name"],$carpeta_destino.$nombre_foto);
	}
	else{echo "Formato invalidosdfs";}
	}
	else{echo "Tamaño demasiado grande";}

	$conexion->query("INSERT INTO $tablaser (nombre,descripcion,tipo,foto,contacto) values ('$nombre','$descripcion','$tipo','$nombre_foto','$contacto')"); 
	
	header("location:ubicacionservicio.php?contacto=$contacto");
	
	mysql_close($conexion); 


?>