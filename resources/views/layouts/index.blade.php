<!DOCTYPE html>
<!--[if lt IE 7]>
<html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>
<html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>
<html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js"> <!--<![endif]-->
<head>
	<meta charset="utf-8">
	<title>@yield('title')</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="description" content="">
	<meta name="keywords" content="Online, MLM">
	<meta name="csrf-token" content="{{ csrf_token() }}"/>
	<meta name="author" content="Huban Creative">
	
	<link rel="shortcut icon" href="{{asset('guest/img/logo.png')}}" type="image/x-icon">
	
	<link href="{{URL::asset('guest/assets/libs/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet"/>
	<link href="{{URL::asset('guest/assets/libs/pace/pace.css')}}" rel="stylesheet"/>
	<link href="{{URL::asset('guest/assets/libs/animate-css/animate.min.css')}}" rel="stylesheet"/>
	<link href="{{URL::asset('guest/assets/libs/iconmoon/style.css')}}" rel="stylesheet"/>
	
	<!-- LESS FILE <link href="assets/css/style.less" rel="stylesheet/less" type="text/css" /> -->
	<!-- Extra CSS Libraries Start -->
	<link href="{{URL::asset('guest/assets/libs/owl-carousel/owl.carousel.css')}}" rel="stylesheet" type="text/css"/>
	<link href="{{URL::asset('guest/assets/libs/owl-carousel/owl.theme.css')}}" rel="stylesheet" type="text/css"/>
	<link href="{{URL::asset('guest/assets/libs/owl-carousel/owl.transitions.css')}}" rel="stylesheet" type="text/css"/>
	<link href="{{URL::asset('guest/assets/libs/jquery-magnific/magnific-popup.css')}}" rel="stylesheet"
	      type="text/css"/>
	<link href="{{URL::asset('guest/assets/css/style.css')}}" rel="stylesheet" type="text/css"/>
	<!-- Extra CSS Libraries End -->
	<!--[if lt IE 9]>
	<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
	<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
	<![endif]-->
	
	<link rel="shortcut icon" href="{{URL::asset('guest/assets/img/favicon.ico')}}">
	<link rel="apple-touch-icon" href="{{URL::asset('guest/assets/img/apple-touch-icon.png')}}"/>
	<link rel="apple-touch-icon" sizes="57x57" href="{{URL::asset('guest/assets/img/apple-touch-icon-57x57.png')}}"/>
	<link rel="apple-touch-icon" sizes="72x72" href="{{URL::asset('guest/assets/img/apple-touch-icon-72x72.png')}}"/>
	<link rel="apple-touch-icon" sizes="76x76" href="{{URL::asset('guest/assets/img/apple-touch-icon-76x76.png')}}"/>
	<link rel="apple-touch-icon" sizes="114x114"
	      href="{{URL::asset('guest/assets/img/apple-touch-icon-114x114.png')}}"/>
	<link rel="apple-touch-icon" sizes="120x120"
	      href="{{URL::asset('guest/assets/img/apple-touch-icon-120x120.png')}}"/>
	<link rel="apple-touch-icon" sizes="144x144"
	      href="{{URL::asset('guest/assets/img/apple-touch-icon-144x144.png')}}"/>
	<link rel="apple-touch-icon" sizes="152x152"
	      href="{{URL::asset('guest/assets/img/apple-touch-icon-152x152.png')}}"/>
</head>
<body class="">
<div id="wrapper">
	<header>
		<div id="topbar">
			<div class="container">
				<div class="row">
					<div class="col-sm-6 col-xs-6">
                        <span class="hidden-sm hidden-xs"><i
			                        class="icon-location4"></i>@yield('address') </span><span
								class="vertical-space"></span> <i class="icon-phone4"></i>+2349060595949
					</div>
					<div class="col-sm-6 col-xs-6 text-right">
						<div class="btn-group social-links hidden-sm hidden-xs">
							<a href="https://twitter.com/yeskeintercon"><i class="icon-twitter4"></i>
							</a>
							<a href="https://facebook.com/yeskeinterconnect">
								<i class="icon-facebook4"></i>
							</a>
							
							<a href="https://ng.linkedin.com/in/yeske-interconnect-100a34113">
								<i class="icon-linkedin3"></i>
							</a>
						</div>
						@if(Auth::user())
							<a href="{{url('logout')}}" class="login-button">LOGOUT</a>
						@else
							<a href="{{url('login')}}" class="login-button">LOGIN</a>
							<a href="{{url('signup')}}"
							   class="signup-button">CREATE ACCOUNT</a>
						@endif
					</div>
				</div>
				<div class="top-divider"></div>
			</div>
		</div>
		<nav class="navbar navbar-default" role="navigation">
			<div class="container">
				<!-- Brand and toggle get grouped for better mobile display -->
				<div class="navbar-header">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#main-navigation">
						<span class="icon-navicon"></span>
					</button>
					<a class="navbar-brand" href="index.html">
						@section('logo')
							<img src="{{URL::asset('guest/img/logo.png')}}" width="100px;" height="100px;"
							     data-dark-src="{{URL::asset('guest/img/logo.png')}}" alt="YeskeInterconnect"
							     class="">
						
						@show
					</a>
				</div>
				
				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse" id="main-navigation">
					<ul class="nav navbar-nav navbar-right">
						@section('menu')
							<li><a href="{{url('/')}}"
							       class="{{Route::getCurrentRoute()->getPath() == '/' ? 'active' : ''}}">HOME</a></li>
							<li><a href="{{url('about')}}"
							       class="{{Route::getCurrentRoute()->getPath() == 'about' ? 'active' : ''}}">ABOUT</a>
							</li>
							<li><a href="{{url('how_it_works')}}"
							       class="{{Route::getCurrentRoute()->getPath() == 'how_it_works' ? 'active' : ''}}">HOW
									IT WORKS</a></li>
							<li><a href="{{url('become_an_agent')}}"
							       class="{{Route::getCurrentRoute()->getPath() == 'become_an_agent' ? 'active' : ''}}">BECOME
									AN AGENTS</a>
							</li>
							<li><a href="{{url('contact')}}"
							       class="{{Route::getCurrentRoute()->getPath() == 'contact' ? 'active' : ''}}">CONTACT</a>
							</li>
							@if(Auth::user())
								<li><a href="{{url(Auth::user()->route)}}">MY ACCOUNT</a></li>
							@endif
						@show
					</ul>
				</div>
				<!-- /.navbar-collapse -->
			</div>
			<!-- /.container-->
		</nav>
		@section('slider')
			<section class="main-slider fullsize" data-stellar-background-ratio="0.5"
			         style="background-image: url({{URL::asset('guest/images/headers/index.jpg')}})">
				<div class="slider-caption">
					<h1 data-animate="fadeInDown" data-delay="1000" data-duration="2s">Whenever you feel lost, <br>we
						are
						here to guide you!
					</h1>
					<h3>We are happy yo make you happy</h3>
					<a data-animate="fadeInUp" data-duration="2s" data-delay="1300" href="javascript:;"
					   class="btn btn-primary btn-lg">CONTACT US</a>
				</div>
			</section>
		@show
	</header>
	
	@section('message_banner')
		<section class="hero-banner">
			<div class="container text-center">
				
				<div class="row">
					<div class="col-sm-10 col-sm-offset-1">
						<h2>We <span class="invert bg-success">KNOW</span> what we are doing!</h2>
						<p>
							We provide you with the best school portal management system, engineered to serve
							you at your most expectation. We have setup different portal modules ranging from student
							activity
							tracking to accounting and many more.
						</p>
					</div>
				</div>
			</div>
		</section>
	@show
	@section('services')
		<section class="services-block">
			<div class="container">
				<div class="row">
					<div class="col-sm-12">
						<h2>WHAT WE OFFER</h2>
					</div>
				</div>
				<div class="row zoom-gallery" data-animate="zoomIn" data-delay="0">
					<div class="col-sm-4">
						<a href="{{URL::asset('guest/images/portfolio/image1.jpg')}}"
						   data-source="{{URL::asset('guest/images/portfolio/image1.jpg')}}"
						   title="Some Project Information"
						   class="gallery-item effect-milo">
							<img src="{{URL::asset('guest/images/portfolio/thumbs/image1.jpg')}}">
						</a>
						<a href="javascript:;" class="gallery-item-title">SOME WORK SAMPLE</a>
						<p class="gallery-item-descr">Ut enim ad minim veniam,
							quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
							consequat.</p>
					</div>
					<div class="col-sm-4" data-animate="zoomIn" data-delay="300">
						<a href="{{URL::asset('guest/images/portfolio/image2.jpg" data-source="images/portfolio/image2.jpg')}}"
						   title="Some Project Information" class="gallery-item effect-milo">
							<img src="{{URL::asset('guest/images/portfolio/thumbs/image2.jpg')}}">
						</a>
						<a href="javascript:;" class="gallery-item-title">SOME WORK SAMPLE</a>
						<p class="gallery-item-descr">Ut enim ad minim veniam,
							quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
							consequat.</p>
					</div>
					<div class="col-sm-4" data-animate="zoomIn" data-delay="600">
						<a href="{{URL::asset('guest/images/portfolio/image3.jpg')}}" title="Some Project Information"
						   class="gallery-item effect-milo">
							<img src="{{URL::asset('guest/images/portfolio/thumbs/image3.jpg')}}">
						</a>
						<a href="javascript:;" class="gallery-item-title">SOME WORK SAMPLE</a>
						<p class="gallery-item-descr">Ut enim ad minim veniam,
							quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
							consequat.</p>
					</div>
				</div>
			</div>
		</section>
	@show
	
	@section('video')
		<section class="video-block text-center">
			<div class="video-overlay"></div>
			<div class="container">
				<div class="row">
					<div class="col-sm-8 col-sm-offset-2">
						<h1>MY AWESOME VIDEO DIVIDER</h1>
						<p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla
							pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt
							mollit anim id est laborum.</p><br>
						<p>
							<a href="javascript:;" class="btn btn-default btn-bordered btn-pill">SEE DETAILS</a>
						</p>
					</div>
				</div>
			</div>
			<video loop="" muted="" autoplay=""
			       data-src="{{URL::asset('guest/images/video/Technology_Video_Games_Workers_from_LIFEOFVIDS_on_294720515.mp4')}}">
			
			</video>
		</section>
	@show
	
	@section('features_block')
		<section class="features-block">
			<div class="container">
				<div class="row">
					<div class="col-sm-4" data-animate="fadeInLeft" data-delay="0">
						<h4>PERFECTLY RESPONSIVE</h4>
						<p>Duis aute irure dolor in reprehenderit in voluptate velit esse
							cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
							proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
					</div>
					<div class="col-sm-4" data-animate="fadeInLeft" data-delay="300">
						<h4>SIMPLE & ELEGANT LOOK</h4>
						<p>Duis aute irure dolor in reprehenderit in voluptate velit esse
							cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
							proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
					</div>
					<div class="col-sm-4" data-animate="fadeInLeft" data-delay="600">
						<h4>BUILT WITH BOOTSTRAP</h4>
						<p>Duis aute irure dolor in reprehenderit in voluptate velit esse
							cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
							proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
					</div>
				</div>
			</div>
		</section>
	@show
	@section('product_block')
		<section class="product-block">
			<div class="container">
				<div class="row stacked">
					<div class="col-sm-4">
						<h2><b>ADMIN PANEL</b> THAT CAN FIT ALL YOUR PROJECTS</h2>
						<p>Vivamus tempus luctus nunc, eu euismod ex molestie vel. Mauris dolor neque, vehicula et
							ultricies
							ut, elementum sit amet mi. Curabitur rutrum urna ipsum. Etiam sed lacinia dolor, at posuere
							libero. Sed quis ullamcorper justo.
						</p>
						<p class="text-muted text-sm">
							In hac habitasse platea dictumst. Maecenas ut dolor eu velit ornare malesuada. Nullam
							iaculis mi
							nec arcu condimentum, sed viverra enim ornare. </p>
						<p><a href="http://hubancreative.com/projects/templates/presenter" target="_blank"
						      class="btn btn-success btn-bordered btn-pill">Live Demo</a> <a
									class="btn btn-success btn-pill"
									href="http://themeforest.net/item/coco-responsive-bootstrap-admin-template/9110062"
									target="_blank">READ MORE</a></p>
					</div>
					<div class="col-sm-8">
						<img src="{{URL::asset('guest/images/featured1.png')}}" class="image-sized"
						     data-animate="fadeInRight">
					</div>
				</div>
			</div>
		</section>
	@show
	@section('testimony')
		<section class="testimonials-block parallax-bg text-center" data-stellar-background-ratio="0.6">
			
			<div id="testimonial" class="owl-carousel owl-theme">
				<div class="item">
					<h2>"We really loved working with HubanCreative.<br>They know what they are doing and make<br> you
						feel
						that on every step."</h2>
					<p><b>Micheal Lichtenstein</b><br>CEO, WELLFUND CORPORATION</p>
				</div>
				<div class="item">
					<h2>"All their work are awesome and they are <br>really sensitive about customer happiness.<br>
						Never
						seen a support like this before."</h2>
					<p><b>William Winfrey</b><br>Marketing Manager, DONTDROPBOX</p>
				</div>
				<div class="item">
					<h2>"We really loved working with HubanCreative.<br>They know what they are doing and make<br> you
						feel
						that on every step."</h2>
					<p><b>Micheal Lichtenstein</b><br>CEO, WELLFUND CORPORATION</p>
				</div>
				<div class="item">
					<h2>"All their work are awesome and they are <br>really sensitive about customer happiness.<br>
						Never
						seen a support like this before."</h2>
					<p><b>William Winfrey</b><br>Marketing Manager, DONTDROPBOX</p>
				</div>
			
			</div>
		</section>
	@show
	@section('brands')
		<section class="brands-block text-center">
			<div class="container">
				<h1 class="text-success">Some of our valued clients...</h1>
				<div id="brands" class="owl-carousel owl-theme">
					<div class="item">
						<a href="javascript:;" title="Coca Cola">
							<img class="image-sized" src="{{URL::asset('guest/images/brands/cocacola.png')}}">
						</a>
					</div>
					
					<div class="item">
						<a href="javascript:;" title="Microsoft">
							<img class="image-sized" src="{{URL::asset('guest/images/brands/microsoft.png')}}">
						</a>
					</div>
					
					<div class="item">
						<a href="javascript:;" title="Samsung">
							<img class="image-sized" src="{{URL::asset('guest/images/brands/samsung.png')}}">
						</a>
					</div>
					
					<div class="item">
						<a href="javascript:;" title="Google">
							<img class="image-sized" src="{{URL::asset('guest/images/brands/google.png')}}">
						</a>
					</div>
					
					<div class="item">
						<a href="javascript:;" title="Sony">
							<img class="image-sized" src="{{URL::asset('guest/images/brands/sony.png')}}">
						</a>
					</div>
					
					<div class="item">
						<a href="javascript:;" title="Virgin">
							<img class="image-sized" src="{{URL::asset('guest/images/brands/virgin.png')}}">
						</a>
					</div>
					
					<div class="item">
						<a href="javascript:;" title="Instragram">
							<img class="image-sized" src="{{URL::asset('guest/images/brands/instagram.png')}}">
						</a>
					</div>
				</div>
			</div>
		</section>
	@show
	@section('newsletter')
		<section class="subscribe-block text-center">
			<div class="container">
				<div class="row">
					<div class="col-sm-6 col-sm-offset-3">
						<h1>SUBSCRIBE</h1>
						<p>Please subscribe to our newsletter so you can learn the updates for new services before
							anyone
							else. </p>
						<hr class="divider">
						{!! Form::open(array('action' => 'NewsLetterController@store','role'=>'form','class'=>'form-horizontal form-signin')) !!}
						{{Form::email('email',null,['placeholder'=>'Enter your email address','class'=>'form-control input-lg','id'=>"subscribe-input"])}}
						@if ($errors->has('email'))
							<span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
						@endif
						<button class="btn btn-primary btn-lg subscribe-btn" type="submit">Submit</button>
						{!! Form::close() !!}
					</div>
				</div>
			</div>
		</section>
	@show
	
	@section('footer')
		<footer>
			<div class="container">
				<div class="row">
					<div class="col-sm-4">
						<a href="{{url('/')}}">
							
							<img src="{{URL::asset('guest/img/logo.png')}}" width="100px;" height="100px;"
							     alt="YeskeInterconnect"
							     class="logo">
						</a>
						<h5>Linking People Together</h5>
					
					</div>
					
					
					<div class="col-sm-4">
						<h4>CONTACT US</h4>
						<ul class="list-unstyled company-info">
							<li><i class="icon-phone3"></i> +2349060595949</li>
							<li><i class="icon-envelope"></i> <a
										href="mailto:info@yeskeinterconnect.com">info@yeskeinterconnect.com</a></li>
							<li><i class="icon-alarm2"></i> Monday - Sunday: <strong>24hrs</strong><br></li>
						</ul>
					</div>
					
					<div class="col-sm-4 hidden-xs">
						<h4>SOCIAL STREAM</h4>
						<ul class="list-unstyled social-stream">
							<li><i class="icon-twitter4"></i> We just released an awesome frontend template for our coco
								template. Come on and check it out! - <a
										href="http://goo.gl/ylVWzR">http://goo.gl/ylVWzR</a><br><span
										class="text-default text-sm">Oct 20</span></li>
							<li><i class="icon-twitter4"></i> Our template is going popular. Don't miss it!<br><span
										class="text-default text-sm">Oct 19</span></li>
							<li><i class="icon-facebook4"></i> World is becoming a crazy place. Try to avoid toxic
								materials.<br><span class="text-default text-sm">Oct 19</span></li>
						</ul>
					</div>
				</div>
				<hr>
				<div class="row">
					<div class="col-sm-6">
						<p>Copyright &copy; {{date('Y')}} by <a href="{{env('APP_URL')}}"
						                                        target="_blank">YeskeInterconnect</a>
						</p>
					</div>
					<div class="col-sm-6 text-right">
						<div class="social-links">
							<a href="https://twitter.com/yeskeintercon">
								<i class="icon-twitter4"></i>
							</a>
							<a href="https://facebook.com/yeskeinterconnect">
								<i class="icon-facebook4"></i>
							</a>
							
							<a href="https://ng.linkedin.com/in/yeske-interconnect-100a34113">
								<i class="icon-linkedin3"></i>
							</a>
						</div>
					</div>
				</div>
			</div>
		</footer>
	@show
	
	<a class="tothetop" href="javascript:;"><i class="icon-angle-up"></i></a>
</div>

<script>
    var resizefunc = [];
</script>
@section('script')
	<script src="{{URL::asset('guest/assets/libs/less-js/less-1.7.5.min.js')}}"></script>
	<script src="{{URL::asset('guest/assets/libs/pace/pace.min.js')}}"></script>
	<script src="{{URL::asset('guest/assets/libs/jquery/jquery-1.11.1.min.js')}}"></script>
	<script src="{{URL::asset('guest/assets/libs/bootstrap/js/bootstrap.min.js')}}"></script>
	<script src="{{URL::asset('guest/assets/libs/jquery-browser/jquery.browser.min.js')}}"></script>
	<script src="{{URL::asset('guest/assets/libs/fastclick/fastclick.js')}}"></script>
	<script src="{{URL::asset('guest/assets/libs/stellarjs/jquery.stellar.min.js')}}"></script>
	<script src="{{URL::asset('guest/assets/libs/jquery-appear/jquery.appear.js')}}"></script>
	<script src="{{URL::asset('guest/assets/js/init.js')}}"></script>
	<!-- Page Specific JS Libraries -->
	<script src="{{URL::asset('guest/assets/libs/owl-carousel/owl.carousel.min.js')}}"></script>
	<script src="{{URL::asset('guest/assets/libs/jquery-magnific/jquery.magnific-popup.min.js')}}"></script>
	<script src="{{URL::asset('guest/assets/js/pages/index.js')}}"></script>
@show
<!-- Page Specific JS Libraries End -->
</body>
</html>