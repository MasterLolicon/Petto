<?php
//Proceso de conexión con la base de datos
include("../../conexionbd/abrir_conexion.php");

//Iniciar Sesión
session_start();

$id_usuario= $_SESSION['id_usuario'];


//Validar si se está ingresando con sesión correctamente
if (!$_SESSION){
	header("location:../../index.php");
}

$id_usuario= $_SESSION['id_usuario'];

$consulta="SELECT usuario FROM usuarios WHERE id='$id_usuario'";
$resultado=mysqli_query($conexion,$consulta) or die(mysqli_error($conexion));
$resultado_obtenido=mysqli_fetch_array($resultado);
$usuario= $resultado_obtenido['usuario'];

$consulta2="SELECT correo FROM usuarios WHERE id='$id_usuario'";
$resultado2=mysqli_query($conexion,$consulta2) or die(mysqli_error($conexion));
$resultado2_obtenido=mysqli_fetch_array($resultado2);
$correo= $resultado2_obtenido['correo'];

$consulta3="SELECT apepat FROM usuarios WHERE id='$id_usuario'";
$resultado3=mysqli_query($conexion,$consulta3) or die(mysqli_error($conexion));
$resultado3_obtenido=mysqli_fetch_array($resultado3);
$apepat= $resultado3_obtenido['apepat'];

$consulta4="SELECT apemat FROM usuarios WHERE id='$id_usuario'";
$resultado4=mysqli_query($conexion,$consulta4) or die(mysqli_error($conexion));
$resultado4_obtenido=mysqli_fetch_array($resultado4);
$apemat= $resultado4_obtenido['apemat'];

$consulta6="SELECT longitud FROM usuarios WHERE id='$id_usuario'";
$resultado6=mysqli_query($conexion,$consulta6) or die(mysqli_error($conexion));
$resultado6_obtenido=mysqli_fetch_array($resultado6);
$longitud= $resultado6_obtenido[longitud];

$consulta7="SELECT latitud FROM usuarios WHERE id='$id_usuario'";
$resultado7=mysqli_query($conexion,$consulta7) or die(mysqli_error($conexion));
$resultado7_obtenido=mysqli_fetch_array($resultado7);
$latitud= $resultado7_obtenido[latitud];

$consulta8="SELECT avatar FROM usuarios WHERE id='$id_usuario'";
$resultado8=mysqli_query($conexion,$consulta8) or die(mysqli_error($conexion));
$resultado8_obtenido=mysqli_fetch_array($resultado8);
$avatar= $resultado8_obtenido['avatar'];



?>
<!DOCTYPE html>
<html lang="en">
<head>
 
<script src="//maps.googleapis.com/maps/api/js?key=AIzaSyAzAh8rjxQ-nuIprPl5SA2B3wex9YXKAEI " async="" defer="defer" type="text/javascript"></script>
</head>

<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
 <link rel="stylesheet" href="../css/bootstrap.css"/>
 <script type="text/javascript" src="../js/jquery.js"></script>
 <script type="text/javascript" src="../js/popper.min.js"></script>
 <script type="text/javascript" src="../js/bootstrap.js"></script>

<!--barra de navegacion-->
<?php include('../estructura/header.php'); ?>

<!--contenido-->

	<div class="container-fluid" style="padding-top: 60px">
		<div class="row">
            <div class="col-md-6">
									<h2>Datos personales</h2><br>
									<div class="well">
		                <ul>
		                	<li><h4><?php echo "Nombre: ", $_SESSION['nombre']," " ,$apepat, " " ,$apemat ?></h4></li>
		                	<li><h4><?php echo "Usuario: ", $usuario; ?></h4></li>
		                	<li><h4><?php echo "Correo: ", $correo; ?></h4></li>
										</ul>
									</div>
            </div>
            <div class="col-md-6">
							<h2>Avatar</h2>
                <div class="col-md-4"><img class="img-circle" style="width: 200px; height: 200px" src='avatars/<?php echo $avatar; ?>'></div>
								<div class="col-md-7">
								<div class="well">
									<form action="subiravatar.php" method="post" enctype="multipart/form-data">
                  <label for="imagen">Cargar imagen:</label>
                  <input class="btn btn-info" type="file" name="imagen" size="100">
								</br>
                  <input class="btn btn-success" type="submit" value="Enviar imagen">
                </form></div>
							</div>
            </div>
        </div>
				<div class="jumbotron text-center" style="padding-top: 15px; padding-bottom: 15px; margin-top: 30px">
					<h2>Mi ubicación</h2>
    </div>
    <div class="row">
       <div class="col-md-5" style="padding-top: 10px">
            <?php
            if ($ubicacion=='1') {
                echo "Aun no has registrado tu ubicacion";
            }
            
            ?>
            <div id="map">
                <h1>Mapa</h1>
                <script type="text/javascript">
                    var output = document.getElementById('map');

                    var imgURL = "https://maps.googleapis.com/maps/api/staticmap?center="+<?php echo $latitud; ?>+","+<?php echo $longitud; ?>+"&size=600x300&markers=color:red%7C"+<?php echo $latitud; ?>+","+<?php echo $longitud; ?>+"&key=AIzaSyAzAh8rjxQ-nuIprPl5SA2B3wex9YXKAEI";
                     output.innerHTML ="<img src='"+imgURL+"'>";

                </script>
            </div>

					</div>
						<div class="col-md-6" style="margin-left: 80px">
							<div class="well">
								<p>Para actualizar la ubicación da clic en el boton y ubica en el mapa el lugar deseado, luego da clic en Registrar.</p>
								<!-- <button class="btn btn-primary" type="button" onclick="location.href = 'ubicacion.php'" >Registrar/Actualizar ubicación</button> -->
								<a class="btn btn-primary" href="ubicacion.php" target="_blank" onclick="window.open(this.href,this.target,'width=800,height=600,top=100,left=200,toolbar=no,location=no,status=no,menubar=no');return false;">Registrar/Actualizar ubicación</a>
							</div>
						</div>
	</div>
<!-- Modal preguntas -->

	</div>
	<?php include('../estructura/footer.php'); ?>

</body>
</html>
