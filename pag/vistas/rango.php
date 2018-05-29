<?php
  include("../../conexionbd/abrir_conexion.php"); 


if (!$_SESSION){
  header("location:../../index.php");
}

session_start();
  $id_usuario= $_SESSION['id_usuario'];
  $latUsuario = mysql_query('SELECT latitud FROM ubicacion WHERE id='+$id_usuario);
  $lonUsuario = mysql_query('SELECT longitud FROM ubicacion WHERE id='+$id_usuario);
  $latServPet = mysql_query('SELECT latitud FROM servicio'); //Si es mascota cambiar
  $lonServPet = mysql_query('SELECT longitud FROM servicio'); //Si es mascota cambiar
  $j = mysql_query('SELECT count(*) FROM servicio'); //Si es mascota cambiar
  $lat=mysql_result($latUsuario, 0); //Poner aqui la latitud del usuario
  $lon=mysql_result($lonUsuario, 0); //Poner aqui la longitud del usuario
  for ($i = 0; $i <= $j; $i++) {
    $lat0=mysql_result($latServPet, $i); //Poner aqui la latitud del servicio/mascota
    $lon0=mysql_result($lonServPet, $i); //Poner aqui la longitud del servicio/mascota
    $rlat=0.0;
    $rlon=0.0;
    $rlat0=0.0;
    $rlon0=0.0;
    $dlat=0.0;
    $dlon=0.0;
    $ra=10.0;
    define("PI", 3.14159265359);
    define("R", 6371);
    $rlat = $lat * (PI/180);
    $rlon = $lon * (PI/180);
    $rlat0 = $lat0 * (PI/180);
    $rlon0 = $lon0 * (PI/180);
    $dlat=$lat0-$lat;
    $dlon=$lon0-$lon;
    $a = (sin($dlat/2)**2 + cos($lat)) * cos($lat0) * sin($dlon/2)**2;
    $c = 2 * atan(sqrt($a) / sqrt (1-$a));
    $d=R*$c;
    echo $d;
    if($d<=$ra){
      //Aqui va todo lo que esta adentro del rango
      echo "Esta adentro";
    }
  }
  ?>
