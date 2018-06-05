<?php

  include("../../conexionbd/abrir_conexion.php"); 

  //Iniciar Sesión
  session_start();

  if (!$_SESSION){
  header("location: ../../index.php"); 
  }

  $id_usuario= $_SESSION['id_usuario'];

  $emisor= $_SESSION['id_usuario'];
  $receptor = $_POST['receptor'];
  $id_mascota = $_POST['mascota'];
  $tipito = $_POST['tipotra'];

  $consulta2="SELECT correo FROM usuarios WHERE id='$id_usuario'";
  $resultado2=mysqli_query($conexion,$consulta2) or die(mysqli_error($conexion));
  $resultado2_obtenido=mysqli_fetch_array($resultado2);
  $correo= $resultado2_obtenido['correo'];

  $consulta="SELECT nombre FROM mascota WHERE id_mascota='$id_mascota'";
  $resultado=mysqli_query($conexion,$consulta) or die(mysqli_error($conexion));
  $resultado_obtenido=mysqli_fetch_array($resultado);
  $nombremas= $resultado_obtenido['nombre'];

  if ($tipito==1) {
  $conexion->query("UPDATE mascota SET disp_adop='1' WHERE id_mascota='$id_mascota'");

  $conexion->query("UPDATE servicio SET promcal='$promedio' WHERE id_servicio='$servicio'");
  }

  if ($tipito==2) {
  $conexion->query("UPDATE mascota SET disp_rep='1' WHERE id_mascota='$id_mascota'");
  }

  $query = "DELETE FROM notificacion WHERE receptor='$id_usuario' AND emisor='$receptor'";
  $resultado=mysqli_query($conexion,$query) or die(mysqli_error($conexion));

  $conexion->query("INSERT INTO $tablaaceptarnot (emisor,receptor,id_mascota,mascota,correo,estado) values ('$emisor','$receptor','$id_mascota','$nombremas','$correo','2')"); 







header("location:http://localhost/Petto/pag/vistas/notificaciones.php");
mysql_close($conexion); 



  
?>