
<?php
session_start();

//Validar si se está ingresando con sesión correctamente
if (!$_SESSION){
  header("location:../../index.php");
}
?>
<html>
  <head>

    <meta charset="utf-8">
    <title>Obtener coordenadas de un marcador </title>
    <style>
      html, body {
        height: 100%;
        margin: 0;
        padding: 0;
      }
      #map {
        width: 100%;
        height: 95%;
      }
      #lati{width: 500px;}
      #longi{width: 500px;}
      #prueba{width: 500px; height: 200px;}
    </style>

    <!--Claves Google API: AIzaSyCbL8ZIBRPVzXFIzjBhyfep9ms49HNe53c ,  AIzaSyCWQA-N9UZk6E9rc_q1bUjMEGz9KXQwi3w-->
    <script src="//maps.googleapis.com/maps/api/js?key=AIzaSyCbL8ZIBRPVzXFIzjBhyfep9ms49HNe53c" async="" defer="defer" type="text/javascript"></script>
  </head>
  <body >
    <div id="map"></div>

    <?php
    $latserv=$_GET['latitud'];
    $longserv=$_GET['longitud'];

    ?>
<img src="http://localhost/pag/pettologo2.png"> <-Representa la ubicación del servicio
<script>


var marker;          //variable del marcador
var coords = {};    //coordenadas obtenidas con la geolocalización

//Funcion principal
initMap = function ()
{

    //usamos la API para geolocalizar el usuario
        navigator.geolocation.getCurrentPosition(
          function (position){
            coords =  {
              lng: position.coords.longitude,
              lat: position.coords.latitude
            };
            setMapa(coords);  //pasamos las coordenadas al metodo para crear el mapa


          },function(error){console.log(error);});

}



function setMapa (coords)
{
      //Se crea una nueva instancia del objeto mapa
      var map = new google.maps.Map(document.getElementById('map'),
      {
        zoom: 13,
        center:new google.maps.LatLng(coords.lat,coords.lng),

      });

      //Creamos el marcador en el mapa con sus propiedades
      //para nuestro obetivo tenemos que poner el atributo draggable en true
      //position pondremos las mismas coordenas que obtuvimos en la geolocalización
      marker = new google.maps.Marker({
        map: map,
        draggable: true,
        animation: google.maps.Animation.DROP,
        position: new google.maps.LatLng(coords.lat,coords.lng),

      });

    var image = 'http://localhost/pag/pettologo2.png';
      marker2 = new google.maps.Marker({
        map: map,
        draggable: true,
        animation: google.maps.Animation.DROP,
        position: new google.maps.LatLng(<?php echo "$latserv"; ?>,<?php echo "$longserv"; ?>),
        icon: image
      });
      //agregamos un evento al marcador junto con la funcion callback al igual que el evento dragend que indica
      //cuando el usuario a soltado el marcador
      marker.addListener('click', toggleBounce);

}

//callback al hacer clic en el marcador lo que hace es quitar y poner la animacion BOUNCE
function toggleBounce() {
  if (marker.getAnimation() !== null) {
    marker.setAnimation(null);
  } else {
    marker.setAnimation(google.maps.Animation.BOUNCE);
  }
}


</script>


    </script>
    <script async defer src="https://maps.googleapis.com/maps/api/js?callback=initMap"></script>
 	<div id="prueba"></div>
  </body>
</html>
