<?php
$current = 'poi';
?>

<!DOCTYPE html>
<html lang="">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>UoL Accomodation Application</title>

		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="css/app.css">
	</head>
	<body>
		<div class="container-fluid">

			<!-- Navbar Top Start -->
			<?php include('include/navbar.php'); ?>
			<!-- Navbar Top End -->

			<!-- Map Container Start -->
			<div id="content-container" class="container-fluid">
				<div id="search-row" class="row">
					<input id="origin-input" class="controls" type="text"
						   placeholder="Enter an origin location">

					<input id="destination-input" class="controls" type="text"
						   placeholder="Enter a destination location">
				</div>
				<div id="map-row" class="row">
					<div id="map" class="col-lg-8 col-md-12 js-list-item"></div>
					<div id="directions-panel" class="col-lg-4 col-md-12 js-list-item" ><h3>Directions <small class="text-muted">Your directions will be displayed below.</small></h3></div>
				</div>
			</div>
			<!-- Google Maps Script -->
			<script>
				function initMap() {
					var origin_place_id = null;
					var destination_place_id = null;
					var travel_mode = google.maps.TravelMode.WALKING;
					var map = new google.maps.Map(document.getElementById('map'), {
						mapTypeControl: false,
						zoom: 15,
						center: {lat: 53.23, lng: -0.541}
					});
					var directionsService = new google.maps.DirectionsService;
					var directionsDisplay = new google.maps.DirectionsRenderer;
					directionsDisplay.setMap(map);
					directionsDisplay.setPanel(document.getElementById('directions-panel'));

					var origin_input = document.getElementById('origin-input');
					var destination_input = document.getElementById('destination-input');
					var modes = document.getElementById('mode-selector');

					var origin_autocomplete = new google.maps.places.Autocomplete(origin_input);
					origin_autocomplete.bindTo('bounds', map);
					var destination_autocomplete =
						new google.maps.places.Autocomplete(destination_input);
					destination_autocomplete.bindTo('bounds', map);

					// Sets a listener on a radio button to change the filter type on Places
					// Autocomplete.
					function setupClickListener(id, mode) {
						var radioButton = document.getElementById(id);
						radioButton.addEventListener('click', function() {
							travel_mode = mode;
						});
					}

					function expandViewportToFitPlace(map, place) {
						if (place.geometry.viewport) {
							map.fitBounds(place.geometry.viewport);
						} else {
							map.setCenter(place.geometry.location);
							map.setZoom(17);
						}
					}

					origin_autocomplete.addListener('place_changed', function() {
						var place = origin_autocomplete.getPlace();
						if (!place.geometry) {
							window.alert("Autocomplete's returned place contains no geometry");
							return;
						}
						expandViewportToFitPlace(map, place);

						// If the place has a geometry, store its place ID and route if we have
						// the other place ID
						origin_place_id = place.place_id;
						route(origin_place_id, destination_place_id, travel_mode,
							directionsService, directionsDisplay);
					});

					destination_autocomplete.addListener('place_changed', function() {
						var place = destination_autocomplete.getPlace();
						if (!place.geometry) {
							window.alert("Autocomplete's returned place contains no geometry");
							return;
						}
						expandViewportToFitPlace(map, place);

						// If the place has a geometry, store its place ID and route if we have
						// the other place ID
						destination_place_id = place.place_id;
						route(origin_place_id, destination_place_id, travel_mode,
							directionsService, directionsDisplay);
					});

					function route(origin_place_id, destination_place_id, travel_mode,
								   directionsService, directionsDisplay) {
						if (!origin_place_id || !destination_place_id) {
							return;
						}
						directionsService.route({
							origin: {'placeId': origin_place_id},
							destination: {'placeId': destination_place_id},
							travelMode: travel_mode
						}, function(response, status) {
							if (status === google.maps.DirectionsStatus.OK) {
								directionsDisplay.setDirections(response);
							} else {
								window.alert('Directions request failed due to ' + status);
							}
						});
					}
				}
			</script>
			<!-- Maps Container End -->

			<!-- Navbar Foot Start -->
			<nav id="navbar-bottom" class="navbar navbar-dark navbar-fixed-bottom">
				<ul class="nav navbar-nav">
					<!--<li class="nav-item">
						<a class="nav-link js-prev" href="#">UP</a>
					</li>
					<li class="nav-item">
						<a class="nav-link js-next" href="#">DOWN</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#">SAVE</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#">MY ACCOUNT</a>
					</li>-->
					<li class="nav-item pull-lg-right">
						<a class="nav-link js-prev" href="#">Log In</a>
					</li>
				</ul>
			</nav>
			<!-- Navbar Foot End -->


		</div>

		<!-- Google Maps API -->
		<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA9D0LzKI9avzjP77eqiysmAhQ26IgLrCM&libraries=places&signed_in=true&callback=initMap" async defer></script>
		<!-- jQuery -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
		<!-- Bootstrap JavaScript -->
		<script src="frameworks/bootstrap4-alpha2/dist/js/bootstrap.js"></script>

		<!-- Other Scripts -->
		<script src="js/scroll-to-anchor.js"></script>
		<script src="js/getCurrentPosition-gmaps.js"></script>
	</body>
</html>