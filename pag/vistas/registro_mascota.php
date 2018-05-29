<?php
  include("../../conexionbd/abrir_conexion.php"); 

if (!$_SESSION){
	header("location:../../index.php");	
}

session_start();
	$id_usuario= $_SESSION['id_usuario'];
//
	$nombre= $_POST['nombre'];
	$tipo= $_POST['tipo'];
	$raza= $_POST['raza'];
	$edad= $_POST['edad'];
	$sexo= $_POST['sexo'];
//variables imagen
	$nombre_imagen=$_FILES["imagen"]["name"];
	$tipo_imagen=$_FILES["imagen"]["type"];
	$tamagno_imagen=$_FILES["imagen"]["size"];


	//Ruta de la carpeta imagenes
	$carpeta_destino=$_SERVER['DOCUMENT_ROOT']."/pag/vistas/foto_mascota/";

	//Validación del archivo

	if($tamagno_imagen<=3000000){
	if($tipo_imagen=="image/jpeg" || $tipo_imagen=="image/jpg" || $tipo_imagen=="image/png" || $tipo_imagen=="image/gif"){

	move_uploaded_file($_FILES["imagen"]["tmp_name"],$carpeta_destino.$nombre_imagen);
	}
	else{echo "Formato invalidosdfs";}
	}
	else{echo "Tamaño demasiado grande";}


//variables de usuario

	$consulta5="SELECT id_ubicacion FROM usuarios WHERE id='$id_usuario'";
	$resultado5=mysqli_query($conexion,$consulta5) or die(mysqli_error($conexion));
	$resultado5_obtenido=mysqli_fetch_array($resultado5);
	$ubicacion= $resultado5_obtenido['id_ubicacion'];

//Registro en BD
	$conexion->query("INSERT INTO $tablamas (nombre,tipo,raza,edad,sexo,foto,id_ubicacion,id) values ('$nombre','$tipo','$raza','$edad','$sexo','$nombre_imagen','$ubicacion','$id_usuario')"); 


	header("location:http://localhost/Petto/pag/vistas/mismascotas.php");
	mysql_close($conexion); 


?>