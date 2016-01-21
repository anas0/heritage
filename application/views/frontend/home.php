<!-- Top Slider and Booking form -->
	<div id="home-top-section">
		
		<!-- Main Slider -->
		<div id="main-slider">
			<div class="items">
	            <a href="#">
	            	<img src="<?= base_url('assets/img/slider/1.jpg');?>" alt="3"/><!-- Change the URL section based on your image\'s name -->
	            </a>
	        </div>
	        <div class="items">
	            <a href="#">
	            	<img src="<?= base_url('assets/img/slider/3.jpg');?>" alt="3"/>
	            </a>
	        </div> Heritage View
	        <div class="items">
	            <a href="#">
	            	<img src="<?= base_url('assets/img/slider/4.jpg');?>" alt="4"/>
	            </a>
	        </div>
	        <div class="items">
	            <a href="#">
	            	<img src="<?= base_url('assets/img/slider/2.jpg');?>" alt="2"/>
	            </a>
	        </div>
	    </div>

		<!-- Booking Form -->
		
	<!-- End of Top Slider and Booking form -->

	<!-- Luxury Rooms -->
	<div id="luxury-rooms">
		<!-- Heading box -->
		<div class="heading-box">
			<h2>Luxury <span>Rooms</span></h2><!-- Title -->
			<div class="subtitle">Best rooms with Best services</div><!-- Subtitle -->
		</div>

		<!-- Room Box Container -->
		<div class="room-container container">
			<!-- Room box -->
			<div class="room-boxes">
				<img src="<?= base_url('assets/img/rooms/1.jpg');?>" alt="King Suit" class="room-img"><!-- Room Image -->
				<div class="room-details col-xs-6 col-md-4">
					<div class="title">King Suit</div><!-- Room title -->
					<div class="description"><!-- Room Description -->
						Short description of rooms will be located in this section that you can describe some special features and equipment of rooms. Visitors can get more information about this rooms by clicking on "Details" button.
					</div>
					<a href="#" class="btn btn-default">Details</a><!-- Detail link -->
				</div>
				<div class="price-container col-xs-6 col-md-8">
					<div class="price">
						<span>$550</span>
						- Per Night
					</div>
				</div>

			</div>

			<!-- Room box -->
			<div class="room-boxes right">
				<img src="<?= base_url('assets/img/rooms/2.jpg');?>" alt="Royal Suit" class="room-img">
				<div class="room-details col-xs-6 col-md-4">
					<div class="title">Royal Suit</div>
					<div class="description">
						Short description of rooms will be located in this section that you can describe some special features and equipment of rooms. Visitors can get more information about this rooms by clicking on "Details" button.
					</div>
					<a href="#" class="btn btn-default">Details</a>
				</div>
				<div class="price-container col-xs-6 col-md-8">
					<div class="price">
						<span>$490</span>
						- Per Night
					</div>
				</div>

			</div>
			<!-- Room box -->
			<div class="room-boxes">
				<img src="<?= base_url('assets/img/rooms/3.jpg');?>" alt="Deluxe Two-bedroom Suite" class="room-img">
				<div class="room-details col-xs-6 col-md-4">
					<div class="title">Deluxe Two-bedroom Suite</div>
					<div class="description">
						Short description of rooms will be located in this section that you can describe some special features and equipment of rooms. Visitors can get more information about this rooms by clicking on "Details" button.
					</div>
					<a href="#" class="btn btn-default">Details</a>
				</div>
				<div class="price-container col-xs-6 col-md-8">
					<div class="price">
						<span>$370</span>
						- Per Night
					</div>
				</div>

			</div>
		</div>
	</div>
	<!-- End of Luxury Rooms -->

	<!-- Special Packages -->
	<div id="special-packages" class="container">
		<!-- Heading box -->
		<div class="heading-box">
			<h2>Special <span>Packages</span></h2><!-- Title -->
			<div class="subtitle">Choose one of our special offers</div><!-- Subtitle -->
		</div>

		<!-- Package Container -->
		<div class="package-container clearfix">
			<!-- Package Box -->
			<div class="package-box wow fadeInUp col-sm-6 col-md-4">
				<div class="package-inner">
					<div class="title">Diamond</div>
					<div class="price"><span>$450</span>per night</div>
					<div class="package-details">
						<ul>
							<li>Flight Ticket</li>
							<li>Restaurant ( Lunch / Dinner )</li>
							<li>Music Concert</li>
							<li>Airport Pick-up</li>
							<li>Sport Activities</li>
						</ul>
					</div>
					<a href="#" class="btn btn-default">Select Package</a>
				</div>
			</div>

			<!-- Package Box -->
			<div class="package-box wow fadeInUp col-sm-6 col-md-4" data-wow-delay="0.5s">
				<div class="package-inner">
					<div class="title">Gold</div>
					<div class="price"><span>$340</span>per night</div>
					<div class="package-details">
						<ul>
							<li>Flight Ticket</li>
							<li>Restaurant ( Lunch )</li>
							<li>Music Concert ( 50% off )</li>
							<li>Airport Pick-up</li>
							<li>Sport Activities</li>						
						</ul>
					</div>
					<a href="#" class="btn btn-default">Select Package</a>
				</div>
			</div>

			<!-- Package Box -->
			<div class="package-box wow fadeInUp col-sm-6 col-md-4" data-wow-delay="1s">
				<div class="package-inner">
					<div class="title">Silver</div>
					<div class="price"><span>$230</span>per night</div>
					<div class="package-details">
						<ul>
							<li>Flight Ticket</li>
							<li>Restaurant ( 20% off Lunch )</li>
							<li>Music Concert ( 30% off )</li>
							<li>Airport Pick-up</li>
							<li>Sport Activities</li>
						</ul>
					</div>
					<a href="#" class="btn btn-default">Select Package</a>
				</div>
			</div>

		</div>
	</div>
	<!-- End of Special Packages -->

	<!-- Gallery -->
	<div id="gallery">
		<!-- Heading box -->
		<div class="heading-box">
			<h2>Heritage <span>Gallery</span></h2><!-- Title -->
		</div>

		<!-- Gallery Container -->
		<div class="gallery-container">
			<div class="sort-section">
				<div class="sort-section-container">
					<div class="sort-handle">Filters</div>
					<ul class="list-inline">
						<li><a href="#" data-filter="*" class="active">All</a></li>
						<li><a href="#" data-filter=".park">Park</a></li>
						<li><a href="#" data-filter=".pool">Pool & Bridge</a></li>
						<li><a href="#" data-filter=".fuara">Fuara</a></li>
						<li><a href="#" data-filter=".green">Green House</a></li>
						<li><a href="#" data-filter=".saff">Saff</a></li>
					</ul>
				</div>
			</div>
			<ul class="image-main-box clearfix">
				<li class="item col-xs-6 col-md-3 park">
					<figure>
						<img src="<?= base_url('assets/img/gallery/1.jpg');?>" alt="11"/>
						<a href="<?= base_url('assets/img/gallery/1.jpg');?>" class="more-details" data-title="Great View">Enlarge</a>
						<figcaption>
							<h4><span>Park</span> View</h4>
						</figcaption>
					</figure>
				</li>
				<li class="item col-xs-6 col-md-6 pool">
					<figure>
						<img src="<?= base_url('assets/img/gallery/2.jpg');?>" alt="11"/>
						<a href="<?= base_url('assets/img/gallery/2.jpg');?>" class="more-details" data-title="Outdoor Pool">Enlarge</a>
						<figcaption>
							<h4>Pool</h4>
						</figcaption>
					</figure>
				</li>
				<li class="item col-xs-6 col-md-3 park">
					<figure>
						<img src="<?= base_url('assets/img/gallery/3.jpg');?>" alt="11"/>
						<a href="<?= base_url('assets/img/gallery/3.jpg');?>" class="more-details" data-title="Delicious Foods">Enlarge</a>
						<figcaption>
							<h4><span>Park</span> View</h4>
						</figcaption>
					</figure>
				</li>
				<li class="item col-xs-6 col-md-3 pool">
					<figure>
						<img src="<?= base_url('assets/img/gallery/4.jpg');?>" alt="11"/>
						<a href="<?= base_url('assets/img/gallery/4.jpg');?>" class="more-details" data-title="International Foods">Enlarge</a>
						<figcaption>
							<h4>Bridge</h4>
						</figcaption>
					</figure>
				</li>
				<li class="item col-xs-6 col-md-3 green">
					<figure>
						<img src="<?= base_url('assets/img/gallery/5.jpg');?>" alt="11"/>
						<a href="<?= base_url('assets/img/gallery/5.jpg');?>" class="more-details" data-title="Cozy Spaces">Enlarge</a>
						<figcaption>
							<h4><span>Green</span> House</h4>
						</figcaption>
					</figure>
				</li>
				<li class="item col-xs-6 col-md-3 saff">
					<figure>
						<img src="<?= base_url('assets/img/gallery/6.jpg');?>" alt="11"/>
						<a href="<?= base_url('assets/img/gallery/6.jpg');?>" class="more-details" data-title="Comfortable Rooms">Enlarge</a>
						<figcaption>
							<h4>Saff</h4>
						</figcaption>
					</figure>
				</li>
				<li class="item col-xs-6 col-md-3 fuara">
					<figure>
						<img src="<?= base_url('assets/img/gallery/7.jpg');?>" alt="11"/>
						<a href="<?= base_url('assets/img/gallery/7.jpg');?>" class="more-details" data-title="Relaxation Spaces">Enlarge</a>
						<figcaption>
							<h4><span>Water</span> Fuara</h4>
						</figcaption>
					</figure>
				</li>
				<li class="item col-xs-6 col-md-6 pool">
					<figure>
						<img src="<?= base_url('assets/img/gallery/8.jpg');?>" alt="11"/>
						<a href="<?= base_url('assets/img/gallery/8.jpg');?>" class="more-details" data-title="Indoor Pool">Enlarge</a>
						<figcaption>
							<h4>Pool</h4>
						</figcaption>
					</figure>
				</li>
			</ul>
			
		</div>
	</div>