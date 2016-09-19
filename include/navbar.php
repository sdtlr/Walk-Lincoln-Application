<div class="pos-f-t">	
	<nav class="navbar navbar-light bg-faded">
		<button class="navbar-toggler hidden-sm-up pull-xs-right" type="button" data-toggle="collapse" data-target="#exCollapsingNavbar">
			&#9776;
		</button>
		<div class="navbar-toggleable-xs">
			<a class="navbar-brand" href="#">Walk Lincoln</a>
			<ul class="nav navbar-nav hidden-xs-down">
				<li <?php if($current == 'home') {echo 'class="nav-item active"';} else {echo 'class="nav-item"';} ?>>
					<a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
				</li>
				<li <?php if($current == 'accom') {echo 'class="nav-item active"';} else {echo 'class="nav-item"';} ?>>
					<a class="nav-link" href="accom.php">Accomodations</a>
				</li>
				<li <?php if($current == 'poi') {echo 'class="nav-item active"';} else {echo 'class="nav-item"';} ?>>
					<a class="nav-link" href="poi.php">Places Of Interest</a>
				</li>
				<li class="nav-item dropdown" <?php if($current == 'dir' OR 'tour') {echo 'class="nav-item active"';} else {echo 'class="nav-item"';} ?>>
				    <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Walking Tour</a>
				    <div class="dropdown-menu">
				      <a class="dropdown-item" href="directions.php">Get Directions</a>
				      <a class="dropdown-item" href="walkingtour.php">Take The Tour</a>
				    </div>
				</li>
			</ul>
		</div>
	</nav>
	<div class="collapse" id="exCollapsingNavbar">
		<div class="p-a-1 navbar-expand">
			<ul class="col-sm-1">
				<li class="nav-item" <?php if($current == 'home') {echo 'class="nav-item active"';} else {echo 'class="nav-item"';} ?>>
					<a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
				</li>
				<li class="nav-item" <?php if($current == 'accom') {echo 'class="nav-item active"';} else {echo 'class="nav-item"';} ?>>
					<a class="nav-link" href="accom.php">Accomodations</a>
				</li>
				<li class="nav-item" <?php if($current == 'poi') {echo 'class="nav-item active"';} else {echo 'class="nav-item"';} ?>>
					<a class="nav-link" href="poi.php">Places Of Interest</a>
				</li>
				<li class="nav-item" <?php if($current == 'dir') {echo 'class="nav-item active"';} else {echo 'class="nav-item"';} ?>>
					<a class="nav-link" href="directions.php">Get Directions</a>
				</li>
				<li class="nav-item" <?php if($current == 'tour') {echo 'class="nav-item active"';} else {echo 'class="nav-item"';} ?>>
					<a class="nav-link" href="walkingtour.php">Walking Tour</a>
				</li>
			</ul>
		</div>
	</div>
</div>