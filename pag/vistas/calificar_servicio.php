<?php

  include("../../conexionbd/abrir_conexion.php"); 


//Iniciar Sesión
session_start();

//Validar si se está ingresando con sesión correctamente
if (!$_SESSION){
	header("location:../../index.php");
}

	$id_usuario= $_SESSION['id_usuario'];
	$servicio = $_POST['servicio'];
	$calif = $_POST['calif'];

	
		$query = mysqli_query($conexion, "SELECT cal FROM usuario_califica_servicio WHERE id_usuario = '$id_usuario' AND id_servicio = '$servicio'");

		if(mysqli_num_rows($query) > 0){

			$conexion->query("UPDATE usuario_califica_servicio SET cal='$calif' WHERE id_usuario='$id_usuario' AND id_servicio='$servicio'");

		}
		else{
		    $conexion->query("INSERT INTO usuario_califica_servicio (id_usuario,id_servicio,cal) values ('$id_usuario','$servicio','$calif')"); 
		}



	$query2 = "SELECT * FROM usuario_califica_servicio WHERE id_servicio='$servicio'";
			$resultado=mysqli_query($conexion,$query2) or die(mysqli_error($conexion));

			$promedio = 0;
			$contador = 0; //cuenta el numero de mascotas
			$actual = 0;
		
			while ($fila = mysqli_fetch_array($resultado)) {

				$actual=$fila[cal]+$actual;
				$contador++;
				
			}

			$promedio=($actual/$contador);
			echo "$actual<br><br>$contador<br><br>Promedio: $promedio";
		
			$conexion->query("UPDATE servicio SET promcal='$promedio' WHERE id_servicio='$servicio'");

			header("location:http://localhost/Petto/pag/vistas/servicios.php");

	mysql_close($conexion); 

	
?>