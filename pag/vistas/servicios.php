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
					<h1>Servicios</h1>
					</div>
			<div class="row">
			<h3>Busqueda personalizada</h3>
			</div>
			<form role="form" id="registro_servicio" name="registro_servicio" method="post"  enctype="multipart/form-data" action="buscarservicio.php">
				<div class="col-md-3">

					    <div class="form-group"> <!-- State Button -->
					        <label for="state_id" class="control-label"><h4>Tipo:</h4></label>
					        <select class="form-control" id="tipoop" name="tipoop">
					            <option value="1">Veterinario</option>
					            <option value="2">Zona de Paseo</option>
					            <option value="3">Tienda</option>
					            <option value="4">Estetica</option>
					            <option value="5">Entrenador</option>
					            <option value="6">Paseador</option>
					        </select>            
					    </div> 
				</div>
				<div class="col-md-3">
					
	
					    <div class="form-group"> <!-- State Button -->
					        <label for="state_id" class="control-label"><h4>Ordenar por:</h4></label>
					        <select class="form-control" id="orden" name="orden">
					            <option value="id_servicio DESC">Más recientes</option>
					            <option value="promcal DESC">Calificación</option>
					        </select>            
					    </div> 
				</div>
				<div class="col-md-3">
					
	
					    <div class="form-group"> <!-- State Button -->
					        <label for="state_id" class="control-label"><h4>Rango:</h4></label>
					        <select class="form-control" id="rango" name="rango">
					        	<option value="5">5Km</option>
					            <option value="10">10Km</option>
					            <option value="50">50Km</option>
					            <option value="100">100Km</option>
					            <option value="1 500 000">Todos los registros</option>
					        </select>            
					    </div> 
				</div>

				<div class="col-md-3">
	     				<input class="btn btn-xl" name="Submit" type="submit" value="Busqueda">     
				</div> 

				<div class="col-md-3">
	     				<a href="#registrar" class="btn btn-primary btn-lg" data-toggle="modal">Registrar Servicio</a>     
				</div> 	                     				    
				</form>
			<div class="row">
			<div class="col-md-12">		
			<?php 
			include($_SERVER['DOCUMENT_ROOT']."/conexionbd/abrir_conexion.php"); 

			//Iniciar Sesión
			session_start();
			$id_usuario= $_SESSION['id_usuario'];
			$orden = 'id_servicio DESC';
			$query = "SELECT * FROM servicio order by $orden ";
			$resultado=mysqli_query($conexion,$query) or die(mysqli_error($conexion));

			$contador = 0; //cuenta el numero de mascotas
			$tar = 0;
			echo "<div class='row'>";
			while ($fila = mysqli_fetch_array($resultado)) {

				echo "<div class='col-md-2'>";
				echo "<div class='well'>";
					echo "<div class='card'>";
						echo "<img class='card-img-top img-fluid img-rounded' style='width: 19rem; height: 15rem;'  src='foto_servicio/$fila[foto]'>";
					echo "<div class='card-block'>";
						echo "<h4 class='card-title'>$fila[nombre]</h4>";
						echo "<p class='card-text'>$fila[descripcion] </p>";
						echo "<p class='card-text'>Tipo:";
				if ($fila[tipo]==1) {
					echo "Veterinario</p>";
				}
				elseif($fila[tipo]==2) {
					echo "Zona de paseo</p>";
				}
				elseif($fila[tipo]==3) {
					echo "Tienda</p>";
				}
				elseif($fila[tipo]==4) {
					echo "Estética</p>";
				}
				elseif($fila[tipo]==5) {
					echo "Entrenador</p>";
				}
				elseif($fila[tipo]==5) {
					echo "Entrenador</p>";
				}
				elseif($fila[tipo]==6) {
					echo "Paseador</p>";
				}
					echo "<p class='card-text'>Contacto: $fila[contacto]</p>";
					echo "<p class='card-text'>Calificación: $fila[promcal]</p>" ;
					echo "<a class='btn btn-primary' href='mostrarubicacionserv.php?latitud=$fila[latitud]&longitud=$fila[longitud]' target='_blank' onclick='window.open(this.href,this.target,'width=800,height=600,top=100,left=200,toolbar=no,location=no,status=no,menubar=no');return false;'>Mostrar ubicación</a>";
					echo "<br><br></div>";
					echo "<div class='card-block'>";
						echo "<form action='calificar_servicio.php' role='form' name='frm_ingreso' method='post'>
							<input class='form-control input-group-btn' type='hidden' name='servicio' id='servicio' value='$fila[id_servicio]'/>
							<select class='form-control' id='calif' name='calif'>
								<option selected>0</option>
					    		<option value='1'>1</option>
					    		<option value='2'>2</option>
					    		<option value='3'>3</option>
					    		<option value='4'>4</option>
					    		<option value='5'>5</option>
							</select>
							<button class='btn btn-xl' name='Submit' type='submit'>Calificar
							</button>
							</form>";
					echo "</div>";
					echo "</div>";
				echo "</div></div>";

				if($contador == 5){
					echo "</br></div>";
				}

				$contador++;
				if($contador > 5){
					$contador = 0;
				}
		}
	?>
			</div>
		</div>
	<div class="modal fade" id="registrar">
        	<div class="modal-dialog">
        		<div class="modal-content">
        		<!-- Header ventana -->
        			<div class="modal-header">
        				<button tyle="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        				<h2 class="modal-title">Registrar Servicio</h2>
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
