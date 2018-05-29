<?php 
session_start();

if($_SESSION['nombre']){	
	session_destroy();
	header("location: http://localhost/Petto/index.php");
}
else{
	header("location: http://localhost/Petto/index.php");
}
?>
