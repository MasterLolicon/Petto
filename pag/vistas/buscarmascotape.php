
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


?>
<!DOCTYPE html>
<html lang="es">

<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
 <link rel="stylesheet" href="../css/bootstrap.css"/>
  <link rel="stylesheet" type="text/css" href="../css/paseador.css">
 <script type="text/javascript" src="../js/jquery.js"></script>
 <script type="text/javascript" src="../js/popper.min.js"></script>
 <script type="text/javascript" src="../js/bootstrap.js"></script>

<!--barra de navegacion-->
<?php include('../estructura/header.php'); ?>
<script type="text/javascript">
	$(document).ready(function(){
		$(perro).css("display","none");
	})
</script>

<!--contenido-->

<script language="javascript" type="text/javascript">
	function cambiotipo(selectTag){
	 if(selectTag.value == '1'){
	document.getElementById('perro').disabled = false;
	document.getElementById('perro').style.display='block';
	 }else{
	 document.getElementById('perro').disabled = true;
	document.getElementById('perro').style.display='none';
	 }
	 if(selectTag.value == '2'){
	document.getElementById('gato').disabled = false;
	document.getElementById('gato').style.display='block';
	 }else{
	 document.getElementById('gato').disabled = true;
	 document.getElementById('gato').style.display='none';
	 }
	}
</script> 


<body style="background-color: #00ff37">

	<div class="container-fluid" style="margin-top: 60px">
			<div class="jumbotron text-center" style="background-image: url(../../img/adop.jpeg); background-size: 100% 175%;background-position: 0px 220px">
				<h1 class="display-3" style="color: #ffffff">Adopción</h1>
			</div>
			<h3>Busqueda personalizada</h3>
				<div class="col-md-3" style="display: inline-block;">
					
					<form role="form" id="registro_servicio" name="registro_servicio" method="post"  enctype="multipart/form-data" action="buscarmascotape.php">

					    <div class="form-group"> <!-- State Button -->
					        <label for="state_id" class="control-label">Tipo</label>
					        <select class="form-control" id="tipo" name="tipo" onchange="cambiotipo(this)" placeholder="tipo">
					            <option name="" value="">Seleccione mascota</option> 
					            <option value="1">Perro</option>
					            <option value="2">Gato</option>
					        </select>                    
					    </div>    
				</div>
				<div class="col-md-3" style="display: inline-block;">
					<div class="form-group"> <!-- Street 1 -->
					        <label for="street1_id" class="control-label">Raza</label>
					  <select class="form-control" id="perro" name="raza" disabled="true">
					  	<option value="Todos">Mostrar todos</option>
					  	<option value="Ninguna(Cruza)">Ninguna(Cruza)</option>
					   <option value="Affenpinscher">Affenpinscher</option>
								<option value="Afgano">Afgano</option>
								<option value="Akita">AkitAmerican Bullya</option>
								<option value="Akita Americano">Akita Americano</option>
								<option value="Alano español">Alano español</option>
								<option value="American Bully">American Bully</option>
								<option value="American Foxhound">American Foxhound</option>
								<option value="American Pitbull Terrier">American Pitbull Terrier</option>
								<option value="American Staffordshire">American Staffordshire</option>
								<option value="Australian Silky Terrier">Australian Silky Terrier</option>
								<option value="Barbet">Barbet</option>
								<option value="Basenji">Basenji</option>
								<option value="Basset artesiano de Normandia">Basset artesiano de Normandia</option>
								<option value="Basset azul de Gascuña">Basset azul de Gascuña</option>
								<option value="Basset Hsound">Basset Hsound</option>
								<option value="Basset Leonardo de Bretaña">Basset Leonardo de Bretaña</option>
								<option value="Beagle">Beagle</option>
								<option value="Beagle – Harrier">Beagle – Harrier</option>
								<option value="Berger de Picardie">Berger de Picardie</option>
								<option value="Bichón Boloñés">Bichón Boloñés</option>
								<option value="Bichón Frisé">Bichón Frisé</option>
								<option value="Bichón Habanero">Bichón Habanero</option>
								<option value="Bichón Maltés">Bichón Maltés</option>
								<option value="Billy">Billy</option>
								<option value="Black and Tan Coonhound">Black and Tan Coonhound</option>
								<option value="Bloodhound">Bloodhound</option>
								<option value="Bobtail">Bobtail</option>
								<option value="Bodeguero Andaluz">Bodeguero Andaluz</option>
								<option value="Boerboel">Boerboel</option>
								<option value="Border Collie">Border Collie</option>
								<option value="Border Terrier">Border Terrier</option>
								<option value="Borzoi (Galgo Ruso)">Borzoi (Galgo Ruso)</option>
								<option value="Boston Terrier">Boston Terrier</option>
								<option value="Bóxer">Bóxer</option>
								<option value="Boyero Australiano">Boyero Australiano</option>
								<option value="Boyero de las Ardenas">Boyero de las Ardenas</option>
								<option value="Braco alemán de pelo corto">Braco alemán de pelo corto</option>
								<option value="Braco alemán de pelo duro">Braco alemán de pelo duro</option>
								<option value="Braco de Auvernia">Braco de Auvernia</option>
								<option value="Braco de Weimar">Braco de Weimar</option>
								<option value="Braco del Ariège">Braco del Ariège</option>
								<option value="Braco del Bourbonnais">Braco del Bourbonnais</option>
								<option value="Braco francés, tipo Gascuña, talla grande">Braco francés, tipo Gascuña, talla grande</option>
								<option value="Braco francés, tipo Pirineos, talla pequeña">Braco francés, tipo Pirineos, talla pequeña</option>
								<option value="Braco Italiano">Braco Italiano</option>
								<option value="Braco San Germain">Braco San Germain</option>
								<option value="Briard">Briard</option>
								<option value="Brittany">Brittany</option>
								<option value="Broholmer">Broholmer</option>
								<option value="Bull Terrier">Bull Terrier</option>
								<option value="Bull Terrier miniature">Bull Terrier miniature</option>
								<option value="Bulldog">Bulldog</option>
								<option value="Bulldog Americano">Bulldog Americano</option>
								<option value="Bulldog francés">Bulldog francés</option>
								<option value="Bullmastín">Bullmastín</option>
								<option value="Cairn Terrier">Cairn Terrier</option>
								<option value="Cairn Terrier">Cairn Terrier</option>
								<option value="Cane Corso">Cane Corso</option>
								<option value="Caniche (Poodle)">Caniche (Poodle)</option>
								<option value="Carlino">Carlino</option>
								<option value="Cavalier King Charles">Cavalier King Charles</option>
								<option value="Chihuahua">Chihuahua</option>
								<option value="Chin Japonés">Chin Japonés</option>
								<option value="Chow Chow">Chow Chow</option>
								<option value="Cirneco Del Etnao">Cirneco Del Etnao</option>
								<option value="Cobrador de Nueva Escocia">Cobrador de Nueva Escocia</option>
								<option value="Cocker Spaniel">Cocker Spaniel</option>
								<option value="Cocker Americano">Cocker Americano</option>
								<option value="Collie">Collie</option>
								<option value="Collie Barbudo">Collie Barbudo</option>		
								<option value="Collie Smooth">Collie Smooth</option>
								<option value="Corgi Galés Cárdigan">Corgi Galés Cárdigan</option>
								<option value="Corgi Galés Pembroke">Corgi Galés Pembroke</option>
								<option value="Curly Coated Retriever (de pelo rizado)">Curly Coated Retriever (de pelo rizado)</option>
								<option value="Dálmata">Dálmata</option>
								<option value="Dandie Dinmont Terrier">Dandie Dinmont Terrier</option>
								<option value="Deerhound Escocés">Deerhound Escocés</option>
								<option value="Doberman">Doberman</option>
								<option value="Dogo Argentino">Dogo Argentino</option>
								<option value="Dogo Canario">Dogo Canario</option>
								<option value="Dogo de Burdeos">Dogo de Burdeos</option>
								<option value="Dogo Mallorquín">Dogo Mallorquín</option>
								<option value="Drever">Drever</option>
								<option value="Elkhound Noruego">Elkhound Noruego</option>
								<option value="Epagneul breton">Epagneul breton</option>
								<option value="Eurasier">Eurasier</option>
								<option value="Faraón Hound">Faraón Hound</option>
								<option value="Field Spaniel">Field Spaniel</option>
								<option value="Fila Brasileiro">Fila Brasileiro</option>
								<option value="Fila de San Miguel">Fila de San Miguel</option>	
								<option value="Fox Terrier pelo duro">Fox Terrier pelo duro</option>
								<option value="Fox Terrier de pelo liso">Fox Terrier de pelo liso</option>
								<option value="Fox Terrier Toy">Fox Terrier Toy</option>
								<option value="Foxhound Americano">Foxhound Americano</option>
								<option value="Foxhound Inglés">Foxhound Inglés</option>
								<option value="Galgo Español">Galgo Español</option>
								<option value="Galgo Italiano">Galgo Italiano</option>
								<option value="Gascon Saintongeois">Gascon Saintongeois</option>
								<option value="Glen Of Imaal Terrier">Glen Of Imaal Terrier</option>
								<option value="Golden Retriever">Golden Retriever</option>		
								<option value="Gran Basset Grifón vendeano">Gran Basset Grifón vendeano</option>
								<option value="Gran Danés">Gran Danés</option>
								<option value="Greyhound">Greyhound</option>
								<option value="Grifon Belga">Grifon Belga</option>
								<option value="Grifón de Bruselas">Grifón de Bruselas</option>
								<option value="Grifón de muestra bohemio de pelo duro">Grifón de muestra bohemio de pelo duro</option>
								<option value="Grifón de muestra eslovaco de pelo duro">Grifón de muestra eslovaco de pelo duro</option>
								<option value="Hamilton Stovare">Hamilton Stovare</option>
								<option value="Harrier">Harrier</option>
								<option value="Hokkaïdo">Hokkaïdo</option>		
								<option value="Hovawart">Hovawart</option>
								<option value="Husky Siberiano">Husky Siberiano</option>
								<option value="Irish Soft Coated Wheaten Terrier">Irish Soft Coated Wheaten Terrier</option>
								<option value="Jack Russell Terrier">Jack Russell Terrier</option>
								<option value="Jamthund">Jamthund</option>
								<option value="Kai">Kai</option>
								<option value="Karjalankarhukoira">Karjalankarhukoira</option>
								<option value="Keedhond">Keedhond</option>
								<option value="Kerry Blue Terrier">Kerry Blue Terrier</option>
								<option value="Kishu">Kishu</option>	
								<option value="Laïka Ruso-Europeo">Laïka Ruso-Europeo</option>
								<option value="Lakeland Terrier">Lakeland Terrier</option>
								<option value="Landseer">Landseer</option>
								<option value="Lebrel Húngaro">Lebrel Húngaro</option>
								<option value="Leonberger">Leonberger</option>
								<option value="Lhasa Apso">Lhasa Apso</option>
								<option value="Lundehund">Lundehund</option>
								<option value="Löwchen">Löwchen</option>
								<option value="Malamute de Alaska">Malamute de Alaska</option>
								<option value="Mastín">Mastín</option>	
								<option value="Mastín Napolitano">Mastín Napolitano</option>
								<option value="Mastín Tibetanor">Mastín Tibetanor</option>
								<option value="Mudi">Mudi</option>
								<option value="Münsterländer grande">Münsterländer grande</option>
								<option value="Münsterländer pequeño">Münsterländer pequeño</option>
								<option value="Otterhound">Otterhound</option>
								<option value="Papillon">Papillon</option>
								<option value="Parson Russell Terrier">Parson Russell Terrier</option>
								<option value="Pastor Alemán">Pastor Alemán</option>
								<option value="Pastor Australiano">Pastor Australiano</option>	
								<option value="Pastor Belga">Pastor Belga</option>
								<option value="Pastor Blanco Suizor">Pastor Blanco Suizor</option>
								<option value="Pastor Catalán">Pastor Catalán</option>
								<option value="Pastor de Anatolia">Pastor de Anatolia</option>
								<option value="Pastor de Beauce">Pastor de Beauce</option>
								<option value="Pastor de los Pirineos">Pastor de los Pirineos</option>
								<option value="Pastor de Shetland">Pastor de Shetland</option>
								<option value="Parson Russell Terrier">Parson Russell Terrier</option>
								<option value="Pastor polaco de tierras baja">Pastor polaco de tierras bajas</option>
								<option value="Pequeño Basset Grifón vendeano">Pequeño Basset Grifón vendeano</option>	
								<option value="Pequeño Brabanzón">Pequeño Brabanzón</option>
								<option value="Pequeño perro holandés para la caza acuáticar">Pequeño perro holandés para la caza acuáticar</option>
								<option value="Pequinésn">Pequinésn</option>
								<option value="Perdiguero de Burgos">Perdiguero de Burgos</option>
								<option value="Perdiguero de Drentee">Perdiguero de Drentee</option>
								<option value="Perdiguero Portugués">Perdiguero Portugués</option>
								<option value="Perro crestado Chino">Perro crestado Chino</option>
								<option value="Perro de Agua americano">Perro de Agua americano	</option>
								<option value="Perro de Agua español">Perro de Agua español</option>
								<option value="Perro de Agua portugués">Perro de Agua portugués</option>	
								<option value="Perro de Canaan">Perro de Canaan</option>
								<option value="Perro de Castro Laboreiro">Perro de Castro Laboreiro</option>
								<option value="Perro de Groenlandia">Perro de Groenlandia</option>
								<option value="Perro de montaña Appenzell">Perro de montaña Appenzell</option>
								<option value="Perro de montaña Bernés">Perro de montaña Bernés</option>
								<option value="Perro de montaña de la Sierra de la Estrela">Perro de montaña de la Sierra de la Estrela</option>
								<option value="Perro de montaña de los pirineos">Perro de montaña de los pirineos</option>
								<option value="Perro de montaña del Atlas">Perro de montaña del Atlas	</option>
								<option value="Perro de montaña Gran Suizo">Perro de montaña Gran Suizo</option>
								<option value="Perro de muestra alemán de pelo cerdoso">Perro de muestra alemán de pelo cerdoso</option>				
								<option value="Perro de Canaan">Perro de Canaan</option>
								<option value="Perro de Castro Laboreiro">Perro de Castro Laboreiro</option>
								<option value="Perro de Groenlandia">Perro de Groenlandia</option>
								<option value="Perro de montaña Appenzell">Perro de montaña Appenzell</option>
								<option value="Perro de montaña Bernés">Perro de montaña Bernés</option>
								<option value="Perro de montaña de la Sierra de la Estrela">Perro de montaña de la Sierra de la Estrela</option>
								<option value="Perro de montaña de los pirineos">Perro de montaña de los pirineos</option>
								<option value="Perro de montaña del Atlas">Perro de montaña del Atlas</option>
								<option value="Perro de montaña Gran Suizo">Perro de montaña Gran Suizo</option>
								<option value="Perro de muestra alemán de pelo cerdoso">Perro de muestra alemán de pelo cerdoso</option>		
								<option value="Perro de muestra Danés">Perro de muestra Danés</option>
								<option value="Perro de pastor bergamasco">Perro de pastor bergamasco</option>
								<option value="Perro de pastor de Asia central">Perro de pastor de Asia central</option>
								<option value="Perro de pastor de Karst">Perro de pastor de Karst</option>
								<option value="Perro de pastor de Rusia meridional">Perro de pastor de Rusia meridional</option>
								<option value="Perro de pastor del Cáucasoa">Perro de pastor del Cáucasoa</option>
								<option value="Perro de pastor islandés">Perro de pastor islandés</option>
								<option value="Perro de pastor polaco de las Llanuras">Perro de pastor polaco de las Llanuras</option>
								<option value="Perro de pastor polaco de Podhale">Perro de pastor polaco de Podhale</option>
								<option value="Perro de pastor portugués">Perro de pastor portugués</option>		
								<option value="Perro de pastor yugoslavo de Charplanina">Perro de pastor yugoslavo de Charplanina</option>
								<option value="Perro Entlebucher">Perro Entlebucher</option>
								<option value="Perro Esquimal Americano">Perro Esquimal Americano</option>
								<option value="Perro Esquimal Canadiense">Perro Esquimal Canadiense</option>
								<option value="Perro Lobo Checoslovaco">Perro Lobo Checoslovaco</option>
								<option value="Perro Lobo de Sarloos">Perro Lobo de Sarloos</option>
								<option value="Perro pastor croato">Perro pastor croato</option>
								<option value="Perro pastor Mallorquín">Perro pastor Mallorquín	</option>
								<option value="Perro pastor Maremmano-Abruzzese">Perro pastor Maremmano-Abruzzese</option>
								<option value="Perro sin pelo del Perú">Perro sin pelo del Perú</option>		
								<option value="Perro sin pelo Mexicano">Perro sin pelo Mexicano</option>
								<option value="Perro Smous holandés">Perro Smous holandés</option>
								<option value="Pinscher">Pinscher</option>
								<option value="Pinscher austriaco">Pinscher austriaco</option>
								<option value="Pinscher miniatura">Pinscher miniatura</option>
								<option value="Plott Hound">Plott Hound</option>
								<option value="Podenco Canarioo">Podenco Canarioo</option>
								<option value="Podenco ibicenco">Podenco ibicenco</option>
								<option value="Podenco portugués">Podenco portugués</option>
								<option value="Pointer">Pointer</option>	
								<option value="Pointer alemán de pelo corto">Pointer alemán de pelo corto</option>
								<option value="Pointer alemán de pelo duro">Pointer alemán de pelo duro	</option>
								<option value="Poitevin">Poitevin</option>
								<option value="Pomerania">Pomerania</option>
								<option value="Porcelaine">Porcelaine</option>
								<option value="Pudelpointer">Pudelpointer</option>
								<option value="Puli">Puli</option>
								<option value="Pumi">Pumi</option>
								<option value="Rafeiro del Alentejo">Rafeiro del Alentejo</option>
								<option value="Rastreador de Hannover">Rastreador de Hannover</option>	
								<option value="Rastreador montañés de Baviera">Rastreador montañés de Baviera</option>
								<option value="Retriever de La Bahía de Chesapeake">Retriever de La Bahía de Chesapeake</option>
								<option value="Retriever de pelo liso">Retriever de pelo liso</option>
								<option value="Ridgeback de Rodesia">Ridgeback de Rodesia</option>
								<option value="Rottweiler225">Rottweiler</option>
								<option value="Sabueso alemán">Sabueso alemán</option>
								<option value="Sabueso Artesiano">Sabueso Artesiano</option>
								<option value="Sabueso austriaco negro y fuego">Sabueso austriaco negro y fuego</option>
								<option value="Sabueso de Bosnia de pelo cerdoso">Sabueso de Bosnia de pelo cerdoso</option>
								<option value="Sabueso de Hygen">Sabueso de Hygen</option>		
								<option value="Sabueso de las montañas de Montenegro">Sabueso de las montañas de Montenegro</option>
								<option value="Sabueso de Smaland">Sabueso de Smaland</option>
								<option value="Sabueso de Transilvania">Sabueso de Transilvania</option>
								<option value="Sabueso del Tirol">Sabueso del Tirol</option>
								<option value="Sabueso eslovaco">Sabueso eslovaco</option>
								<option value="Sabueso español">Sabueso español</option>
								<option value="Sabueso Estirio de pelo duro">Sabueso Estirio de pelo duro</option>
								<option value="Sabueso Finlandés">Sabueso Finlandés</option>
								<option value="Sabueso francés tricolor">Sabueso francés tricolor</option>
								<option value="Sabueso Halden">Sabueso Halden	</option>	
								<option value="Sabueso Italiano de pelo corto">Sabueso Italiano de pelo corto</option>
								<option value="Sabueso Italiano de pelo duro">Sabueso Italiano de pelo duro</option>
								<option value="Sabueso Polaco">Sabueso Polaco</option>
								<option value="Sabueso Serbio">Sabueso Serbio</option>
								<option value="Sabueso Suizo">Sabueso Suizo</option>
								<option value="Sabueso tricolor serbio">Sabueso tricolor serbio</option>
								<option value="Saluki (galgo persa)">Saluki (galgo persa)</option>
								<option value="Samoyedo">Samoyedo</option>
								<option value="San Bernardo">San Bernardo</option>
								<option value="Schapendoes neerlandés">Schapendoes neerlandés</option>		
								<option value="Schipperke">Schipperke</option>
								<option value="Schnauzer">Schnauzer</option>
								<option value="Schnauzer Gigante">Schnauzer Gigante</option>
								<option value="Schnauzer Miniatura">Schnauzer Miniatura</option>
								<option value="Sealyham Terrier">Sealyham Terrier</option>
								<option value="Setter Gordon">Setter Gordon</option>
								<option value="Setter Inglés">Setter Inglés</option>
								<option value="Setter Irlandés">Setter Irlandés</option>
								<option value="Setter Irlandés rojo">Setter Irlandés rojo</option>
								<option value="Setter Irlandés rojo y blanco">Setter Irlandés rojo y blanco</option>	
								<option value="Shar Pei">Shar Pei</option>
								<option value="Shiba">Shiba</option>
								<option value="ShihTzu">ShihTzu</option>
								<option value="Shikoku">Shikoku</option>
								<option value="Silky Terrier">Silky Terrier</option>
								<option value="Sloughi (galgo árabe)">Sloughi (galgo árabe)</option>
								<option value="Spaniel continental enano">Spaniel continental enano</option>
								<option value="Spaniel de Agua Irlandés">Spaniel de Agua Irlandés</option>
								<option value="Spaniel de Pont-Audeme">Spaniel de Pont-Audemer</option>
								<option value="Spaniel de Sussex">Spaniel de Sussex</option>		
								<option value="Spaniel Picardo">Spaniel Picardo</option>
								<option value="Spaniel Tibetano">Spaniel Tibetano</option>
								<option value="Spinone Italiano">Spinone Italiano</option>
								<option value="Spitz Alemán">Spitz Alemán</option>
								<option value="Spitz Finlandés">Spitz Finlandés</option>
								<option value="Spitz Japonés">Spitz Japonés</option>
								<option value="Springer Spaniel Galés">Springer Spaniel Galés</option>
								<option value="Springer Spaniel Inglés">Springer Spaniel Inglés</option>
								<option value="Stabyhoun">Stabyhoun</option>
								<option value="Staffordshire Bull Terrier">Staffordshire Bull Terrier</option>	
								<option value="Tchuvatch eslovaco">Tchuvatch eslovaco</option>
								<option value="Teckel">Teckel</option>
								<option value="Tejonero alpino">Tejonero alpino</option>
								<option value="Tejonero de Westfalia">Tejonero de Westfalia</option>
								<option value="Terranova">Terranova</option>
								<option value="Terrier Australian">Terrier Australiano</option>
								<option value="Terrier Bedlington">Terrier Bedlington</option>
								<option value="Terrier Brasileño">Terrier Brasileño</option>
								<option value="Terrier cazador alemán">Terrier cazador alemán</option>
								<option value="Terrier Cesky">Terrier Cesky</option>	
								<option value="Terrier de Airedale	o">Terrier de Airedale	o</option>
								<option value="Terrier de Norfolk">Terrier de Norfolk</option>
								<option value="Terrier de Skye">Terrier de Skye</option>
								<option value="Terrier Escocés">Terrier Escocés</option>
								<option value="Terrier Galés">Terrier Galés</option>
								<option value="Terrier Irlandés">Terrier Irlandés</option>
								<option value="Terrier Japonés">Terrier Japonés</option>
								<option value="Terrier Tibetano">Terrier Tibetano</option>
								<option value="Thai Ridgeback Dog">Thai Ridgeback Dog</option>
								<option value="Tosa Inu">Tosa Inu</option>			
								<option value="Valhund Sueco">Valhund Sueco</option>
								<option value="Vizsla">Vizsla</option>
								<option value="Volpino Italiano">Volpino Italiano</option>
								<option value="West Highland">West Highland</option>
								<option value="Wetterhound">Wetterhound</option>
								<option value="3Wheaten Terrier">Wheaten Terrier</option>
								<option value="Whippet">Whippet</option>
								<option value="Wolfhound Irlandés">Wolfhound Irlandés</option>
								<option value="Yorkshire Terrier">Yorkshire Terrier</option>									
					  </select>

					  <select class="form-control" id="gato" name="raza" disabled="true" >
					  	<option value="Todos">Mostrar todos</option>
					  	<option value="Ninguna(Cruza)">Ninguna(Cruza)</option>
					   <option value="Abisinio">Abisinio</option>
								<option value="Amercian Curl">Amercian Curl</option>
								<option value="Angora Turco">Angora Turco</option>
								<option value="Azul Ruso">Azul Ruso</option>
								<option value="Balinés">Balinés</option>
								<option value="Bengalí">Bengalí</option>
								<option value="Bombay">Bombay</option>
								<option value="Bosque de Noruega">Bosque de Noruega</option>
								<option value="Británico de pelo corto">Británico de pelo corto</option>
								<option value="Británico de pelo corto azul">Británico de pelo corto azul</option>
								<option value="Británico de pelo largo">Británico de pelo largo</option>
								<option value="Burmés">Burmés</option>
								<option value="Burmilla">Burmilla</option>
								<option value="Cartujo">Cartujo</option>
								<option value="Cornish Rex">Cornish Rex</option>
								<option value="Devon Rex">Devon Rex</option>
								<option value="Europeo de Pelo Corto">Europeo de Pelo Corto</option>
								<option value="Exótico de pelo corto">Exótico de pelo corto</option>
								<option value="German Rex">German Rex</option>
								<option value="Highlahd Fold">Highlahd Fold</option>
								<option value="Himalayo">Himalayo</option>
								<option value="Javanéz">Javanéz</option>
								<option value="Korat">Korat</option>
								<option value="Maine Coon">Maine Coon</option>
								<option value="Manx">Manx</option>
								<option value="Mau Egipcio">Mau Egipcio</option>
								<option value="Neva Masquerad">Neva Masquerade</option>
								<option value="Ocicat">Ocicat</option>
								<option value="Oriental de Pelo Corto">Oriental de Pelo Corto</option>
								<option value="Persa">Persa</option>
								<option value="Peterbald">Peterbald</option>
								<option value="Ragdoll">Ragdoll</option>
								<option value="Sagrado de Birmania">Sagrado de Birmania</option>
								<option value="Scottish Fold">Scottish Fold</option>
								<option value="Selkirk Rex">Selkirk Rex</option>
								<option value="Siamé">Siamés</option>
								<option value="Siberiano">Siberiano</option>
								<option value="Snowshoe">Snowshoe</option>
								<option value="Somalí">Somalí</option>
								<option value="Sphynx">Sphynx</option>
								<option value="Toyger">Toyger</option>
								<option value="Van Turco">Van Turco</option>
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

				<div class="col-md-3">
	     				<input class="btn btn-xl" name="Submit" type="submit" value="Busqueda">     
				</div>  
                   				    
				</form>
				</div>

		</div>

		<div class="container-fluid">
			<?php 
			include($_SERVER['DOCUMENT_ROOT']."/conexionbd/abrir_conexion.php"); 

			//Iniciar Sesión
			session_start();
			$id_usuario= $_SESSION['id_usuario'];
			$query = "SELECT * FROM mascota WHERE disp_adop='2' order by id_mascota DESC ";
			$resultado=mysqli_query($conexion,$query) or die(mysqli_error($conexion));
			$contador=0; //cuenta el numero de mascotas


			//BUSQUEDA PERSONALIZADA
			$especie = $_POST['tipo'];
			$ra = $_POST['rango'];
			$raza = $_POST['raza'];


			$query0 = "SELECT * FROM usuarios WHERE id='$id_usuario'";
			  $res0 = mysqli_query($conexion,$query0) or die(mysqli_error($conexion));
			  $usuario = mysqli_fetch_array($res0);
			  $latitude1=$usuario[latitud]; //Poner aqui la latitud del usuario
			  $longitude1=$usuario[longitud]; //Poner aqui la longitud del usuario
			  define("PI", 3.14159265359);
				define("R", 6371);
			$contador = 0; //cuenta el numero de mascotas


			//echo "<table><tr>";
			while ($fila = mysqli_fetch_array($resultado)) {
					//echo "<td>";
						
					$latitude2=$fila[latitud]; //Poner aqui la latitud del servicio/mascota
					$longitude2=$fila[longitud]; //Poner aqui la longitud del servicio/mascota

					$earth_radius = 6371;  
	      
					$dLat = deg2rad($latitude2 - $latitude1);  
					$dLon = deg2rad($longitude2 - $longitude1);  
					      
					$a = sin($dLat/2) * sin($dLat/2) + cos(deg2rad($latitude1)) * cos(deg2rad($latitude2)) * sin($dLon/2) * sin($dLon/2);  
					$c = 2 * asin(sqrt($a));  
					$d = $earth_radius * $c;


				if ($raza=='Todos') {

					if($d<=$ra AND $fila[tipo]==$especie AND $fila[id]!=$id_usuario){

						echo "<div class='container_avatar rounded-circle text-center' style=' width:300px;height:300px;'>";
						echo "<img class='img_avatar rounded-circle' style='width: 300px; height: 300px' src='foto_mascota/$fila[foto]'>";
						
						echo "<div class='middle_avatar' style='width: 80%; max-height: 80%;margin-top: -5px;'>";
						echo "<div class='text_avatar' style='background-color:rgba(66, 204, 255,0.7); color: #000000'>";
						/*echo "Tipo:";
						if ($fila[tipo]==1) {
							echo "Perro<br>";
						}
						elseif($fila[tipo]==2) {
							echo "Gato<br>";
						}*/
						echo "Raza: $fila[raza] <br>";
						echo "Edad: $fila[edad] años <br>";
						echo "Genero: ";
						if ($fila[sexo]==1) {
							echo "Macho<br>";
						}
						elseif($fila[sexo]==2) {
							echo "Hembra<br>";
						}
						echo "<form action='adoptar.php' role='form' name='frm_ingreso' method='post'>
						<input class='form-control' type='hidden' name='mascota' id='mascota' value='$fila[id_mascota]' />
						<input class='form-control' type='hidden' name='tipo' id='tipo' value='$fila[tipo]' />
						<input class='form-control' type='hidden' name='emisor' id='emisor' value='$fila[id]' />
						<input class='btn btn-success' name='Submit' type='submit' value='Adoptar'>
						</form>";
						$contador++;
						//echo "<a class='btn btn-info'>$fila[nombre]</a> <br>";
						echo "</div></div><a class='btn btn-info' style='margin-top:5px'>$fila[nombre]</a> <br></div>";

						/*if ($contador>4) {
							echo "</tr><tr>";
							$contador = 0;
						}*/
					}

				}

				if ($fila[id]!=$id_usuario AND $fila[raza]==$raza) {

					if($d<=$ra){

						echo "<div class='container_avatar rounded-circle' style=' width: 200px;height:200px;'>";
						echo "<img class='img_avatar rounded-circle' style='width: 200px; height: 200px' src='/pag/vistas/foto_mascota/$fila[foto]'<br><br>";
						echo "<a class='btn btn-primary'> Nombre: $fila[nombre]</a> <br>";
						echo "<div class='middle_avatar' style='width: 90%; max-height: 90%;margin-top: -5px;'>";
						echo "<div class='text_avatar' style='opacity: 0.75'>";
						echo "Tipo:";
						if ($fila[tipo]==1) {
							echo "Perro<br>";
						}
						elseif($fila[tipo]==2) {
							echo "Gato<br>";
						}
						echo "Raza: $fila[raza] <br>";
						echo "Edad: $fila[edad] años <br>";
						echo "Genero: ";
						if ($fila[sexo]==1) {
							echo "Macho<br>";
						}
						elseif($fila[sexo]==2) {
							echo "Hembra<br>";
						}
						echo "<form action='adoptar.php' role='form' name='frm_ingreso' method='post'>
						<input class='form-control' type='hidden' name='mascota' id='mascota' value='$fila[id_mascota]' />
						<input class='form-control' type='hidden' name='tipo' id='tipo' value='$fila[tipo]' />
						<input class='form-control' type='hidden' name='emisor' id='emisor' value='$fila[id]' />
						<input class='btn btn-success' name='Submit' type='submit' value='Adoptar'>
						</form>";
						$contador++;
						echo "</div></div></div>";
						/*if ($contador>4) {
							echo "</tr><tr>";
							$contador = 0;
						}*/
					}
				}
			}
			//echo "</tr></table>";
			?>
		</div>	
		<div class="row"><p>&nbsp;</p></div>			
		<div class="row"><p>&nbsp;</p></div>
	</div>
	<?php include('../estructura/footer.php'); ?>

</body>
</html>
