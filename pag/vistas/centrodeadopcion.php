<?php
//Proceso de conexión con la base de datos
  include("../../conexionbd/abrir_conexion.php"); 

//Iniciar Sesión
session_start();

//Validar si se está ingresando con sesión correctamente
if (!$_SESSION){
	header("location:../../index.php");	
}

?>
<!DOCTYPE html>
<html lang="en">

<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
 <link rel="stylesheet" href="../css/bootstrap.css"/>
 <script type="text/javascript" src="../js/jquery.js"></script>
 <script type="text/javascript" src="../js/popper.min.js"></script>
 <script type="text/javascript" src="../js/bootstrap.js"></script>

<!--barra de navegacion-->
<?php include('../estructura/header.php'); ?>

<!--contenido-->
	<div class="container-fluid">
		<div class="row">
			<h1>Pagina en construcción</h1>
		</div>
		<div class="row">
            <h3>Pagina en construcción</h3>
        </div>

	
	</div>
	<?php include('../estructura/footer.php'); ?>
</body>
</html>
