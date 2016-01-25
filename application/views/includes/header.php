<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<title>Heritage Resort</title><!-- Website's title ( it will be shown in browser's tab ), Change the website's title based on your Resort information -->
	<meta name="description" content="Heritage is Resort and Resort HTML template."><!-- Add your Resort short description -->
	<meta name="keywords" content="Responsive,HTML5,CSS3,XML,JavaScript"><!-- Add some Keywords based on your Resort and your business and separate them by comma -->
	<meta name="author" content="Joseph a, ravistheme@gmail.com">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=2.0, user-scalable=no">
	<link href='https://fonts.googleapis.com/css?family=Lobster%7cRaleway:400,300,100,600,700,800' rel='stylesheet' type='text/css'><!-- Attach Google fonts -->
	<link rel="stylesheet" type="text/css" href="<?= base_url('assets/css/styles.css');?>"><!-- Attach the main stylesheet file -->
</head>
<body class="homepage trans-header sticky white-datepicker">
	
	<!-- Top Header -->
	
	<!-- End of Top Header -->

	<!-- Main Header -->
	<header id="main-header">
		<div class="inner-container container">
			<div class="left-sec col-sm-4 col-md-2 clearfix">
				<!-- Top Logo -->
				<div id="top-logo">
					<div class="title"><span>Heritage</span> Resort</div>
					<i class="fa fa-star-o"></i>
					<i class="fa fa-star-o"></i>
					<i class="fa fa-star-o"></i>
					<i class="fa fa-star-o"></i>
					<i class="fa fa-star-o"></i>
				</div>
			</div>
			<div class="right-sec col-sm-8 col-md-10 clearfix">

				<!-- Book Now -->

				<!-- Main Menu -->
				<nav id="main-menu">
					<ul class="list-inline">
						<li><a href="<?= site_url('frontend_controller')?>">Home</a></li>
						<li><a href="<?= site_url('frontend_controller/about')?>">About</a></li>
						
						<li><a href="#">Services</a>
						    <ul>
						        <li><a href="<?= site_url('frontend_controller/room')?>">Room & Suites</a></li>
						        <li><a href="<?= site_url('frontend_controller/restaurant')?>">Restaurant</a></li>
						        <!-- <li><a href="#">Packages</a>
						            <ul>
						                <li><a href="#">Family</a></li>
						                <li><a href="#">Picnic</a></li>
						                <li><a href="#">Honeymoon</a></li>
						                <li><a href="#">Holiday Packages</a></li>
						            </ul>
						        </li> -->
						    </ul>
						</li>
						
						<li><a href="<?= site_url('frontend_controller/gallery')?>">Gallery</a></li>
						<li><a href="<?= site_url('frontend_controller/reviews')?>">Reviews</a></li>
						<!-- <li><a href="#">Attraction</a>
							<ul>
								<li><a href="#">Events</a></li>
								<li><a href="#">Sea Bitch</a></li>
							</ul>
						</li> -->
						
						<li><a href="<?= site_url('frontend_controller/contact')?>">Contact</a></li>
					</ul>
				</nav>

				<!-- Menu Handel -->
				<div id="main-menu-handle" class="hidden-md hidden-lg"><i class="fa fa-bars"></i></div>
			</div>
		</div>
		<div id="mobile-menu-container" class="hidden-md hidden-lg"></div>
	</header>
	<!-- End of Main Header -->