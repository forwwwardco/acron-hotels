var centerLatlng = new google.maps.LatLng(15.564838, 73.749401);			
var awr2Latlng = new google.maps.LatLng(15.564838, 73.749401); 		

function initMap() {
	var mapOptions = {
	  scrollwheel: false,	
	  zoom: 17,
	  center: centerLatlng,
	  mapTypeId: google.maps.MapTypeId.ROADMAP	// ROADMAP || SATELLITE || HYBRID|| TERRAIN
	}
	var map = new google.maps.Map(document.getElementById("map"), mapOptions);
	
	// -------- MARKER  
	var infowin1 = new google.maps.InfoWindow({ 
		content: '<strong>Acron Waterfront Resort </strong><br> 3-4 Bedrooms Apartments'
	});
	// -------- INFO WINDOW 
	var marker1 = new google.maps.Marker({
		position: awr2Latlng,
		map: map,
		title:'Acron Waterfront Resort - Courtyard Suites',
		icon: 'http://143.95.237.3/~acronind/awr2/assets/images/pointer.png'
	});
	google.maps.event.addListener(marker1, 'click', function() {infowin1.open(map,marker1); });
	// -------- END OF MARKER 
	
	// -------- CLOSE INFO WINDOW FUNCTION
	var closeInfoWindow = function() {
		infowin1.close(); 
	};
	google.maps.event.addListener(map, 'click', closeInfoWindow);
	// -------- CLOSE INFO WINDOW FUNCTION ENDS HERE
}