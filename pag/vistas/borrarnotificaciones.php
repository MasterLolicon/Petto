<?php

  include("../../conexionbd/abrir_conexion.php"); 

  //Iniciar Sesión
  session_start();

  if (!$_SESSION){
  header("location: ../../index.php"); 
  }

  $id_usuario= $_SESSION['id_usuario'];

  $conexion->query("UPDATE mascota SET disp_adop='1' WHERE id_mascota='$id_mascota'");


  $query = "DELETE FROM notificacion WHERE $id_usuario='$id_usuario'";
  $resultado=mysqli_query($conexion,$query) or die(mysqli_error($conexion));

  $query2 = "DELETE FROM aceptarnot WHERE $id_usuario='$id_usuario'";
  $resultado=mysqli_query($conexion,$query2) or die(mysqli_error($conexion));



header("location:http://localhost/Petto/pag/vistas/notificaciones.php");
mysql_close($conexion); 



  
?>