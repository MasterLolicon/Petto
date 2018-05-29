var geocoder;
var map;
var marker;
var center;
    function initialize() {
    geocoder = new google.maps.Geocoder();
  
  var address = "18-30 Fairview Ave, Arlington, MA 02474, USA";
  geocoder.geocode( { 'address': address}, function(results, status) {
    if (status == google.maps.GeocoderStatus.OK) {
      map = new google.maps.Map(document.getElementById('mapCanvas'), {
    zoom: 16,
            streetViewControl: false,
          mapTypeControlOptions: {
        style: google.maps.MapTypeControlStyle.HORIZONTAL_BAR,
              mapTypeIds:[google.maps.MapTypeId.HYBRID, google.maps.MapTypeId.ROADMAP] 
    },
    center: results[0].geometry.location,
    mapTypeId: google.maps.MapTypeId.ROADMAP
  });
      map.setCenter(results[0].geometry.location);
      center = results[0].geometry.location;
      marker = new google.maps.Marker({
          map: map,
          position: results[0].geometry.location,
          draggable: true,
          title: 'My Title'
      });
      updateMarkerPosition(results[0].geometry.location);
      geocodePosition(results[0].geometry.location);
        
      // Add dragging event listeners.
  google.maps.event.addListener(marker, 'dragstart', function() {
    updateMarkerAddress('Dragging...');
  });
      
  google.maps.event.addListener(marker, 'drag', function() {
    updateMarkerStatus('Dragging...');
    updateMarkerPosition(marker.getPosition());
  });
  
  google.maps.event.addListener(marker, 'dragend', function() {
    updateMarkerStatus('Drag ended');
    geocodePosition(marker.getPosition());
      map.panTo(marker.getPosition()); 
  });
  
  google.maps.event.addListener(map, 'click', function(e) {
    updateMarkerPosition(e.latLng);
    geocodePosition(marker.getPosition());
    marker.setPosition(e.latLng);
  map.panTo(marker.getPosition()); 
  }); 
  
    } else {
      alert('Geocode was not successful for the following reason: ' + status);
    }
  });
}