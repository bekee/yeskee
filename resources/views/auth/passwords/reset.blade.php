@extends('layouts.anciliary')



@section('title')
	YESKEINTERCONNECT
@stop
@section('slider')
@stop
@section('message_banner')
	<section class="brands-block" style="background: #46a546 url({{asset('guest/img/people.jpg')}}); ">
		<div class="container text-center">
			
			<div class="row">
				<div class="col-sm-10 col-sm-offset-1" style="margin-top: 200px;">
					<h1>Reset <span class="invert bg-success">Password</span></h1>
				</div>
			</div>
		</div>
	</section>
@stop

@section('name')
	Password Reset
@stop

@section('about_us')
	<div class="sections_group">
		<div class="section " style="padding:20px 0;">
			<div class="container clearfix">
				<div class="row clearfix">
					
				
				</div>
			</div>
		</div>
	
	</div>
	<div class="container">
		<div class="row">
			<div class="col-md-offset-2">
				<div class="column one-fourth column">
				</div>
				<div class="column one-second column">
					<div role="form" class="wpcf7" id="wpcf7-f8643-p165-o1" dir="ltr">
						<div class="screen-reader-response">
						</div>
						
						@if (session()->has('flash_notification.message'))
							<div class="alert alert-{{ session('flash_notification.level') }}">
								<button type="button" class="close" data-dismiss="alert"
								        aria-hidden="true">&times;</button>
								{!! session('flash_notification.message') !!}
							</div>
						@endif
						
						<div class="panel panel-default">
							<div class="panel-heading"><h2>Reset Password</h2></div>
							
							<div class="panel-body">
								@if (session('status'))
									<div class="alert alert-success">
										{{ session('status') }}
									</div>
								@endif
								
								<form class="form-horizontal" role="form" method="POST"
								      action="{{ url('/password/reset') }}">
									{{ csrf_field() }}
									
									<input type="hidden" name="token" value="{{ $token }}">
									
									<div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
										<label for="email" class="col-md-4 control-label">E-Mail Address</label>
										
										<div class="col-md-6">
											<input id="email" type="email" class="form-control" name="email"
											       value="{{ $email or old('email') }}" required autofocus>
											
											@if ($errors->has('email'))
												<span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
											@endif
										</div>
									</div>
									
									<div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
										<label for="password" class="col-md-4 control-label">Password</label>
										
										<div class="col-md-6">
											<input id="password" type="password" class="form-control" name="password"
											       required>
											
											@if ($errors->has('password'))
												<span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
											@endif
										</div>
									</div>
									
									<div class="form-group{{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
										<label for="password-confirm" class="col-md-4 control-label">Confirm
											Password</label>
										<div class="col-md-6">
											<input id="password-confirm" type="password" class="form-control"
											       name="password_confirmation" required>
											
											@if ($errors->has('password_confirmation'))
												<span class="help-block">
                                        <strong>{{ $errors->first('password_confirmation') }}</strong>
                                    </span>
											@endif
										</div>
									</div>
									
									<div class="form-group">
										<div class="col-md-6 col-md-offset-4">
											<button type="submit" class="btn btn-primary">
												Reset Password
											</button>
										</div>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- .four-columns - sidebar -->
@stop

@section('portfolio')
@stop

@section('our_clients')
@stop




@section('one-fourth-1')
	<div class="one-fourth column">
		<aside id="text-2" class="widget">
			<div class="logo">
				<h1><a id="logo" href="#" title="YeskeInterconnect">
						
						<img class="scale-with-grid" src="{{asset('guest/img/logo.png')}}" height="150px;"
						     width="150px;" alt="YeskeInterconnect">
					</a>
				</h1>
			</div>
		</aside>
	</div>
@stop

@section('one-fourth-2')
	<div class="one-fourth column">
		<aside id="text-2" class="widget widget_text">
			<h4>About us</h4>
			<div class="textwidget">
				<p>
					Yeske Interconnect Enterprise was established in the year 2013 and gained online presence in 2015. A
					networking firm that seeks to eradicate poverty at all level. We operate an online office with a
					good and well functional systems
				</p>
				<a href="{{url('about')}}">Read more &rarr;</a>
			</div>
		</aside>
	</div>
@stop

@section('our_post')
	<div class="column one-fourth latest_posts">
		<div class="latest_posts">
			<h3>Follow Us On</h3>
			<div class="inside">
				<ul>
					<li>
						<div class="photo">
							<div class="fb-like" data-href="https://www.facebook.com/yeskeinterconnect"
							     data-layout="button_count" data-action="like" data-size="large" data-show-faces="true"
							     data-share="true"></div>
						</div>
					</li>
				</ul>
			</div>
		</div>
	</div>
@stop