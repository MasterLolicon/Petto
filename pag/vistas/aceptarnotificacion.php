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

  $consulta="SELECT nombre FROM $tablamas WHERE id_mascota='$id_mascota'";
  $resultado=mysqli_query($conexion,$consulta) or die(mysqli_error($conexion));
  $resultado_obtenido=mysqli_fetch_array($resultado);
  $nombremas= $resultado_obtenido['nombre'];

  $consulta2="SELECT correo FROM usuarios WHERE id='$id_usuario'";
  $resultado2=mysqli_query($conexion,$consulta2) or die(mysqli_error($conexion));
  $resultado2_obtenido=mysqli_fetch_array($resultado2);
  $correo= $resultado2_obtenido['correo'];


  $conexion->query("INSERT INTO $tablaaceptarnot (emisor,receptor,id_mascota,mascota,correo,estado) values ('$emisor','$receptor','$id_mascota','$nombremas','$correo','2')"); 

  if ($tipito==1) {
  $sql = "UPDATE $tablamas SET disp_adop='1' WHERE id_mascota=$id_mascota";
  }

elseif ($tipito==2) {
  $sql = "UPDATE $tablamas SET disp_rep='1' WHERE id_mascota=$id_mascota";

  }


  //$sql2 = "DELETE FROM notificacion WHERE id_notificacion=$id_mascota";
   //   if(mysqli_query($conexion, $sql2)){
    //      echo "Records were updated successfully.";
   //   } else {
  //        echo "ERROR: Could not able to execute $sql. " . mysqli_error($conexion);
//      }
//DELETE FROM table_name
//WHERE some_column=some_value;
    header("location:http://localhost/Petto/pag/vistas/notificaciones.php");
    mysql_close($conexion); 



  
?>