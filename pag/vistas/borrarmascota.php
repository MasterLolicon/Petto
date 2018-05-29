<?php

include("../../conexionbd/abrir_conexion.php"); 

  //Iniciar Sesión
  session_start();

  $id_usuario= $_SESSION['id_usuario'];
  $mascota = $_POST['mascota'];


  $sql = "DELETE FROM mascota WHERE id_mascota='$mascota'";
        if(mysqli_query($conexion, $sql)){
            echo "Records were updated successfully.";
        } else {
            echo "ERROR: Could not able to execute $sql. " . mysqli_error($conexion);
        }

  header("location:http://localhost/Petto/pag/vistas/mismascotas.php");  

?>