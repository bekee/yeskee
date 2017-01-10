@extends('layouts.index')



@section('title')
	BECOME AN AGENT
@stop

@section('message_banner')
	<section class="brands-block" style="background: #0A487C url({{asset('guest/img/peoplde.jpg')}}); ">
		<div class="container text-center">
			
			<div class="row">
				<div class="col-sm-10 col-sm-offset-1" style="margin-top: 100px;">
					<h1>BECOME <span class="invert bg-success">AN</span> AGENT</h1>
				</div>
			</div>
		</div>
	</section>
@stop
@section('services')
@stop
@section('video')
@stop
@section('features_block')
@stop
@section('product_block')
@stop
@section('testimony')
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
@section('slider')

@stop