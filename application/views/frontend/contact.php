<!-- Internal Page Header -->
	<style>
		#top-footer {
    background: #333 none repeat scroll 0% 0%;
    color: #D0D4D7;
    position: relative;
    border-top: 3px solid #C5A46D;
    padding: 80px 0px;
    margin-top: 100px;
	}

	.inner-content {
	  border: 3px solid #FFFFFF;
	  background: #FFFFFF;
	  text-align: center;
	  min-height: 160px;
	  position: relative;
	  overflow: hidden;
	  padding: 20px;
	  display: table;
	  width: 100%;
	  -webkit-transition: all 0.3s ease;
	  -o-transition: all 0.3s ease;
	  transition: all 0.3s ease;
	  -webkit-box-shadow: 0 0 0 2px #C5A46D, inset 0 0 0 1px #C5A46D;
	  box-shadow: 0 0 0 2px #C5A46D, inset 0 0 0 1px #C5A46D; }


	     .inner-content i {
    position: absolute;
    left: -20px;
    top: -20px;
    font-size: 11em;
    color: rgba(197, 164, 109, 0.1);
    -webkit-transition: all 0.3s ease;
    -o-transition: all 0.3s ease;
    transition: all 0.3s ease; }
     .inner-content i.fa-envelope-o {
      -webkit-transform: rotate(30deg);
      -ms-transform: rotate(30deg);
      -o-transform: rotate(30deg);
      transform: rotate(30deg); }
     .inner-content i.fa-phone {
      -webkit-transform: rotate(75deg);
      -ms-transform: rotate(75deg);
      -o-transform: rotate(75deg);
      transform: rotate(75deg); }
     .inner-content i.fa-map-marker {
      -webkit-transform: rotate(10deg);
      -ms-transform: rotate(10deg);
      -o-transform: rotate(10deg);
      transform: rotate(10deg); }
   .inner-content .info {
    font: 22px/35px "Lobster", Arial, Helvetica, sans-serif;
    display: table-cell;
    vertical-align: middle;
    -webkit-transition: all 0.3s ease;
    -o-transition: all 0.3s ease;
    transition: all 0.3s ease; }
   .inner-content:hover {
    background: #C5A46D; }
    body.contact.type-1 .inner-content:hover i {
      color: rgba(255, 255, 255, 0.1); }
    .inner-content:hover .info {
      color: #FFFFFF; 

  }
  .inner-content{
  	margin-top: 35px;
  }

  .contact-form-container{
  	padding-top: 25px;
  }

	</style>

	<div class="internal-page-title about-page" data-parallax="scroll" data-image-src="<?= base_url('assets/img/contact-header.jpg');?>">
		<h1><span>Contact</span> us</h1>
		<ol class="breadcrumb"><!-- Internal Page Breadcrumb -->
            <li><a href="<?= base_url('frontend_controller')?>">Home</a></li>
            <li class="active">Contact Us</li>
        </ol>
	</div>
	<!-- End of Internal Page Header -->
	
	<!-- Contact Page Container -->
	<div class="contact-page-container container">

		<!-- Contact Info -->
		<div class="contact-info-main-box clearfix">
			<div class="contact-info-box col-md-4">
				<div class="inner-content">
					<i class="fa fa-envelope-o"></i><div class="info">info@Heritage.com</div>
				</div>
			</div>
			<div class="contact-info-box col-md-4">
				<div class="inner-content">
					<i class="fa fa-phone"></i><div class="info">88-02-8414359</div>
				</div>
			</div>
			<div class="contact-info-box col-md-4">
				<div class="inner-content">
					<i class="fa fa-map-marker "></i><div class="info">Heritage Resort, Narsingdi</div>
				</div>
			</div>
		</div>

		<!-- Contact Form -->
		<div class="contact-form-container">
			<div class="how-contact col-md-4">
				<div class="title"><b>How</b> to contact</div>
				<div class="desc">
					Some description about that how the users of website can contact to you. Also you can add some description about the reply process and how much time it takes that your staff will reply the message.
				</div>
			</div>
			<div class="contact-form-box col-md-8">
				<form class="contact-form clearfix">
					<div class="col-md-6">
						<input type="text" name="name" placeholder="Full Name :">
						<input type="email" name="email" placeholder="Email :">
						<input type="text" name="phone" placeholder="Phone :">
					</div>
					<div class="col-md-6">
						<textarea name="message" placeholder="Your Message : "></textarea>
					</div>
					<div class="submit-container">
						<input type="submit" value="Submit" class="btn btn-default">
					</div>
				</form>
			</div>
		</div>

	</div>
	<!-- End of Contact Page Container -->
