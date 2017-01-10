@extends('layouts/index')

@section('title')
	LOGIN-YESKEINTERCONNECT
@stop



@section('showcase')
@stop
@section('offer')
@stop

@section('twitter')
@stop

@section('offer')
@stop

@section('features')

@stop
@section('revolution')
@stop

@section('login')
	<section>
		<div class="login">
			<div class="login-wrapper">
				<div class="container">
					<div class="row">
						<div class="col-xs-12">
							<div class="login-logo">
								<img src="{{asset('guest/img/logo.png')}}" alt="YeskeInterconnect" width="100px"/>
							</div>
						</div>
					</div>
				</div>
				
				<div class="login-content">
					<div class="container">
						<div class="row">
							<div class="col-md-5 col-md-offset-1">
								<h3>Login to Your Account </h3>
								{!! Form::open(array('url' => 'login','role'=>'form')) !!}
								
								@if (session()->has('flash_notification.message'))
									<div class="alert alert-{{ session('flash_notification.level') }}">
										<button type="button" class="close" data-dismiss="alert"
										        aria-hidden="true">&times;</button>
										{!! session('flash_notification.message') !!}
									</div>
								@endif
								
								{!! Form::email('email',null,['class'=>'form-control text-input','placeholder'=>"Email"]) !!}
								@if ($errors->has('email'))
									<span class="help-inline">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
								@endif
								<div class="form-group login-input">
									<i class="fa fa-key overlay"></i>
									{!! Form::password('password',['class'=>'form-control text-input','placeholder'=>"password"]) !!}
									@if ($errors->has('password'))
										<span class="help-inline">
                            <strong>{{ $errors->first('password') }}</strong>
                        </span>
									@endif
								</div>
								<button class="btn btn-success">Log In</button>
								{!! Form::close() !!}
							</div>
							
							<div class="col-md-3 col-md-offset-1">
								<h4>Don't have an account </h4>
								<p>
									<a href="{{url('sign_up')}}"> Sign up</a> now for free
								</p>
								
								<h4>Forget your password </h4>
								<a href="{{url('reset_password')}}"> Reset Here</a>
							</div>
						</div>
					</div>
				
				</div>
			
			</div>
		</div>
	</section>
@stop