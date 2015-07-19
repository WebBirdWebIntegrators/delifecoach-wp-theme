<div class="location-directions">
	<div id="map" style="width: 100%; height: 350px"></div>
	<script src="http://maps.google.com/maps/api/js?sensor=false" type="text/javascript"></script>
  <script type="text/javascript">
    var locations = [
      ['De Life Coach', 51.261282, 4.632358, 1]
    ];

    var map = new google.maps.Map(document.getElementById('map'), {
      zoom: 10,
      center: new google.maps.LatLng(51.261282, 4.632358),
      mapTypeId: google.maps.MapTypeId.ROADMAP,
			scrollwheel: false
    });

    var infowindow = new google.maps.InfoWindow();

    var marker, i;

    for (i = 0; i < locations.length; i++) {
      marker = new google.maps.Marker({
        position: new google.maps.LatLng(locations[i][1], locations[i][2]),
        map: map
      });

      google.maps.event.addListener(marker, 'click', (function(marker, i) {
        return function() {
          infowindow.setContent(locations[i][0]);
          infowindow.open(map, marker);
        }
      })(marker, i));
    }
  </script>
</div>
