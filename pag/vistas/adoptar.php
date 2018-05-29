<?php

  include("../../conexionbd/abrir_conexion.php"); 



  //Iniciar Sesión
  session_start();

  if (!$_SESSION){
  header("location:../../index.php"); 
}
  $id_usuario= $_SESSION['id_usuario'];

  $emisor = $_POST['emisor'];
  $receptor= $_SESSION['id_usuario'];
  $mascota = $_POST['mascota'];
  $tipo = $_POST['tipo']; // Con este sabremos si hablamos de Adopción o Reproducción 
  $mascotaemisor = $_POST['mascotaemisor'];

$query = "SELECT * FROM usuarios WHERE id='$id_usuario'";
      $resultado=mysqli_query($conexion,$query) or die(mysqli_error($conexion));
      $contador=0; //cuenta el numero de mascotas

      echo "<table><tr>";
      while ($fila = mysqli_fetch_array($resultado)) {
      $nombre=$fila['nombre'];
      $apepat=$fila['apepat'];
      $apemat=$fila['apemat'];
      }


  echo $nombre;

  $conexion->query("INSERT INTO $tablanot (emisor,nombre,apepat,apemat,receptor,tipo,mascota,mascotaemisor) values ('$receptor','$nombre','$apepat','$apemat','$emisor','$tipo','$mascota','$mascotaemisor')"); 

  header("location:http://localhost/Petto/pag/vistas/mismascotas.php");
 

  
?>