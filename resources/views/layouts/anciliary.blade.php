<!DOCTYPE html>
<!--[if lt IE 7 ]>
<html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]>
<html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]>
<html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!-->
<!--<![endif]-->
<html lang="en-US">
<!-- head -->
<head>
	<meta http-equiv="content-type" content="text/html;charset=UTF-8"/>
	
	<!-- meta -->
	<meta charset="UTF-8"/>
	<meta http-equiv="X-UA-Compatible" content="IE=edge"/>
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	
	<title>@yield('title')</title>
	
	<link rel="shortcut icon" href="{{asset('guest/img/logo.png')}}" type="image/x-icon">
	<link rel="apple-touch-icon" href="{{asset('guest/img/logo.png')}}">
	<link rel="apple-touch-icon" sizes="72x72" href="{{asset('guest/img/logo.png')}}">
	<link rel="apple-touch-icon" sizes="114x114" href="{{asset('guest/img/logo.png')}}">
	<link rel="apple-touch-icon" sizes="144x144" href="{{asset('guest/img/logo.png')}}">
	
	<script>
        //<![CDATA[
        window.mfn_slider_portfolio = {visible: 4, auto: 6};
        window.mfn_slider_clients = {visible: 6, auto: 0};
        //]]>
	</script>
	
	
	<link rel='stylesheet' href="{{asset('rcoco/css/cform.css')}}" type='text/css' media='all'/>
	<link rel='stylesheet' href="{{asset('rcoco/js/doptg/libraries/gui/css/jquery.jscrollpane.css')}}" type='text/css'
	      media='all'/>
	<link rel='stylesheet' href="{{asset('rcoco/js/doptg/assets/gui/css/jquery.dop.ThumbnailGallery.css')}}"
	      type='text/css' media='all'/>
	<link rel='stylesheet' href="{{asset('rcoco/css/tp_twitter_plugin.css')}}" type='text/css' media='screen'/>
	<link rel='stylesheet' href="{{asset('rcoco/rs-plugin/css/settings.css')}}" type='text/css' media='all'/>
	<link rel='stylesheet' href="{{asset('rcoco/css/ubermenu.css')}}" type='text/css' media='all'/>
	<link rel='stylesheet' href="{{asset('rcoco/css/style.css')}}" type='text/css' media='all'/>
	<link rel='stylesheet' href="{{asset('rcoco/css/prettyPhoto.css')}}" type='text/css' media='all'/>
	<link rel='stylesheet' href="{{asset('rcoco/css/responsiveslides.css')}}" type='text/css' media='all'/>
	<link rel='stylesheet' href="{{asset('rcoco/css/jcarousel/skine.css')}}" type='text/css' media='all'/>
	<link rel='stylesheet' href="{{asset('rcoco/css/ui/jquery.ui.all.css')}}" type='text/css' media='all'/>
	<link rel='stylesheet' href="{{asset('rcoco/css/responsive.css')}}" type='text/css' media='all'/>
	<link rel='stylesheet' href="{{asset('rcoco/css/skins/green/imagese.css')}}" type='text/css' media='all'/>
	<link rel='stylesheet' href="{{asset('rcoco/css/style-colors.css')}}" type='text/css' media='all'/>
	<link rel='stylesheet' href="{{asset('rcoco/css/style-2.css')}}" type='text/css' media='all'/>
	<link rel="stylesheet" href="{{asset('rcoco/css/custom.css')}}" media="all"/>
	
	<link rel='stylesheet'
	      href='http://fonts.googleapis.com/css?family=Open+Sans%3A300%2C400%2C400italic%2C700&amp;ver=4.2.2'
	      type='text/css' media='all'/>
	<link rel='stylesheet' href='http://fonts.googleapis.com/css?family=Patua+One&amp;ver=4.2.2' type='text/css'
	      media='all'/>
	
	
	<!--[if lt IE 9]>
	<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
	<!--[if lte IE 8]>
	<link rel="stylesheet" href="http://themes.muffingroup.com/rocco/wp-content/themes/rocco/css/ie8.css"/>
	<![endif]-->


</head>

<!-- body -->
<body class="home page page-id-4311 page-parent page-template-default template-slider  sticky-header layout-full-width">

<div id="fb-root"></div>
<script>(function (d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s);
        js.id = id;
        js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.8&appId=1014831538540996";
        fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));</script>

<!-- #Wrapper -->
<div id="Wrapper">
	<!-- #top_bar -->
	<div id="top_bar">
		<p class="slogan">
			Welcome to Yeske... Linking People Together.
		</p>
		<div class="contact_info">
			@if(Auth::user())
				<p>
					<a href="{{url('logout')}}" class="login-button">LOGOUT</a>
				</p>
			@else
				<p style="padding-right: 20px;">
					<a href="{{url('login')}}" class="login-button" style="padding-right: 8px;">LOGIN</a>
					<a href="{{url('signup')}}"
					   class="signup-button" >CREATE ACCOUNT</a>
				</p>
			@endif
			<p class="phone">
				<i class="fa fa-phone"></i><a href="#"> +234-9060-595-949</a>
			</p>
		
			<p class="mail">
				<i class="fa fa-envelope-o"></i>
				<a href="mailto:info@yeskeinterconnect.com">info@yeskeinterconnect.com</a>
			</p>
		</div>
	</div>
	
	<!-- .header_placeholder 4sticky  -->
	<div class="header_placeholder">
	</div>
	
	<!-- #Header -->
	<header id="Header">
		<div class="container">
			<div class="column one">
				<div class="addons">
					<form method="get" id="searchform" action="#">
						<a class="icon" href="#"><i class="fa fa-search"></i></a>
						<input type="text" class="field" name="s" id="s" placeholder="Enter your search"/>
						<input type="submit" class="submit" value="" style="display:none;"/>
					</form>
					<!-- .social -->
					<div class="social">
						<ul>
							<li class="facebook"><a target="_blank" href="https://facebook.com/yeskeinterconnect"
							                        title="YeskeInterconnect Facebook">F</a></li>
							<li class="twitter"><a target="_blank" href="https://twitter.com/yeskeintercon"
							                       title="YeskeInterconnect Twitter">L</a>
							</li>
							<li class="linked_in"><a target="_blank"
							                         href="https://ng.linkedin.com/in/yeske-interconnect-100a34113"
							                         title="YeskeInterconnect LinkedIn">I</a></li>
						
						</ul>
					</div>
					{{------<div class="language">
						<a href="#"><i class="fa fa-globe"></i>Languages</a>
						<div class="language_select">
							<span class="arrow"></span>
							<ul id="menu-languages" class="">
								<li class="menu-item"><a href="#">English</a></li>
								<li class="menu-item"><a href="#">German</a></li>
								<li class="menu-item"><a href="#">French</a></li>
								<li class="menu-item"><a href="#">Your language</a></li>
							</ul>
						</div>
					</div>--}}
				</div>
				<!-- .logo -->
				<div class="logo">
					<h1><a id="logo" href="{{url('/')}}" title="YeskeInterconnect">
							
							<img class="scale-with-grid" src="{{asset('guest/img/logo.png')}}" height="100px;"
							     width="100px;" alt="YeskeInterconnect">
						</a>
					</h1>
				</div>
				
				<!-- #menu -->
				<nav id="menu" class="menu-main-menu-container">
					<ul id="menu-main-menu" class="menu">
						<li><a href="{{url('/')}}"
						       class="menu-item {{Route::getCurrentRoute()->getPath() == '/' ? 'active' : ''}}">HOME</a>
						</li>
						<li><a href="{{url('about')}}"
						       class="menu-item {{Route::getCurrentRoute()->getPath() == 'about' ? 'active' : ''}}">ABOUT</a>
						</li>
						<li><a href="{{url('how_it_works')}}"
						       class="menu-item {{Route::getCurrentRoute()->getPath() == 'how_it_works' ? 'active' : ''}}">HOW
								IT WORKS</a></li>
						<li><a href="{{url('become_an_agent')}}"
						       class="menu-item {{Route::getCurrentRoute()->getPath() == 'become_an_agent' ? 'active' : ''}}">BECOME
								AN AGENTS</a>
						</li>
						{{----<li><a href="{{url('contact')}}"
						       class="menu-item {{Route::getCurrentRoute()->getPath() == 'contact' ? 'active' : ''}}">CONTACT</a>
						</li>---}}
						@if(Auth::user())
							<li class="menu-item "><a href="{{url(Auth::user()->route)}}">MY ACCOUNT</a></li>
						@endif
					
					</ul>
				</nav>
				<a class="responsive-menu-toggle" href="#"><i class='fa fa-reorder'></i></a>
			</div>
		</div>
	</header>
	<div id="Subheader">
		<div class="container">
			<div class="column one">
				<h1 class="title">@yield('name')</h1>
			</div>
		</div>
	</div>
	
	<!-- #Content -->
	<div id="Content">
		<div class="content_wrapper clearfix">
			<!-- .sections_group -->
			@section('about_us')
				<div class="sections_group">
					<div class="section " style="padding:20px 0;">
						<div class="section_wrapper clearfix">
							<div class="items_group clearfix">
								<div class="column one column">
									<div style="text-align: center;">
										<h2>Meet our team</h2>
										<p style="font-size: 15px; line-height: 24px;">
											Sed posuere consectetur est at lobortis. Morbi leo risus, porta ac
											consectetur ac, vestibulum at eros. Donec ullamcorper nulla non metus auctor
											fringilla. Sed posuere consectetur est at lobortis. Morbi leo risus, porta
											ac consectetur ac, vestibulum at eros. Donec ullamcorper nulla non metus
											auctor fringilla. Sed posuere consectetur est at lobortis. Morbi leo risus,
											porta ac consectetur ac, vestibulum at eros. Donec ullamcorper nulla non
											metus auctor fringilla.
										</p>
									</div>
								</div>
								<div class="column one-fourth our_team">
									<div class="team">
										<div class="photo">
											<img class="scale-with-grid" src="upload/team_3.png" alt="Gordon Dale"/>
											<div class="mask">
											</div>
											<div class="links">
												<a target="_blank" class="link" href="mailto:noreply@muffingroup.com"><i
															class="fa fa-envelope"></i></a><a target="_blank"
												                                              class="link"
												                                              href="http://facebook.com/"><i
															class="fa fa-facebook"></i></a><a target="_blank"
												                                              class="link"
												                                              href="http://twitter.com/"><i
															class="fa fa-twitter"></i></a><a target="_blank"
												                                             class="link"
												                                             href="http://linkedin.com/"><i
															class="fa fa-linkedin"></i></a>
											</div>
										</div>
										<div class="desc">
											<h4>Gordon Dale</h4>
											<p>
												Account manager
											</p>
											<p class="phone">
												<i class="fa fa-phone"></i><a target="_blank" href="#">+61 (0) 3 8376
													6284</a>
											</p>
										</div>
									</div>
								</div>
								<div class="column one-fourth our_team">
									<div class="team">
										<div class="photo">
											<img class="scale-with-grid" src="upload/team_1.png" alt="Nick Everdeen"/>
											<div class="mask">
											</div>
											<div class="links">
												<a target="_blank" class="link" href="mailto:noreply@muffingroup.com"><i
															class="fa fa-envelope"></i></a><a target="_blank"
												                                              class="link"
												                                              href="http://twitter.com/"><i
															class="fa fa-twitter"></i></a>
											</div>
										</div>
										<div class="desc">
											<h4>Nick Everdeen</h4>
											<p>
												SEO specialist
											</p>
											<p class="phone">
												<i class="fa fa-phone"></i><a target="_blank" href="#">+61 (0) 3 8376
													6284</a>
											</p>
										</div>
									</div>
								</div>
								<div class="column one-fourth our_team">
									<div class="team">
										<div class="photo">
											<img class="scale-with-grid" src="upload/team_4.png" alt="Paul Shepherd"/>
											<div class="mask">
											</div>
											<div class="links">
												<a target="_blank" class="link" href="mailto:noreply@muffingroup.com"><i
															class="fa fa-envelope"></i></a><a target="_blank"
												                                              class="link"
												                                              href="http://facebook.com/"><i
															class="fa fa-facebook"></i></a><a target="_blank"
												                                              class="link"
												                                              href="http://linkedin.com/"><i
															class="fa fa-linkedin"></i></a>
											</div>
										</div>
										<div class="desc">
											<h4>Paul Shepherd</h4>
											<p>
												Head office
											</p>
											<p class="phone">
												<i class="fa fa-phone"></i><a target="_blank" href="#">+61 (0) 3 8376
													6284</a>
											</p>
										</div>
									</div>
								</div>
								<div class="column one-fourth our_team">
									<div class="team">
										<div class="photo">
											<img class="scale-with-grid" src="upload/team_2.png" alt="Thomas McKenzie"/>
											<div class="mask">
											</div>
											<div class="links">
												<a target="_blank" class="link" href="mailto:noreply@envato.com"><i
															class="fa fa-envelope"></i></a><a target="_blank"
												                                              class="link"
												                                              href="http://facebook.com/"><i
															class="fa fa-facebook"></i></a><a target="_blank"
												                                              class="link"
												                                              href="http://twitter.com/"><i
															class="fa fa-twitter"></i></a><a target="_blank"
												                                             class="link"
												                                             href="http://www.linkedin.com/"><i
															class="fa fa-linkedin"></i></a>
											</div>
										</div>
										<div class="desc">
											<h4>Thomas McKenzie</h4>
											<p>
												Account manager
											</p>
											<p class="phone">
												<i class="fa fa-phone"></i><a target="_blank" href="#">+61 (0) 3 8376
													6284</a>
											</p>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					
					<div class="section "
					     style="padding:110px 0 90px; background-color:; background-image:url(upload/background_4.jpg); background-repeat:no-repeat; background-position:center; background-attachment:fixed; -webkit-background-size:cover; background-size:cover">
						<div class="section_wrapper clearfix">
							<div class="items_group clearfix">
								<div class="column one column">
									<div style="text-align: center;">
										<h2 style="margin-bottom: 40px;"><span
													style="background-color:#0aac7c; color:#FFFFFF;" class="highlight">See how and where we work</span>
										</h2>
										<a class="button button_large button_" href="#">View more →</a>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="section " style="padding:20px 0; background-color:">
						<div class="section_wrapper clearfix">
							<div class="items_group clearfix">
								<div class="column one column">
									<div style="text-align: center;">
										<h2>Some info about us</h2>
										<p style="font-size: 15px; line-height: 24px;">
											Create nice Timeline section where you can add some facts about you, your
											company and people that work with.
										</p>
									</div>
								</div>
							</div>
							<div class="column one timeline">
								<ul class="timeline_items">
									<li>
										<h5><span>2013</span>1 Milion$</h5>
										<div class="desc">
											Fusce interdum non sapien vel ultricies. Curabitur vestibulum nunc dui, eget
											scelerisque lectus rutrum ut. Sed justo sapien, mollis non dignissim vel,
											interdum in elit.
										</div>
									</li>
									<li>
										<h5><span>2012</span>100 000 customers</h5>
										<div class="desc">
											Aenean feugiat placerat pulvinar. Sed pretium lorem enim, eu facilisis elit
											porttitor at. Etiam scelerisque laoreet bibendum. Nullam mi nulla, aliquet
											vel ligula ut
										</div>
									</li>
									<li>
										<h5><span>2011</span>Start of our company</h5>
										<div class="desc">
											Curabitur sagittis ante ac est pulvinar blandit ac vel felis. Maecenas ut
											eros dignissim, ullamcorper ante eu, rhoncus ante. Donec a nulla ut mi
											condimentum feugiat in et turpis.
										</div>
									</li>
									<li>
										<h5><span>...</span></h5>
									</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
				<!-- .four-columns - sidebar -->
			@show
		</div>
	</div>
	
	
	<!-- #Footer -->
	<footer id="Footer" class="clearfix">
		<!-- .Our_clients_slider -->
		@section('our_clients')
			<div class="Our_clients_slider">
				<div class="container">
					<div class="column one">
						<a href="#" class="slider_control slider_control_prev"></a>
						<a href="#" class="slider_control slider_control_next"></a>
						<div class="inside">
							<ul>
								<li>
									<div class="slide-wrapper">
										<a target="_blank" href="#1" title="Html"><img width="200" height="65"
										                                               src="{{asset('rcoco/upload/clients_1.png')}}"
										                                               class="scale-with-grid wp-post-image"
										                                               alt="clients_1"/></a>
									</div>
								</li>
								<li>
									<div class="slide-wrapper">
										<a target="_blank" href="#2" title="Twitter"><img width="200" height="65"
										                                                  src="{{asset('rcoco/upload/clients_2.png')}}"
										                                                  class="scale-with-grid wp-post-image"
										                                                  alt="clients_2"/></a>
									</div>
								</li>
								<li>
									<div class="slide-wrapper">
										<img width="200" height="65" src="{{asset('rcoco/upload/clients_3.png')}}"
										     class="scale-with-grid wp-post-image" alt="clients_3"/>
									</div>
								</li>
								<li>
									<div class="slide-wrapper">
										<a target="_blank" href="#4" title="Behance"><img width="200" height="65"
										                                                  src="{{asset('rcoco/upload/clients_4.png')}}"
										                                                  class="scale-with-grid wp-post-image"
										                                                  alt="clients_4"/></a>
									</div>
								</li>
								<li>
									<div class="slide-wrapper">
										<a target="_blank" href="#5" title="WooCommerce"><img width="200" height="65"
										                                                      src="{{asset('rcoco/upload/clients_5.png')}}"
										                                                      class="scale-with-grid wp-post-image"
										                                                      alt="clients_5"/></a>
									</div>
								</li>
								<li>
									<div class="slide-wrapper">
										<a target="_blank" href="#7" title="Pinterest"><img width="200" height="65"
										                                                    src="{{asset('rcoco/upload/clients_7.png')}}"
										                                                    class="scale-with-grid wp-post-image"
										                                                    alt="clients_7"/></a>
									</div>
								</li>
								<li>
									<div class="slide-wrapper">
										<a target="_blank" href="#6" title="Youtube"><img width="200" height="65"
										                                                  src="{{asset('rcoco/upload/clients_6.png')}}"
										                                                  class="scale-with-grid wp-post-image"
										                                                  alt="clients_6"/></a>
									</div>
								</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		@show
		<div class="widgets_wrapper">
			<div class="container">
				
				@section('one-fourth-1')
					<div class="one-fourth column">
						<aside id="text-2" class="widget widget_text">
							<h4>About us</h4>
							<div class="textwidget">
								<h6>We really love working for you and your customers</h6>
								<p>
									We are Muffin Group and we do awesome themes. We do what we love and this is the
									best in
									our life. Try a piece of our work and you will not want to swap for anything else!
								</p>
								<a href="#">Read more &rarr;</a>
							</div>
						</aside>
					</div>
				@show
				@section('one-fourth-2')
					<div class="one-fourth column">
						<aside id="widget_mfn_recent_comments-2" class="widget widget_mfn_recent_comments">
							<h4>Recent comments</h4>
							<div class="Recent_comments">
								<ul>
									<li>
										<div class="text">
											<p>
												"There are many variations of passages of Lorem Ipsum available, but the
												majority have [...]"
											</p>
											<div class="arrow">
											</div>
										</div>
										<p class="author">
											Don Papa, <a href="#" title="Don Papa | Revolution Slider left sidebar">Revolution
												Slider left sidebar</a>
										</p>
									</li>
									<li>
										<div class="text">
											<p>
												"It is a long established fact that a reader will be distracted by the
												[...]"
											</p>
											<div class="arrow">
											</div>
										</div>
										<p class="author">
											Doris, <a href="#" title="Doris | Vimeo &#038; YouTube video post">Vimeo
												&#038;
												YouTube video post</a>
										</p>
									</li>
								</ul>
							</div>
						</aside>
					</div>
				@show
				@section('one-fourth-3')
					<div class="one-fourth column">
						<aside id="widget_mfn_quick_facts-2" class="widget widget_mfn_quick_facts">
							<h4>Quick facts</h4>
							<div class="quick_facts">
								<ul>
									<li><span><i class="fa fa-bomb"></i>12</span>You get bonus upon each referral.</li>
									<li><span><i class="fa fa-coffee"></i>100%</span>Full Money on level completion.
									</li>
									<li><span><i class="fa fa-align-left"></i>74</span>You can become our Ambassador
									</li>
									<li><span><i class="fa fa-calendar"></i>03</span>You can be the next Face of Yeske
									</li>
									<li><span><i class="fa fa-clock-o"></i>24</span>Can win yearly draw of ₦100,000.00
									</li>
								</ul>
							</div>
						</aside>
					</div>
				@show
				@section('one-fourth-4')
					<div class="one-fourth column">
						<aside id="tp_widget_recent_tweets-2" class="widget widget_tp_widget_recent_tweets">
							<h4>Recent Tweets</h4>
							<div id="example2"></div>
						</aside>
					</div>
				@show
			</div>
		</div>
		
		<div class="copyrights">
			<div class="container">
				<div class="column one">
					<p>
						<span class="copy">&copy; {{date('Y')}}, <strong>YeskeInterconnect</strong>. All Rights Reserved.</span>
					</p>
					<div class="social">
						<ul>
							<li class="facebook"><a target="_blank" href="https://facebook.com/yeskeinterconnect"
							                        title="YeskeInterconnect Facebook">F</a></li>
							<li class="twitter"><a target="_blank" href="https://twitter.com/yeskeintercon"
							                       title="YeskeInterconnect Twitter">L</a>
							</li>
							<li class="linked_in"><a target="_blank"
							                         href="https://ng.linkedin.com/in/yeske-interconnect-100a34113"
							                         title="YeskeInterconnect LinkedIn">I</a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</footer>
</div>

<div id="popup_contact">
	<a class="ico" href="#"><i class="fa fa-envelope"></i></a>
	<div class="popup_contact_wrapper">
		<h4>Send us a message</h4>
		<div>
			<div class="screen-reader-response">
			</div>
			<form id="contact-form" class="contact">
				<p>
						<span class="wpcf7-form-control-wrap name">
							<input type="text" name="name" value="" size="40"
							       class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required"
							       aria-required="true" aria-invalid="false" placeholder="Your name"/>
						</span>
					
					<span class="wpcf7-form-control-wrap email">
							 <input type="text" name="mail" value="" size="40"
							        class="wpcf7-form-control wpcf7-text wpcf7-email wpcf7-validates-as-required wpcf7-validates-as-email"
							        aria-required="true" aria-invalid="false" placeholder="Your email"/>
						</span>
					
					<span class="wpcf7-form-control-wrap subject">
							 <input type="text" name="website" value="" size="40"
							        class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required"
							        aria-required="true" aria-invalid="false" placeholder="Subject"/>
						</span>
					
					<span class="wpcf7-form-control-wrap message">
							<textarea name="comment" id="comment" cols="40" rows="6"
							          class="wpcf7-form-control wpcf7-textarea wpcf7-validates-as-required"
							          aria-required="true" aria-invalid="false" placeholder="Message"></textarea>
						</span>
					<input type="submit" id="submit_contact" value="Send message"
					       class="wpcf7-form-control wpcf7-submit"/>
				<div id="msg" class="message"></div>
				<p></p>
			</form>
		</div>
		<span class="arrow"></span>
	</div>
</div>


<script type='text/javascript' src="{{asset('rcoco/js/jquery/jquery.js')}}"></script>
<script type='text/javascript' src="{{asset('rcoco/js/jquery/jquery-migrate.min.js')}}"></script>
<script type='text/javascript' src="{{asset('rcoco/js/doptg/libraries/js/jquery.mousewheel.js')}}"></script>
<script type='text/javascript' src="{{asset('rcoco/js/doptg/libraries/js/jquery.jscrollpane.min.js')}}"></script>
<script type='text/javascript' src="{{asset('rcoco/js/doptg/assets/js/jquery.dop.ThumbnailGallery.js')}}"></script>
<script type='text/javascript' src="{{asset('rcoco/rs-plugin/js/jquery.themepunch.tools.min.js')}}"></script>
<script type='text/javascript' src="{{asset('rcoco/rs-plugin/js/jquery.themepunch.revolution.min.js')}}"></script>
<script type='text/javascript' src="{{asset('rcoco/js/hoverIntent.js')}}"></script>
<script type='text/javascript'>
	/* <![CDATA[ */
    var uberMenuSettings = {
        "speed": "300",
        "trigger": "hoverIntent",
        "orientation": "horizontal",
        "transition": "slide",
        "hoverInterval": "20",
        "hoverTimeout": "400",
        "removeConflicts": "on",
        "autoAlign": "off",
        "noconflict": "off",
        "fullWidthSubs": "off",
        "androidClick": "off",
        "iOScloseButton": "off",
        "loadGoogleMaps": "off",
        "repositionOnLoad": "off"
    };
	/* ]]> */
</script>
<script type='text/javascript' src="{{asset('rcoco/js/ubermenu.min.js')}}"></script>
<script type='text/javascript' src="{{asset('rcoco/js/jquery.form.min.js')}}"></script>

<script type='text/javascript' src="{{asset('rcoco/js/jquery/ui/core.min.js')}}"></script>
<script type='text/javascript' src="{{asset('rcoco/js/jquery/ui/widget.min.js')}}"></script>
<script type='text/javascript' src="{{asset('rcoco/js/jquery/ui/mouse.min.js')}}"></script>
<script type='text/javascript' src="{{asset('rcoco/js/jquery/ui/sortable.min.js')}}"></script>
<script type='text/javascript' src="{{asset('rcoco/js/jquery/ui/tabs.min.js')}}"></script>
<script type='text/javascript' src="{{asset('rcoco/js/jquery/ui/accordion.min.js')}}"></script>
<script type='text/javascript' src="{{asset('rcoco/js/sliders/responsiveslides.js')}}"></script>
<script type='text/javascript' src="{{asset('rcoco/js/sliders/jquery.jcarousel.min.js')}}"></script>
<script type='text/javascript' src="{{asset('rcoco/js/mfn.menu.js')}}"></script>
<script type='text/javascript' src="{{asset('rcoco/js/jquery.plugins.js')}}"></script>
<script type='text/javascript' src="{{asset('rcoco/js/scripts.js')}}"></script>
<script type='text/javascript' src="{{asset('rcoco/js/twitter.js')}}"></script>


<script type="text/javascript">

    /******************************************
     -    PREPARE PLACEHOLDER FOR SLIDER    -
     ******************************************/


    var setREVStartSize = function () {
        var tpopt = new Object();
        tpopt.startwidth = 1200;
        tpopt.startheight = 480;
        tpopt.container = jQuery('#rev_slider_3_1');
        tpopt.fullScreen = "off";
        tpopt.forceFullWidth = "off";

        tpopt.container.closest(".rev_slider_wrapper").css({height: tpopt.container.height()});
        tpopt.width = parseInt(tpopt.container.width(), 0);
        tpopt.height = parseInt(tpopt.container.height(), 0);
        tpopt.bw = tpopt.width / tpopt.startwidth;
        tpopt.bh = tpopt.height / tpopt.startheight;
        if (tpopt.bh > tpopt.bw) tpopt.bh = tpopt.bw;
        if (tpopt.bh < tpopt.bw) tpopt.bw = tpopt.bh;
        if (tpopt.bw < tpopt.bh) tpopt.bh = tpopt.bw;
        if (tpopt.bh > 1) {
            tpopt.bw = 1;
            tpopt.bh = 1
        }
        if (tpopt.bw > 1) {
            tpopt.bw = 1;
            tpopt.bh = 1
        }
        tpopt.height = Math.round(tpopt.startheight * (tpopt.width / tpopt.startwidth));
        if (tpopt.height > tpopt.startheight && tpopt.autoHeight != "on") tpopt.height = tpopt.startheight;
        if (tpopt.fullScreen == "on") {
            tpopt.height = tpopt.bw * tpopt.startheight;
            var cow = tpopt.container.parent().width();
            var coh = jQuery(window).height();
            if (tpopt.fullScreenOffsetContainer != undefined) {
                try {
                    var offcontainers = tpopt.fullScreenOffsetContainer.split(",");
                    jQuery.each(offcontainers, function (e, t) {
                        coh = coh - jQuery(t).outerHeight(true);
                        if (coh < tpopt.minFullScreenHeight) coh = tpopt.minFullScreenHeight
                    })
                } catch (e) {
                }
            }
            tpopt.container.parent().height(coh);
            tpopt.container.height(coh);
            tpopt.container.closest(".rev_slider_wrapper").height(coh);
            tpopt.container.closest(".forcefullwidth_wrapper_tp_banner").find(".tp-fullwidth-forcer").height(coh);
            tpopt.container.css({height: "100%"});
            tpopt.height = coh;
        } else {
            tpopt.container.height(tpopt.height);
            tpopt.container.closest(".rev_slider_wrapper").height(tpopt.height);
            tpopt.container.closest(".forcefullwidth_wrapper_tp_banner").find(".tp-fullwidth-forcer").height(tpopt.height);
        }
    };
	
	/* CALL PLACEHOLDER */
    setREVStartSize();


    var tpj = jQuery;
    tpj.noConflict();
    var revapi3;

    tpj(document).ready(function () {

        if (tpj('#rev_slider_3_1').revolution == undefined) {
            revslider_showDoubleJqueryError('#rev_slider_3_1');
        } else {
            revapi3 = tpj('#rev_slider_3_1').show().revolution(
                {
                    dottedOverlay: "none",
                    delay: 6000,
                    startwidth: 1200,
                    startheight: 480,
                    hideThumbs: 200,

                    thumbWidth: 100,
                    thumbHeight: 50,
                    thumbAmount: 3,


                    simplifyAll: "off",

                    navigationType: "none",
                    navigationArrows: "solo",
                    navigationStyle: "round",

                    touchenabled: "on",
                    onHoverStop: "on",
                    nextSlideOnWindowFocus: "off",

                    swipe_threshold: 0.7,
                    swipe_min_touches: 1,
                    drag_block_vertical: false,


                    keyboardNavigation: "off",

                    navigationHAlign: "center",
                    navigationVAlign: "bottom",
                    navigationHOffset: 0,
                    navigationVOffset: 20,

                    soloArrowLeftHalign: "left",
                    soloArrowLeftValign: "center",
                    soloArrowLeftHOffset: 20,
                    soloArrowLeftVOffset: 0,

                    soloArrowRightHalign: "right",
                    soloArrowRightValign: "center",
                    soloArrowRightHOffset: 20,
                    soloArrowRightVOffset: 0,

                    shadow: 0,
                    fullWidth: "on",
                    fullScreen: "off",

                    spinner: "spinner0",

                    stopLoop: "off",
                    stopAfterLoops: -1,
                    stopAtSlide: -1,

                    shuffle: "off",

                    autoHeight: "off",
                    forceFullWidth: "off",


                    hideTimerBar: "on",
                    hideThumbsOnMobile: "off",
                    hideNavDelayOnMobile: 1500,
                    hideBulletsOnMobile: "off",
                    hideArrowsOnMobile: "off",
                    hideThumbsUnderResolution: 0,

                    hideSliderAtLimit: 0,
                    hideCaptionAtLimit: 0,
                    hideAllCaptionAtLilmit: 0,
                    startWithSlide: 0
                });


        }
    });
	/*ready*/

</script>


</body>
</html>
