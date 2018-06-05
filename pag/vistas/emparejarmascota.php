<?php
//Proceso de conexión con la base de datos
include("../../conexionbd/abrir_conexion.php"); 

//Iniciar Sesión
session_start();
$id_usuario= $_SESSION['id_usuario'];
//Validar si se está ingresando con sesión correctamente
if (!$_SESSION){
	header("location: http://localhost/Petto/index.php");
}


?>
<!DOCTYPE html>
<html lang="es">
<meta name="viewport" content="width=device-width, initial-scale=1">

<?php include('../estructura/header.php'); ?>
 <link rel="stylesheet" href="../css/bootstrap.css"/>
 <link rel="stylesheet" type="text/css" href="../css/paseador.css">
 <script type="text/javascript" src="../js/jquery.js"></script>
 <script type="text/javascript" src="../js/popper.min.js"></script>
 <script type="text/javascript" src="../js/bootstrap.js"></script>

<!--contenido-->
<body style="background-color: #EBEFF0;">
	<div class="container-fluid">
		<div class="row" style="margin-top: 80px; background-color: #F06292; color: #FFFFFF">
			<div class="col-md-8" >
				<h1 style="font-family: Impact">Mascotas disponibles para emparejar</h1>
				<h4 style="font-family: Courier">Busca al compañero ideal para tu mascota</h4>
				<!--CAMBIAR POR BOTON-->
			</div>
			<div class="col-md-4" >
				<p>Para buscar pareja a otras mascotas, cambia su estado en <a href="mismascotas.php" style="color: #e5ff00">Mis Mascotas</a></p>
			</div>
		</div>

		<div class="container-fluid" style="margin-top: -20px; margin-left: ">
			<?php 
			include($_SERVER['DOCUMENT_ROOT']."/conexionbd/abrir_conexion.php"); 

			//Iniciar Sesión
			session_start();
			$id_usuario= $_SESSION['id_usuario'];
			$query = "SELECT * FROM mascota WHERE id='$id_usuario' AND  disp_rep='2'";
			$resultado=mysqli_query($conexion,$query) or die(mysqli_error($conexion));

			$contador = 0; //cuenta el numero de mascotas

			//echo "<table><tr>";
			while ($fila = mysqli_fetch_array($resultado)) {

				//echo "<td>";
				echo "<div class='container_avatar img-thumbnail text-center' style='background-image: url(foto_mascota/$fila[foto]);background-size: cover; width: 200px;height:200px'>";
				//echo "<img class='img_avatar img-thumbnail' style='width: 400px; height: 400px' src='foto_mascota/$fila[foto]'>";
				echo "<div class='middle_avatar' style='width: 90%; max-height: 90%;margin-top: -5px;'>";
				echo "<div class='text_avatar' style='opacity: 0.75'>";


				echo "<form action='buscarpareja.php' role='form' name='frm_ingreso' method='post'>
				<input class='form-control' type='hidden' name='mascota' id='mascota' value='$fila[nombre]' />
				<input class='form-control' type='hidden' name='mascota_id' id='mascota_id' value='$fila[id_mascota]' />
				<input class='form-control' type='hidden' name='sexo' id='sexo' value='$fila[sexo]' />
				<input class='form-control' type='hidden' name='tipo' id='tipo' value='$fila[tipo]' />
				<input class='form-control' type='hidden' name='raza' id='raza' value='$fila[raza]' />

				
			 	<input class='btn' style='background-color: #ff84fc' name='Submit' type='submit' value='Buscar pareja'>
			 	</form><br>";

				echo "<form action='disprep.php' role='form' name='frm_ingreso' method='post'>
				<input class='form-control' type='hidden' name='mascota' id='mascota' value='$fila[id_mascota]' />
				<input class='btn btn-primary' name='Submit' type='submit' value='Cambiar Estado'>
				</form>&nbsp;&nbsp;";


			 	
				echo "</div></div><a class='btn btn-info'>$fila[nombre]</a></div>";

				$contador++;


				/*if ($contador==4) {
					echo "</tr><tr>";
					$contador = 0;
				}*/
			}
			//echo "</tr></table>";
			?>
		</div>

<!--		<div class="row">
            <div class="col-md-2">
                <div class="customDiv">
					<div class="card" style="width: 120px;">
  						<img class="card-img-top" src="../img/1.jpg" alt="Juancho">
  							 <div class="card-block">
    							<h4 class="card-title">Juancho</h4>
    							<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    							<a href="#" class="btn btn-primary">Vamos!</a>
  							</div>
					</div>
                </div>
            </div>
						<br><br>
		</div> 
		-->
			<br><br>

		        <div><p><h1>&nbsp;</h1></p></div>
	

<script language="javascript" type="text/javascript">
	function cambiotipo(selectTag){
	 if(selectTag.value == '1'){
	document.getElementById('perro').disabled = false;
	 }else{
	 document.getElementById('perro').disabled = true;
	 }
	 if(selectTag.value == '2'){
	document.getElementById('gato').disabled = false;
	 }else{
	 document.getElementById('gato').disabled = true;
	 }
	}
</script> 




	</div>
	<?php include('../estructura/footer.php'); ?>

</body>
</html>
