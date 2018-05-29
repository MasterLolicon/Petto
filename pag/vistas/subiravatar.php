<?php

  include("../../conexionbd/abrir_conexion.php"); 


	//Iniciar Sesión
	session_start();

	$id_usuario= $_SESSION['id_usuario'];

	$consulta8="SELECT avatar FROM usuarios WHERE id='$id_usuario'";
	$resultado8=mysqli_query($conexion,$consulta8) or die(mysqli_error($conexion));
	$resultado8_obtenido=mysqli_fetch_array($resultado8);
	$avatar= $resultado8_obtenido['avatar'];


	$nombre_imagen=$_FILES["imagen"]["name"];
	$tipo_imagen=$_FILES["imagen"]["type"];
	$tamagno_imagen=$_FILES["imagen"]["size"];


	//Ruta de la carpeta imagenes
	$carpeta_destino=$_SERVER['DOCUMENT_ROOT']."/pag/vistas/avatars/";

	//Validación del archivo

	if($tamagno_imagen<=3000000){
	if($tipo_imagen=="image/jpeg" || $tipo_imagen=="image/jpg" || $tipo_imagen=="image/png" || $tipo_imagen=="image/gif"){

//Borrando avatar anterior de carpeta
	unlink('avatars/'.$avatar);

	move_uploaded_file($_FILES["imagen"]["tmp_name"],$carpeta_destino.$nombre_imagen);

	}
	else{echo "Formato invalido";}
	}
	else{echo "Tamaño demasiado grande";}


//Asociamos usuario a su avatar
	$sql = "UPDATE $tablaus SET avatar='$nombre_imagen' WHERE id=$id_usuario";
				if(mysqli_query($conexion, $sql)){
				    echo "Records were updated successfully.";
				} else {
				    echo "ERROR: Could not able to execute $sql. " . mysqli_error($conexion);
				}

	header("location:http://localhost/pag/vistas/perfil.php");	

?>