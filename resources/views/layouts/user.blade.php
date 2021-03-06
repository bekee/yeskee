<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta name="csrf-token" content="{{ csrf_token() }}"/>
	<title>@yield('title')</title>
	
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
	<meta name="apple-mobile-web-app-capable" content="yes"/>
	<meta name="description" content="">
	<meta name="keywords" content="Online, easy and quick MLM">
	<meta name="author" content="YeskeInterconnect">


@section('css')
	<!-- Base Css Files -->
		<link href="{{URL::asset('loggedin/assets/libs/jqueryui/ui-lightness/jquery-ui-1.10.4.custom.min.css')}}"
		      rel="stylesheet"/>
		<link href="{{URL::asset('loggedin/assets/libs/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet"/>
		<link href="{{URL::asset('loggedin/assets/libs/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet"/>
		<link href="{{URL::asset('loggedin/assets/libs/fontello/css/fontello.css')}}" rel="stylesheet"/>
		<link href="{{URL::asset('loggedin/assets/libs/animate-css/animate.min.css')}}" rel="stylesheet"/>
		<link href="{{URL::asset('loggedin/assets/libs/nifty-modal/css/component.css')}}" rel="stylesheet"/>
		<link href="{{URL::asset('loggedin/assets/libs/magnific-popup/magnific-popup.css')}}" rel="stylesheet"/>
		<link href="{{URL::asset('loggedin/assets/libs/ios7-switch/ios7-switch.css')}}" rel="stylesheet"/>
		<link href="{{URL::asset('loggedin/assets/libs/pace/pace.css')}}" rel="stylesheet"/>
		<link href="{{URL::asset('loggedin/assets/libs/sortable/sortable-theme-bootstrap.css')}}" rel="stylesheet"/>
		<link href="{{URL::asset('loggedin/assets/libs/bootstrap-datepicker/css/datepicker.css')}}" rel="stylesheet"/>
		<link href="{{URL::asset('loggedin/assets/libs/jquery-icheck/skins/all.css')}}" rel="stylesheet"/>
		<!-- Code Highlighter for Demo -->
		<link href="{{URL::asset('loggedin/assets/libs/prettify/github.css')}}" rel="stylesheet"/>
		
		<!-- Extra CSS Libraries Start -->
		<link href="{{URL::asset('loggedin/assets/libs/rickshaw/rickshaw.min.css')}}" rel="stylesheet" type="text/css"/>
		<link href="{{URL::asset('loggedin/assets/libs/morrischart/morris.css')}}" rel="stylesheet" type="text/css"/>
		<link href="{{URL::asset('loggedin/assets/libs/jquery-jvectormap/css/jquery-jvectormap-1.2.2.css')}}"
		      rel="stylesheet" type="text/css"/>
		<link href="{{URL::asset('loggedin/assets/libs/jquery-clock/clock.css')}}" rel="stylesheet" type="text/css"/>
		<link href="{{URL::asset('loggedin/assets/libs/bootstrap-calendar/css/bic_calendar.css')}}" rel="stylesheet"
		      type="text/css"/>
		<link href="{{URL::asset('loggedin/assets/libs/sortable/sortable-theme-bootstrap.css')}}" rel="stylesheet"
		      type="text/css"/>
		<link href="{{URL::asset('loggedin/assets/libs/jquery-weather/simpleweather.css')}}" rel="stylesheet"
		      type="text/css"/>
		<link href="{{URL::asset('loggedin/assets/libs/bootstrap-xeditable/css/bootstrap-editable.css')}}"
		      rel="stylesheet"
		      type="text/css"/>
		<link href="{{URL::asset('loggedin/assets/css/style.css')}}" rel="stylesheet" type="text/css"/>
		<!-- Extra CSS Libraries End -->
		<link href="{{URL::asset('loggedin/assets/css/style-responsive.css')}}" rel="stylesheet"/>
	
	
	
	@show
	
	@section('extra_css1')
		<link href="{{URL::asset('loggedin/assets/css/custom.css')}}" rel="stylesheet" type="text/css"/>
@show

<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
	<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
	<script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
	<![endif]-->
	
	
	<link rel="shortcut icon" href="{{asset('guest/img/logo.png')}}">
	<link rel="apple-touch-icon" href="{{asset('guest/img/logo.png')}}"/>
	<link rel="apple-touch-icon" sizes="57x57" href="{{asset('guest/img/logo.png')}}"/>
	<link rel="apple-touch-icon" sizes="72x72" href="{{asset('guest/img/logo.png')}}"/>
	<link rel="apple-touch-icon" sizes="76x76" href="{{asset('guest/img/logo.png')}}"/>
	<link rel="apple-touch-icon" sizes="114x114"
	      href="{{asset('guest/img/logo.png')}}"/>
	<link rel="apple-touch-icon" sizes="120x120"
	      href="{{asset('guest/img/logo.png')}}"/>
	<link rel="apple-touch-icon" sizes="144x144"
	      href="{{asset('guest/img/logo.png')}}"/>
	<link rel="apple-touch-icon" sizes="152x152"
	      href="{{asset('guest/img/logo.png')}}"/>

</head>
<body class="fixed-left">
<!-- Modal Start -->
<!-- Modal Task Progress -->


@section('progress')
	<div class="md-modal md-3d-flip-vertical" id="task-progress">
		<div class="md-content">
			<h3><strong>Task Progress</strong> Information</h3>
			<div>
				<p>CLEANING BUGS</p>
				<div class="progress progress-xs for-modal">
					<div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="80"
					     aria-valuemin="0" aria-valuemax="100" style="width: 80%">
						<span class="sr-only">80&#37; Complete</span>
					</div>
				</div>
				<p>POSTING SOME STUFF</p>
				<div class="progress progress-xs for-modal">
					<div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="80"
					     aria-valuemin="0" aria-valuemax="100" style="width: 65%">
						<span class="sr-only">65&#37; Complete</span>
					</div>
				</div>
				<p>BACKUP DATA FROM SERVER</p>
				<div class="progress progress-xs for-modal">
					<div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="80" aria-valuemin="0"
					     aria-valuemax="100" style="width: 95%">
						<span class="sr-only">95&#37; Complete</span>
					</div>
				</div>
				<p>RE-DESIGNING WEB APPLICATION</p>
				<div class="progress progress-xs for-modal">
					<div class="progress-bar progress-bar-primary" role="progressbar" aria-valuenow="80"
					     aria-valuemin="0" aria-valuemax="100" style="width: 100%">
						<span class="sr-only">100&#37; Complete</span>
					</div>
				</div>
				<p class="text-center">
					<button class="btn btn-danger btn-sm md-close">Close</button>
				</p>
			</div>
		</div>
	</div>
@show


<!-- Modal Logout -->
@section('logout')
	<div class="md-modal md-just-me" id="logout-modal">
		<div class="md-content">
			<h3><strong>Logout</strong> Confirmation</h3>
			<div>
				<p class="text-center">Are you sure want to logout from this awesome system?</p>
				<p class="text-center">
					<button class="btn btn-danger md-close">Nope!</button>
					<a href="{{url('logout')}}" class="btn btn-success md-close">Yeah, I'm sure</a>
				</p>
			</div>
		</div>
	</div>
@show
<!-- Modal End -->


<!-- Begin page -->
<div id="wrapper">
	
	<!-- Top Bar Start -->
	<div class="topbar">
		@section('logo')
			<div class="topbar-left">
				<div class="logo">
					<h1 style="height: 100%"><a href="{{url('/')}}">
							
							<img id="" src="{{URL::asset('guest/img/logo.png')}}" width="50px;">
						
						</a>
					</h1>
				</div>
				<button class="button-menu-mobile open-left">
					<i class="fa fa-bars"></i>
				</button>
			</div>
		@show
	
	<!-- Button mobile view to collapse sidebar menu -->
		@section('left_sidebar')
			<div class="navbar navbar-default" role="navigation">
				<div class="container">
					<div class="navbar-collapse2">
						
						
						<ul class="nav navbar-nav navbar-right top-navbar">
							<!--Chat-->
							{{----<li class="dropdown iconify hide-phone">
								@section('new_chat')
									<a href="#connect" data-toggle="tab" class="open-right"><i
												class="fa fa-comments"></i><span
												class="label label-danger absolute">1</span></a>
								@show
							</li>
							<!--Notifacation-->
							<li class="dropdown iconify hide-phone">
								@section('new_notifaction')
									<a href="#" class="dropdown-toggle" data-toggle="dropdown"><i
												class="fa fa-globe"></i><span
												class="label label-danger absolute">4</span></a>
									<ul class="dropdown-menu dropdown-message">
										<li class="dropdown-header notif-header">
											<i class="icon-bell-2"></i> New Notifications<a class="pull-right"
											                                                href="#"><i
														class="fa fa-cog"></i></a></li>
										<li class="unread">
											<a href="#">
												<p><strong>John Doe</strong> Uploaded a photo <strong>&#34;DSC000254.jpg&#34;</strong>
													<br/><i>2 minutes ago</i>
												</p>
											</a>
										</li>
										<li class="unread">
											<a href="#">
												<p><strong>John Doe</strong> Created an photo album <strong>&#34;Fappening&#34;</strong>
													<br/><i>8 minutes ago</i>
												</p>
											</a>
										</li>
										<li>
											<a href="#">
												<p><strong>John Malkovich</strong> Added 3 products
													<br/><i>3 hours ago</i>
												</p>
											</a>
										</li>
										<li>
											<a href="#">
												<p><strong>Sonata Arctica</strong> Send you a message <strong>&#34;Lorem
														ipsum dolor...&#34;</strong>
													<br/><i>12 hours ago</i>
												</p>
											</a>
										</li>
										<li>
											<a href="#">
												<p><strong>Johnny Depp</strong> Updated his avatar
													<br/><i>Yesterday</i>
												</p>
											</a>
										</li>
										<li class="dropdown-footer">
											<div class="btn-group btn-group-justified">
												<div class="btn-group">
													<a href="#" class="btn btn-sm btn-primary"><i
																class="icon-ccw-1"></i> Refresh</a>
												</div>
												<div class="btn-group">
													<a href="#" class="btn btn-sm btn-danger"><i
																class="icon-trash-3"></i> Clear All</a>
												</div>
												<div class="btn-group">
													<a href="#" class="btn btn-sm btn-success">See All <i
																class="icon-right-open-2"></i></a>
												</div>
											</div>
										</li>
									</ul>
								@show
							</li>
							<!---Message-->
							<li class="dropdown iconify hide-phone">
								@section('new_section')
									<a href="#" class="dropdown-toggle" data-toggle="dropdown"><i
												class="fa fa-envelope"></i><span
												class="label label-danger absolute">3</span></a>
									<ul class="dropdown-menu dropdown-message">
										<li class="dropdown-header notif-header"><i class="icon-mail-2"></i> New
											Messages
										</li>
										<li class="unread">
											<a href="#" class="clearfix">
												<img src="{{URL::asset('loggedin/images/users/chat/2.jpg')}}"
												     class="xs-avatar ava-dropdown" alt="Avatar">
												<strong>John Doe</strong><i class="pull-right msg-time">5 minutes
													ago</i><br/>
												<p>Duis autem vel eum iriure dolor in hendrerit ...</p>
											</a>
										</li>
										<li class="unread">
											<a href="#" class="clearfix">
												<img src="{{URL::asset('loggedin/images/users/chat/1.jpg')}}"
												     class="xs-avatar ava-dropdown" alt="Avatar">
												<strong>Sandra Kraken</strong><i class="pull-right msg-time">22
													minutes ago</i><br/>
												<p>Duis autem vel eum iriure dolor in hendrerit ...</p>
											</a>
										</li>
										<li>
											<a href="#" class="clearfix">
												<img src="{{URL::asset('loggedin/images/users/chat/3.jpg')}}"
												     class="xs-avatar ava-dropdown" alt="Avatar">
												<strong>Zoey Lombardo</strong><i class="pull-right msg-time">41
													minutes ago</i><br/>
												<p>Duis autem vel eum iriure dolor in hendrerit ...</p>
											</a>
										</li>
										<li class="dropdown-footer">
											<div class=""><a href="#" class="btn btn-sm btn-block btn-primary"><i
															class="fa fa-share"></i> See all messages</a></div>
										</li>
									</ul>
								@show
							</li>
							---}}
							<li class="dropdown iconify hide-phone"><a href="#"
							                                           onclick="javascript:toggle_fullscreen()"><i
											class="icon-resize-full-2"></i></a></li>
							<li class="dropdown topbar-profile">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown">
									{{---<span class="rounded-image topbar-profile-image">
									   
											<img src="{{URL::asset('loggedin/images/users/user-35.jpg')}}">
									   
									</span>--}}
									{{Auth::user()->user->first_name}}
									<strong>{{Auth::user()->user->last_name}}</strong>
									<i class="fa fa-caret-down"></i>
								</a>
								<ul class="dropdown-menu">
									<li><a href="{{url('dashboard/profile')}}">My Profile</a></li>
									
									<li class="divider"></li>
									<li><a href="#"><i class="icon-help-2"></i> Help</a></li>
									<!--<li><a href="lockscreen.html"><i class="icon-lock-1"></i> Lock me</a></li>-->
									<li><a class="md-trigger" href="{{url('logout')}}"><i
													class="icon-logout-1"></i> Logout</a></li>
								</ul>
							</li>
							{{----<li class="right-opener">
								<a href="javascript:;" class="open-right"><i class="fa fa-angle-double-left"></i><i
											class="fa fa-angle-double-right"></i></a>
							</li>---}}
						</ul>
						<ul class="nav navbar-nav navbar-right top-navbar">
							<li class="dropdown topbar-profile withdraw">
								<a class="text-center btn btn-danger " href="{{url('dashboard/place_withdrawal')}}">Place
									Withdrawal</a>
							</li>
							<li class="dropdown topbar-profile">
								<a class="text-center">My Wallet:
									₦ {{number_format(auth()->user()->mywallet->sum('amount'),2)}}</a>
							</li>
							<li class="dropdown topbar-profile">
								<a class="text-center">Pending Bonuses:
									₦ {{number_format(auth()->user()->bonus->where('status','unapproved')->sum('amount'),2)}}</a>
							</li>
						</ul>
					</div>
					<!--/.nav-collapse -->
				</div>
			</div>
	@show <!--end of left_side bar -->
	</div>
	<!-- Top Bar End -->
	<!-- Left Sidebar Start -->
	@section('left_side_menu')
		<div class="left side-menu">
			<div class="sidebar-inner slimscrollleft">
				<!-- Search form -->
				@section('search')
					<form role="search" class="navbar-form">
						<div class="form-group">
							<input type="text" placeholder="Search" class="form-control">
							<button type="submit" class="btn search-button"><i class="fa fa-search"></i></button>
						</div>
					</form>
				@stop
				<div class="clearfix"></div>
				<!--- Profile -->
				<div class="profile-info">
					{{--<div class="col-xs-4">
						<a href="{ {url('profile')}}" class="rounded-image profile-image">
							@if($users->getUser()->staff->image)
								<img src="{{URL::asset($users->getUser()->staff->image)}}">
							@else
								<img src="{{URL::asset('loggedin/images/users/user-100.jpg')}}">
							@endif
						</a>
					</div>--}}
					<div class="col-xs-12">
						<div class="profile-text text-center">YESKEINTERCONNECT</div>
						<div class="profile-buttons">
							<!-- <a href="javascript:;"><i class="fa fa-envelope-o pulse"></i></a>-->
						
						<!--a href="{{url('/')}}" title="Sign Out"><i class="fa fa-power-off text-red-1"></i></a-->
						</div>
					</div>
				</div>
				<!--- Divider -->
				<div class="clearfix"></div>
				<hr class="divider"/>
				<div class="clearfix"></div>
				<!--- Divider -->
				@section('sidebar-menu')
					<div id="sidebar-menu">
						<ul>
							<li class='has_sub'>
								<a href='javascript:void(0);'>
									<i class='icon-home-3'></i>
									<span>Dashboard</span>
									<span class="pull-right"><i class="fa fa-angle-down"></i></span>
								</a>
								<ul>
									<li>
										<a href='{{url('dashboard')}}'
										   class="{{Route::getCurrentRoute()->getPath() == 'dashboard' ? 'active' : ''}}">
											<span>Home</span>
										</a>
									</li>
								
								</ul>
							</li>
							<li class='has_sub'>
								<a href='javascript:void(0);'>
									<i class='icon-feather'></i>
									<span>My Account</span>
									<span class="pull-right">
                                <i class="fa fa-angle-down"></i>
                            </span>
								</a>
								<ul>
									<li>
										<a href='{{url('dashboard/new_level')}}'
										   class="{{Route::getCurrentRoute()->getPath() == 'dashboard/new_level' ? 'active' : ''}}">
											<span>Choose a level</span>
										</a>
									</li>
									<li>
										<a href='{{url('dashboard/pending_level')}}'
										   class="{{Route::getCurrentRoute()->getPath() == 'dashboard/pending_level' ? 'active' : ''}}">
											<span>Pending Levels</span>
										</a>
									</li>
									<li>
										<a href='{{url('dashboard/active_level')}}'
										   class="{{Route::getCurrentRoute()->getPath() == 'dashboard/active_level' ? 'active' : ''}}">
											<span>Active Levels</span>
										</a>
									</li>
									<li>
										<a href='{{url('dashboard/my_transactions')}}'
										   class="{{Route::getCurrentRoute()->getPath() == 'dashboard/my_transactions' ? 'active' : ''}}">
											<span>My Levels Complete</span>
										</a>
									</li>
									<li>
										<a href='{{url('dashboard/my_referrals')}}'
										   class="{{Route::getCurrentRoute()->getPath() == 'dashboard/my_referrals' ? 'active' : ''}}">
											<span>My Referrals</span>
										</a>
									</li>
									<li>
										<a href='{{url('dashboard/bonus')}}'
										   class="{{Route::getCurrentRoute()->getPath() == 'dashboard/bonus' ? 'active' : ''}}">
											<span>Bonuses</span>
										</a>
									</li>
								
								</ul>
							</li>
							
							<li class='has_sub'>
								<a href='javascript:void(0);'>
									<i class='fa fa-envelope'></i>
									<span>News</span>
									<span class="pull-right">
                                <i class="fa fa-angle-down"></i>
                            </span>
								</a>
								<ul>
									<li>
										<a href='{{url('dashboard/latest-updates')}}'
										   class="{{Route::getCurrentRoute()->getPath() == 'admin/latest-updates' ? 'active' : ''}}">
											<span>Latest Updates</span>
										</a>
									</li>
								</ul>
							</li>
						</ul>
						<div class="clearfix"></div>
					</div>
				@show
				<div class="clearfix"></div>
				@section('chat_family')
				<!--<div class="portlets">
                        <div id="chat_groups" class="widget transparent nomargin">
                            <h2>Chat Groups</h2>
                            <div class="widget-content">
                                <ul class="list-unstyled">
                                    <li><a href="javascript:;"><i class="fa fa-circle-o text-red-1"></i> Colleagues</a></li>
                                    <li><a href="javascript:;"><i class="fa fa-circle-o text-blue-1"></i> Family</a></li>
                                    <li><a href="javascript:;"><i class="fa fa-circle-o text-green-1"></i> Friends</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>-->
				@show
				<div class="clearfix"></div>
				<br><br><br>
			</div>
		
		</div>
	@show
<!-- Left Sidebar End --> <!-- Right Sidebar Start -->
	@section('right_side_bar')
		<div class="right side-menu">
			<ul class="nav nav-tabs nav-justified" id="right-tabs">
				<li class="active"><a href="#feed" data-toggle="tab" title="Live Feed"><i
								class="icon-rss-2"></i></a></li>
				<li><a href="#connect" data-toggle="tab" title="Chat"><i class="icon-chat"></i></a></li>
				<li><a href="#settings" data-toggle="tab" title="Preferences"><i class="icon-wrench"></i></a></li>
			</ul>
			<div class="clearfix"></div>
			<div class="tab-content">
				<div class="tab-pane active" id="feed">
					<div class="tab-inner slimscroller">
						<div class="search-right">
							<input type="text" class="form-control" placeholder="Search">
						</div>
						<div class="right-toolbar">
							<a href="javascript:;" class="pull-right">Settings <i class="icon-cog"></i></a>
							<div class="clearfix"></div>
						</div>
						<div class="clearfix"></div>
						<div class="panel-group" id="collapse">
							<div class="panel panel-default">
								<div class="panel-heading bg-orange-1">
									<h4 class="panel-title">
										<a data-toggle="collapse" data-parent="#accordion" href="#rnotifications">
											<i class="icon-bell-2"></i> Notifications
											<span class="label bg-darkblue-1 pull-right">4</span>
										</a>
									</h4>
								</div>
								<div id="rnotifications" class="panel-collapse collapse in">
									<div class="panel-body">
										<ul class="list-unstyled" id="notification-list">
											<li><a href="javascript:;"><span class="icon-wrapper"><i
																class="icon-video"></i></span> 1 Video Uploaded
													<span class="muted">12 minutes ago</span></a></li>
											<li><a href="javascript:;"><span class="icon-wrapper"><i
																class="icon-users-1"></i></span> 3 Users signed up
													<span class="muted">16 minutes ago</span></a></li>
											<li><a href="javascript:;"><span class="icon-wrapper"><i
																class="icon-picture-1"></i></span> 1 Video Uploaded
													<span class="muted">12 minutes ago</span></a></li>
											<li><a href="javascript:;"><span class="icon-wrapper"><i
																class="icon-hourglass-1"></i></span> Deadline for 1
													project <span class="muted">12 minutes ago</span></a></li>
										</ul>
										<a class="btn btn-block btn-sm btn-warning">See all notifications</a>
									</div>
								</div>
							</div>
							<div class="panel panel-default">
								<div class="panel-heading bg-green-3">
									<h4 class="panel-title">
										<a data-toggle="collapse" data-parent="#accordion" href="#remails">
											<i class="icon-mail"></i> E-mails
											<span class="label bg-darkblue-1 pull-right">3</span>
										</a>
									</h4>
								</div>
								<div id="remails" class="panel-collapse collapse in">
									<div class="panel-body">
										<ul class="list-unstyled" id="inbox-list">
											<li><a href="javascript:;"><span class="sender"><i
																class="icon-star text-yellow-2"></i> Kim Wilde</span>
													<span class="datetime">6 mins ago</span>
													<span class="title">You keep me hangin on</span>
													<span class="content">Where are you? I am waiting for 3 hours in the restaurant. I ate 3 hamburgers.</span>
												</a></li>
											<li><a href="javascript:;"><span class="sender">Tyler Durden</span>
													<span class="datetime">13 hours ago</span>
													<span class="title">Buy some soap from market before</span>
													<span class="content">We are crowded here. We need some more soap at home. Buy some before you come home.</span>
												</a></li>
											<li><a href="javascript:;"><span class="sender">John Bonomo</span> <span
															class="datetime">Yesterday</span>
													<span class="title">Late delivery</span>
													<span class="content">Hello, I ordered 15 box of viagra for a friend of mine but he still hasn't receive them.</span>
												</a></li>
										</ul>
										<a class="btn btn-block btn-sm btn-primary">Go to inbox</a>
									</div>
								</div>
							</div>
							<div class="panel panel-default">
								<div class="panel-heading bg-blue-1">
									<h4 class="panel-title">
										<a data-toggle="collapse" data-parent="#accordion" href="#rupdates">
											<i class="icon-signal-2"></i> Updates
											<span class="label bg-darkblue-1 pull-right">5</span>
										</a>
									</h4>
								</div>
								<div id="rupdates" class="panel-collapse collapse in">
									<div class="panel-body">
										<ul class="list-unstyled" id="updates-list">
											<li><a href="javascript:;"><span class="icon-wrapper bg-green-1"><i
																class="icon-comment-1"></i></span> <b>David
														Guetta</b> came online <abbr title="15 seconds ago">just
														now</abbr>.</a></li>
											<li><a href="javascript:;"><span class="icon-wrapper bg-red-1"><i
																class="icon-user-3"></i></span> <b>Katy Perry</b>
													updated her profile <abbr title="4 mins ago">4 mins ago</abbr>.</a>
											</li>
											<li><a href="javascript:;"><span class="icon-wrapper bg-blue-1"><i
																class="icon-twitter-2"></i></span> <b>4 tweets
														posted</b> with cronjob <abbr title="22 mins ago">22 mins
														ago</abbr>.</a></li>
											<li><a href="javascript:;"><span class="icon-wrapper bg-orange-3"><i
																class="icon-water"></i></span> <b>Adele</b> set fire
													to the rain <abbr title="43 mins ago">43 mins ago</abbr>.</a>
											</li>
											<li><a href="javascript:;"><span class="icon-wrapper bg-pink-2"><i
																class="icon-heart-broken"></i></span> <b>Taylor
														Swift</b> learned that you are trouble <abbr
															title="3 hours ago">3 days ago</abbr>.</a></li>
										</ul>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="tab-pane" id="connect">
					<div class="tab-inner slimscroller">
						<div class="search-right">
							<input type="text" class="form-control" placeholder="Search">
						</div>
						<div class="panel-group" id="collapse">
							<div class="panel panel-default" id="chat-panel">
								<div class="panel-heading bg-darkblue-2">
									<h4 class="panel-title">
										<a data-toggle="collapse" href="#chat-coll">
											<i class="icon-briefcase-1"></i> Colleagues
											<span class="label bg-darkblue-1 pull-right">14</span>
										</a>
									</h4>
								</div>
								<div id="chat-coll" class="panel-collapse collapse in">
									<div class="panel-body">
										<ul class="list-unstyled" id="chat-list">
											<li><a href="javascript:;" class="online"><span
															class="chat-user-avatar"><img
																src="{{URL::asset('loggedin/images/users/chat/1.jpg')}}"></span>
													<span class="chat-user-name">Dorothy Simons</span><span
															class="chat-user-msg">I wish I was a bird in the sky</span></a>
											</li>
											<li><a href="javascript:;" class="online"><span
															class="chat-user-avatar"><img
																src="{{URL::asset('loggedin/images/users/chat/2.jpg')}}"></span>
													<span class="chat-user-name">John Malkovich</span><span
															class="chat-user-msg">You were the traitor</span></a>
											</li>
											<li><a href="javascript:;" class="online"><span
															class="chat-user-avatar"><img
																src="{{URL::asset('loggedin/images/users/chat/3.jpg')}}"></span>
													<span class="chat-user-name">Jessica Simons</span><span
															class="chat-user-msg">Where is my mind</span></a></li>
											<li><a href="javascript:;" class="away"><span
															class="chat-user-avatar"><img
																src="{{URL::asset('loggedin/images/users/chat/4.jpg')}}"></span>
													<span class="chat-user-name">Jack Stallman</span><span
															class="chat-user-msg">Away since 13:32</span></a></li>
											<li><a href="javascript:;" class="offline"><span
															class="chat-user-avatar"><img
																src="{{URL::asset('loggedin/images/users/chat/5.jpg')}}"></span>
													<span class="chat-user-name">Neil Armstrong</span><span
															class="chat-user-msg"
															title="I am flying to the moon and back">I am flying to the moon and back</span></a>
											</li>
											<li><a href="javascript:;" class="offline"><span
															class="chat-user-avatar"><img
																src="{{URL::asset('loggedin/images/users/chat/6.jpg')}}"></span>
													<span class="chat-user-name">Hollywood Studios</span><span
															class="chat-user-msg">Yes he definitely is!</span></a>
											</li>
										</ul>
									</div>
								</div>
							</div>
							<div class="panel panel-default" id="chat-panel">
								<div class="panel-heading bg-darkblue-2">
									<h4 class="panel-title">
										<a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">
											<i class="icon-heart-3"></i> Friends
											<span class="label bg-darkblue-1 pull-right">3</span>
										</a>
									</h4>
								</div>
								<div id="collapseTwo" class="panel-collapse collapse in">
									<div class="panel-body">
										<ul class="list-unstyled" id="chat-list">
											<li><a href="javascript:;" class="online"><span
															class="chat-user-avatar"><img
																src="{{URL::asset('loggedin/images/users/chat/1.jpg')}}"></span>
													<span class="chat-user-name">Dorothy Simons</span><span
															class="chat-user-msg">I wish I was a bird in the sky</span></a>
											</li>
											<li><a href="javascript:;" class="online"><span
															class="chat-user-avatar"><img
																src="{{URL::asset('loggedin/images/users/chat/2.jpg')}}"></span>
													<span class="chat-user-name">John Malkovich</span><span
															class="chat-user-msg">You were the traitor</span></a>
											</li>
											<li><a href="javascript:;" class="online"><span
															class="chat-user-avatar"><img
																src="{{URL::asset('loggedin/images/users/chat/3.jpg')}}"></span>
													<span class="chat-user-name">Jessica Simons</span><span
															class="chat-user-msg"
															title="Eminem - The Monster ft. Rihanna"><i
																class="icon-play"></i> Eminem - The Monster ft. Rihanna</span></a>
											</li>
											<li><a href="javascript:;" class="away"><span
															class="chat-user-avatar"><img
																src="{{URL::asset('loggedin/images/users/chat/4.jpg')}}"></span>
													<span class="chat-user-name">Jack Stallman</span><span
															class="chat-user-msg">Away since 13:32</span></a></li>
											<li><a href="javascript:;" class="offline"><span
															class="chat-user-avatar"><img
																src="{{URL::asset('loggedin/images/users/chat/5.jpg')}}"></span>
													<span class="chat-user-name">Neil Armstrong</span><span
															class="chat-user-msg"
															title="I am flying to the moon and back">I am flying to the moon and back</span></a>
											</li>
											<li><a href="javascript:;" class="offline"><span
															class="chat-user-avatar"><img
																src="{{URL::asset('loggedin/images/users/chat/6.jpg')}}"></span>
													<span class="chat-user-name">Hollywood Studios</span><span
															class="chat-user-msg">Yes he definitely is!</span></a>
											</li>
										</ul>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				
				<div class="tab-pane" id="settings">
					<div class="tab-inner slimscroller">
						<div class="col-sm-12">
							<h3>Preferences</h3>
							<div class="row">
								<div class="col-xs-8">
									Live data updates
								</div>
								<div class="col-xs-4">
									<input type="checkbox" class="ios-switch ios-switch-success ios-switch-sm"
									       checked/>
								</div>
							</div>
							<div class="row">
								<div class="col-xs-8">
									Live feeds
								</div>
								<div class="col-xs-4">
									<input type="checkbox" class="ios-switch ios-switch-success ios-switch-sm"
									       checked/>
								</div>
							</div>
							<div class="row">
								<div class="col-xs-8">
									Sync data to cloud
								</div>
								<div class="col-xs-4">
									<input type="checkbox" class="ios-switch ios-switch-success ios-switch-sm"
									       checked/>
								</div>
							</div>
							<div class="row">
								<div class="col-xs-8">
									Keep activity record
								</div>
								<div class="col-xs-4">
									<input type="checkbox" class="ios-switch ios-switch-danger ios-switch-sm"
									       checked/>
								</div>
							</div>
							<h4>Other Settings</h4>
							<div class="row">
								<div class="col-xs-12">
									<label class="checkboxw"><input type="checkbox" checked> Autosave
										settings</label>
								</div>
							</div>
							<div class="row">
								<div class="col-xs-12">
									<label class="checkboxw"><input type="checkbox"> Always online</label>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
@show
<!-- Right Sidebar End -->
	<!-- Start right content -->
	
	<div class="content-page">
		<!-- ============================================================== -->
		<!-- Start Content here -->
		<!-- ============================================================== -->
		<div class="content">
			
			<div class="col-sm-12">
				<div class="col-sm-10">
					
					
					<div class="row">
						
						<div class="col-sm-6">
							@section('heading')
								<div class="page-heading">
									<h1><i class='fa fa-home'></i> Home</h1>
								</div>
							@show
						</div>
						
						<div class="col-sm-6">
							<div class="page-heading pull-right">
								{{----<a href="{{ URL::previous() }}" class="btn btn-blue-1"><i class='fa fa-backward'></i> Back</a>---}}
								@section('heading_right')
								@show
							</div>
						</div>
					</div>
					
					@if (session()->has('flash_notification.message'))
						<div class="alert alert-{{ session('flash_notification.level') }}">
							<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
							{!! session('flash_notification.message') !!}
						</div>
				@endif
				
				
				<!-- Start info box -->
					<div class="row top-summary">
						
						
						@section('top-summary')
							<div class="col-lg-3 col-md-6">
								<div class="widget green-1 animated fadeInDown">
									<div class="widget-content padding">
										<div class="widget-icon">
											<i class="icon-globe-inv"></i>
										</div>
										<div class="text-box">
											<p class="maindata">TOTAL <b>STUDENTS</b></p>
											<h2><span class="animate-number" data-value="25153"
											          data-duration="3000">0</span></h2>
											<div class="clearfix"></div>
										</div>
									</div>
									<div class="widget-footer">
										<div class="row">
											<div class="col-sm-12">
												<i class="fa fa-caret-up rel-change"></i> <b>39%</b> increase in traffic
											</div>
										</div>
										<div class="clearfix"></div>
									</div>
								</div>
							</div>
							
							
							
							<div class="col-lg-3 col-md-6">
								<div class="widget darkblue-2 animated fadeInDown">
									<div class="widget-content padding">
										<div class="widget-icon">
											<i class="icon-bag"></i>
										</div>
										<div class="text-box">
											<p class="maindata">UNPAID <b>SCHOOL FEES</b></p>
											<h2><span class="animate-number" data-value="6399"
											          data-duration="3000">0</span></h2>
											
											<div class="clearfix"></div>
										</div>
									</div>
									<div class="widget-footer">
										<div class="row">
											<div class="col-sm-12">
												<i class="fa fa-caret-down rel-change"></i> <b>11%</b> decrease in sales
											</div>
										</div>
										<div class="clearfix"></div>
									</div>
								</div>
							</div>
							
							
							
							<div class="col-lg-3 col-md-6">
								<div class="widget pink-1 animated fadeInDown">
									<div class="widget-content padding">
										<div class="widget-icon">
											<i class="fa fa-dollar"></i>
										</div>
										<div class="text-box">
											<p class="maindata">OVERALL <b>INCOME</b></p>
											<h2>$<span class="animate-number" data-value="70389"
											           data-duration="3000">0</span></h2>
											<div class="clearfix"></div>
										</div>
									</div>
									<div class="widget-footer">
										<div class="row">
											<div class="col-sm-12">
												<i class="fa fa-caret-down rel-change"></i> <b>7%</b> decrease in income
											</div>
										</div>
										<div class="clearfix"></div>
									</div>
								</div>
							</div>
							
							<div class="col-lg-3 col-md-6">
								<div class="widget lightblue-1 animated fadeInDown">
									<div class="widget-content padding">
										<div class="widget-icon">
											<i class="fa fa-users"></i>
										</div>
										<div class="text-box">
											<p class="maindata">TOTAL <b>ALUMINI</b></p>
											<h2><span class="animate-number" data-value="18648"
											          data-duration="3000">0</span></h2>
											<div class="clearfix"></div>
										</div>
									</div>
									<div class="widget-footer">
										<div class="row">
											<div class="col-sm-12">
												<i class="fa fa-caret-up rel-change"></i> <b>6%</b> increase in users
											</div>
										</div>
										<div class="clearfix"></div>
									</div>
								</div>
							</div>
						@show
					</div>
					
					<!-- End of info box -->
					
					<div class="row">
						@section('row1')
							<div class="col-lg-8 portlets">
								<div id="website-statistics1" class="widget">
									<div class="widget-header transparent">
										<h2><i class="icon-chart-line"></i> <strong>Website</strong> Statistics</h2>
										<div class="additional-btn">
											<a href="#" class="hidden reload"><i class="icon-ccw-1"></i></a>
											<a class="hidden" id="dropdownMenu1" data-toggle="dropdown">
												<i class="fa fa-cogs"></i>
											</a>
											<ul class="dropdown-menu pull-right" role="menu"
											    aria-labelledby="dropdownMenu1">
												<li><a href="#">Action</a></li>
												<li><a href="#">Another action</a></li>
												<li><a href="#">Something else here</a></li>
												<li class="divider"></li>
												<li><a href="#">Separated link</a></li>
											</ul>
											<a href="#" class="widget-popout hidden tt" title="Pop Out/In"><i
														class="icon-publish"></i></a>
											<a href="#" class="widget-maximize hidden"><i
														class="icon-resize-full-1"></i></a>
											<a href="#" class="widget-toggle"><i class="icon-down-open-2"></i></a>
											<a href="#" class="widget-close"><i class="icon-cancel-3"></i></a>
										</div>
									</div>
									<div class="widget-content">
										<div id="website-statistic" class="statistic-chart">
											<div class="row stacked">
												<div class="col-sm-12">
													<div class="toolbar">
														<div class="pull-left">
															<div class="btn-group">
																<a href="#" class="btn btn-default btn-xs">Daily</a>
																<a href="#" class="btn btn-default btn-xs active">Monthly</a>
																<a href="#" class="btn btn-default btn-xs">Yearly</a>
															</div>
														</div>
														<div class="pull-right">
															<div class="btn-group">
																<a class="btn btn-default btn-xs dropdown-toggle"
																   data-toggle="dropdown">
																	Export <i class="icon-down-open-2"></i>
																</a>
																<ul class="dropdown-menu pull-right" role="menu">
																	<li><a href="#">Export as PDF</a></li>
																	<li><a href="#">Export as CSV</a></li>
																	<li><a href="#">Export as PNG</a></li>
																	<li class="divider"></li>
																	<li><a href="#">Separated link</a></li>
																</ul>
															</div>
															<a href="#" class="btn btn-primary btn-xs"><i
																		class="icon-cog-2"></i></a>
														</div>
														<div class="clearfix"></div>
													</div>
													<div class="clearfix"></div>
													<div id="morris-home" class="morris-chart"
													     style="height: 270px;"></div>
												</div>
											</div>
										</div>
									</div>
								</div>
							
							
							</div>
							
							<div class="col-lg-4 portlets">
								<div class="widget darkblue-3">
									<div class="widget-header transparent">
										<h2><strong>Server</strong> Status</h2>
										<div class="additional-btn">
											<a href="#" class="hidden reload"><i class="icon-ccw-1"></i></a>
											<a class="hidden" id="dropdownMenu1" data-toggle="dropdown">
												<i class="fa fa-cogs"></i>
											</a>
											<ul class="dropdown-menu pull-right" role="menu"
											    aria-labelledby="dropdownMenu1">
												<li><a href="#">Action</a></li>
												<li><a href="#">Another action</a></li>
												<li><a href="#">Something else here</a></li>
												<li class="divider"></li>
												<li><a href="#">Separated link</a></li>
											</ul>
											<a href="#" class="widget-popout hidden tt" title="Pop Out/In"><i
														class="icon-publish"></i></a>
											<a href="#" class="widget-maximize hidden"><i
														class="icon-resize-full-1"></i></a>
											<a href="#" class="widget-toggle"><i class="icon-down-open-2"></i></a>
											<a href="#" class="widget-close"><i class="icon-cancel-3"></i></a>
										</div>
									</div>
									<div class="widget-content">
										<div id="website-statistic2" class="statistic-chart">
											
											<div class="col-sm-12 stacked">
												<h4><i class="fa fa-circle-o text-green-1"></i> Server Loads</h4>
												<div class="col-sm-8 status-data">
													
													<div class="col-xs-12">
														<div class="row stacked">
															<div class="col-xs-4 text-center right-border">
																Processes<br>
																<span class="animate-number" data-value="322"
																      data-duration="3000">0</span>
															</div>
															<div class="col-xs-4 text-center right-border">
																Connections<br>
																<span class="animate-number" data-value="4789"
																      data-duration="3000">0</span>
															</div>
															<div class="col-xs-4 text-center">
																Avg. Load<br>
																<span class="animate-number" data-value="76"
																      data-duration="3000">0</span>
															</div>
														</div>
													</div>
													<div class="clearfix"></div>
													<div class="progress progress-xs">
														<div style="width: 72%" aria-valuemax="100" aria-valuemin="0"
														     aria-valuenow="72" role="progressbar"
														     class="progress-bar bg-orange-2" title="Average Load: 76%"
														     data-placement="right" data-toggle="tooltip">
															<span class="sr-only">72% Complete (success)</span>
														</div>
													</div>
												</div>
												<div class="col-sm-4 text-center">
													<div class="ws-load echart" data-percent="50"><span
																class="percent"></span></div>
												</div>
											</div>
											<div class="clearfix"></div>
											<div id="home-chart-2"></div>
										</div>
									</div>
								</div>
							
							</div>
						@show
					</div>
					
					<div class="row">
						@section('row2')
							<div class="col-lg-8 portlets">
								<div class="widget">
									<div class="widget-header">
										<h2><i class="icon-chart-pie-1"></i> <strong>Sales</strong> Report</h2>
										<div class="additional-btn">
											<a href="#" class="hidden reload"><i class="icon-ccw-1"></i></a>
											<a class="hidden" id="dropdownMenu1" data-toggle="dropdown">
												<i class="fa fa-cogs"></i>
											</a>
											<ul class="dropdown-menu pull-right" role="menu"
											    aria-labelledby="dropdownMenu1">
												<li><a href="#">Action</a></li>
												<li><a href="#">Another action</a></li>
												<li><a href="#">Something else here</a></li>
												<li class="divider"></li>
												<li><a href="#">Separated link</a></li>
											</ul>
											<a href="#" class="widget-popout hidden tt" title="Pop Out/In"><i
														class="icon-publish"></i></a>
											<a href="#" class="widget-maximize hidden"><i
														class="icon-resize-full-1"></i></a>
											<a href="#" class="widget-toggle"><i class="icon-down-open-2"></i></a>
											<a href="#" class="widget-close"><i class="icon-cancel-3"></i></a>
										</div>
									</div>
									<div class="widget-content">
										<div class="row stacked">
											<div class="col-sm-5 mini-stats">
												<div id="morris-bar-home" class="morris-chart"
												     style="height: 170px;"></div>
												<div class="sales-report-data">
													<span class="pull-left">Completed Sales</span><span
															class="pull-right">65 / 174</span>
													<div class="progress progress-xs">
														<div style="width: 38%;" class="progress-bar bg-blue-1"></div>
													</div>
													<div class="clearfix"></div>
													<span class="pull-left">Return(s) Processed</span><span
															class="pull-right">22 / 25</span>
													<div class="progress progress-xs">
														<div style="width: 88%;"
														     class="progress-bar bg-lightblue-1"></div>
													</div>
													<div class="clearfix"></div>
													<span class="pull-left">Shipped Products</span><span
															class="pull-right">418 / 624</span>
													<div class="progress progress-xs">
														<div style="width: 58%;" class="progress-bar"></div>
													</div>
													<div class="clearfix"></div>
													<span class="pull-left">Overall Product Stock</span><span
															class="pull-right">19%</span>
													<div class="progress progress-xs">
														<div style="width: 19%;" class="progress-bar bg-pink-1"></div>
													</div>
												</div>
											</div>
											<div class="col-sm-7">
												<div id="vector-map" style="height:370px"></div>
											</div>
										</div>
										<div class="clearfix"></div>
										<div id="sales-report" class="collapse in hidden-xs">
											<div class="table-responsive">
												<table data-sortable class="table table-striped">
													<thead>
													<tr>
														<th width="70">No</th>
														<th data-sortable="false" width="40"><input type="checkbox"
														                                            id="select-all-rows">
														</th>
														<th width="120">Order ID</th>
														<th>Buyer</th>
														<th width="100">Status</th>
														<th width="150">Location</th>
														<th width="120">Total</th>
													</tr>
													</thead>
													<tbody>
													<tr>
														<td>1</td>
														<td><input type="checkbox" class="rows-check"></td>
														<td>#0021</td>
														<td><a href="#">John Doe</a></td>
														<td><span class="label label-primary">Order</span></td>
														<td>Yogyakarta, ID</td>
														<td><strong class="text-primary">&#36; 1,245</strong></td>
													</tr>
													<tr>
														<td>2</td>
														<td><input type="checkbox" class="rows-check"></td>
														<td>#0022</td>
														<td><a href="#">Johnny Depp</a></td>
														<td><span class="label label-success">Payment</span></td>
														<td>London, UK</td>
														<td><strong class="text-success">&#36; 1,245</strong></td>
													</tr>
													<tr>
														<td>3</td>
														<td><input type="checkbox" class="rows-check"></td>
														<td>#0023</td>
														<td><a href="#">Scarlett Johansson</a></td>
														<td><span class="label label-success">Payment</span></td>
														<td>Canbera, AU</td>
														<td><strong class="text-success">&#36; 1,245</strong></td>
													</tr>
													<tr>
														<td>4</td>
														<td><input type="checkbox" class="rows-check"></td>
														<td>#0024</td>
														<td><a href="#">Hanna Barbara</a></td>
														<td><span class="label label-danger">Cancel</span></td>
														<td>Bali, ID</td>
														<td><strong class="text-danger">&#36; 1,245</strong></td>
													</tr>
													<tr>
														<td>5</td>
														<td><input type="checkbox" class="rows-check"></td>
														<td>#0025</td>
														<td><a href="#">Ali Larter</a></td>
														<td><span class="label label-primary">Order</span></td>
														<td>Bandung, ID</td>
														<td><strong class="text-primary">&#36; 1,245</strong></td>
													</tr>
													<tr>
														<td>6</td>
														<td><input type="checkbox" class="rows-check"></td>
														<td>#0026</td>
														<td><a href="#">Willy Wonka</a></td>
														<td><span class="label label-danger">Cancel</span></td>
														<td>Semarang, ID</td>
														<td><strong class="text-danger">&#36; 1,245</strong></td>
													</tr>
													<tr>
														<td>7</td>
														<td><input type="checkbox" class="rows-check"></td>
														<td>#0027</td>
														<td><a href="#">Chris Isaac</a></td>
														<td><span class="label label-warning">Waiting</span></td>
														<td>New York, US</td>
														<td><strong class="text-warning">&#36; 1,245</strong></td>
													</tr>
													<tr>
														<td>8</td>
														<td><input type="checkbox" class="rows-check"></td>
														<td>#0028</td>
														<td><a href="#">Jenny Doe</a></td>
														<td><span class="label label-primary">Order</span></td>
														<td>Boston, US</td>
														<td><strong class="text-primary">&#36; 1,245</strong></td>
													</tr>
													<tr>
														<td>9</td>
														<td><input type="checkbox" class="rows-check"></td>
														<td>#0029</td>
														<td><a href="#">Ban ki moon</a></td>
														<td><span class="label label-danger">Cancel</span></td>
														<td>Boston, US</td>
														<td><strong class="text-danger">&#36; 1,245</strong></td>
													</tr>
													
													</tbody>
												</table>
											</div>
										</div>
									</div>
								</div>
							</div>
							
							<div class="col-lg-4 portlets">
								<div class="row">
									<div class="col-sm-12">
										<div id="todo-app" class="widget">
											<div class="widget-header centered">
												<div class="left-btn"><a class="btn btn-sm btn-default add-todo"><i
																class="fa fa-plus"></i></a></div>
												<h2>Todo List</h2>
												<div class="additional-btn">
													<a href="#" class="hidden reload"><i class="icon-ccw-1"></i></a>
													<a href="#" class="widget-popout hidden tt" title="Pop Out/In"><i
																class="icon-publish"></i></a>
													<a href="#" class="widget-maximize hidden"><i
																class="icon-resize-full-1"></i></a>
													<a href="#" class="widget-toggle"><i
																class="icon-down-open-2"></i></a>
													<a href="#" class="widget-close"><i class="icon-cancel-3"></i></a>
												</div>
											</div>
											<div class="widget-content padding-sm">
												<ul class="todo-list">
													<li>
														<span class="check-icon"><input type="checkbox"/></span>
														<span class="todo-item">Generate monthly sales report for John</span>
														<span class="todo-options pull-right">
													<a href="javascript:;" class="todo-delete"><i
																class="icon-cancel-3"></i></a>
												</span>
														<span class="todo-tags pull-right">
													<div class="label label-success">New</div>
												</span>
													</li>
													<li class="high">
														<span class="check-icon"><input type="checkbox"/></span>
														<span class="todo-item">Mail those reports to John</span>
														<span class="todo-options pull-right">
													<a href="javascript:;" class="todo-delete"><i
																class="icon-cancel-3"></i></a>
												</span>
													</li>
													<li>
														<span class="check-icon"><input type="checkbox"/></span>
														<span class="todo-item">Don't forget to send those reports to John</span>
														<span class="todo-options pull-right">
													<a href="javascript:;" class="todo-delete"><i
																class="icon-cancel-3"></i></a>
												</span>
													</li>
													<li class="medium">
														<span class="check-icon"><input type="checkbox"/></span>
														<span class="todo-item">If you forgot, go back to office to pick them up</span>
														<span class="todo-options pull-right">
													<a href="javascript:;" class="todo-delete"><i
																class="icon-cancel-3"></i></a>
												</span>
														<span class="todo-tags pull-right">
													<div class="label label-info">Today</div>
												</span>
													</li>
													<li class="low">
														<span class="check-icon"><input type="checkbox"/></span>
														<span class="todo-item">Deliver reports by hand to John</span>
														<span class="todo-options pull-right">
													<a href="javascript:;" class="todo-delete"><i
																class="icon-cancel-3"></i></a>
												</span>
													</li>
													<li>
														<span class="check-icon"><input type="checkbox"/></span>
														<span class="todo-item">Say John that you are sorry</span>
														<span class="todo-options pull-right">
													<a href="javascript:;" class="todo-delete"><i
																class="icon-cancel-3"></i></a>
												</span>
													</li>
													<li>
														<span class="check-icon"><input type="checkbox"/></span>
														<span class="todo-item">Beg for your job...</span>
														<span class="todo-options pull-right">
													<a href="javascript:;" class="todo-delete"><i
																class="icon-cancel-3"></i></a>
												</span>
														<span class="todo-tags pull-right">
													<div class="label label-danger">Important</div>
												</span>
													</li>
													<li>
														<span class="check-icon"><input type="checkbox"/></span>
														<span class="todo-item">Look for a new job</span>
														<span class="todo-options pull-right">
													<a href="javascript:;" class="todo-delete"><i
																class="icon-cancel-3"></i></a>
												</span>
														<span class="todo-tags pull-right">
													<div class="label label-warning"><i class="icon-search"></i></div>
												</span>
													</li>
												</ul>
											</div>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-sm-12">
										<div id="notes-app" class="widget">
											<div class="notes-line"></div>
											<div class="widget-header centered transparent">
												<div class="left-btn btn-group"><a
															class="btn btn-sm btn-primary add-note"><i
																class="fa fa-plus"></i></a><a
															class="btn btn-sm btn-primary back-note-list"><i
																class="icon-align-justify"></i></a></div>
												<h2>Notes</h2>
												<div class="additional-btn">
													<a href="#" class="hidden reload"><i class="icon-ccw-1"></i></a>
													<a href="#" class="widget-popout hidden tt" title="Pop Out/In"><i
																class="icon-publish"></i></a>
													<a href="#" class="widget-maximize hidden"><i
																class="icon-resize-full-1"></i></a>
													<a href="#" class="widget-toggle"><i
																class="icon-down-open-2"></i></a>
													<a href="#" class="widget-close"><i class="icon-cancel-3"></i></a>
												</div>
											</div>
											<div class="widget-content padding-sm">
												<div id="notes-list">
													<div class="scroller">
														<ul class="list-unstyled">
														</ul>
													</div>
												</div>
												<div id="note-data">
													<form>
                                                        <textarea class="form-control" id="note-text"
                                                                  placeholder="Your note..."></textarea>
													</form>
												</div>
												<div class="status-indicator">Saved</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						@show
					</div>
					<div class="row">
						@section('row3')
							<div class="col-lg-4 col-md-6 portlets">
								<div id="weather-widget" class="widget">
									<div class="widget-header transparent">
										<h2><strong>Weather</strong> Widget</h2>
										<div class="additional-btn">
											<a href="#" class="hidden reload"><i class="icon-ccw-1"></i></a>
											<a class="hidden" id="dropdownMenu1" data-toggle="dropdown">
												<i class="fa fa-cogs"></i>
											</a>
											<ul class="dropdown-menu pull-right" role="menu"
											    aria-labelledby="dropdownMenu1">
												<li><a href="#">Action</a></li>
												<li><a href="#">Another action</a></li>
												<li><a href="#">Something else here</a></li>
												<li class="divider"></li>
												<li><a href="#">Separated link</a></li>
											</ul>
											<a href="#" class="widget-popout hidden tt" title="Pop Out/In"><i
														class="icon-publish"></i></a>
											<a href="#" class="widget-maximize hidden"><i
														class="icon-resize-full-1"></i></a>
											<a href="#" class="widget-toggle"><i class="icon-down-open-2"></i></a>
											<a href="#" class="widget-close"><i class="icon-cancel-3"></i></a>
										</div>
									</div>
									<div id="weather" class="widget-content">
									
									</div>
									<i class="wi-day-rain-mix"></i>
									<button class="js-geolocation btn btn-sm btn-default" style="display: none;">Use
										Your Location
									</button>
								</div>
							</div>
							
							<div class="col-lg-4 col-md-6 portlets">
								<div id="calendar-widget2" class="widget blue-1">
									<div class="widget-header transparent">
										<h2><strong>Calendar</strong> Widget</h2>
										<div class="additional-btn">
											<a href="#" class="hidden reload"><i class="icon-ccw-1"></i></a>
											<a href="#" class="widget-popout hidden tt" title="Pop Out/In"><i
														class="icon-publish"></i></a>
											<a href="#" class="widget-toggle"><i class="icon-down-open-2"></i></a>
											<a href="#" class="widget-close"><i class="icon-cancel-3"></i></a>
										</div>
									</div>
									<div id="calendar-box2" class="widget-content col-sm-12">
									
									</div>
								</div>
							</div>
							
							<div class="col-lg-4 col-md-6 portlets">
								<div id="calc" class="widget darkblue-2">
									<div class="widget-header">
										<div class="additional-btn left-toolbar">
											<div class="btn-group">
												<a class="additional-icon" id="dropdownMenu2" data-toggle="dropdown">
													Calculator <i class="fa fa-angle-down"></i>
												</a>
												<ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu2">
													<li><a href="#">Save</a></li>
													<li><a href="#">Export</a></li>
													<li class="divider"></li>
													<li><a href="#">Quit</a></li>
												</ul>
											</div>
										</div>
										<div class="additional-btn">
											<a href="#" class="hidden reload"><i class="icon-ccw-1"></i></a>
											
											<a href="#" class="widget-popout hidden tt" title="Pop Out/In"><i
														class="icon-publish"></i></a>
											<a href="#" class="widget-close"><i class="icon-cancel-3"></i></a>
										</div>
									</div>
									<div id="calculator" class="widget-content">
										<div class="calc-top col-xs-12">
											<div class="row">
												<div class="col-xs-3"><span class="calc-clean">C</span></div>
												<div class="col-xs-9">
													<div class="calc-screen"></div>
												</div>
											</div>
										</div>
										
										<div class="calc-keys col-xs-12">
											<div class="row">
												<div class="col-xs-3"><span>7</span></div>
												<div class="col-xs-3"><span>8</span></div>
												<div class="col-xs-3"><span>9</span></div>
												<div class="col-xs-3"><span class="calc-operator">+</span></div>
											</div>
											<div class="row">
												<div class="col-xs-3"><span>4</span></div>
												<div class="col-xs-3"><span>5</span></div>
												<div class="col-xs-3"><span>6</span></div>
												<div class="col-xs-3"><span class="calc-operator">-</span></div>
											</div>
											<div class="row">
												<div class="col-xs-3"><span>1</span></div>
												<div class="col-xs-3"><span>2</span></div>
												<div class="col-xs-3"><span>3</span></div>
												<div class="col-xs-3"><span class="calc-operator">÷</span></div>
											</div>
											<div class="row">
												<div class="col-xs-3"><span>0</span></div>
												<div class="col-xs-3"><span>.</span></div>
												<div class="col-xs-3"><span class="calc-eval">=</span></div>
												<div class="col-xs-3"><span class="calc-operator">x</span></div>
											</div>
										</div>
										<div class="clearfix"></div>
									</div>
								</div>
							</div>
						@show
					</div>
					
					<div class="row">
						@section('row4')
							<div class="col-lg-8 col-md-6 portlets">
								<div id="stock-widget" class="widget">
									<div class="widget-header transparent">
										<h2><strong>Realtime</strong> Stock Chart</h2>
										<div class="additional-btn">
											<a href="#" onclick="fetchData()" class="hidden reload"><i
														class="icon-ccw-1"></i></a>
											<a href="#" class="widget-maximize hidden"><i
														class="icon-resize-full-1"></i></a>
											<a href="#" class="widget-toggle"><i class="icon-down-open-2"></i></a>
											<a href="#" class="widget-close"><i class="icon-cancel-3"></i></a>
										</div>
									</div>
									<div class="widget-content">
										<h4 id="stock-title"><strong>Google Inc</strong> Stock Chart</h4>
										<div class="stock-options pull-right btn-group">
											<a class="btn btn-sm btn-default active" href="javascript:;"
											   data-stock="GOOG">GOOGLE</a>
											<a class="btn btn-sm btn-default" href="javascript:;" data-stock="AMZN">AMAZON</a>
											<a class="btn btn-sm btn-default" href="javascript:;" data-stock="^IXIC">NASDAQ</a>
											<a class="btn btn-sm btn-default" href="javascript:;"
											   data-stock="^GSPC">S&P</a>
										</div>
										<div id="stock-chart"></div>
									</div>
								</div>
							</div>
							
							<div class="col-lg-4 col-md-6 portlets">
								<div id="stock-app" class="widget green-3">
									<div class="widget-header transparent">
										<h2><strong>Stock</strong> Markets</h2>
										<div class="additional-btn">
											<a href="#" class="hidden reload"><i class="icon-ccw-1"></i></a>
											<a class="hidden" id="dropdownMenu1" data-toggle="dropdown">
												<i class="fa fa-cogs"></i>
											</a>
											<ul class="dropdown-menu pull-right" role="menu"
											    aria-labelledby="dropdownMenu1">
												<li><a href="#">Action</a></li>
												<li><a href="#">Another action</a></li>
												<li><a href="#">Something else here</a></li>
												<li class="divider"></li>
												<li><a href="#">Separated link</a></li>
											</ul>
											<a href="#" class="widget-popout hidden tt" title="Pop Out/In"><i
														class="icon-publish"></i></a>
											<a href="#" class="widget-maximize hidden"><i
														class="icon-resize-full-1"></i></a>
											<a href="#" class="widget-toggle"><i class="icon-down-open-2"></i></a>
											<a href="#" class="widget-close"><i class="icon-cancel-3"></i></a>
										</div>
									</div>
									<div class="widget-content">
										<div id="website-statistic3" class="statistic-chart">
											<div class="row">
												<div class="col-xs-6">
													<h2>NASDAQ</h2>
												</div>
												<div class="col-xs-6">
													<label id="nasdaq-status" class="stock-status"></label>
												</div>
											</div>
											<div class="row">
												<div class="col-xs-6">
													<h2>DOW JONES</h2>
												</div>
												<div class="col-xs-6">
													<label id="dow-status" class="stock-status"></label>
												</div>
											</div>
											<div class="row">
												<div class="col-xs-6">
													<h2>S&P</h2>
												</div>
												<div class="col-xs-6">
													<label id="sp-status" class="stock-status"></label>
												</div>
											</div>
										</div>
										<div id="home-chart-3"></div>
									</div>
									<div class="widget-footer">
									</div>
								</div>
							</div>
						@show
					</div>
					
					
					<!-- Footer Start -->
					
					<footer>
						@section('footer')
							YESKEINTERCONNECT &copy; {{date('Y')}}, All right reserved</a>
						
						@show
					</footer>
				
				</div>
				<div class="col-sm-2">
					<div class="row">
						<h3 class="text-center"></h3>
						<img src="{{asset('loggedin/images/advert/users1.jpg')}}"
						     height="100%;" width="100%;">
					
					</div>
				</div>
			</div>
			<!-- Footer End -->
		</div>
		<!-- ============================================================== -->
		<!-- End content here -->
		<!-- ============================================================== -->
	
	</div>
	
	<!-- End right content -->

</div>
@section('contextMenu')
	<div id="contextMenu" class="dropdown clearfix">
		<ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu"
		    style="display:block;position:static;margin-bottom:5px;">
			<li><a tabindex="-1" href="javascript:;" data-priority="high"><i class="fa fa-circle-o text-red-1"></i> High
					Priority</a></li>
			<li><a tabindex="-1" href="javascript:;" data-priority="medium"><i class="fa fa-circle-o text-orange-3"></i>
					Medium Priority</a></li>
			<li><a tabindex="-1" href="javascript:;" data-priority="low"><i class="fa fa-circle-o text-yellow-1"></i>
					Low Priority</a></li>
			<li><a tabindex="-1" href="javascript:;" data-priority="none"><i
							class="fa fa-circle-o text-lightblue-1"></i> None</a></li>
		</ul>
	</div>
@show

@section('load_script')
	<!-- End of page -->
	<!-- the overlay modal element -->
	<div class="md-overlay"></div>
	<!-- End of eoverlay modal -->
	<script>
        var resizefunc = [];
	</script>
	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
	<script src="{{URL::asset('loggedin/assets/libs/jquery/jquery-1.11.1.min.js')}}"></script>
	<script src="{{URL::asset('loggedin/assets/libs/bootstrap/js/bootstrap.min.js')}}"></script>
	<script src="{{URL::asset('loggedin/assets/libs/jqueryui/jquery-ui-1.10.4.custom.min.js')}}"></script>
	<script src="{{URL::asset('loggedin/assets/libs/jquery-ui-touch/jquery.ui.touch-punch.min.js')}}"></script>
	<script src="{{URL::asset('loggedin/assets/libs/jquery-detectmobile/detect.js')}}"></script>
	<script src="{{URL::asset('loggedin/assets/libs/jquery-animate-numbers/jquery.animateNumbers.js')}}"></script>
	<script src="{{URL::asset('loggedin/assets/libs/ios7-switch/ios7.switch.js')}}"></script>
	<script src="{{URL::asset('loggedin/assets/libs/fastclick/fastclick.js')}}"></script>
	<script src="{{URL::asset('loggedin/assets/libs/jquery-blockui/jquery.blockUI.js')}}"></script>
	<script src="{{URL::asset('loggedin/assets/libs/bootstrap-bootbox/bootbox.min.js')}}"></script>
	<script src="{{URL::asset('loggedin/assets/libs/jquery-slimscroll/jquery.slimscroll.js')}}"></script>
	<script src="{{URL::asset('loggedin/assets/libs/jquery-sparkline/jquery-sparkline.js')}}"></script>
	<script src="{{URL::asset('loggedin/assets/libs/nifty-modal/js/classie.js')}}"></script>
	<script src="{{URL::asset('loggedin/assets/libs/nifty-modal/js/modalEffects.js')}}"></script>
	<script src="{{URL::asset('loggedin/assets/libs/sortable/sortable.min.js')}}"></script>
	<script src="{{URL::asset('loggedin/assets/libs/bootstrap-fileinput/bootstrap.file-input.js')}}"></script>
	<script src="{{URL::asset('loggedin/assets/libs/bootstrap-select/bootstrap-select.min.js')}}"></script>
	<script src="{{URL::asset('loggedin/assets/libs/bootstrap-select2/select2.min.js')}}"></script>
	<script src="{{URL::asset('loggedin/assets/libs/magnific-popup/jquery.magnific-popup.min.js')}}"></script>
	<script src="{{URL::asset('loggedin/assets/libs/pace/pace.min.js')}}"></script>
	<script src="{{URL::asset('loggedin/assets/libs/bootstrap-datepicker/js/bootstrap-datepicker.js')}}"></script>
	<script src="{{URL::asset('loggedin/assets/libs/jquery-icheck/icheck.min.js')}}"></script>
	
	<!-- Demo Specific JS Libraries -->
	<script src="{{URL::asset('loggedin/assets/libs/prettify/prettify.js')}}"></script>
	
	<script src="{{URL::asset('loggedin/assets/js/init.js')}}"></script>
	<!-- Page Specific JS Libraries -->
	<script src="{{URL::asset('loggedin/assets/libs/d3/d3.v3.js')}}"></script>
	<script src="{{URL::asset('loggedin/assets/libs/rickshaw/rickshaw.min.js')}}"></script>
	<script src="{{URL::asset('loggedin/assets/libs/raphael/raphael-min.js')}}"></script>
	<script src="{{URL::asset('loggedin/assets/libs/morrischart/morris.min.js')}}"></script>
	<script src="{{URL::asset('loggedin/assets/libs/jquery-knob/jquery.knob.js')}}"></script>
	<script src="{{URL::asset('loggedin/assets/libs/jquery-jvectormap/js/jquery-jvectormap-1.2.2.min.js')}}"></script>
	<script src="{{URL::asset('loggedin/assets/libs/jquery-jvectormap/js/jquery-jvectormap-us-aea-en.js')}}"></script>
	<script src="{{URL::asset('loggedin/assets/libs/jquery-clock/clock.js')}}"></script>
	<script src="{{URL::asset('loggedin/assets/libs/jquery-easypiechart/jquery.easypiechart.min.js')}}"></script>
	<script src="{{URL::asset('loggedin/assets/libs/jquery-weather/jquery.simpleWeather-2.6.min.js')}}"></script>
	<script src="{{URL::asset('loggedin/assets/libs/bootstrap-xeditable/js/bootstrap-editable.min.js')}}"></script>
	<script src="{{URL::asset('loggedin/assets/libs/bootstrap-calendar/js/bic_calendar.min.js')}}"></script>
	<script src="{{URL::asset('loggedin/assets/js/apps/calculator.js')}}"></script>
	<script src="{{URL::asset('loggedin/assets/js/apps/todo.js')}}"></script>
	<script src="{{URL::asset('loggedin/assets/js/apps/notes.js')}}"></script>
	<script src="{{URL::asset('loggedin/assets/js/pages/index.js')}}"></script>
@show

<script>
    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
            (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
        m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
    })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

    ga('create', 'UA-91865429-1', 'auto');
    ga('send', 'pageview');

</script>
</body>
</html>
