<!-- 	<!DOCTYPE html>
<html lang="en">
    <!-- Basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">   
   
    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
 
     <!-- Site Metas -->
    <title>Ciber Shift</title>  
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Site Icons -->
    <link rel="shortcut icon" href="images/jeiner.....png" type="image/x-icon" />
    <link rel="apple-touch-icon" href="images/apple-touch-icon.png">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- Site CSS -->
    <link rel="stylesheet" href="style.css">
    <!-- ALL VERSION CSS -->
    <link rel="stylesheet" href="css/versions.css">
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="css/responsive.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/custom.css">

    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>
<body class="barber_version">

    <!-- LOADER -->
    <div id="preloader">
        <div class="cube-wrapper">
		  <div class="cube-folding">
			<span class="leaf1"></span>
			<span class="leaf2"></span>
			<span class="leaf3"></span>
			<span class="leaf4"></span>
		  </div>
		  <div class="mus">
			<img id	="img2"src="images/jeiner.....png" alt="" />
		  </div>
		  <span class="loading" data-name="Loading">ciber Shift cargando ....
		</div>
    </div><!-- end loader -->
    <!-- END LOADER -->

	<div class="top-add alert alert-light alert-dismissible">
		<button type="button" class="close" data-dismiss="alert">&times;</button>
		<strong>Success!</strong> This alert box could indicate a successful or positive action.
	</div>
    <!-- Start header -->
	<header class="top-navbar">
		<nav class="navbar navbar-expand-lg navbar-light bg-light">
			<div class="container">
				<a class="navbar-brand" href="<?php echo base_url();?>cita">
					<img src="" alt="" />
				</a>
				<button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbars-rs-food" aria-controls="navbars-rs-food" aria-expanded="false" aria-label="Toggle navigation">
					<span class="icon-bar top-bar"></span>
					<span class="icon-bar middle-bar"></span>
					<span class="icon-bar bottom-bar"></span>
				</button>
				<div class="collapse navbar-collapse" id="navbars-rs-food">
				<ul class="navbar-nav ml-auto">
						<li class="nav-item"><a class="nav-link" href="<?php echo base_url();?>services">Our Services</a></li>
						<li class="nav-item active"><a class="nav-link" href="<?php echo base_url();?>about">About Us</a></li>
						<li class="nav-item"><a class="nav-link" href="<?php echo base_url();?>barbers">Our Barbers</a></li>
						<li class="nav-item"><a class="nav-link" href="<?php echo base_url();?>appointment">Appointment</a></li>
						<li class="nav-item"><a class="nav-link" href="<?php echo base_url();?>contact">Contact</a></li>
					</ul>
				</div>
			</div>
		</nav>
	</header>
	<!-- End header -->

	<!-- Page Content -->
	<div id="page-content-wrapper">
		<div class="all-page-bar">
			<div class="container">
				<div class="row">
					<div class="col-xs-12 col-sm-12 col-md-12">
						<div class="title title-1 text-center">
							<div class="much">
								<img id="img3"src="images/jeiner.....png" alt=""/>
							</div>
							
							<div class="title--heading">
								<h1>Appointment</h1>
							</div>
							<div class="clearfix"></div>
							
							<ol class="breadcrumb">
								<li><a href="index-3.html">Home</a></li>
								<li class="active">Appointment</li>
							</ol>
						</div>
						<!-- .title end -->
					</div>
				</div>
			</div>
		</div><!-- end all-page-bar -->

		<div id="appointment" class="section wb">
			<div class="container">
				<div class="section-title row text-center">
					<div class="col-md-8 offset-md-2">
						<small>LET'S MAKE AN APPOINTMENT FOR YOUR LIFE</small>
						<h3>Book now</h3>
					</div>
				</div><!-- end title -->

				<div class="row">
					<div class="col-lg-12">
						<div class="contact_form">
							<div id="message"></div>
								<form id="contactfor" class="row" name="contactfor" method="POST" action = "<?php echo base_url().route_to('cita')?>">
									<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
										<input type="text" name="first_name" id="first_name" class="form-control" placeholder="First Name">
									</div>
									<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
										<input type="text" name="last_name" id="last_name" class="form-control" placeholder="Last Name">
									</div>
									<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
										<input type="email" name="email" id="email" class="form-control" placeholder="Your Email">
									</div>
									<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
										<input type="text" name="phone" id="phone" class="form-control" placeholder="Your Phone">
										
									</div>
									 
									<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12"	
									 
										<p>Seleccione la hora</p>
										<input type="time" name="tiempo" id="hora" class="form-control" values="tiempo" value="11:45:00" max="22:30:00" min="10:00:00">
										
									</div>

									<div id=""class=" col-lg-12 col-md-12 col-sm-12 col-xs-12">
									
									 
									    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
										
									</div>
									<div class="form-btn text-center">
										 <button class="btn btn-primary" >Guardar</button></button>
										 
									</div>

							
								</fieldset>
							</form>
						</div>
					</div><!-- end col -->
				</div><!-- end row -->
			</div><!-- end container -->
		</div><!-- end section -->
</div><!-- end section -->



		<div id="testimonials" class="parallax section db parallax-inner-bg">
			<div class="container">
				<div class="section-title row text-center">
					<div class="col-md-8 offset-md-2">
						

		
					
				</div>
	
    

    <a href="#" id="scroll-to-top" class="dmtop global-radius"><i class="fa fa-angle-up"></i></a>

    <!-- ALL JS FILES -->
    <script src="js/all.js"></script>
	<script src="js/responsive-tabs.js"></script>
    <!-- ALL PLUGINS -->
    <script src="js/custom.js"></script>

    <!-- Menu Toggle Script -->
    <script>
    (function($) {
        "use strict";
        $("#menu-toggle").click(function(e) {
            e.preventDefault();
            $("#wrapper").toggleClass("toggled");
        });
        smoothScroll.init({
            selector: '[data-scroll]', // Selector for links (must be a class, ID, data attribute, or element tag)
            selectorHeader: null, // Selector for fixed headers (must be a valid CSS selector) [optional]
            speed: 500, // Integer. How fast to complete the scroll in milliseconds
            easing: 'easeInOutCubic', // Easing pattern to use
            offset: 0, // Integer. How far to offset the scrolling anchor location in pixels
            callback: function ( anchor, toggle ) {} // Function to run after scrolling
        });
    })(jQuery);
    </script>

</body>
</html>