<?php
//Recibimos los datos enviados desde el formulario
$correo= $_POST['correo'];
$contrasenia= $_POST['contrasenia'];

if(isset($correo)){
 
	//Proceso de conexi�n con la base de datos
	include("conexionbd/abrir_conexion.php"); 
	
	//Inicio de variables de sesi�n
	  session_start();
	
	//Consultar si los datos son est�n guardados en la base de datos
	$consulta= "SELECT * FROM usuarios WHERE correo='$correo' AND contrasenia='$contrasenia'"; 
	$resultado= mysqli_query($conexion,$consulta) or die (mysqli_error($conexion));
	$fila=mysqli_fetch_array($resultado);
	
	//OPCI�N 1: Si el usuario NO existe o los datos son INCORRRECTOS
	if (!$fila['id']){ 
		header("location:index.php");	
	}
	//OPCI�N 2: Usuario logueado correctamente
	else{
		//Definimos las variables de sesi�n y redirigimos a la p�gina de usuario
		$_SESSION['id_usuario'] = $fila['id'];
		$_SESSION['nombre'] = $fila['nombre'];
	
		header("Location: pag/inicio.php");
	}
}
else{
	header("location:index.php");	
}
?>