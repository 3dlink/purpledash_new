<!DOCTYPE html>
<html>
<head>
	<title>. PurpleDash .</title>


	<!-- Meta -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">

	<!-- CSS -->
	<link href="https://fonts.googleapis.com/css?family=PT+Sans:400,700" rel="stylesheet" type="text/css">
	<link href='https://fonts.googleapis.com/css?family=Raleway:200,300,500,600,700' rel='stylesheet' type='text/css'>
	<link href="../css/styles.css" rel="stylesheet" type="text/css">

	<!-- JavaScript -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
	<script src="../js/purpledash.js"></script>
	<script src="../js/smooth-scroll.js"></script>
</head>
<body>

	<a id="top"></a>

	<!--Header Section-->
	<header id="header-section" class="header-hide">
		
		<div id="header-container">
			
			<div id="logo-section" class="grid grid-20">
				<h1 class="logo">
					<a href="#top">
						<img src="../img/logo.png" alt="logo">
					</a>

				</h1>
			</div>

			<nav id="nav-section" class="nav grid grid-80">
				<a class="" data-scroll href="#top">Home</a>
				<a class="selected" data-scroll href="#about-section">About</a> 
				<a class="" data-scroll href="#team-section">Team</a> 
				<a class="" data-scroll href="#service-section">Service</a> 
          		<a class="" data-scroll href="#portfolio-section">Work</a> 
          		<a class="" data-scroll href="#testimonial-section">Aim</a> 
          		<a class="" data-scroll href="#contact-section">Contact</a>
			</nav>

		</div>
	</header>	
	<!--Header end-->

	<!-- Slider -->
	<div class="slider">
		<section class="slider hero">
			<div class="grid"> 
				<!-- hero holder -->
				<div class="hero-holder grid-70 mobile-100 tablet-100">
					<div class="hero-inner"> <span class="hero-description">Creative Design Studio</span>
						<div class="hero-title-holder clear">
							<h1 class="hero-title">We are <span>purple dash</span></h1>
						</div>
						<span class="btn-holder"><a id="to-about-section" data-scroll href="#about-section" class="hero-btn">What We Do</a></span>
					</div>
				</div>
			<!-- close hero-holder --> 
			</div>

			<div class="main-slider">
				<ul class="slides">
					<li class="flex-active-slide" style="background: transparent url(&quot;../img/s1.jpg&quot;) repeat scroll 0% 0%; width: 100%; float: left; margin-right: -100%; position: relative; opacity: 1; display: block; z-index: 2;"></li>
					<li class="" style="background: transparent url(&quot;../img/s2.jpg&quot;) repeat scroll 0% 0%; width: 100%; float: left; margin-right: -100%; position: relative; opacity: 0; display: block; z-index: 1;"></li>
					<li class="" style="background: transparent url(&quot;../img/s3.jpg&quot;) repeat scroll 0% 0%; width: 100%; float: left; margin-right: -100%; position: relative; opacity: 0; display: block; z-index: 1;"></li>
					<li class="" style="background: transparent url(&quot;../img/s4.jpg&quot;) repeat scroll 0% 0%; width: 100%; float: left; margin-right: -100%; position: relative; opacity: 0; display: block; z-index: 1;"></li>
				</ul>
			</div>
		</section>
	</div>

	<!-- Slider end -->

	<!-- About us -->
	<div class="clear">
		<section id="about-section" class="about-section content-section">
			
			<div class="section-container">
				<div class="grid grid-70 prefix-15 mobile-100 tablet-100">
					<header class="section-header">
            			<h2 class="section-title"><span>About Purple Dash</span></h2>
                        <p class="section-slogan">We are a creative design studio based in Buenos Aires though we offer our services worldwide. We seek for simple and powerful solutions, bold aesthetics and surprising outputs across all platforms. We develop corporate identity, graphic communication, art direction, editorial, web &amp; app: design + development, illustration, motion graphic, and branding, among others.</p>
						<p class="section-slogan">We create and redesign B2B and B2C brands for clients ranging from start-ups to global corporations.</p>
						<p class="section-slogan">We have a close relationship with our customers, we like to involve ourselves in every project and obtain the best possible results. We create your brand design based on rational strategy and emotional harmony.</p>
					</header>
				</div>
			</div>
		</section>

		<div class="clear"></div>

		<section id="parallax-section-2 clear" class="parallax-section-2 parallax-section parallax-banner-2">
			<div class="parallax-content">
		        <div class="grid grid-40 prefix-60 mobile-100 tablet-100" style="text-shadow: 1px 1px gray;">
					<header class="parallax-header">
			            <h2 class="parallax-title"><span>Our Philosophy</span></h2>
			            <p class="parallax-slogan about">We believe in quality because it is the only thing that stands the test of time.</p>
					</header>
				</div>
      		</div>
   		</section>
	</div>

	<!-- About us end -->

	<!-- Our team -->

	<div class="clear">
		<section id="team-section" class="team-section content-section">
			<div class="section-container">
				<div class="grid grid-70 prefix-15 mobile-100 tablet-100">
					<header class="section-header">
            			<h2 class="section-title"><span>Our Team</span></h2>
                		<p class="section-slogan">What’s behind The Studio?</p>
						<p class="section-extra">We have an incredible team of professional and creative people. We craft insanely creative digital experiences throughout the globe! We are enthusiastic people, PASSIONATE about design, technology and all creative things in the world.</p>
						<p class="section-extra">STAFF: Graphic/ Packaging/ Web &amp; App Designers, Photographers, Web &amp; App Developers, Illustrators, Motion Graphic Designer, among others.</p>
   					</header>
				</div>
			</div>
		</section>
	</div>

	<!-- Our team end -->


	<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>

	<script>
    	smoothScroll.init({
    			easing: "linear",
    			speed: 400
    		});
	</script>
</body>
</html>