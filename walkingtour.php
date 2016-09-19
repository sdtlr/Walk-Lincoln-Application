<?php
$current = 'tour';
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

				<div id="panel-row" class="row">
					<div id="input-panel" class="col-lg-12 js-list-item">
						<div>
							<b>Start:</b>
							<select id="start">
								<option value="53.226219,-0.544399">Junxion</option>
								<option value="53.228199,-0.553570">Pavillion House</option>
								<option value="53.229492,-0.550853">Student Village</option>
								<option value="53.229257,-0.545778">Brayford Quay</option>
								<option value="53.230490,-0.548993">Haynes Wharf</option>
								<option value="53.230372,-0.542910">Park Court</option>
							</select>
							<br>
							<b>Waypoints:</b> <br>
							<i>(Ctrl-Click for multiple selection)</i> <br>
							<select multiple id="waypoints">
								<option value="53.226219,-0.544399">Junxion</option>
								<option value="53.228199,-0.553570">Pavillion House</option>
								<option value="53.229492,-0.550853">Student Village</option>
								<option value="53.229257,-0.545778">Brayford Quay</option>
								<option value="53.230490,-0.548993">Haynes Wharf</option>
								<option value="53.230372,-0.542910">Park Court</option>
							</select>
							<br>
							<b>End:</b>
							<select id="end">
								<option value="53.226219,-0.544399">Junxion</option>
								<option value="53.228199,-0.553570">Pavillion House</option>
								<option value="53.229492,-0.550853">Student Village</option>
								<option value="53.229257,-0.545778">Brayford Quay</option>
								<option value="53.230490,-0.548993">Haynes Wharf</option>
								<option value="53.230372,-0.542910">Park Court</option>
							</select>
							<br>
							<button id="submit" class="btn btn-primary btn-block">Submit</button>
						</div>
					</div>
				</div>

				<div id="map-row" class="row">
					<div id="map" class="col-lg-8 col-md-12 js-list-item"></div>
					<div id="directions-panel" class="col-lg-4 col-md-12 js-list-item" ><h3>Directions <small class="text-muted">Your directions will be displayed below.</small></h3></div>
				</div>
				<script>
					function initMap() {
						var directionsService = new google.maps.DirectionsService;
						var directionsDisplay = new google.maps.DirectionsRenderer;
						var map = new google.maps.Map(document.getElementById('map'), {
							zoom: 15,
							center: {lat: 53.23, lng: -0.541}
						});
						directionsDisplay.setMap(map);
						directionsDisplay.setPanel(document.getElementById('directions-panel'));

						var onChangeHandler = function() {
							getCurrentPosition();
							calculateAndDisplayRoute(directionsService, directionsDisplay);
						};
						document.getElementById('submit').addEventListener('click', onChangeHandler);
					}

					function calculateAndDisplayRoute(directionsService, directionsDisplay) {
						var waypts = [];
						var checkboxArray = document.getElementById('waypoints');
						for (var i = 0; i < checkboxArray.length; i++) {
							if (checkboxArray.options[i].selected) {
								waypts.push({
									location: checkboxArray[i].value,
									stopover: true
								});
							}
						}

						directionsService.route({
							origin: document.getElementById('start').value,
							destination: document.getElementById('end').value,
							waypoints: waypts,
							optimizeWaypoints: true,
							travelMode: google.maps.TravelMode.WALKING
						}, function(response, status) {
							if (status === google.maps.DirectionsStatus.OK) {
								directionsDisplay.setDirections(response);
							} else {
								window.alert('Directions request failed due to ' + status);
							}
						});
					}
				</script>
		    <!-- Maps Container End -->

			<!-- Navbar Foot Start -->
			<nav id="navbar-bottom" class="navbar navbar-dark navbar-fixed-bottom">
				<ul class="nav navbar-nav">
					<li class="nav-item">
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
					</li>
					<li class="nav-item pull-lg-right">
						<a class="nav-link js-prev" href="#">Log In</a>
					</li>
				</ul>
			</nav>
			<!-- Navbar Foot End -->


		</div>
		<!-- Google Maps API -->
    	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA9D0LzKI9avzjP77eqiysmAhQ26IgLrCM&libraries=places&signed_in=true&callback=initMap"
    	async defer></script>
		<!-- jQuery -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
		<!-- Bootstrap JavaScript -->
		<script src="frameworks/bootstrap4-alpha2/dist/js/bootstrap.js"></script>

		<!-- Other Scripts -->
		<script src="js/scroll-to-anchor.js"></script>
		<script src="js/getCurrentPosition-gmaps.js"></script>

	</body>
</html>