<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>@yield('title')</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
	<meta name="apple-mobile-web-app-capable" content="yes"/>
	<meta name="description" content="">
	<meta name="keywords" content="@yield('keyword')">
	<meta name="author" content="@yield('author')">
	
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
	<link href="{{URL::asset('loggedin/assets/css/style.css')}}" rel="stylesheet" type="text/css"/>
	<!-- Extra CSS Libraries End -->
	<link href="{{URL::asset('loggedin/assets/css/style-responsive.css')}}" rel="stylesheet"/>
	
	<!-- HTML5 Shim and Respond.js')}} IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js')}} doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
	<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js')}}"></script>
	<script src="https://oss.maxcdn.com/libs/respond.js')}}/1.3.0/respond.min.js')}}"></script>
	<![endif]-->


</head>
<body class="fixed-left login-page"
      style="background-image: url({{URL::asset('guest/images/headers/login.png')}}); background-size:cover; ">
<!-- Modal Start -->
<!-- Modal Task Progress -->

@section('login')
	<div class="container">
		<div class="full-content-center">
			<p class="text-center">
				
					<a href="{{url('/')}}">
						<img src="{{URL::asset('guest/img/logo.png')}}"
						     data-dark-src="{{URL::asset('guest/img/logo.png')}}" alt="YeskeInterconnect"
						     class="logo">
					</a>
				
			</p>
			<div class="login-wrap animated flipInX">
				<div class="login-block">
					
					
					<img src="{{URL::asset('loggedin/images/users/default-user.png')}}"
					     class="img-circle not-logged-avatar">
					
					{!! Form::open(array('url' => 'admin/login','role'=>'form')) !!}
					@if (session()->has('flash_notification.message'))
						<div class="alert alert-{{ session('flash_notification.level') }}">
							<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
							{!! session('flash_notification.message') !!}
						</div>
					@endif
					
					<div class="form-group login-input">
						<i class="fa fa-user overlay"></i>
						
						{!! Form::email('email',null,['class'=>'form-control text-input','placeholder'=>"Email"]) !!}
						@if ($errors->has('email'))
							<span class="help-inline">
                            <strong>{{ $errors->first('email') }}</strong>
                        </span>
						@endif
					</div>
					<div class="form-group login-input">
						<i class="fa fa-key overlay"></i>
						{!! Form::password('password',['class'=>'form-control text-input','placeholder'=>"********"]) !!}
						@if ($errors->has('password'))
							<span class="help-inline">
                            <strong>{{ $errors->first('password') }}</strong>
                        </span>
						@endif
					</div>
					
					<div class="row">
						<div class="col-sm-12">
							<button type="submit" class="btn btn-success btn-block">LOGIN</button>
						</div>
						<div class="col-sm-12">
							<div class="col-sm-6 pull-left">
								<label class="checkbox">
									<input type="checkbox" id="remember" name="remember"> Remember me
								</label>
							</div>
							<div class="col-sm-6 pull-right">
								<a href="#" class="btn btn-link">forgotten password?</a>
							</div>
						</div>
					</div>
					{!! Form::close() !!}
				</div>
			</div>
		
		</div>
	</div>
@show
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
</body>
</html>