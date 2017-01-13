@extends('layouts.anciliary')



@section('title')
	BECOME AN AGENT
@stop
@section('name')BECOME AN AGENT
@stop
@section('brands')
	<section class="main-slider fullsize" data-stellar-background-ratio="0.5"
	         style="background-image: url({{URL::asset('guest/images/account.png')}})">
		<div class="slider-caption">
			<div class="container">
				<div class="row">
					@if (session()->has('flash_notification.message'))
						<div class="alert alert-{{ session('flash_notification.level') }}">
							<button type="button" class="close" data-dismiss="alert"
							        aria-hidden="true">&times;</button>
							{!! session('flash_notification.message') !!}
						</div>
					@endif
					<div class="col-sm-4 col-sm-offset-4">
						<p style="">This is strictly for registered members only. If you are interested and wish to
							partner with us.<br/> Kindly fill the form below.</p>
						
						{!! Form::open(array('action' => 'BecomeAgentController@store','role'=>'form','class'=>'form-horizontal form-signin')) !!}
						
						
						<h3 class="form-signin-heading">APPLICATION FORM</h3>
						
						<div class="form-group">
							{!! Form::text('first_name',null,['class'=>'form-control input-lg','placeholder'=>'First name','id'=>'first_name','required'])   !!}
							
							@if ($errors->has('first_name'))
								<span class="help-block">
                                        <strong>{{ $errors->first('first_name') }}</strong>
                                    </span>
							@endif
						</div>
						
						
						<div class="form-group">
							{!! Form::text('last_name',null,['class'=>'form-control input-lg','placeholder'=>'Last name','id'=>'last_name','required'])   !!}
							@if ($errors->has('last_name'))
								<span class="help-block">
                                        <strong>{{ $errors->first('last_name') }}</strong>
                                    </span>
							@endif
						</div>
						<div class="form-group">
							
							{!! Form::text('mobile',null,['class'=>'form-control input-lg','placeholder'=>'eg +234-8654-765-4367','required'])   !!}
							@if ($errors->has('mobile'))
								<span class="help-block">
                                        <strong>{{ $errors->first('mobile') }}</strong>
                                    </span>
							@endif
						</div>
						<div class="form-group">
							{!! Form::text('email',null,['class'=>'form-control input-lg','placeholder'=>'E-mail address','required'])   !!}
							@if ($errors->has('email'))
								<span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
							@endif
						</div>
						
						<div class="form-group">
							{!! Form::password('password',['class'=>'form-control input-lg','placeholder'=>'Password','required'])   !!}
							@if ($errors->has('password'))
								<span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
							@endif
						</div>
						
						<div class="form-group">
							{!! Form::password('password_confirmation',['class'=>'form-control input-lg','placeholder'=>'Re-enter Password','required'])   !!}
							@if ($errors->has('password_confirmation'))
								<span class="help-block">
                                        <strong>{{ $errors->first('password_confirmation') }}</strong>
                                    </span>
							@endif
						</div>
						<div class="form-group">
							{{Form::textarea('why_agent',null,['placeholder'=>'Reasons for becoming and agent. Minimum of (50) characters','class'=>'form-control'])}}
							@if ($errors->has('why_agent'))
								<span class="help-block">
                                        <strong>{{ $errors->first('why_agent') }}</strong>
                                    </span>
							@endif
						</div>
						
						<div class="form-group">
							<div class="checkbox">
								<label>
									<input type="checkbox" name="read_policy"> I have read and accepted the policy
								</label>
							</div>
							@if ($errors->has('read_policy'))
								<span class="help-block">
                                        <strong>{{ $errors->first('read_policy') }}</strong>
                                    </span>
							@endif
						</div>
						<button class="btn btn-lg btn-primary btn-block" type="submit">BECOME AN AGENT</button>
						<br>
						Already have an account? <a href="{{url('login')}}">Login</a> now!
						{!! Form::close() !!}
					</div>
				</div>
			</div>
		</div>
	</section>
@stop








@section('about_us')
	
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
						
						<p style="">This is strictly for registered members only. If you are interested and wish to
							partner with us.<br/> Kindly fill the form below.</p>
						
						{!! Form::open(array('action' => 'BecomeAgentController@store','role'=>'form','class'=>'contact')) !!}
						
						
						<h3 class="form-signin-heading">APPLICATION FORM</h3>
						
						<span class="wpcf7-form-control-wrap message">
				{!! Form::text('first_name',null,['class'=>'wpcf7-form-control wpcf7-text wpcf7-validates-as-required','placeholder'=>'First name','id'=>'first_name','required'])   !!}
							
							@if ($errors->has('first_name'))
								<span class="help-block">
                                        <strong>{{ $errors->first('first_name') }}</strong>
                                    </span>
							@endif
			</span>
						
						
						<span class="wpcf7-form-control-wrap message">
				{!! Form::text('last_name',null,['class'=>'wpcf7-form-control wpcf7-text wpcf7-validates-as-required','placeholder'=>'Last name','id'=>'last_name','required'])   !!}
							@if ($errors->has('last_name'))
								<span class="help-block">
                                        <strong>{{ $errors->first('last_name') }}</strong>
                                    </span>
							@endif
			</span>
						<span class="wpcf7-form-control-wrap message">
				
				{!! Form::text('mobile',null,['class'=>'wpcf7-form-control wpcf7-text wpcf7-validates-as-required','placeholder'=>'eg +234-8654-765-4367','required'])   !!}
							@if ($errors->has('mobile'))
								<span class="help-block">
                                        <strong>{{ $errors->first('mobile') }}</strong>
                                    </span>
							@endif
			</span>
						<span class="wpcf7-form-control-wrap email">
				{!! Form::text('email',null,['class'=>'wpcf7-form-control wpcf7-text wpcf7-validates-as-required','placeholder'=>'E-mail address','required'])   !!}
							@if ($errors->has('email'))
								<span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
							@endif
			</span>
						
						<span class="wpcf7-form-control-wrap message">
				{!! Form::password('password',['class'=>'wpcf7-form-control wpcf7-text wpcf7-validates-as-required','placeholder'=>'Password','required'])   !!}
							@if ($errors->has('password'))
								<span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
							@endif
			</span>
						
						<span class="wpcf7-form-control-wrap message">
				{!! Form::password('password_confirmation',['class'=>'wpcf7-form-control wpcf7-text wpcf7-validates-as-required','placeholder'=>'Re-enter Password','required'])   !!}
							@if ($errors->has('password_confirmation'))
								<span class="help-block">
                                        <strong>{{ $errors->first('password_confirmation') }}</strong>
                                    </span>
							@endif
			</span>
						<span class="wpcf7-form-control-wrap message">
				{{Form::textarea('why_agent',null,['placeholder'=>'Reasons for becoming and agent. Minimum of (50) characters','class'=>'wpcf7-form-control wpcf7-textarea wpcf7-validates-as-required'])}}
							@if ($errors->has('why_agent'))
								<span class="help-block">
                                        <strong>{{ $errors->first('why_agent') }}</strong>
                                    </span>
							@endif
			</span>
						
						<span class="wpcf7-form-control-wrap message">
				<span class="checkbox">
					<label>
						<input type="checkbox" name="read_policy"> I have read and accepted the policy
					</label>
				</span>
							@if ($errors->has('read_policy'))
								<span class="help-block">
                        <strong>{{ $errors->first('read_policy') }}</strong>
                    </span>
							@endif
			</span>
						<button class="btn btn-lg btn-primary btn-block" type="submit">BECOME AN AGENT</button>
						<br>
						Already have an account? <a href="{{url('login')}}">Login</a> now!
						{!! Form::close() !!}
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
					Yeske Interconnect Enterprise was established in the year 2013 and gained online presence in
					2015. A
					networking firm that seeks to eradicate poverty at all level. We operate an online office
					with a
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
							     data-layout="button_count" data-action="like" data-size="large"
							     data-show-faces="true"
							     data-share="true"></div>
						</div>
					</li>
				</ul>
			</div>
		</div>
	</div>
@stop