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

			<div class="jumbotron text-center" style="justify-content: center;padding-bottom: 5px;background-color: #00ff7f;font-family: Gadget">
					<h1 class="display-3">Servicios</h1>
			</div>
			<div class="row text-center" style="justify-content: center;">
			<h3>Busqueda personalizada</h3>
			</div>
				<div class="col-md-3" style="display: inline-block;">
					
					<form role="form" id="registro_servicio" name="registro_servicio" method="post"  enctype="multipart/form-data" action="buscarservicio.php">

					    <div class="form-group" > <!-- State Button -->
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
				<div class="col-md-3" style="display: inline-block;">
					
	
					    <div class="form-group" > <!-- State Button -->
					        <label for="state_id" class="control-label"><h4>Ordenar por:</h4></label>
					        <select class="form-control" id="orden" name="orden">
					            <option value="id_servicio DESC">Más recientes</option>
					            <option value="promcal DESC">Calificación</option>
					        </select>            
					    </div> 
				</div>
				<div class="col-md-3" style="display: inline-block;">
					
	
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
<br>
				<div class="col-md-3" style="padding-top: 30px">
	     				<input class="btn btn-xl" name="Submit" type="submit" value="Busqueda">     
				</div>  
				
				<div class="col-md-2 float-right" >
	     				<a href="#registrar" class="btn btn-primary btn-lg" data-toggle="modal">Registrar Servicio</a>     
				</div>                      				    
				</form>
				
			<div class="container" style="padding-top: 50px">
			<div class="col-md-111">
			
			<?php 
			$id_usuario= $_SESSION['id_usuario'];
			$orden = $_POST['orden'];
			$opcion = $_POST['tipoop'];
			$query = "SELECT * FROM servicio order by $orden ";
			$resultado=mysqli_query($conexion,$query) or die(mysqli_error($conexion));

			  $query0 = "SELECT * FROM usuarios WHERE id='$id_usuario'";
			  $res0 = mysqli_query($conexion,$query0) or die(mysqli_error($conexion));
			  $usuario = mysqli_fetch_array($res0);
			  $latitude1=$usuario[latitud]; //Poner aqui la latitud del usuario
			  $longitude1=$usuario[longitud]; //Poner aqui la longitud del usuario
			  define("PI", 3.14159265359);
				define("R", 6371);
				$ra = $_POST['rango'];
			$contador = 0; //cuenta el numero de mascotas
			$contadorfinal = 0;

			echo "<table><tr>";
			while ($fila = mysqli_fetch_array($resultado)) {

				
				if ($opcion==$fila[tipo]) {
				echo "<td>";
					$latitude2=$fila[latitud]; //Poner aqui la latitud del servicio/mascota
				    $longitude2=$fila[longitud]; //Poner aqui la longitud del servicio/mascota

				    $earth_radius = 6371;  
      
				    $dLat = deg2rad($latitude2 - $latitude1);  
				    $dLon = deg2rad($longitude2 - $longitude1);  
				      
				    $a = sin($dLat/2) * sin($dLat/2) + cos(deg2rad($latitude1)) * cos(deg2rad($latitude2)) * sin($dLon/2) * sin($dLon/2);  
				    $c = 2 * asin(sqrt($a));  
				    $d = $earth_radius * $c;
				    if($d<=$ra){
			
				    	echo "<div class='well'>";
				    	echo "<img class='img-rounded' style='width: 200px; height: 200px' src='foto_servicio/$fila[foto]'<br><br>";
						echo "Nombre: $fila[nombre] <br>";
						echo "Descripción: $fila[descripcion] <br>";
						echo "Tipo:";
						if ($fila[tipo]==1) {
							echo "Veterinario<br>";
						}
						elseif($fila[tipo]==2) {
							echo "Zona de paseo<br>";
						}
						elseif($fila[tipo]==3) {
							echo "Tienda<br>";
						}
						elseif($fila[tipo]==4) {
							echo "Estética<br>";
						}
						elseif($fila[tipo]==5) {
							echo "Entrenador<br>";
						}
						elseif($fila[tipo]==5) {
							echo "Entrenador<br>";
						}
						elseif($fila[tipo]==6) {
						echo "Paseador<br>";
						}
						echo "Contacto: $fila[contacto] <br>";
						echo "Calificación: $fila[promcal]<br>" ;
						echo "Califica:<br><form action='calificar_servicio.php' role='form' name='frm_ingreso' method='post'>
						<input class='form-control' type='hidden' name='servicio' id='servicio' value='$fila[id_servicio]' />
						<select class='form-control' id='calif' name='calif'>
							    <option value='1'>1</option>
							    <option value='2'>2</option>
							    <option value='3'>3</option>
							    <option value='4'>4</option>
							    <option value='5'>5</option>
						</select>
						<br>
						<div class='col-md-6'>
						<input class='btn btn-xl' name='Submit' type='submit' value='Calificar'>
						</div>
						<div class='col-md-6'>
						<a class='btn btn-primary' href='mostrarubicacionserv.php?latitud=$fila[latitud]&longitud=$fila[longitud]' target='_blank' onclick='window.open(this.href,this.target,'width=800,height=600,top=100,left=200,toolbar=no,location=no,status=no,menubar=no');return false;'>Mostrar ubicación</a>
						</form>";
						echo "</div><br><br>";
						$contador++;
						if ($contador>4) {
							echo "</tr><tr>";
							$contador = 0;
						}

						$contadorfinal++;
				    }
					
						# code...
				}
			}
			if($contadorfinal ==0){
					echo "<h2>No hay resultados para la búsqueda :( </h2></tr></table>";
				}

			else{
				echo "</tr></table>$contadorfinal Resultados";
			}

			mysqli_free_result($res0);
			mysqli_free_result($resultado);
			?>

				</div>
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
					        <div class="form-group"> <!-- Street 2 -->
                            <label for="foto">Foto:</label>
                        </td>
                        <td>
                            <input type="file" name="foto" size="100"></td>
                        </td>
					    </div>    

					    <div class="form-group"> <!-- City-->
					        <label for="city_id" class="control-label">Contacto (email/telefono/etc.)</label>
					        <input type="text" class="form-control" id="contacto" name="contacto" placeholder="Smallville">
					    </div>  
		                    <input class="btn btn-xl" name="Submit" type="submit" value="Registro">                   				    
					</form>

        			</div>
        		<!-- Footer ventana -->
        			<div class="modal-footer">
        				<button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
        			</div>

        		</div>
        	</div>
        </div>

	</div>



	</div>

</body>
</html>
