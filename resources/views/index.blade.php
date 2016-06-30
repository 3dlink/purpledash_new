<!DOCTYPE html>

<html>
<head>
	<title>. PurpleDash .</title>


	<!-- Meta -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">

	<!-- CSS -->
	<link rel="shortcut icon" href="{{URL::asset('img/favicon.ico')}}">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

	<link href="https://fonts.googleapis.com/css?family=PT+Sans:400,700" rel="stylesheet" type="text/css">
	<link href='https://fonts.googleapis.com/css?family=Raleway:200,300,500,600,700' rel='stylesheet' type='text/css'>
	<link href='{{URL::asset("/css/styles.css")}}' rel="stylesheet" type="text/css">

	<link rel="stylesheet" type="text/css" href='{{URL::asset("js/slick/slick.css")}}'/>
	<link rel="stylesheet" type="text/css" href='{{URL::asset("js/slick/slick-theme.css")}}'/>

</head>
<body>

	<a id="top"></a>

	<!--Header Section-->
	<header id="header-section" class="header-hide">

		<div id="header-container">

			<div id="logo-section" class="grid grid-20">
				<h1 class="logo">
					<a href="">
						<img src="{{URL::asset('/img/logo.png')}}" alt="logo">
					</a>

				</h1>
			</div>

			<nav id="nav-section" class="nav grid grid-80">
				<a class="selected" data-scroll href="#top">Home</a>
				<a class="" data-scroll href="#about-section">About</a>
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
					<li></li>
					<li></li>
					<li></li>
					<li></li>
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

	<!-- Services -->

	<div class="clear">
		<section id="service-section" class="service-section parallax-section parallax-banner-6">
			<div class="grid parallax-content">
				<div class="grid-parent grid-100 mobile-100 tablet-100">

					<!-- entry header -->
					<div class="grid-90 prefix-5 mobile-100 tablet-100">
						<header class="parallax-header">
							<h2 class="parallax-title"><span>OUR SERVICES</span></h2>
							<p class="parallax-slogan"><strong>PURPLEDASH</strong> IS A VERSATILE CREATIVE STUDIO FOUNDED BY PROFESSIONALS FROM DIFFERENT FIELDS. WE KNOW HOW TO BRING NEW LIFE TO A BRAND AND HOW TO CREATE ENTIRELY NEW CONCEPTS. WE LIKE TO WORK CLOSELY WITH CLIENTS AND INCLUDE THEM IN OUR DESIGN PROCESS TO CREATE BETTER RESULTS.</p>
						</header>
					</div>
					<!-- close entry header -->

					<!-- icon box -->

					<div class="slide slide-services clear">
						@foreach($services as $service)
						<div class="service-box grid-10 mobile-grid-10 tablet-grid-50">
							<div class="box-fade icon-box">
								<i class="fa {{$service->img}} icon-2x service-icon"></i> </div>
								<div class="box-fade info">
									<h3>{{$service->name}}</h3>
								</div>
							</div>
							@endforeach
						</div>



						<!-- close icon box -->
					</div>
					<!-- close grid-100 -->
				</div>
				<!-- close grid container -->
			</section>
		</div>

		<!-- Services end -->

		<!-- Drop us a line -->

		<div class="clear">
			<section id="cta-section" class="cta-section content-section">
				<div class="grid">
					<div class="grid-100 mobile-100 tablet-100">
						<span class="cta-btn cl-effect-18 "><a class="cl-effect-18" data-scroll href="#contact-section"> Drop us a line </a></span>
					</div>
				</div>
			</section>
		</div>

		<!-- Drop us a line end -->

		<!-- Phrases -->

		<div class="clear">
			<section id="phrases-section" class="parallax-section parallax-banner-7 phrases-section">
				<div class="grid parallax-content">
					<div class="grid-parent grid-100 mobile-100 tablet-100 clear">

						<!-- entry header -->
						<div class="grid-70 prefix-15 mobile-100 tablet-100">
							<div class="slide slide-phrases">
								@foreach($phrases as $phrase)
								<header class="parallax-header quotes">
									<h2 class="ut-parallax-quote-title ">{{$phrase->quote}}. </h2>
									@if ($phrase->author != '')
									<span class="ut-parallax-quote-name">- {{$phrase->author}}</span>
									@endif
								</header>
								@endforeach
							</div>
						</div>
						<!-- close entry header -->

					</div>
				</div>
				<!-- close grid container -->
			</section>
		</div>

		<!-- Phrases end -->

		<!-- Portfolio -->

		<div class="clear">
			<section id="portfolio-section" class="portfolio-section content-section clear">
				<div class="grid clear prefix-5 postfix-5 tablet-fix-0 mobile-fix-0">

					<!-- section header -->
					<div class="grid-70 prefix-15 mobile-100 tablet-100">
						<header class="section-header">
							<h2 class="section-title"><span>Our Work</span></h2>
							<p class="section-slogan">“We believe our work <strong>speaks</strong> for itself. Browse our most recent projects below”.</p>
						</header>
					</div>
					<!-- close section header -->
					@foreach($works as $work)
					<!-- portfolio box -->
					<div class="work-box grid-33 mobile-100"> <!-- tablet-50" >--> <a data-toggle="modal" data-target="#portfolio-modal" data-mainimg="{{$work->mainImg}}" data-desc="{{$work->description}}" data-title="{{$work->title}}" href="">
						<div class="portfolio-box">

							<figure class="portfolio-image"><img src="img/{{$work->frontImg}}"></figure>
							<!-- close portfolio image -->

							<div class="portfolio-caption">
								<h3 class="portfolio-title">{{$work->title}}<span class="portfolio-category">{{$work->category}}</span></h3>
							</div>
							<!-- close portfolio caption -->
						</div>
					</a> </div>
					<!-- close portfolio -->
					@endforeach


				</div>
				<!-- close grid-container -->
			</section>

			<section id="social-section" class="parallax-section parallax-banner-9 social-section">
				<div class="grid parallax-content">
					<div class="grid-parent grid-100 mobile-100 tablet-100"> 
						
						<!-- parallax header -->
						<div class="grid-45 prefix-55 mobile-100 tablet-100">
							<header class="parallax-header">
								<h2 class="parallax-title"><span>Get Connected</span></h2>
								<p class="parallax-slogan">Do not hesitate! Contact us! We are waiting for you!</p>
							</header>
						</div>
						<!-- close parallax header -->
						
						<div class="clear"></div>
						
						<!-- social network -->
						<div class="grid-45 prefix-50 mobile-100 tablet-100">
							<ul class="social-network">
								<li class="skype grid-50 tablet-100 mobile-100"></li>

								<li class="facebook grid-25 tablet-100 mobile-100">&nbsp;</li>

								<li class="skype grid-25 tablet-50 mobile-50"> 
									<a class="social-link" href="skype:PurpleDash.Studio?chat"> <span class="social-icon"><i class="fa fa-skype fa-4x"></i></span></a> 
								</li>
								<li class="facebook grid-25 tablet-50 mobile-50" style="float:right;"> <a class="social-link" href="https://plus.google.com/u/1/115024707889329031789/" target="_blank"> <span class="social-icon"><i class="fa fa-google-plus fa-4x"></i></span>
								</a> </li>
							</ul>
						</div>
						<!-- close social network --> 
						
					</div>
					<!-- close grid-100 --> 
				</div>
				<!-- close grid container --> 
			</section>
		</div>

		<div class="modal" tabindex="-1" role="dialog" id="portfolio-modal">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
						<div class="grid-70 prefix-15 mobile-100 tablet-100">
							<header class="section-header">
								<h2 class="section-title"><span class="work-title"></span></h2>
								<p class="section-slogan work-description"></p>
							</header>
						</div>
					</div>
					<div class="modal-body grid-100 mobile-100 tablet-100">
						<div class="photos clear">
							<span><img src="" class="magicfields"></span>
						</div>
					</div>
				</div>
			</div>
		</div>

		<!-- Portfolio end -->

		<!-- The aim -->

		<div class="clear">
			<section id="testimonial-section" class="testimonial-section content-section">
				<div class="grid clear"> 
					<!-- section header -->
					<div class="grid-70 prefix-15 mobile-100 tablet-100">
						<header class="section-header">
							<h2 class="section-title"><span>THE AIM</span></h2>
							<p class="section-slogan">Our ultimate goal is to make our clients happy. <br>   What counts is not that the client comes but that he <strong>comes back</strong>. 
							</p>
						</header>
					</div>
					<!-- close section header --> 
					
				</div>
				<!-- close container --> 
			</section>
		</div>

		<!-- The aim end -->

		<div class="clear">
			<section id="client-section" class="client-section content-section">
				<div class="grid clear">
					<div class="grid-70 prefix-15 mobile-100 tablet-100">
						<h1 class="hero-title3">Details matter, it’s worth waiting to get it right.</h1>
					</div>
				</div>
				<!-- close container --> 
			</section>
		</div>

		<div class="clear">
			<section id="contact-section" class="contact-section parallax-section parallax-banner-10">
				
				<div class="grid-container parallax-content"> 
					
					<!-- parallax header -->
					<div class="grid-70 prefix-15 mobile-100 tablet-100">
						<header class="parallax-header">
							<h2 class="parallax-title"><span>Contact us</span></h2>
						</header>
					</div>
					<!-- close parallax header -->
					
					<div class="clear"></div>
					
					<!-- contact wrap -->
					<div class="grid-100 mobile-100 tablet-100">
						<div class="contact-wrap"> 
							
							<!-- contact message -->
							<div class="grid-parent suffix-5 mobile-100 tablet-100">
								<div class="contact-message">
									<h3 class="grid-100">Our Address</h3>
									<ul class="icons-ul">
										<li>Buenos Aires - Argentina</li>
										<li>Tel: (5411) 5901-2596 </li>
										<li>hello@bepurpledash.com</li>
										<li>www.bepurpledash.com</li>
									</ul>
								</div>
							</div>
							<!-- close contact message --> 
							
							<!-- contact form -->
							<div class="grid-parent grid-55 mobile-100 tablet-100">
								<div class="contact-form-holder">
									<h3 class="grid-100">Drop us a line</h3>
									
									<!-- contact form -->
									<form id="contact-form" class="contact-form" action="{{ url('/contact') }}" method="POST">
										{{ csrf_field() }}
										<ul class="grid-85">
											<li>
												<span class="msjError"> @if ($errors->first('name')) *{{ $errors->first('name') }} @endif</span>
												<input id="name" class="name form-input" name="name" placeholder="Name:" type="text" required>
											</li>
											<li>
												<span class="msjError"> @if ($errors->first('email')) *{{ $errors->first('email') }} @endif</span>
												<input id="email" class="email form-input" name="email" placeholder="E-Mail:" type="email" required>
											</li>
											<li>
												<span class="msjError"> @if ($errors->first('message')) *{{ $errors->first('message') }} @endif</span>
												<textarea id="message" class="message form-input" name="message" placeholder="Message:" required></textarea>
											</li>
										</ul>
										<div class="grid-100">
											<input id="send-btn" class="send-btn" name="send-btn" value="Send" type="submit">
											<div class="success-message">Email has been sent!</div>
											<div class="alert-message"></div>
											<div class="error-message">Email could not be delivered. Please try again later!</div>
										</div>
									</form>
									<!-- close contact form --> 
									
								</div>
							</div>
							<!-- close contact-form-holder --> 
							
						</div>
					</div>
					<!-- close contact wrap --> 
					
				</div>
				<!-- close container --> 
			</section>
		</div>

		<footer class="footer"> <a href="#top" data-scroll class="toTop"><i class="fa fa-angle-up"></i></a>
			<div class="grid">
			<div class="grid-100 mobile-100 tablet-100">
					<h3>Relax, we got you covered.</h3>
				</div>
			</div>
			<div class="sub-footer">
				<div class="grid clear">
					<div class="grid-100 mobile-100 tablet-100">
						<h4>©2015 PurpleDash Design Studio. All Rights Reserved.</h4>
					</div>
				</div>
			</div>
			<!-- close container --> 
		</footer>

		<!-- JavaScript -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
		<script src="https://use.fontawesome.com/011b552131.js"></script>
		<script src='{{URL::asset("/js/purpledash.js")}}'></script>
		<script src='{{URL::asset("/js/smooth-scroll.js")}}'></script>
		<script src='{{URL::asset("/js/slick/slick.min.js")}}'></script>
	</body>
	</html>
