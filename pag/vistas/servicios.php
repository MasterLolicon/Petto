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
 <link rel="stylesheet" type="text/css" href="../css/paseador.css">
 <script type="text/javascript" src="../js/jquery.js"></script>
 <script type="text/javascript" src="../js/popper.min.js"></script>
 <script type="text/javascript" src="../js/bootstrap.js"></script>

<!--barra de navegacion-->
<?php include('../estructura/header.php'); ?>

<!--contenido-->

	<div class="container-fluid" style="margin-top: 55px">
			<div class="jumbotron text-center" style="justify-content: center; padding-bottom: 5px;padding-top: 5px; background-color:#B2DFDB">
					<h1 class="display-3" style="font-family: Gadget">Servicios</h1>
					</div>
			<div class="row text-center" style="justify-content: center;font-family: Verdana">
			<h3 class="display-4">Busqueda personalizada</h3>
			</div>
			<form role="form" id="registro_servicio" name="registro_servicio" method="post"  enctype="multipart/form-data" action="buscarservicio.php" style="margin-top: 30px">
				<div class="col-md-3" style="display: inline-block;">

					    <div class="form-group"> <!-- State Button -->
					        <label for="state_id" class="control-label"><h4>Tipo:</h4></label>
					        <select class="form-control" id="tipoop" name="tipoop">
					            <option value="1">Veterinarios</option>
					            <option value="2">Zonas de Paseo</option>
					            <option value="3">Tiendas</option>
					            <option value="4">Estéticas</option>
					            <option value="5">Entrenadores</option>
					            <option value="6">Paseadores</option>
					        </select>            
					    </div> 
				</div>
				<div class="col-md-3" style="display: inline-block;">
					
	
					    <div class="form-group"> <!-- State Button -->
					        <label for="state_id" class="control-label"><h4>Ordenar por:</h4></label>
					        <select class="form-control" id="orden" name="orden">
					            <option value="id_servicio DESC">Más recientes</option>
					            <option value="promcal DESC">Calificación</option>
					        </select>            
					    </div> 
				</div>
				<div class="col-md-3"style="display: inline-block;">
					
	
					    <div class="form-group"> <!-- State Button -->
					        <label for="state_id" class="control-label"><h4>Rango:</h4></label>
					        <select class="form-control" id="rango" name="rango">
					        	<option value="5">5Km</option>
					            <option value="10">10Km</option>
					            <option value="50">50Km</option>
					            <option value="100">100Km</option>
					            <option value="1500000">Todos los registros</option>
					        </select>            
					    </div> 


				</div>
				<div class="col-md-1" style="margin-left: 20px ;display:inline-block;" >
	     				<input class="btn btn-success" name="Submit" type="submit" value="Busqueda">     
				</div> 
<br>
				

				<div class="col-md-2" >
	     				<a href="#registrar" class="btn btn-primary btn-lg" data-toggle="modal">Registrar Servicio</a>     
				</div> 	                     				    
				</form>
			<div class="container" style="margin-top: 20px; margin-left: 2%;">
			<!--<div class="col-md-12">	-->	
			<?php 
			include($_SERVER['DOCUMENT_ROOT']."/conexionbd/abrir_conexion.php"); 

			//Iniciar Sesión
			session_start();
			$id_usuario= $_SESSION['id_usuario'];
			$orden = 'id_servicio DESC';


#Despliegue de servicios

		for($tipocam=0;$tipocam<7;$tipocam++){
			$query = "SELECT * FROM servicio WHERE tipo='$tipocam' order by $orden LIMIT 6";#Separacion por tipo
			$resultado=mysqli_query($conexion,$query) or die(mysqli_error($conexion));

			$contador = 0; //cuenta el numero de mascotas
			$tar = 0;
			//echo "<div class='container'>";
			echo "<h2 class='display-4' style=' font-family: Impact'>";
			if ($tipocam==1) {
					echo "Veterinario</h2>";
				}
				elseif($tipocam==2) {
					echo "Zona de paseo</h2>";
				}
				elseif($tipocam==3) {
					echo "Tienda</h2>";
				}
				elseif($tipocam==4) {
					echo "Estética</h2>";
				}
				elseif($tipocam==5) {
					echo "Entrenador</h2>";
				}
				elseif($tipocam==5) {
					echo "Entrenador</h2>";
				}
				elseif($tipocam==6) {
					echo "Paseador</h2>";
				}

			while ($fila = mysqli_fetch_array($resultado)) {

				//echo "<div class='col-md-2'>";
				//echo "<div class='well'>";
					//echo "<div class='card'>";
				echo "<div class='container_avatar img-thumbnail text-center'>";
						echo "<img class='img_avatar img-thumbnail' style='width: 310px; height: 310px;'  src='foto_servicio/$fila[foto]'>";
					echo "<div class='middle_avatar' style='width: 90%; max-height: 90%;margin-top: -5px'>";
				echo "<div class='text_avatar'>";
						echo "<h4 class='card-title'>$fila[nombre]</h4>";
						echo "<p class='card-text'>$fila[descripcion] </p>";
			
					echo "<p class='card-text'>Contacto: $fila[contacto]</p>";
					echo "<p class='card-text'>Calificación:</p>" ;
					echo "<h3 style='color: #e5ff00;'>";for($i=1;$i<$fila[promcal];$i++){
						echo "&#9733 ";
					}
					echo"</h3>";
					echo "<a class='btn btn-primary' href='mostrarubicacionserv.php?latitud=$fila[latitud]&longitud=$fila[longitud]' target='_blank' onclick='window.open(this.href,this.target,'width=800,height=600,top=100,left=200,toolbar=no,location=no,status=no,menubar=no');return false;'>Mostrar ubicación</a>";
					echo "<br><br>";
					echo "<div class='card-block'>";
						echo "<form action='calificar_servicio.php' role='form' name='frm_ingreso' method='post'>
							<input class='form-control input-group-btn' type='hidden' name='servicio' id='servicio' value='$fila[id_servicio]'/>
							<select class='form-control' id='calif' name='calif' style='width:80px;margin-left: 90px'>
								<option selected>0</option>
					    		<option value='1'>1</option>
					    		<option value='2'>2</option>
					    		<option value='3'>3</option>
					    		<option value='4'>4</option>
					    		<option value='5'>5</option>
							</select><br>
							<button class='btn btn-info' name='Submit' type='submit'>Calificar
							</button>
							</form>";
					echo "</div>";
					echo "</div>";
				echo "</div></div>";

				/*if($contador == 5){
					echo "</br></div>";
				}*/

				$contador++;
				/*if($contador == 5){
					$contador = 0;
				}*/
			}
		}
	?>
			</div>
		</div>



<!-- REGISTRAR SERVICIO-->
	<div class="modal fade" id="registrar">
        	<div class="modal-dialog">
        		<div class="modal-content">
        		<!-- Header ventana -->
        			<div class="modal-header">
        				<h2 class="modal-title">Registrar Servicio</h2>
        				<button tyle="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        			</div>
        		<!-- Header ventana -->
        			<div class="modal-body">
					 <form role="form" id="registro_servicio" name="registro_servicio" method="post"  enctype="multipart/form-data" action="registroservicio.php">

					    <div class="form-group"> <!-- Full Name -->
					        <label for="full_name_id" class="control-label">Nombre</label>
					        <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Petco">
					    </div>    

					    <div class="form-group"> <!-- Street 1 -->
					        <label for="street1_id" class="control-label">Descripción</label>
					        <input type="text" class="form-control" id="descripcion" name="descripcion" placeholder="Adopción, accesorios y más">
					    </div>    

					    <div class="form-group"> <!-- State Button -->
					        <label for="state_id" class="control-label">Tipo</label>
					        <select class="form-control" id="tipo" name="tipo">
					            <option value="1">Veterinario</option>
					            <option value="2">Zona de Paseo</option>
					            <option value="3">Tienda</option>
					            <option value="4">Estetica</option>
					            <option value="5">Entrenador</option>
					            <option value="6">Paseador</option>
					        </select>                    
					    </div> 

					    <div class="form-group"> <!-- Street 2 -->
							<div class="fileinput fileinput-new" data-provides="fileinput">
    							<span class="btn btn-default btn-file"><input type="file" name="foto"/></span>
    							<span class="fileinput-filename"></span>
							</div>
					    </div>    

					    <div class="form-group"> <!-- City-->
					        <label for="city_id" class="control-label">Contacto (email/telefono/etc.)</label>
					        <input type="text" class="form-control" id="contacto" name="contacto" placeholder="Smallville">
					    </div> 
		                    <input class="btn btn-xl" name="Submit" type="submit" value="Registro">                   				    
					</form>

        		<!-- Footer ventana -->
        			<div class="modal-footer">
        				<button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
        			</div>

        		</div>
        	</div>
        </div>

        <div><h1>.</h1></div>

	</div>



	</div>

</body>
</html>
