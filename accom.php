<?php
$current = 'accom';
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

			<!-- Page Content Start -->
			<div id="content-container" class="container-fluid">
				<div id="accom-links-row" class="row container-fluid js-list-item">
					<div class = "accom-links col-lg-12">
						<div class= "row">
							<a id="see-all-button" class="btn btn-primary" data-toggle="collapse" href="#collapseExample" aria-expanded="false" aria-controls="collapseExample"> See All Accommodations </a>
						</div>
						<div class="row">
							<div class="collapse" id="collapseExample">
								<div id="accom-links-block" class="card card-block">
									<ul id="accom-links-list">
										<li><a class="js-scroll-to" href="#accom-one">The Student Village</a></li>
										<li><a class="js-scroll-to" href="#accom-two">Brayford Quay</a></li>
										<li><a class="js-scroll-to" href="#accom-three">Hayes Wharf</a></li>
										<li><a class="js-scroll-to" href="#accom-four">Junxion</a></li>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div id="accom-one" class="row container-fluid js-list-item">
					<div id="description-row" class="row">
						<div class="col-lg-3 col-md-12">
							<img id="main-image"  alt="Accom Image" src="img/student-village.jpg">
						</div>
						<div id="description-container" class="col-lg-9 col-sm-12 content-box">
							<h3>The Student Village</h3>
							<span>
								<p>
									Lincoln Courts is a stunning waterfront accommodation complex, situated on
									campus in the heart of the Student Village. You will be close to the University’s
									academic buildings, Student Services Team and the Students’ Union, and the
									city centre is just a short walk away. Lincoln Courts is owned and managed by
									the University of Lincoln, and offers a great student experience.
								</p>
								<p>
									The complex is made up of 17
									contemporary buildings of self-catered
									apartments, which each house five to
									eight students. In total there are 1,037
									furnished student bedrooms. Some
									apartments have rooms designed
									specifically for students with disabilities.
									Fees for apartments in Lincoln Courts
									include both heating and electricity
									bills, personal possessions insurance
									and University WiFi access.
								</p>
								<br>
								<p>
									For more information, contact the Accommodation Office on +44 (0)1522 886231 or <a href="mailto:accommodation@lincoln.ac.uk">accommodation@lincoln.ac.uk</a>
								</p>
							</span>
						</div>
					</div>
					<div id="features-row" class="row">
						<div id="features-container" class="col-lg-12 content-box">
							<h3>Features</h3>
							<span>
								<ul>
									<li>
										En-suite rooms are available
									</li>
									<li>
										Fully fitted kitchen
									</li>
									<li>
										Disabled access
									</li>
										Launderette facilities
									<li>
										24 hour on-campus security
									</li>
										Bicycle storage
									<li>
										Free internet, including WiFi
										coverage throughout, plus direct
										port access in rooms.
									</li>
								</ul>
							</span>
						</div>
					</div>
					<div id="price-row" class="row">
						<div id="price-container" class="col-lg-12 content-box">
							<h3>Prices</h3>
							<span>
								<table class="data table">
									<thead class="thead-inverse">
									<tr>
										<th>Room Type</th>
										<th>2015 Price Per Week</th>
										<th>2016 Price Per Week</th>
										<th>2016 Price Total</th>
									</tr>
									</thead>
									<tr>
										<td>Single Bed - Shared Bathroom</td>
										<td>£90</td>
										<td>£92</td>
										<td>£4416</td>
									</tr>
									<tr>
										<td>Single Bed - En Suite</td>
										<td>£100</td>
										<td>£102</td>
										<td>£4896</td>
									</tr>
									<tr>
										<td>Double Bed - Shared Bathroom</td>
										<td>N/A</td>
										<td>N/A</td>
										<td>N/A</td>
									</tr>
									<tr>
										<td>Double Bed - En Suite</td>
										<td>N/A</td>
										<td>N/A</td>
										<td>N/A</td>
									</tr>
								</table>
							</span>
						</div>
					</div>
					<div id="buttons-row" class="row">
						<a href="directions.php" id="get-dirs" class="btn btn-primary btn-block">Get Directions</a>
						<a href="walkingtour.php" id="take-tour" class="btn btn-primary btn-block">Take The Tour From Here</a>
					</div>
				</div>
				<div id="accom-two" class="row container-fluid js-list-item">
					<div id="description-row" class="row">
						<div class="col-lg-3 col-md-12">
							<img id="main-image"  alt="Accom Image" src="img/brayford.jpg">
						</div>
						<div id="description-container" class="col-lg-9 col-sm-12 content-box">
							<h3>Brayford Quay</h3>
							<span>
								<p>
									Located opposite the University and overlooking the
									Brayford Pool marina, this accommodation provides 402
									en-suite rooms ranging from five or six-bedroom flats to
									self-contained studios. The flats include a TV and sofa in
									the kitchen/communal area, en-suite facilities and have WiFi
									throughout. On-site facilities include a common room with
									a games area, gym and launderette.
									<br>
									Brayford Quay is a University Accredited, superbly located student accommodation with outstanding facilities for you to enjoy. Apartments of 5 and 6 bed en-suite rooms share a kitchen / communal area and we also offer a range of self-contained studios. All rooms are en-suite with some having fantastic views of the marina.
									<br>
									Enjoy time in our gym, common room with TV, pool table and games console or walk along the marina enjoying the many restaurants and bars with spectacular views.
									<br>
									Rents are all inclusive of utility bills, WIFI internet and gym membership.
									<br>
									<br>
									All first university students must apply via the University of Lincoln, residential services department in order to secure a room at Brayford Quay for September.
								</p>
								<p>

								</p>
							</span>
						</div>
					</div>
					<div id="features-row" class="row">
						<div id="features-container" class="col-lg-12 content-box">
							<h3>Features</h3>
							<span>
								<ul>
									<li>
										En-suite rooms are available
									</li>
									<li>
										Fully fitted kitchen
									</li>
									<li>
										Disabled access
									</li>
									Launderette facilities
									<li>
										24 hour on-campus security
									</li>
									Bicycle storage
									<li>
										Free internet, including WiFi
										coverage throughout, plus direct
										port access in rooms.
									</li>
								</ul>
							</span>
						</div>
					</div>
					<div id="price-row" class="row">
						<div id="price-container" class="col-lg-12 content-box">
							<h3>Prices</h3>
							<span>
								<table class="data table">
									<thead class="thead-inverse">
									<tr>
										<th>Room Type</th>
										<th>2015 Price Per Week</th>
										<th>2016 Price Per Week</th>
										<th>2016 Price Total</th>
									</tr>
									</thead>
									<tr>
										<td>Single Bed - Shared Bathroom</td>
										<td>£95</td>
										<td>£95</td>
										<td>£4750</td>
									</tr>
									<tr>
										<td>Single Bed - En Suite</td>
										<td>£100</td>
										<td>£100</td>
										<td>£5000</td>
									</tr>
									<tr>
										<td>Double Bed - Shared Bathroom</td>
										<td>£120</td>
										<td>£120</td>
										<td>£6000</td>
									</tr>
									<tr>
										<td>Double Bed - En Suite</td>
										<td>N/A</td>
										<td>N/A</td>
										<td>N/A</td>
									</tr>
								</table>
							</span>
						</div>
					</div>
					<div id="buttons-row" class="row">
						<a href="directions.php" id="get-dirs" class="btn btn-primary btn-block">Get Directions</a>
						<a href="walkingtour.php" id="take-tour" class="btn btn-primary btn-block">Take The Tour From Here</a>
					</div>
				</div>
				<div id="accom-three" class="row container-fluid js-list-item">
					<div id="description-row" class="row">
						<div class="col-lg-3 col-md-12">
							<img id="main-image"  alt="Accom Image" src="img/hayes-wharf.jpg">
						</div>
						<div id="description-container" class="col-lg-9 col-sm-12 content-box">
							<h3>Hayes Wharf House</h3>
							<span>
								Hayes Wharf House is a purpose-built student residence
								overlooking the Brayford Pool Campus. Its 224 en-suite
								bedrooms are split into shared apartments of two to five
								bedrooms. Facilities include Freeview television in every
								apartment with a free TV licence. Possessions insurance and
								up to 100Mb broadband and WiFi connection are included
								and there are laundry facilities on site.
								<br>
								With its enviable location overlooking the Brayford Waterfront, Hayes Wharf House offers modern purpose-built student accommodation in one of Lincoln’s most scenic and convenient locations.
								<br>
								The University of Lincoln campus is just a few minutes away, and you will find a range of shops, restaurants and trendy bars to help you relax and discover all that Lincoln has to offer, right on your doorstep.
								<br>
								Residents can choose from a range of room sizes to suit all needs, with our en suite bedrooms in spacious shared flats of two to five people. Whichever you choose, you will be provided with modern, comfy furnishings, ample storage, and plenty of living space.
								<br>
								<br>
								If you would like to book a viewing, or to make an enquiry, please call us on 01522 930 068 or email us at <a href="mailto:accommodation@lincoln.ac.uk">hayeswharfhouse@prodigy-living.co.uk</a>
							</span>
						</div>
					</div>
					<div id="features-row" class="row">
						<div id="features-container" class="col-lg-12 content-box">
							<h3>Features</h3>
							<span>
								<ul>
									<li>
										En-suite rooms are available
									</li>
									<li>
										Fully fitted kitchen
									</li>
									<li>
										Disabled access
									</li>
									Launderette facilities
									<li>
										24 hour on-campus security
									</li>
									Bicycle storage
									<li>
										Free internet, including WiFi
										coverage throughout, plus direct
										port access in rooms.
									</li>
								</ul>
							</span>
						</div>
					</div>
					<div id="price-row" class="row">
						<div id="price-container" class="col-lg-12 content-box">
							<h3>Prices</h3>
							<span>
								<table class="data table">
									<thead class="thead-inverse">
									<tr>
										<th>Room Type</th>
										<th>2015 Price Per Week</th>
										<th>2016 Price Per Week</th>
										<th>2016 Price Total</th>
									</tr>
									</thead>
									<tr>
										<td>Single Bed - Shared Bathroom</td>
										<td>N/A</td>
										<td>N/A</td>
										<td>N/A</td>
									</tr>
									<tr>
										<td>Single Bed - En Suite</td>
										<td>N/A</td>
										<td>N/A</td>
										<td>N/A</td>
									</tr>
									<tr>
										<td>Double Bed - Shared Bathroom</td>
										<td>N/A</td>
										<td>N/A</td>
										<td>N/A</td>
									</tr>
									<tr>
										<td>Double Bed - En Suite</td>
										<td>£115</td>
										<td>£110</td>
										<td>£5500</td>
									</tr>
								</table>
							</span>
						</div>
					</div>
					<div id="buttons-row" class="row">
						<a href="directions.php" id="get-dirs" class="btn btn-primary btn-block">Get Directions</a>
						<a href="walkingtour.php" id="take-tour" class="btn btn-primary btn-block">Take The Tour From Here</a>
					</div>
				</div>
				<div id="accom-four" class="row container-fluid js-list-item">
					<div id="description-row" class="row">
						<div class="col-lg-3 col-md-12">
							<img id="main-image"  alt="Accom Image" src="img/junxion.jpg">
						</div>
						<div id="description-container" class="col-lg-9 col-sm-12 content-box">
							<h3>The Junxion</h3>
							<span>
								Located in the city centre, just opposite the University
								Library and the Engine Shed, The Junxion offers 569 en-suite
								bedrooms in four, five or six-bedroom apartments with fully
								fitted kitchens, dining and lounge areas. Designed around a
								central courtyard, facilities include a lounge, launderette and
								cash machines. All apartments have a leather sofa, dishwasher,
								32” LCD television, free TV licence and Freeview. Sky Sports
								is available in the common room. Contents insurance, WiFi
								connection and broadband internet in all bedrooms is included.
								<br>
								With clean, modern décor, state-of-the-art facilities and a lively social scene, The Junxion is definitely an impressive place to call home.
								<br>
								Mezzino student apartments are designed to help you get as much out of student life as possible, which is why we have taken care of the some of the finer details of student accommodation for you.
								<br>
								From smart leather sofas to handy dishwashers, three quarter sized beds to free Broadband Internet access, every apartment is sure to be kitted out with everything you need to feel right at home. And with a dedicated on-site team and 24-hour security, you couldn't be in safer hands.
							</span>
						</div>
					</div>
					<div id="features-row" class="row">
						<div id="features-container" class="col-lg-12 content-box">
							<h3>Features</h3>
							<span>
								<ul>
									<li>
										En-suite rooms are available
									</li>
									<li>
										Fully fitted kitchen
									</li>
									<li>
										Disabled access
									</li>
									Launderette facilities
									<li>
										24 hour on-campus security
									</li>
									Bicycle storage
									<li>
										Free internet, including WiFi
										coverage throughout, plus direct
										port access in rooms.
									</li>
								</ul>
							</span>
						</div>
					</div>
					<div id="price-row" class="row">
						<div id="price-container" class="col-lg-12 content-box">
							<h3>Prices</h3>
							<span>
								<table class="data table">
									<thead class="thead-inverse">
									<tr>
										<th>Room Type</th>
										<th>2015 Price Per Week</th>
										<th>2016 Price Per Week</th>
										<th>2016 Price Total</th>
									</tr>
									</thead>
									<tr>
										<td>Single Bed - Shared Bathroom</td>
										<td>N/A</td>
										<td>N/A</td>
										<td>N/A</td>
									</tr>
									<tr>
										<td>Single Bed - En Suite</td>
										<td>N/A</td>
										<td>N/A</td>
										<td>N/A</td>
									</tr>
									<tr>
										<td>Double Bed - Shared Bathroom</td>
										<td>N/A</td>
										<td>N/A</td>
										<td>N/A</td>
									</tr>
									<tr>
										<td>Double Bed - En Suite</td>
										<td>£122</td>
										<td>£125</td>
										<td>£6250</td>
									</tr>
								</table>
							</span>
						</div>
					</div>
					<div id="buttons-row" class="row">
						<a href="directions.php" id="get-dirs" class="btn btn-primary btn-block">Get Directions</a>
						<a href="walkingtour.php" id="take-tour" class="btn btn-primary btn-block">Take The Tour From Here</a>
					</div>
				</div>
			</div>
			<!-- Page Content End -->

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
						<a class="nav-link js-prev" href="#">LOG IN</a>
					</li>
				</ul>
			</nav>
			<!-- Navbar Foot End -->
		</div>
		<!-- jQuery -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
		<!-- Bootstrap JavaScript -->
		<script src="frameworks/bootstrap4-alpha2/dist/js/bootstrap.js"></script>

		<!-- Other Scripts -->
		<script src="js/scroll-to-anchor.js"></script>
		<!--<script src="js/getCurrentPosition-gmaps.js"></script>-->

	</body>
</html>