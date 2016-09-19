<?php
$current = 'home';
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

			<!-- Page Content Start-->
			<div id="content-container" class="container-fluid">
				<div class="row">
					<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
						<ol class="carousel-indicators">
							<li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
							<li data-target="#carousel-example-generic" data-slide-to="1"></li>
							<li data-target="#carousel-example-generic" data-slide-to="2"></li>
						</ol>
						<div class="carousel-inner" role="listbox">
							<div class="carousel-item active">
								<img class="img-fluid" src="img/carousel/UoL.jpg" alt="First slide">
							</div>
							<div class="carousel-item">
								<img class="img-fluid" src="img/carousel/Cathedral.jpg"  alt="Second slide">
							</div>
							<div class="carousel-item">
								<img class="img-fluid" src="img/carousel/Library.jpg"  alt="Third slide">
							</div>
						</div>
						<a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
							<span class="icon-prev" aria-hidden="true"></span>
							<span class="sr-only">Previous</span>
						</a>
						<a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
							<span class="icon-next" aria-hidden="true"></span>
							<span class="sr-only">Next</span>
						</a>
					</div>
				</div>
				<div id="site-description-row" class="row">
					<div id="site-description-one" class="col-lg-8 col-md-12 content-box">
						<h3>Walk Lincoln <small class="text-muted">Helping you find student accomodation in Lincoln.</small></h3>
						<span>
							Walk lincolns main aim is to help students find first year accomodation. <br>
							To view the complete range of accomodations on offer visit our <a href="accom.php">accomodations</a> page. Here you can view all the important details <b><i>YOU</i></b> care about! From current prices to the features they offer, we've got it all!<br>
							Are you <b><i>LOST</i></b> ? No problem! Use our <a href="directions.php">directions</a> feature to get up to date walking directions around lincoln!<br>
							Did you miss a university guided <b><i>TOUR</i></b> ? We've got you covered! Take a tour of all the accomodations lincoln has to offer with our <a href="walkingtour.php">walking tour</a> feature!<br>
							<br>
							<br>
							Now get out there and <b><i>WALK LINCOLN !</i></b>
						</span>
					</div>
					<div id="site-description-two" class="col-lg-4 hidden-md-down content-box">
						<blockquote style="height:100%" class="blockquote blockquote-reverse">
							<p class="m-b-0">Walk lincoln helped me find my first year accomodation with ease! Im so happy!</p>
							<footer class="blockquote-footer">First year student <cite title="Source Title">University of Lincoln</cite></footer>
						</blockquote>
						<blockquote style="height:100%" class="blockquote blockquote-reverse">
							<p class="m-b-0">I was so confused at first, but walk lincoln showed me the way! It was such a useful tool!</p>
							<footer class="blockquote-footer">Second year student <cite title="Source Title">University of Lincoln</cite></footer>
						</blockquote>
					</div>
				</div>
				<div id="accom-preview-row" class="row">
					<div id="accom-preview" class="col-lg-4 col-sm-12 content-box">
						<h4>Accommodation Preview <small class="text-muted">Junxion</small></h4>
						<span>
							<img style="height:200px; width:200px;" src="img/homepage-junxion.jpg">The Junxion, which is city centre based, offers state-of-the-art living just a stone's throw away from the Lincoln University campus and 'The Engine Shed', the campus Student Union bar, putting The Junxion in a prime location to make your time at Lincoln University even better.<br> With clean, modern décor, state-of-the-art facilities and a lively social scene, The Junxion is definitely an impressive place to call home. From smart leather sofas to handy dishwashers, three quarter sized beds to free Broadband Internet access, every apartment is sure to be kitted out with everything you need to feel right at home. And with a dedicated on-site team and 24-hour security, you couldn't be in safer hands.
							<a href="accom.php"><button id="accom-link-one" class="btn btn-primary btn-block">View All Accomodations</button></a>
						</span>
					</div>
					<div id="accom-preview" class="col-lg-4 hidden-md-down content-box">
						<h4>Accommodation Preview <small class="text-muted">Pavillions</small></h4>
						<span>
							<img style="height:200px; width:200px;" src="img/homepage-pavs.jpg">With its superb location nestled between the University of Lincoln’s campus buildings, Pavilion House offers modern-purpose student accommodation that is just a short walk from all that Lincoln has to offer.<br>All residents benefit from all-inclusive utility bills, up to 100 Mb Wi-Fi, communal spaces with comfy seating and fully-packaged SKY TV, regular social events, secure bike, onsite laundry facilities, and 24-hour onsite staff presence with secure fob entry to the building to give you peace of mind when it comes to your safety.<br> Residents can choose from a range of room sizes; either en suite rooms in our spacious shared flats of two to six people.
							<a href="accom.php"><button id="accom-link-one" class="btn btn-primary btn-block">View All Accomodations</button></a>
						</span>
					</div>
					<div id="accom-preview" class="col-lg-4 hidden-md-down content-box">
						<h4>Accommodation Preview <small class="text-muted">The Student Village</small></h4>
						<span>
							<img style="height:200px; width:200px;" src="img/homepage-stuvil.jpg">The Lincoln Courts is the University’s waterfront accommodation complex, situated on campus in the heart of the Student Village. Lincoln prides itself on having a variety of student accommodation available within easy walking distance of our academic buildings and social spaces. Lincoln Courts residents are just a few minutes away from the University’s academic buildings, as well as the Student Support Centre, the Engine Shed and the city centre. The complex is made up of 17 contemporary buildings of self-catered apartments, each one housing five to eight students. In total there are 1,037 furnished student bedrooms. Some apartments have rooms designed specifically for students with disabilities.
							<a href="accom.php"><button id="accom-link-one" class="btn btn-primary btn-block">View All Accomodations</button></a>
						</span>
					</div>
				</div>
			</div>
			<!-- Page Content End -->

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
		<!-- jQuery -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
		<!-- Bootstrap JavaScript -->
		<script src="frameworks/bootstrap4-alpha2/dist/js/bootstrap.js"></script>

		<!-- Other Scripts -->
		<script src="js/scroll-to-anchor.js"></script>
	</body>
</html>