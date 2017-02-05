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
			Welcome to Yeske...    Linking People Together.
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
					   class="signup-button">CREATE ACCOUNT</a>
				</p>
			@endif
			
			<p class="phone">
				<i class="fa fa-phone"></i><a href="tel"> +234-9060-595-949</a>
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
					<h1><a id="logo" href="#" title="YeskeInterconnect">
							
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
						{{-----	<li><a href="{{url('contact')}}"
								   class="menu-item {{Route::getCurrentRoute()->getPath() == 'contact' ? 'active' : ''}}">CONTACT</a>
							</li>----}}
						@if(Auth::user())
							<li class="menu-item "><a href="{{url(Auth::user()->route)}}">MY ACCOUNT</a></li>
						@endif
					
					</ul>
				</nav>
				<a class="responsive-menu-toggle" href="#"><i class='fa fa-reorder'></i></a>
			</div>
		</div>
	</header>
	
	<div id="mfn-rev-slider">
		<div id="rev_slider_3_1_wrapper" class="rev_slider_wrapper fullwidthbanner-container"
		     style="margin:0px auto;padding:0px;margin-top:0px;margin-bottom:0px;max-height:480px;">
			<!-- START REVOLUTION SLIDER 4.6.9 fullwidth mode -->
			<div id="rev_slider_3_1" class="rev_slider fullwidthabanner"
			     style="display:none;max-height:480px;height:480px;">
				<ul>
					<!-- SLIDE  1-->
				
					
					<!-- SLIDE 2 -->
					<li data-transition="boxslide" data-slotamount="7" data-masterspeed="300"
					    data-saveperformance="off">
						<!-- MAIN IMAGE -->
						<img src="{{asset('rcoco/upload/revslider/slider2/slide_2_0.jpg')}}" alt="YeskeInterconnect" data-bgposition="center top"
						     data-bgfit="cover" data-bgrepeat="no-repeat">
						<!-- LAYERS -->
						<!-- LAYER NR. 1 -->
						<div class="tp-caption lfb" data-x="right" data-hoffset="-87" data-y="bottom" data-voffset="158"
						     data-speed="1000" data-start="1400" data-easing="easeInOutSine" data-elementdelay="0"
						     data-endelementdelay="0" data-end="5700" data-endspeed="300" style="z-index: 5;">
							<img src="{{asset('rcoco/upload/revslider/slider2/img_02.png')}}" alt="YeskeInterconnect">
						</div>
						<!-- LAYER NR. 2 -->
						<div class="tp-caption boxed_medium_light lft" data-x="63" data-y="228" data-speed="900"
						     data-start="2200" data-easing="easeInOutSine" data-splitin="none" data-splitout="none"
						     data-elementdelay="0" data-endelementdelay="0" data-end="5700" data-endspeed="300"
						     style="z-index: 6; max-width: auto; max-height: auto; white-space: nowrap;">
							You will love YESKEINTERCONNECT
						</div>
						<!-- LAYER NR. 3 -->
						<div class="tp-caption boxed_medium_light lft" data-x="76" data-y="169" data-speed="1000"
						     data-start="1800" data-easing="easeInOutSine" data-splitin="none" data-splitout="none"
						     data-elementdelay="0" data-endelementdelay="0" data-end="5700" data-endspeed="300"
						     style="z-index: 7; max-width: auto; max-height: auto; white-space: nowrap;">
							100% Money GUARANTEED
						</div>
						<!-- LAYER NR. 4 -->
						<div class="tp-caption randomrotate" data-x="240" data-y="286" data-speed="1000"
						     data-start="2600" data-easing="easeInOutSine" data-splitin="none" data-splitout="none"
						     data-elementdelay="0" data-endelementdelay="0" data-end="5700" data-endspeed="300"
						     style="z-index: 8; max-width: auto; max-height: auto; white-space: nowrap;">
							<a href="{{url('how_it_works')}}" class='tp-button green'>Take a tour&nbsp;&nbsp;<i class="icon-hand-up"></i></a>
						</div>
					</li>
					
					<!-- SLIDE  3-->
					<li data-transition="papercut" data-slotamount="7" data-masterspeed="300" data-delay="5000"
					    data-saveperformance="off">
						<!-- MAIN IMAGE -->
						<img src="{{asset('rcoco/upload/revslider/slider2/slide_2_0.jpg')}}" alt="slide_3" data-bgposition="center top"
						     data-bgfit="cover" data-bgrepeat="no-repeat">
						<!-- LAYERS -->
						<!-- LAYER NR. 1 -->
						<div class="tp-caption boxed_large_light tp-fade" data-x="438" data-y="154" data-speed="300"
						     data-start="500" data-easing="easeOutExpo" data-splitin="none" data-splitout="none"
						     data-elementdelay="0" data-endelementdelay="0" data-end="4700" data-endspeed="300"
						     style="z-index: 5; max-width: auto; max-height: auto; white-space: nowrap;">
							Get PAID Quick
						</div>
						<!-- LAYER NR. 2 -->
						<div class="tp-caption boxed_medium_light tp-fade" data-x="321" data-y="226" data-speed="300"
						     data-start="800" data-easing="easeOutExpo" data-splitin="none" data-splitout="none"
						     data-elementdelay="0" data-endelementdelay="0" data-end="4700" data-endspeed="300"
						     style="z-index: 6; max-width: auto; max-height: auto; white-space: nowrap;">
							We Make Your Money Count
						</div>
						<!-- LAYER NR. 3 -->
						<div class="tp-caption tp-fade" data-x="547" data-y="286" data-speed="300" data-start="1100"
						     data-easing="easeOutExpo" data-splitin="none" data-splitout="none" data-elementdelay="0"
						     data-endelementdelay="0" data-end="4700" data-endspeed="300"
						     style="z-index: 7; max-width: auto; max-height: auto; white-space: nowrap;">
							<a href='{{url('how_it_works')}}' class='tp-button green small'>Take a tour&nbsp;&nbsp;<i
										class="icon-hand-up"></i></a>
						</div>
					</li>
				</ul>
				<div class="tp-bannertimer tp-bottom" style="visibility: hidden !important;">
				</div>
			</div>
		</div>
		<!-- END REVOLUTION SLIDER -->
	</div>
	<div id="Subheader">
		<div class="container">
			<div class="column one">
				@section('recharge')
					<h5 class="title1">Stay up for our lot's of freebis coming this week. You can be the next winner</h5>
				@show
			
			</div>
		</div>
	</div>
	<!-- #Content -->
	<div id="Content">
		@if (session()->has('flash_notification.message'))
			<div class="alert alert-{{ session('flash_notification.level') }}">
				<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
				{!! session('flash_notification.message') !!}
			</div>
		@endif
		<div class="content_wrapper clearfix">
			<!-- .sections_group -->
			<div class="sections_group">
				
				<!-- Who We Are, why choose... -->
				<div class="section " style="padding:20px 0;">
					<div class="section_wrapper clearfix">
						<div class="items_group clearfix">
							<div class="column one-fourth article_box">
								<div class="article_box">
									<div class="photo">
										<a href="#" target="_blank"><img class="scale-with-grid"
										                                 src="{{asset('rcoco/upload/building_success.png')}}"
										                                 alt="Powerful admin panel"/></a>
									</div>
									<div class="desc">
										<h5>Building Your Success</h5>
										<p>
											We help you grow faster, we our team of agents around the country, working
											hard to ensure you don't loss
										</p>
										<a class="button" href="#" target="_blank">Read more →</a>
									</div>
								</div>
							</div>
							<div class="column one-fourth article_box">
								<div class="article_box">
									<div class="photo">
										<a href="#"><img class="scale-with-grid"
										                 src="{{asset('rcoco/upload/outstanding_support.png')}}"
										                 alt="Outstanding support"/></a>
									</div>
									<div class="desc">
										<h5>Outstanding support</h5>
										<p>
											We work for you, providing you the ultimate support to grow your team and
											you stand the chance to loss nothing
										</p>
										<a class="button" href="#">Read more →</a>
									</div>
								</div>
							</div>
							<div class="column one-fourth info_box">
								<div class="info_box">
									<h4>Why choose us?</h4>
									<div class="inside">
										<ul>
											<li>Our Plans are SIMPLE</li>
											<li>100% MONEY guaranteed back</li>
											<li>Tons of bonuses to boost your earnings</li>
											<li>Register and get only two persons</li>
											<li><a href="#">and so much more...</a></li>
										</ul>
									</div>
								</div>
							</div>
							<div class="column one-fourth call_to_action1">
								<div class="call_to_action1 "
								     style="background-image:url('{{asset('guest/img/faceofyeske.jpg')}}'); background-size:cover; height:300px;">
									<a href="#" class="">
										<div class="inner-padding" style="text-align: center">
											<h4><strong>Face of Yeske</strong></h4>
											<p>
												<br/>
												<br/>
												<br/>
												Apply for the NEXT FACE OF YESKE<br/>
											</p><br/>
											
											<br/>
											<br/>
											<strong>FACE of YESKE</strong>
											<br/>
											<br/>
											<br/>
											<br/>
											<a href="http://face.yeskeinterconnect.com" class="button">&mdash;
												NOW &mdash;</a>
										</div>
									</a>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!--end Who We Are, why choose... -->
				
				<!-- icons -->
				<div class="section "
				     style="padding:40px 0 20px;  background-image:url({{asset("rcoco/upload/background_1.jpg")}}); background-repeat:no-repeat; background-position:center; background-attachment:fixed; -webkit-background-size:cover; background-size:cover">
					<div class="section_wrapper clearfix">
						<div class="items_group clearfix">
							<div class="column one column">
								<div style="text-align: center;">
									<h2>Why YeskeInterconnect is so awesome?</h2>
									<p style="font-size: 15px; line-height: 24px;">
										Because is easy and fast, we are the most efficient networking company with the
										best hands, ideas and plans to ensure you always win.
									</p>
								</div>
							</div>
							<div class="column one-fourth icon_box">
								<div class="icon_box">
									<div class="ico" style="background:#2C3E50; color:#fff;">
										<i class="fa fa-rub"></i>
									</div>
									<h5>Unique</h5>
									<p>
										This is the fastest networking platform and one of its kinds so far. We offer a fast and guaranteed services that will suite your taste.
									</p>
								</div>
							</div>
							<div class="column one-fourth icon_box">
								<div class="icon_box">
									<div class="ico" style="background:#2C3E50; color:#fff;">
										<i class="fa fa-star"></i>
									</div>
									<h5>Dedicated support</h5>
									<p>
										Yeske Interconnect has a dedicated service centre run by highly trained and efficient staff to ensure excellent service delivery at a regular basis..
									</p>
								</div>
							</div>
							<div class="column one-fourth icon_box">
								<div class="icon_box">
									<div class="ico" style="background:#2C3E50; color:#fff;">
										<i class="fa fa-clock-o"></i>
									</div>
									<h5>Fast</h5>
									<p>
										With a two by two matrix, Yeske ensures a fast service delivery from the point of registration and payment. Together we can achieve greatness.
									</p>
								</div>
							</div>
							<div class="column one-fourth icon_box">
								<div class="icon_box">
									<div class="ico" style="background:#2C3E50; color:#fff;">
										<i class="fa fa-code"></i>
									</div>
									<h5>Money Back Guaranteed</h5>
									<p>
										Register and find it difficult introducing two people or the system is unable to queue you up within the space of two weeks, simply apply for a refund by sending us an email. We are reliable and trusted.
									</p>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- icons -->
				
				
				<!-- Features, Testimonials etc -->
				<div class="section " style="padding:40px 0;">
					<div class="section_wrapper clearfix">
						<div class="items_group clearfix">
							<div class="column one-fourth column">
								<h3>Joining YeskeInterconnect is SIMPLE</h3>
								<p>
									
								</p>
								<ul class="list list_tick">
									<li>Choose the level</li>
									<li>Pay for the level</li>
									<li>Bring two people through your referral link</li>
									<li>Immediately you bring two people under you and payment made, you are getting
										paid (no time wasting)
									</li>
								</ul>
								<a href="#" class="button">Read more about us</a>
							</div>
							<div class="column one-fourth testimonials">
								<div class="testimonials">
									<h3>Testimonials</h3>
									<ul class="slider">
										<li>
											<blockquote>
												<a href="#">
													<p>
														Ha, have to just take off the hat for this Theme. I purchased
														over 30 themes here and this is absolutely the best. Awesome
														work mate [&#8230;]
													</p>
													<span class="arrow"></span></a>
												<div class="author">
													<div class="photo">
														<img width="80" height="80"
														     src="{{asset('rcoco/upload/team_3-80x80.png')}}"
														     class="scale-with-grid wp-post-image" alt="team_3"/>
													</div>
													<div class="desc">
														<h6>Mrnicoo</h6>
														<a target="_blank" href="#"><span>Themeforest</span></a>
													</div>
												</div>
											</blockquote>
										</li>
										<li>
											<blockquote>
												<a href="index.html">
													<p>
														thank you very much… just to reiterate what everyone else seems
														to be saying this is without a doubt the simplest and most user
														friendly Html experience I [&#8230;]
													</p>
													<span class="arrow"></span></a>
												<div class="author">
													<div class="photo">
														<img width="80" height="80"
														     src="{{asset('rcoco/upload/team_4-80x80.png')}}"
														     class="scale-with-grid wp-post-image" alt="team_4"/>
													</div>
													<div class="desc">
														<h6>philparris</h6>
														<a target="_blank" href="#"><span>Bretheon Theme</span></a>
													</div>
												</div>
											</blockquote>
										</li>
										<li>
											<blockquote>
												<a href="index.html">
													<p>
														Someone said they built a website in 3 hours with this template.
														I built out an entire site in about the same time. This theme is
														the best [&#8230;]
													</p>
													<span class="arrow"></span></a>
												<div class="author">
													<div class="photo">
														<img class="scale-with-grid"
														     src="{{asset('rcoco/images/testimonials-placeholder.png')}}"
														     alt="HyacinthMarketing"/>
													</div>
													<div class="desc">
														<h6>HyacinthMarketing</h6>
														<a target="_blank" href="#"><span>Max Themes</span></a>
													</div>
												</div>
											</blockquote>
										</li>
									</ul>
								</div>
							</div>
							@section('our_post')
								<div class="column one-fourth latest_posts">
									<div class="latest_posts">
										<h3>Latest posts</h3>
										<div class="inside">
											<ul>
												<li>
													<div class="photo">
														<img width="148" height="80"
														     src="{{asset('rcoco/upload/blog_1-148x80.jpg')}}"
														     class="scale-with-grid wp-post-image" alt="blog_1"/>
													</div>
													<div class="desc">
														<h6><a class="title" href="#">new! Content Builder for posts</a>
														</h6>
														<span class="comments"><a href="#">2</a> Comments</span>
													</div>
												</li>
												<li>
													<div class="photo">
														<img width="148" height="80"
														     src="{{asset('rcoco/upload/blog_2-148x80.jpg')}}"
														     class="scale-with-grid wp-post-image" alt="blog_2"/>
													</div>
													<div class="desc">
														<h6><a class="title" href="#">Post with right sidebar</a></h6>
														<span class="comments"><a href="#">0</a> Comments</span>
													</div>
												</li>
												<li>
													<div class="photo">
														<img width="148" height="80"
														     src="{{asset('rcoco/upload/blog_3-148x80.jpg')}}"
														     class="scale-with-grid wp-post-image" alt="blog_3"/>
													</div>
													<div class="desc">
														<h6><a class="title" href="#">Revolution Slider left sidebar</a>
														</h6>
														<span class="comments"><a href="#">2</a> Comments</span>
													</div>
												</li>
											</ul>
											<a class="button" href="#">Go to blog →</a>
										</div>
									</div>
								</div>
							@show
							<div class="column one-fourth contact_box">
								<div class="get_in_touch">
									<h3>For Adverts</h3>
									<div class="inside">
										<div class="photo">
											<img class="scale-with-grid"
											     src="{{asset('rcoco/upload/get_in_touch.jpg')}}" alt="Get in touch"/>
										</div>
										<ul>
											<li class="phone"><i class="fa fa-phone"></i>
												<p>
													+234-9060-595-949
												</p>
											</li>
											<li class="mail"><i class="fa fa-envelope"></i>
												<p>
													<a href="mailto:info@yeskeinterconnect.com">info@yeskeinterconnect
														.com</a>
												</p>
											</li>
										
										</ul>
									</div>
								</div>
							</div>
							<div class="column one divider">
								<hr style="margin: 0 0 0px; border:none; width:0; height:0;"/>
							</div>
						</div>
					</div>
				</div>
				<!-- end Features, Testimonials etc -->
			
			@section('portfolio')
				<!-- Portfolio -->
					<div class="section dark"
					     style="padding:40px 0 20px; background-color:; background-image:url({{asset("rcoco/upload/background_2.jpg")}}); background-repeat:no-repeat; background-position:center; background-attachment:fixed; -webkit-background-size:cover; background-size:cover">
						<div class="section_wrapper clearfix">
							<div class="items_group clearfix">
								<div class="column one column">
									<div style="text-align: center;">
										<h2>Perfect to show your portfolio</h2>
									</div>
								</div>
								<div class="column one portfolio">
									<div class="recent_works">
										<div class="inside">
											<ul class="da-thumbs">
												<li>
													<h6>new! Content Builder for portfolio</h6>
													<a href="#"><img width="600" height="400"
													                 src="{{asset('rcoco/upload/portfolio_1-600x400.jpg')}}"
													                 class="scale-with-grid wp-post-image"
													                 alt="portfolio_1"/>
														<div>
															<span class="ico"><i class="fa fa-plus"></i></span>
														</div>
													</a></li>
												<li>
													<h6>Revolution slider right sidebar</h6>
													<a href="#"><img width="600" height="400"
													                 src="{{asset('rcoco/upload/portfolio_2-600x400.jpg')}}"
													                 class="scale-with-grid wp-post-image"
													                 alt="portfolio_2"/>
														<div>
															<span class="ico"><i class="fa fa-plus"></i></span>
														</div>
													</a></li>
												<li>
													<h6>Video with left sidebar</h6>
													<a href="#"><img width="600" height="400"
													                 src="{{asset('rcoco/upload/portfolio_81-600x400.jpg')}}"
													                 class="scale-with-grid wp-post-image"
													                 alt="portfolio_8"/>
														<div>
															<span class="ico"><i class="fa fa-plus"></i></span>
														</div>
													</a></li>
												<li>
													<h6>Mattis consectetur</h6>
													<a href="#"><img width="600" height="400"
													                 src="{{asset('rcoco/upload/portfolio_71-600x400.jpg')}}"
													                 class="scale-with-grid wp-post-image"
													                 alt="portfolio_7"/>
														<div>
															<span class="ico"><i class="fa fa-plus"></i></span>
														</div>
													</a></li>
												<li>
													<h6>Faucibus orci luctus</h6>
													<a href="#"><img width="600" height="400"
													                 src="{{asset('rcoco/upload/portfolio_6-600x400.jpg')}}"
													                 class="scale-with-grid wp-post-image"
													                 alt="portfolio_6"/>
														<div>
															<span class="ico"><i class="fa fa-plus"></i></span>
														</div>
													</a></li>
												<li>
													<h6>Aenean accumsan</h6>
													<a href="#"><img width="600" height="400"
													                 src="{{asset('rcoco/upload/portfolio_5-600x400.jpg')}}"
													                 class="scale-with-grid wp-post-image"
													                 alt="portfolio_5"/>
														<div>
															<span class="ico"><i class="fa fa-plus"></i></span>
														</div>
													</a></li>
											</ul>
											<div class="more">
												<a class="button button_large" href="#">View more →</a>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				@show
				
				@section('newsletter')
					<div class="widgets_wrapper clearfix">
						<div class="container">
							<div class="one-fourth column">
								.
							</div>
							<div class="one-second column">
								{!! Form::open(array('action' => 'NewsLetterController@store','role'=>'form','class'=>'contact')) !!}
								<h6 style="color: #000;">Subscribe to our newsletter and don't miss out on any
									opportunity</h6>
								<span class="wpcf7-form-control-wrap email">
							{!! Form::email('email',null,['class'=>'wpcf7-form-control wpcf7-text wpcf7-validates-as-required','aria-required'=>'true','aria-invalid'=>"false",'size'=>"40",'placeholder'=>"Your email"]) !!}
							</span>
								<input type="submit" id="submit_contact1" value="SUBSCRIBE"
								       class="wpcf7-form-control wpcf7-submit"/>
								@if ($errors->has('email'))
									<span class="help-block clearfix" style="color: red">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
								@endif
								{!! Form::close() !!}
							</div>
						</div>
					</div>
				@show
			
			</div>
			<!-- .four-columns - sidebar -->
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
			
			{!! Form::open(array('action' => 'ContactUsController@contact','role'=>'form','class'=>'contact')) !!}
			<p>
						<span class="wpcf7-form-control-wrap name">
							{!! Form::text('name',null,
							['class'=>'wpcf7-form-control wpcf7-text wpcf7-validates-as-required','aria-required'=>'true','aria-invalid'=>"false",'size'=>"40",'placeholder'=>"Your name"]) !!}
						</span>
				
				<span class="wpcf7-form-control-wrap email">
							
					{!! Form::email('email',null,
							['class'=>'wpcf7-form-control wpcf7-text wpcf7-validates-as-required','aria-required'=>'true','aria-invalid'=>"false",'size'=>"40",'placeholder'=>"Your email"]) !!}
						</span>
				
				<span class="wpcf7-form-control-wrap subject">
					{!! Form::text('subject',null,
						['class'=>'wpcf7-form-control wpcf7-text wpcf7-validates-as-required','aria-required'=>'true','aria-invalid'=>"false",'size'=>"40",'placeholder'=>"Subject"]) !!}
						</span>
				
				<span class="wpcf7-form-control-wrap message">
					{!! Form::textarea('comment',null,
					['class'=>'wpcf7-form-control wpcf7-textarea wpcf7-validates-as-required','aria-required'=>'true','aria-invalid'=>"false",'cols'=>"40", 'rows'=>"6" ,'placeholder'=>"Message"]) !!}
						</span>
				<input type="submit" id="submit_contact" value="Send message"
				       class="wpcf7-form-control wpcf7-submit"/>
			<div id="msg" class="message"></div>
			<p></p>
			{!! Form::close() !!}
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
