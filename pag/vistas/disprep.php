<?php

include("../../conexionbd/abrir_conexion.php"); 

  $mascotaid = $_POST['mascota'];

  //Iniciar Sesión
  session_start();

  $id_usuario= $_SESSION['id_usuario'];

  $consulta8="SELECT disp_rep FROM $tablamas WHERE id_mascota='$mascotaid'";
  $resultado8=mysqli_query($conexion,$consulta8) or die(mysqli_error($conexion));
  $resultado8_obtenido=mysqli_fetch_array($resultado8);
  $disp_rep= $resultado8_obtenido['disp_rep'];

  $act= '0';

  if ($disp_rep=='1') {
    $act='2';
  }
  elseif ($disp_rep=='2') {
    $act='1';
  }


  $sql = "UPDATE $tablamas SET disp_rep='$act' WHERE id_mascota= '$mascotaid'";
        if(mysqli_query($conexion, $sql)){
            echo "Records were updated successfully.";
        } else {
            echo "ERROR: Could not able to execute $sql. " . mysqli_error($conexion);
        }

  header("location:http://localhost/Petto/pag/vistas/mismascotas.php");  

?>