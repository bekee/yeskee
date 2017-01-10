<!doctype html>
<html class="no-js" lang="en">
<head>
	<!-- BASIC PAGE NEEDS -->
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	
	<!-- TITLE OF THE SITE -->
	<title>@yield('title') </title>
	
	<!-- AUTHOR / DESCRIPTION META TAG -->
	<meta name="author" content="YeskeInterconnect">
	<meta name="description" content="Online payment, money growing">
	
	<!-- THE MOBILE RESPONSIVE META TAG -->
	<meta name="viewport" content="width=device-width, initial-scale=1">

@section('favicons')
	<!-- FAVICONS -->
		<link rel="shortcut icon" href="{{asset('guest/img/logo.png')}}" type="image/x-icon">
		<link rel="apple-touch-icon" href="{{asset('guest/img/apple-touch-icon.png')}}">
		<link rel="apple-touch-icon" sizes="72x72" href="{{asset('guest/img/apple-touch-icon-72x72.png')}}">
		<link rel="apple-touch-icon" sizes="114x114" href="{{asset('guest/img/apple-touch-icon-114x114.png')}}">
		<link rel="apple-touch-icon" sizes="144x144" href="{{asset('guest/img/apple-touch-icon-144x144.png')}}">
@show
@section('css')
	<!-- CSS STYLESHEETS -->
		<link rel="stylesheet" href="{{asset('guest/css/vendor.css')}}">
		<link rel="stylesheet" href="{{asset('guest/css/base.css')}}">
		<link rel="stylesheet" href="{{asset('guest/css/layout.css')}}">
		<link rel="stylesheet" href="{{asset('guest/css/components.css')}}">
		<link rel="stylesheet" href="{{asset('guest/css/pages.css')}}">
@show

@section('custom_css')
@show

@section('font')
	<!-- GOOGLE WEB FONT -->
		<link href='https://fonts.googleapis.com/css?family=Lato:400,400italic,700,700italic' rel='stylesheet'
		      type='text/css'>
@show
<!-- MONDERNIZR -->
	@section('modenizer')
		
		<script src="{{asset('guest/js/vendor/modernizr-2.8.3.min.js')}}"></script>
	@show
</head>
<body>
<!--[if lt IE 8]>
<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade
	your browser</a> to improve your experience.</p>
<![endif]-->

<header>
	<nav class="navbar navbar-default">
		<div class="container">
			@section('logo')
				<div class="navbar-header">
					
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
					        data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button><!-- // .navbar-toggle .collapsed -->
					
					<a class="navbar-brand" href="#">
						<img src="{{asset('guest/img/logo.png')}}" height="300px" alt="YeskeInterconnect">
					</a><!-- // .navbar-brand -->
				</div><!-- .navbar-header -->
			@show
			@section('menu')
				<div class="collapse navbar-collapse navbar-right" id="bs-example-navbar-collapse-1">
					<ul class="nav navbar-nav">
						
						<li class="{{Route::getCurrentRoute()->getPath() == '/' ? 'active' : ''}}">
							<a class=""  href="{{url('/')}}">HOME </a>
						
						</li><!-- // .active .dropdown -->
						
						<li class=" full {{Route::getCurrentRoute()->getPath() == 'how_it_works' ? 'active' : ''}}">
							<a class="dropdown-toggle external" href="{{url('how_it_works')}}">HOW IT WORKS </a>
						
						</li><!-- // .dropdown -->
						
						<li class="full {{Route::getCurrentRoute()->getPath() == 'login' ? 'active' : ''}}">
							<a class="dropdown-toggle "  href="{{url('login')}}">LOGIN </a>
						
						</li><!-- // .dropdown -->
						
						
						<li class="full {{Route::getCurrentRoute()->getPath() == 'contact_us' ? 'active' : ''}}">
							<a class="dropdown-toggle external"  href="{{url('contact_us')}}">CONTACT US</a>
						
						</li><!-- // .dropdown -->
					
					</ul><!-- .nav .navbar-nav -->
				</div><!-- .collapse .navbar-collapse -->
			@show
		
		</div><!-- // .container -->
	</nav><!-- // .navbar .navbar-default -->

</header>

<!-- SPLASH INTRO -->
<section>
	<h2 class="hidden">Splash Slider</h2>
	<!-- START REVOLUTION SLIDER 5.0 -->
	@section('revolution')
		<div class="rev_slider_wrapper">
			<div class="company-intro-slider bright ev_slider" data-version="5.0">
				<ul>
					
					<li>
						<!-- MAIN IMAGE -->
						<img src="http://placehold.it/1630x470" alt="" width="1920" height="1280">
						
						<!-- LAYER NR. 1 -->
						<div class="tp-caption News-Title"
						     data-x="right" data-hoffset="120"
						     data-y="center" data-voffset="45"
						     data-whitespace="normal"
						     data-transform_idle="o:1;"
						     data-transform_in="x:200px;o:0;s:1000;e:Power2.easeInOut;"
						     data-transform_out="o:0"
						     data-start="1500"><img src="{{asset('guest/img/home/notebook.png')}}" alt=""/></div>
						
						<div class="tp-caption News-Title"
						     data-x="left" data-hoffset="85"
						     data-y="top" data-voffset="110"
						     data-width="350"
						     data-whitespace="normal"
						     data-transform_idle="o:1;"
						     data-transform_in="-y:100px;o:0;s:1000;e:Power2.easeInOut;"
						     data-transform_out="o:0"
						     data-start="4000">
							<img src="{{asset('guest/img/home/slider-note.png')}}" alt="">
						</div>
						
						<div class="tp-caption News-Title"
						     data-x="left" data-hoffset="85"
						     data-y="top" data-voffset="140"
						     data-width="350"
						     data-whitespace="normal"
						     data-transform_idle="o:1;"
						     data-transform_in="x:-100px;o:0;s:1000;e:Power2.easeInOut;"
						     data-transform_out="o:0"
						     data-start="2000">
							<img src="{{asset('guest/img/home/slider-headline1.png')}}" alt="">
						</div>
						
						<div class="tp-caption News-Title"
						     data-x="left" data-hoffset="85"
						     data-y="top" data-voffset="210"
						     data-width="370"
						     data-whitespace="normal"
						     data-transform_idle="o:1;"
						     data-transform_in="x:-100px;o:0;s:1000;e:Power2.easeInOut;"
						     data-transform_out="o:0"
						     data-start="2500">
							<img src="{{asset('guest/img/home/slider-text.png')}}" alt="">
						</div>
						
						<div class="tp-caption News-Title"
						     data-x="left" data-hoffset="85"
						     data-y="top" data-voffset="300"
						     data-width="350"
						     data-whitespace="normal"
						     data-transform_idle="o:1;"
						     data-transform_in="y:100px;o:0;s:1000;e:Power2.easeInOut;"
						     data-transform_out="o:0"
						     data-start="3000">
							<a href="#" class="btn btn-success">More Info</a>
						</div>
					
					
					</li>
					
					<li>
						<!-- MAIN IMAGE -->
						<img src="http://placehold.it/1630x470" alt="" width="1920" height="1280">
						
						<!-- LAYER NR. 1 -->
						<div class="tp-caption News-Title"
						     data-x="right" data-hoffset="120"
						     data-y="center" data-voffset="45"
						     data-whitespace="normal"
						     data-transform_idle="o:1;"
						     data-transform_in="x:200px;o:0;s:1000;e:Power2.easeInOut;"
						     data-transform_out="o:0"
						     data-start="1500"><img src="{{asset('guest/img/home/ipad.png')}}" alt=""/></div>
						
						<div class="tp-caption News-Title"
						     data-x="left" data-hoffset="85"
						     data-y="top" data-voffset="110"
						     data-width="350"
						     data-whitespace="normal"
						     data-transform_idle="o:1;"
						     data-transform_in="-y:100px;o:0;s:1000;e:Power2.easeInOut;"
						     data-transform_out="o:0"
						     data-start="4000">
							<img src="{{asset('guest/img/home/slider-note.png')}}" alt="">
						</div>
						
						<div class="tp-caption News-Title"
						     data-x="left" data-hoffset="85"
						     data-y="top" data-voffset="140"
						     data-width="350"
						     data-whitespace="normal"
						     data-transform_idle="o:1;"
						     data-transform_in="x:-100px;o:0;s:1000;e:Power2.easeInOut;"
						     data-transform_out="o:0"
						     data-start="2000">
							<img src="{{asset('guest/img/home/slider-headline2.png')}}" alt="">
						</div>
						
						<div class="tp-caption News-Title"
						     data-x="left" data-hoffset="85"
						     data-y="top" data-voffset="210"
						     data-width="370"
						     data-whitespace="normal"
						     data-transform_idle="o:1;"
						     data-transform_in="x:-100px;o:0;s:1000;e:Power2.easeInOut;"
						     data-transform_out="o:0"
						     data-start="2500">
							<img src="{{asset('guest/img/home/slider-text.png')}}" alt="">
						</div>
						
						<div class="tp-caption News-Title"
						     data-x="left" data-hoffset="85"
						     data-y="top" data-voffset="300"
						     data-width="350"
						     data-whitespace="normal"
						     data-transform_idle="o:1;"
						     data-transform_in="y:100px;o:0;s:1000;e:Power2.easeInOut;"
						     data-transform_out="o:0"
						     data-start="3000">
							<a href="#" class="btn btn-success">More Info</a>
						</div>
					
					
					</li>
					
					<li>
						<!-- MAIN IMAGE -->
						<img src="http://placehold.it/1630x470" alt="" width="1920" height="1280">
						
						<!-- LAYER NR. 1 -->
						<div class="tp-caption News-Title"
						     data-x="right" data-hoffset="60"
						     data-y="center" data-voffset="45"
						     data-whitespace="normal"
						     data-transform_idle="o:1;"
						     data-transform_in="x:200px;o:0;s:1000;e:Power2.easeInOut;"
						     data-transform_out="o:0"
						     data-start="1500"><img src="{{asset('guest/img/home/front-image.png')}}" alt=""/></div>
						
						<div class="tp-caption News-Title"
						     data-x="left" data-hoffset="85"
						     data-y="top" data-voffset="110"
						     data-width="350"
						     data-whitespace="normal"
						     data-transform_idle="o:1;"
						     data-transform_in="-y:100px;o:0;s:1000;e:Power2.easeInOut;"
						     data-transform_out="o:0"
						     data-start="4000">
							<img src="{{asset('guest/img/home/slider-note.png')}}" alt="">
						</div>
						
						<div class="tp-caption News-Title"
						     data-x="left" data-hoffset="85"
						     data-y="top" data-voffset="140"
						     data-width="350"
						     data-whitespace="normal"
						     data-transform_idle="o:1;"
						     data-transform_in="x:-100px;o:0;s:1000;e:Power2.easeInOut;"
						     data-transform_out="o:0"
						     data-start="2000">
							<img src="{{asset('guest/img/home/slider-headline1.png')}}" alt="">
						</div>
						
						<div class="tp-caption News-Title"
						     data-x="left" data-hoffset="85"
						     data-y="top" data-voffset="210"
						     data-width="370"
						     data-whitespace="normal"
						     data-transform_idle="o:1;"
						     data-transform_in="x:-100px;o:0;s:1000;e:Power2.easeInOut;"
						     data-transform_out="o:0"
						     data-start="2500">
							<img src="{{asset('guest/img/home/slider-text.png')}}" alt="">
						</div>
						
						<div class="tp-caption News-Title"
						     data-x="left" data-hoffset="85"
						     data-y="top" data-voffset="300"
						     data-width="350"
						     data-whitespace="normal"
						     data-transform_idle="o:1;"
						     data-transform_in="y:100px;o:0;s:1000;e:Power2.easeInOut;"
						     data-transform_out="o:0"
						     data-start="3000">
							<a href="#" class="btn btn-success">More Info</a>
						</div>
					
					
					</li>
				
				</ul>
			</div><!-- END REVOLUTION SLIDER -->
		</div><!-- END OF SLIDER WRAPPER -->
	@show
</section>
<!-- // SPLASH INTRO -->
@section('login')
<section>
	<div class="login">
		<div class="login-wrapper">
			<div class="container">
				<div class="row">
					<div class="col-xs-12">
						<div class="login-logo">
							<img src="{{asset('guest/img/shop/login-logo.png')}}" alt="Mint Logo" />
						</div>
					</div>
				</div>
			</div>
			
			<div class="login-content">
				<div class="container">
					<div class="row">
						<div class="col-md-5 col-md-offset-1">
							<h3>Login to Your Account </h3>
							<input type="text" class="form-control" placeholder="Name">
							<input type="email" class="form-control" placeholder="Email">
							<button class="btn btn-success">Log In</button>
						</div>
						
						<div class="col-md-3 col-md-offset-1">
							<h4>Don't have an account </h4>
							<p>
								<a href="#"> Sign up</a> now for free
							</p>
							
							<h4>Forget your password </h4>
							<a href="#"> Reset Here</a>
						</div>
					</div>
				</div>
			
			</div>
			
		</div>
	</div>
</section>
@show

<!-- FEATURES -->
@section('features')
	<section class="space-lg">
		<div class="container">
			<div class="row">
				<div class="col-md-8 col-md-offset-2">
					<h2 class="text-center">The Fastest, Easiest Way To Build A Website in 6 Steps</h2>
					<p class="text-center space-bottom">Phasellus vehicula justo eget diam posuere sollicitudin eu
						tincidunt
						nulla. Curabitur eleifend tempor magna, in scelerisque urna placerat vel. Phasellus eget sem id
						justo consequat egestas quis facilisis metus.</p>
				</div>
			</div><!-- // .row -->
			
			<div class="row">
				<div class="col-md-4">
					<div class="iconbox-small">
						<h5><i class="icon-light-bulb"></i> Get an Idea</h5>
						<p>Phasellus vehicula justo eget diam posuere sollicitudin eu tincidunt nulla. Curabitur.</p>
					</div><!-- // .app-zoom-feature -->
				</div><!-- // .col-md-4 -->
				
				<div class="col-md-4">
					<div class="iconbox-small">
						<h5><i class="icon-area-graph"></i>Start Planing</h5>
						<p>Phasellus vehicula justo eget diam posuere sollicitudin eu tincidunt nulla. Curabitur.</p>
					</div><!-- // .app-zoom-feature -->
				</div><!-- // .col-md-4 -->
				
				<div class="col-md-4">
					<div class="iconbox-small">
						<h5><i class="icon-briefcase"></i>Work Continuously</h5>
						<p>Phasellus vehicula justo eget diam posuere sollicitudin eu tincidunt nulla. Curabitur.</p>
					</div><!-- // .app-zoom-feature -->
				</div><!-- // .col-md-4 -->
			</div>
			
			
			<div class="row">
				<div class="col-md-4">
					<div class="iconbox-small">
						<h5><i class="icon-cog"></i> Develop Design</h5>
						<p>Phasellus vehicula justo eget diam posuere sollicitudin eu tincidunt nulla. Curabitur.</p>
					</div><!-- // .app-zoom-feature -->
				</div><!-- // .col-md-4 -->
				
				<div class="col-md-4">
					<div class="iconbox-small">
						<h5><i class="icon-rocket"></i>Launch Your Idea</h5>
						<p>Phasellus vehicula justo eget diam posuere sollicitudin eu tincidunt nulla. Curabitur.</p>
					</div><!-- // .app-zoom-feature -->
				</div><!-- // .col-md-4 -->
				
				<div class="col-md-4">
					<div class="iconbox-small">
						<h5><i class="icon-thumbs-up"></i> Get Rewarded</h5>
						<p>Phasellus vehicula justo eget diam posuere sollicitudin eu tincidunt nulla. Curabitur.</p>
					</div><!-- // .app-zoom-feature -->
				</div><!-- // .col-md-4 -->
			</div>
		
		</div><!-- // .container -->
	</section><!-- // .app-zoom .section-space .section-grey -->
@show
<!-- FEATURE WITH IMAGE -->

<!-- WORK SHOWCASE -->
@section('showcase')
	<section>
		<div class="container">
			<div class="row">
				<div class="col-xs-12">
					<h4 class="text-left" data-animation="fadeInUp" data-animation-delay="400">Work Showcase</h4>
				</div><!-- // .col-xs-12 -->
			</div><!-- // .row -->
			
			<div class="row">
				<div class="col-xs-12">
					<div class="owl-carousel showcase-slider">
						<div>
							<figure class="showcase-item">
								<img src="http://placehold.it/700x700" alt="Portfolio Image"/>
								<div class="showcase-item-hover">
									<a href="#"><i class="icon-link"></i></a>
									<a href="#" class="different"><i class="icon-eye"></i></a>
								</div>
								
								<figcaption>
									<h5>Corporate Brochure</h5>
									<p>
										Illustration / Print
									</p>
								</figcaption>
							</figure>
						
						</div>
						<div>
							<figure class="showcase-item">
								<img src="http://placehold.it/700x700" alt="Portfolio Image"/>
								<div class="showcase-item-hover">
									<a href="#"><i class="icon-link"></i></a>
									<a href="#" class="different"><i class="icon-eye"></i></a>
								</div>
								
								<figcaption>
									<h5>Corporate Brochure</h5>
									<p>
										Illustration / Print
									</p>
								</figcaption>
							</figure>
						
						</div>
						<div>
							<figure class="showcase-item">
								<img src="http://placehold.it/700x700" alt="Portfolio Image"/>
								<div class="showcase-item-hover">
									<a href="#"><i class="icon-link"></i></a>
									<a href="#" class="different"><i class="icon-eye"></i></a>
								</div>
								
								<figcaption>
									<h5>Corporate Brochure</h5>
									<p>
										Illustration / Print
									</p>
								</figcaption>
							</figure>
						
						</div>
						<div>
							<figure class="showcase-item">
								<img src="http://placehold.it/700x700" alt="Portfolio Image"/>
								<div class="showcase-item-hover">
									<a href="#"><i class="icon-link"></i></a>
									<a href="#" class="different"><i class="icon-eye"></i></a>
								</div>
								
								<figcaption>
									<h5>Corporate Brochure</h5>
									<p>
										Illustration / Print
									</p>
								</figcaption>
							</figure>
						
						</div>
						<div>
							<figure class="showcase-item">
								<img src="http://placehold.it/700x700" alt="Portfolio Image"/>
								
								<div class="showcase-item-hover">
									<a href="#"><i class="icon-link"></i></a>
									<a href="#" class="different"><i class="icon-eye"></i></a>
								</div>
								<figcaption>
									<h5>Corporate Brochure</h5>
									<p>
										Illustration / Print
									</p>
								</figcaption>
							</figure>
						
						</div>
						<div>
							<figure class="showcase-item">
								<img src="http://placehold.it/700x700" alt="Portfolio Image"/>
								<div class="showcase-item-hover">
									<a href="#"><i class="icon-link"></i></a>
									<a href="#" class="different"><i class="icon-eye"></i></a>
								</div>
								
								<figcaption>
									<h5>Corporate Brochure</h5>
									<p>
										Illustration / Print
									</p>
								</figcaption>
							</figure>
						
						</div>
					</div>
				</div>
			</div>
		</div><!-- // .container -->
	</section><!-- // .section-space -->
@show
<!-- // WORK SHOWCASE -->

@section('offer')
	<section class="space-lg">
		<div class="container">
			<div class="row">
				<div class="col-md-6">
					<h3 class="space-bottom-sm">What We Offer</h3>
					<div class="panel-group style3" id="accordion3" role="tablist" aria-multiselectable="true">
						<div class="panel panel-default">
							<div class="panel-heading" role="tab" id="headingOne">
								<h4 class="panel-title">
									<a role="button" data-toggle="collapse" data-parent="#accordion3"
									   href="#collapseOne"
									   aria-expanded="true" aria-controls="collapseOne">
										Toggle &amp; Accordion Style 1
									</a>
								</h4>
							</div>
							
							<div id="collapseOne" class="panel-collapse collapse in" role="tabpanel"
							     aria-labelledby="headingOne">
								<div class="panel-body">
									All Layouts can be use for Toggles and Accordions, We have created 4 different
									unique
									styles for you.
								</div>
							</div>
						</div>
						
						<div class="panel panel-default">
							<div class="panel-heading" role="tab" id="headingTwo">
								<h4 class="panel-title">
									<a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion3"
									   href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
										Services and Features We’re Providing you
									</a>
								</h4>
							</div>
							<div id="collapseTwo" class="panel-collapse collapse" role="tabpanel"
							     aria-labelledby="headingTwo">
								<div class="panel-body">
									All Layouts can be use for Toggles and Accordions, We have created 4 different
									unique
									styles for you.
								</div>
							</div>
						</div>
						
						<div class="panel panel-default">
							<div class="panel-heading" role="tab" id="headingThree">
								<h4 class="panel-title">
									<a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion3"
									   href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
										How to Customize the Design
									</a>
								</h4>
							</div>
							<div id="collapseThree" class="panel-collapse collapse" role="tabpanel"
							     aria-labelledby="headingThree">
								<div class="panel-body">
									All Layouts can be use for Toggles and Accordions, We have created 4 different
									unique
									styles for you.
								</div>
							</div>
						</div>
						
						<div class="panel panel-default">
							<div class="panel-heading" role="tab" id="headingFour">
								<h4 class="panel-title">
									<a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion3"
									   href="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
										Services and Features We’re Providing you
									</a>
								</h4>
							</div>
							<div id="collapseFour" class="panel-collapse collapse" role="tabpanel"
							     aria-labelledby="headingFour">
								<div class="panel-body">
									All Layouts can be use for Toggles and Accordions, We have created 4 different
									unique
									styles for you.
								</div>
							</div>
						</div>
					
					</div>
				
				</div><!-- // .col-md-6 -->
				
				<div class="col-md-6">
					<h3 class="space-bottom-sm">Our Office</h3>
					<div class="post-slider owl-carousel">
						<div>
							<img src="http://placehold.it/1200x600" alt="About Image"/>
						</div>
						
						<div>
							<img src="http://placehold.it/1200x600" alt="About Image"/>
						</div>
						
						<div>
							<img src="http://placehold.it/1200x600" alt="About Image"/>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
@show
@section('twitter')
	<section class="space-bottom">
		<div class="container">
			<div class="row">
				<div class="col-md-4">
					<h3 class="space-heading-md">Twitter Feed</h3>
					<div class="tweet">
						<p><a href="#">@Mint</a>, Morbi mauris lectus, aliquet in interdum vel, viverra in
							diam.Curabitur
							non convallis felis. Nam id semper neque.<br><span>25 Minutes ago</span></p>
					</div>
					
					<div class="tweet">
						<p><a href="#">@Mint</a>, Morbi mauris lectus, aliquet in interdum vel, viverra in
							diam.Curabitur
							non convallis felis. Nam id semper neque.<br><span>25 Minutes ago</span></p>
					</div>
				</div>
				<div class="col-md-4">
					<h3 class="space-heading-md">Some Facts</h3>
					<ul class="list-chevron">
						<li>100% Fully Responsive &amp; Retina Ready Theme</li>
						<li>Woocommerce Included in the main Theme</li>
						<li>Easy to Use &amp; Easy to Customizeable Elements</li>
						<li>Unlimited layouts &amp; Features Available</li>
						<li>Tons of Shortcodes also in the Mega Pack</li>
					</ul>
				</div>
				
				<div class="col-md-4">
					<h3>What They Say</h3>
					<div class="box-testimonial">
						<div class="box-testimonial-text">
							<p>
								Phasellus vehicula justo eget diam posuere sollicitudin eu tincid nulla. curabitur
								eleifend
								magna scelerisque placerat vele phasellus just co sollicitudin eu tincid nulla.
							</p>
						</div><!-- // .box-testimonial-text -->
						<div class="box-testimonial-profile">
							<img src="http://placehold.it/200x200" alt="Profile Image">
							<p>
								<a href="#">Vahis Ta'eed</a> - Mint Team
							</p>
						</div><!-- // .box-testimonial-profile -->
					</div><!-- // .box-testimonial -->
				</div>
			</div>
		</div>
	</section>
@show
@section('slide_up')
	<span class="back-to-top">
            <i class="icon-arrow-long-up"></i>
        </span>
@show

<footer>
	@section('footer1')
		<div class="container">
			<div class="row">
				<div class="col-md-3">
					<h4>About Us</h4>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam aspernatur non odit tempore
						quisquam, distinctio voluptate velit adipisci.</p>
					
					<span class="footer-divider"></span>
					<div class="footer-email">
						<i class="icon-mail"></i>
						<a href="mailto:zaiwaemail@gmail.com">zawiaemail@gmail.com</a>
					</div><!-- // .footer-email -->
					<span class="footer-divider"></span>
					
					<div class="footer-mobile">
						<i class="icon-phone"></i>
						<a href="#">P:+1911 222-1111</a>
					</div>
					<span class="footer-divider"></span>
					
					<div class="footer-location">
						<i class="icon-location-pin"></i>
						<a href="https://www.google.com/maps">90 Barnard St, Suite 191.</a>
					</div><!-- // footer-location -->
				
				</div><!-- // .col-md-4 .space-mb -->
				
				<div class="col-md-3">
					<h4>Newsletter Signup</h4>
					<p>
						Phasellus vehicula justo eget diam posuere sollicitudin eu tincidunt nulla. Curabitur eleifend
						urna
						tempor magna, in scelerisque.
					</p>
					<input type="text" class="footer-signup" placeholder="Email Address">
					<button type="submit" class="signup-submit">Join</button>
					<span class="signup-note">We respect your privacy</span>
				</div>
				
				<div class="col-md-3">
					<h4>Latest News</h4>
					<div class="footer-news-item clearfix">
						<img src="http://placehold.it/120x110" alt=""/>
						
						<a href="#" class="news-item-content">
							<h4>A clean website gives more UserExperience.</h4>
							<span>December 12, 2012 - 9:11 pm</span>
							<p>
								Etiam porta est quis nisi pulvinar ultrices. Spendisse nec est acurpis.
							</p>
						</a>
					</div>
					
					<div class="footer-news-item clearfix">
						<img src="http://placehold.it/120x110" alt=""/>
						
						<a href="#" class="news-item-content">
							<h4>Clean only means clean and minimilistic.</h4>
							<span>December 12, 2012 - 9:11 pm</span>
							<p>
								Etiam porta est quis nisi pulvinar ultrices. Spendisse nec est acurpis.
							</p>
						</a>
					</div>
				</div>
				
				<div class="col-md-3">
					<h4>Flickr Stream</h4>
					<div id="flickr" class="flickr">
						<!-- flickr stream jQuery plugin -->
					</div>
				</div>
			</div><!-- // .row -->
		</div><!-- // .container -->
	@show
	@section('footer2')
		<div class="footer-bottom">
			<div class="container">
				<div class="row">
					<div class="col-xs-12">
						<div class="pull-left">
							<p>
								© {{date('Y')}} YESKEINTERCONNECT
							</p>
						</div>
						
						<div class="pull-right">
							<ul>
								<li><a href="#">Home</a></li>
								<li><a href="#">slider</a></li>
								<li><a href="#">Pages</a></li>
								<li><a href="#">Feaures</a></li>
								<li><a href="#">portfolio</a></li>
								<li><a href="#">blog</a></li>
								<li><a href="#">Shop</a></li>
								<li><a href="#">Contact</a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div><!-- // .footer-bottom -->
	@show
</footer>

@section('jquery')
	<!-- JQUERY -->
	<script src="{{asset('guest/js/vendor/jquery-1.11.3.min.js')}}"></script>
@show
@section('bootstrap')
	<!-- BOOTSRAP PLUGINS -->
	<script src="{{asset('guest/js/vendor/bootstrap.min.js')}}"></script>
@show
@section('jquery_plugin')
	<!-- JQUERY PLUGINS -->
	<script src="{{asset('guest/js/vendor/jquery.appear.js')}}"></script>
	<script src="{{asset('guest/js/vendor/jquery.nav.js')}}"></script>
	<script src="{{asset('guest/js/vendor/jquery.countTo.js')}}"></script>
	<script src="{{asset('guest/js/vendor/flipclock.min.js')}}"></script>
	<script src="{{asset('guest/js/vendor/owl.carousel.min.js')}}"></script>
	<script src="{{asset('guest/js/vendor/jquery.bxslider.min.js')}}"></script>
	<script src="{{asset('guest/js/vendor/jquery.mixitup.min.js')}}"></script>
	<script src="{{asset('guest/js/vendor/jquery.mb-comingsoon.js')}}"></script>
	<script src="{{asset('guest/js/vendor/jquery.grid-a-licious.min.js')}}"></script>
	<script src="{{asset('guest/js/vendor/jquery.range-min.js')}}"></script>
	<script src="{{asset('guest/js/vendor/jflickrfeed.min.js')}}"></script>
@show
@section('revolution_js')
	<!-- REVOLUTION SLIDER -->
	<script src="{{asset('guest/revolution/js/jquery.themepunch.tools.min.js?rev=5.0')}}"></script>
	<script src="{{asset('guest/revolution/js/jquery.themepunch.revolution.min.js?rev=5.0')}}"></script>
	<script src="{{asset('guest/revolution/js/extensions/revolution.extension.slideanims.min.js')}}"></script>
	<script src="{{asset('guest/revolution/js/extensions/revolution.extension.layeranimation.min.js')}}"></script>
	<script src="{{asset('guest/revolution/js/extensions/revolution.extension.navigation.min.js')}}"></script>
@show
@section('main_js')
	<!-- MAIN JAVASCRIPT -->
	<script src="{{asset('guest/js/main.js')}}"></script>
@show
@section('custom_js')
@show
</body>
</html>
