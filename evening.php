<?php
	$password = $_COOKIE['password'];

    if (!isset($password) || $password !== 'evening') {
        header('Location: index.php');
        exit;
    }
?>

<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Laura &amp; Oliver | 1st June 2019</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Welcome to the wedding website of Laura &amp; Oliver" />

	<!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
	<link rel="shortcut icon" href="favicon.ico">

    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=GFS+Didot" rel="stylesheet">
	
	<!-- Animate.css -->
	<link rel="stylesheet" href="css/animate.css">
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="css/icomoon.css">
	<!-- Simple Line Icons -->
	<!-- <link rel="stylesheet" href="css/simple-line-icons.css"> -->
	<!-- Owl Carousel -->
	<!-- <link rel="stylesheet" href="css/owl.carousel.min.css">
	<link rel="stylesheet" href="css/owl.theme.default.min.css"> -->
	<!-- Magnific popup  -->
	<!-- <link rel="stylesheet" href="css/magnific-popup.css"> -->
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="css/bootstrap.css">
	
	<link rel="stylesheet" href="css/style.css">
	<!-- Custom -->
	<link rel="stylesheet" href="css/custom.css">

	<link rel="shortcut icon" href="/favicon.ico" type="image/x-icon">
	<link rel="icon" href="/favicon.ico" type="image/x-icon">

	<!-- Modernizr JS -->
	<script src="js/modernizr-2.6.2.min.js"></script>
	<!-- FOR IE9 below -->
	<!--[if lt IE 9]>
	<script src="js/respond.min.js"></script>
	<![endif]-->

	</head>
	<body>
	<header role="banner" id="qbootstrap-header">
		<div class="container">
			<!-- <div class="row"> -->
		    <nav class="navbar navbar-default">
	        <div class="navbar-header">
	        	<!-- Mobile Toggle Menu Button -->
				<a href="#" class="js-qbootstrap-nav-toggle qbootstrap-nav-toggle" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar"><i></i></a>
	          	<a class="navbar-brand" href="index.html"><img src="images/ol-logo.png" alt="OL Logo" /></a> 
	        </div>
	        <div id="navbar" class="navbar-collapse collapse">
	          <ul class="nav navbar-nav navbar-right">
	            <li class="active"><a href="#" data-nav-section="home"><span>Home</span></a></li>
	            <li><a href="#" data-nav-section="schedule"><span>Schedule</span></a></li>
	            <li><a href="#" data-nav-section="accommodation"><span>Accommodation</span></a></li>
	            <li><a href="#" data-nav-section="about-foxhill"><span>About Foxhill Manor</span></a></li>
	            <li><a href="#" data-nav-section="our-story"><span>Our story</span></a></li>
	            <li><a href="#" data-nav-section="rsvp"><span>RSVP</span></a></li>
	          </ul>
	        </div>
		    </nav>
		  <!-- </div> -->
	  </div>
	</header>
	
	<div class="qbootstrap-hero" data-section="home">
		<div class="qbootstrap-overlay"></div>
		<div class="qbootstrap-cover text-center" style="background-image: url(images/foxhill/WRD0013.jpg); background-position: center !important;">
			<div class="display-t">
				<div class="display-tc">
					<div class="container">
						<div class="col-md-10 col-md-offset-1">
							<div class="animate-box svg-sm colored">
								<h1 class="holder"><span>WELCOME</span></h1>
								<img src="images/ol-logo.png" width="auto" height="auto" />
								<h3>01.06.2019</h3>
								<p>Laura and Ollie invite you</p>
								<p>to celebrate our marriage with us</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Schedule -->
	<div class="schedule section" data-section="schedule">
		<div class="container">
			<div class="row animate-box">
				<div class="col-md-8 col-md-offset-2 animate-box">
					<div class="col-md-12 text-center section-heading svg-sm colored">
						<h2>Evening Schedule</h2>
					</div>
				</div>
			</div>
			<div class="row animate-box schedule-item">
				<div class="col-md-8 col-md-offset-2 text-center">
					<div class="col-md-12 text-center">
						<h3 class="large">19:30</h3>
						<p>Arrive for the wedding reception.<br>This is where the celebrations begin</p>
					</div>
				</div>
			</div>

			<div class="row animate-box schedule-item">
				<div class="col-md-8 col-md-offset-2 text-center">
					<div class="col-md-12 text-center">
						<h3 class="large">20:30</h3>
						<p>Cut the cake, and have a piece</p>
					</div>
				</div>
			</div>

			<div class="row animate-box schedule-item">
				<div class="col-md-8 col-md-offset-2 text-center">
					<div class="col-md-12 text-center">
						<h3 class="large">21:00</h3>
						<p>The party starts, with a mystery guest</p>
					</div>
				</div>
			</div>

			<div class="row animate-box schedule-item">
				<div class="col-md-8 col-md-offset-2 text-center">
					<div class="col-md-12 text-center">
						<h3 class="large">22:00</h3>
						<p>Shots of tequila at the bar for the lads</p>
					</div>
				</div>
			</div>

			<div class="row animate-box schedule-item">
				<div class="col-md-8 col-md-offset-2 text-center">
					<div class="col-md-12 text-center">
						<h3 class="large">00:00</h3>
						<p>Carages at midnight.<br>Get out! Go home</p>
					</div>
				</div>
			</div>

		</div>
		<div class="schedule-left">
			<p>This is a black tie event</p>
			<p>No children allowed</p>
		</div>

		<div class="schedule-right">
			<p>Text here?</p>
		</div>
	</div>

	<div class="qbootstrap-bg bg-image" style="background-image: url(images/foxhill/WRD9815.jpg); background-position: center;"></div>

	<div class="section accommodation" data-section="accommodation">
		<div class="container">
			<div class="row animate-box">
				<div class="col-md-8 col-md-offset-2">
					<div class="col-md-12 text-center section-heading svg-sm-2">
						<h2>Accommodation</h2>
					</div>
				</div>
			</div>
			
			<div class="row animate-box accommodation-item evening">
				<div class="col-md-12 text-center">
					<div class="col-md-4 text-center item">
						<div class="image">
							<img src="images/foxhill/WRD9877.jpg" alt="Stables">
						</div>

						<h3>THE STABLES</h3>

						<p>Surrounded by lawns and woodland, this upscale boutique hotel in an Arts & Crafts stone manor house is 2 miles from the Broadway Tower landmark, and 3 miles from the GR Museum</p>

						<span class="amount">£210</span>
						<span class="price last">Per night</span>

						<p><a href="#" target="_blank" class="btn btn-primary">Visit Website</a></p>
					</div>

					<div class="col-md-4 text-center item">
						<div class="image">
							<img src="images/foxhill/WRD0082.jpg" alt="Dormy House">
						</div>

						<h3>DORMEY HOUSE</h3>

						<p>This fabulously glamorous property feels more hip home than hotel and enjoys a spectacular setting, with extensive grounds, spacious rooms, fabulous views and retro-chic furnishings.</p>

						<span class="amount">£210</span>
						<span class="price last">Per night</span>

						<p><a href="#" target="_blank" class="btn btn-primary">Visit Website</a></p>
					</div>

					<div class="col-md-4 text-center item">
						<div class="image">
							<img src="images/foxhill/WRD9920.jpg" alt="The Fish">
						</div>

						<h3>THE FISH</h3>

						<p>Perched high above the village of Broadway with fabulous views across the Cotswolds, Dormy House is the perfect rural retreat. Think cosy corners, log fires and sumptuous interiors.</p>

						<span class="amount">£210</span>
						<span class="price last">Per night</span>

						<a href="#" target="_blank" class="btn btn-primary">Visit Website</a>
					</div>
				</div>

				<div class="col-md-12 text-center contact">
					<p>Please contact Jennifer Broad and mention wedding reference LAO010619</p>
				</div>
			</div>

		</div>
	</div>

	<div class="qbootstrap-bg bg-image" style="background-image: url(images/IMG_4091.jpg); background-position: center;"></div>

	<div class="helpful-info section" data-section="about-foxhill">
		<div class="container">
			<div class="row animate-box">
				<div class="col-md-8 col-md-offset-2">
					<div class="col-md-12 text-center section-heading svg-sm-2">
						<h2>About Foxhill Manor</h2>
					</div>
				</div>
			</div>
			
			<div class="row animate-box info-item">
				<div class="col-md-8 col-md-offset-2 text-center">
					<div class="col-lg-12 text-center">
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis.</p>
					</div>
				</div>
			</div>

			<div class="row animate-box">
				<div class="col-md-12 text-center">
					<div class="col-md-6 text-center info-item">
						<div class="info-section">
						<h3>Getting Here</h3>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida.</p>
							<p>Risus commodo viverra mae cenas accumsan lacus vel facilisis.</p>

							<h4>CAR</h4>

							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida.</p>

							<p>Risus commodo viverra mae cenas accumsan lacus vel facilisis.</p>


							<h4>PLANE</h4> 

							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. </p>

							<a class="btn btn-primary" target="_blank" href="#">VIEW LOCATION MAP</a>
						</div>
					</div>

					<div class="col-md-6 text-center info-item">
						<div class="info-section">
							<h3>Farnscombe estate</h3>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida.</p>
							<p>Risus commodo viverra mae cenas accumsan lacus vel facilisis.</p>

							<a class="btn btn-primary" target="_blank" href="#">VIEW MAP</a>
						</div>
	
						<div class="info-section">
							<h3>Taxis</h3>
							<p>Taxi Company - 01234 567890<br>
							Taxi Company Two - 01234 567890<br>
							Taxi Company Three - 01234 567890</p>
						</div>
					</div>
				</div>
			</div>

		</div>
	</div>

	<div class="qbootstrap-bg bg-image" style="background-image: url(images/IMG_4096.jpg); background-position: center;"></div>

	<div class="our-story section" data-section="our-story">
		<div class="container">
			<div class="row animate-box">
				<div class="col-md-8 col-md-offset-2">
					<div class="col-md-12 text-center section-heading svg-sm-2">
						<h2>Our Story</h2>
					</div>
				</div>
			</div>
			
			<div class="row animate-box story-item">
				<div class="col-md-8 col-md-offset-2 text-center">
					<div class="col-lg-12 text-center">
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis.</p>
					</div>
				</div>
			</div>

			<div class="row animate-box story-row">
				<div class="col-md-12 text-center">
					<div class="col-md-4 text-center story-item">
						<div class="thumbnail">
							
						</div>
						<h3>About Laura</h3>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida.</p>
						<p>Risus commodo viverra mae cenas accumsan lacus vel facilisis.</p>
					</div>

					<div class="col-md-4 text-center story-item">
						<div class="thumbnail">
							
						</div>
						<h3>About Ollie</h3>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida.</p>
						<p>Risus commodo viverra mae cenas accumsan lacus vel facilisis.</p>
					</div>

					<div class="col-md-4 text-center story-item">
						<div class="thumbnail">
							
						</div>
						<h3>How We met</h3>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida.</p>
						<p>Risus commodo viverra mae cenas accumsan lacus vel facilisis.</p>
					</div>
				</div>
			</div>

			<div class="row animate-box story-row">
				<div class="col-md-8 col-md-offset-2 text-center">
					<div class="col-md-6 text-center story-item">
						<div class="thumbnail">
							
						</div>
						<h3>Saying "YES"!!</h3>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida.</p>
						<p>Risus commodo viverra mae cenas accumsan lacus vel facilisis.</p>
					</div>

					<div class="col-md-6 text-center story-item">
						<div class="thumbnail">
							
						</div>
						<h3>Isobelle</h3>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida.</p>
						<p>Risus commodo viverra mae cenas accumsan lacus vel facilisis.</p>
					</div>
				</div>
			</div>

		</div>
	</div>

	<div class="qbootstrap-bg bg-image" style="background-image: url(images/foxhill/stone.jpg); background-position: bottom -100px center;"></div>

	<div class="section rsvp" data-section="rsvp">
		<div class="overlay"></div>
		<div class="container">
			<div class="row animate-box">
				<div class="col-md-10 col-md-offset-1">
					<div class="col-md-8 text-center section-heading svg-sm">
						<h2>RSVP</h2>
						<div class="row">
						<div class="col-md-10 col-md-offset-1">
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
						</div>
					</div>
					</div>
				</div>
			</div>
			<div class="row animate-box">
				<form class="form-inline rsvp-form">
					<div class="col-md-10 col-md-offset-1">
						<div class="col-md-6">
							<div class="form-group">
								<label for="name" class="sr-only">Name</label>
								<input type="name" class="form-control full-name" id="name" name="full-name" placeholder="Full Name">
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
								<label for="email" class="sr-only">Email</label>
								<input type="email" class="form-control email-address" id="email" name="email-address" placeholder="Email">
							</div>
						</div>
					</div>

					<div class="col-md-10 col-md-offset-1">
						<div class="col-md-6">
							<div class="form-group">
								<label class="checkbox-container">I accept with pleasure
								  	<input type="checkbox" id="yes" name="yes" value="yes" class="rsvp-choice">
								  	<span class="checkmark"></span>
								</label>
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
								<label class="checkbox-container">I decline with sincere regret
								  	<input type="checkbox" id="no" name="no" value="no" class="rsvp-choice">
								  	<span class="checkmark"></span>
								</label>
							</div>
						</div>
					</div>

					<div class="col-md-10 col-md-offset-1">
						<div class="col-md-6">
							<div class="form-group">
								<label for="name" class="sr-only">Attendees</label>
								<textarea rows="6" class="form-control attendees" id="attendees" name="attendees" placeholder="Attendees"></textarea>
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
								<label for="email" class="sr-only">Dietary requirements</label>
								<textarea rows="6" class="form-control" id="dietary_requirements" name="dietary-requirements" placeholder="Dietary requirements"></textarea>
							</div>
						</div>
					</div>

					<div class="col-md-10 col-md-offset-1">
						<div class="col-md-6">
							
						</div>
						<div class="col-md-6">
							<div class="col-md-6 send-rsvp-button">
								<button type="submit" class="btn btn-default btn-block">Send RSVP</button>
							</div>
						</div>
						<div class="confirmation">
							<p><span class="fa fa-check"></span></p>
						</div>
					</div>
				</form>
			</div>
			<div class="row animate-box">
				<div class="col-md-10 col-md-offset-1">
					<div class="col-md-12 text-center svg-sm">
						<div class="row">
							<div class="col-md-10 col-md-offset-1">
								<p>If you have any questions about the wedding, please feel free to contact our wedding planners, Louise Perry Weddings</p>

								<p><span class="highlight">Louise</span><br> 
								07795 555696<br>
								<a href="mailto:louise@louiseperryweddings.com" class="mailto">louise@louiseperryweddings.com</a></p>

								<p><span class="highlight">Natalie</span><br> 
								07939 007257<br>
								<a href="mailto:natalie@louiseperryweddings.com" class="mailto">natalie@louiseperryweddings.com</a></p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<footer id="footer" role="contentinfo" class="footer">
		<div class="container">
			<div class="row row-bottom-padded-sm">
				<div class="col-md-4 col-md-offset-4 text-center">
					<img src="images/ol-logo.png" width="80" height="auto" />
				</div>
			</div>
		</div>
	</footer>
	
	<!-- jQuery -->
	<script src="js/jquery.min.js"></script>
	<!-- jQuery Easing -->
	<script src="js/jquery.easing.1.3.js"></script>
	<!-- Bootstrap -->
	<script src="js/bootstrap.min.js"></script>
	<!-- Waypoints -->
	<script src="js/jquery.waypoints.min.js"></script>
	<!-- YTPlayer -->
	<script src="js/jquery.mb.YTPlayer.min.js"></script>
	<!-- Flexslider -->
	<script src="js/jquery.flexslider-min.js"></script>
	<!-- Owl Carousel -->
	<script src="js/owl.carousel.min.js"></script>
	<!-- Parallax -->
	<script src="js/jquery.stellar.min.js"></script>
	<!-- Magnific Popup -->
	<script src="js/jquery.magnific-popup.min.js"></script>
	<script src="js/magnific-popup-options.js"></script>
	<!-- Main JS (Do not remove) -->
	<script src="js/main.js"></script>

	</body>
</html>
