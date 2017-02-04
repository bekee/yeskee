@extends('layouts.login')


@section('title')
	LOGIN
@stop

@section('author')
	YeskeInterconnect
@stop

@section('keyword')
	Keywords
@stop



@section('login')
	<div class="container">
		<div class="full-content-center">
			<p class="text-center">
				<a href="{{url('/')}}">
					<img src="{{URL::asset('guest/img/logo.png')}}" width="100px;"
					     data-dark-src="{{URL::asset('guest/img/logo.png')}}" alt="YeskeInterconnect"
					     class="logo">
				</a>
			
			</p>
			<div class="login-wrap animated flipInX">
				<div class="login-block">
					
					
					{!! Form::open(array('url' => 'login','role'=>'form')) !!}
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
								<a href="{{url('password/reset')}}" class="btn btn-link">forgotten password?</a>
							</div>
						</div>
					</div>
					{!! Form::close() !!}
				</div>
			</div>
		
		</div>
	</div>
@stop