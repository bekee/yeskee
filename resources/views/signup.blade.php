@extends('layouts.index')



@section('title')
	CREATE ACCOUNT
@stop

@section('slider')
	<section class="main-slider fullsize" data-stellar-background-ratio="0.5"
	         style="background-image: url({{URL::asset('guest/images/account.png')}})">
		<div class="slider-caption">
			<div class="container">
				<div class="row">
					
					<div class="col-sm-4 col-sm-offset-4">
						
						{!! Form::open(array('action' => 'IndexController@store','role'=>'form','class'=>'form-horizontal form-signin')) !!}
						
						@if (session()->has('flash_notification.message'))
							<div class="alert alert-{{ session('flash_notification.level') }}">
								<button type="button" class="close" data-dismiss="alert"
								        aria-hidden="true">&times;</button>
								{!! session('flash_notification.message') !!}
							</div>
						@endif
						
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
							<input type="text" name="last_name" class="form-control input-lg"
							       placeholder="Last Name">
							@if ($errors->has('last_name'))
								<span class="help-block">
                                        <strong>{{ $errors->first('last_name') }}</strong>
                                    </span>
							@endif
						</div>
						<div class="form-group">
							<input type="tel" name="mobile" class="form-control input-lg"
							       placeholder="eg +234-8654-765-4367">
							@if ($errors->has('mobile'))
								<span class="help-block">
                                        <strong>{{ $errors->first('mobile') }}</strong>
                                    </span>
							@endif
						</div>
						<div class="form-group">
							<input type="email" name="email" class="form-control input-lg" placeholder="E-mail address"
							       required autofocus>
							@if ($errors->has('email'))
								<span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
							@endif
						</div>
						<div class="form-group">
							<select class="form-control selectpicker input-lg" name="sex">
								<option>Select Gender</option>
								<option value="male">Male</option>
								<option value="female">Female</option>
							</select>
							@if ($errors->has('gender'))
								<span class="help-block">
                                        <strong>{{ $errors->first('gender') }}</strong>
                                    </span>
							@endif
						</div>
						<div class="form-group">
							<input type="password" name="password" class="form-control input-lg" placeholder="Password"
							       required>
							@if ($errors->has('password'))
								<span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
							@endif
						</div>
						
						<div class="form-group">
							<input type="password" name="password_confirmation" class="form-control input-lg"
							       placeholder="Re-enter Password"
							       required>
							@if ($errors->has('password_confirmation'))
								<span class="help-block">
                                        <strong>{{ $errors->first('password_confirmation') }}</strong>
                                    </span>
							@endif
						</div>
						<div class="form-group">
							<select class="form-control selectpicker input-lg" name="hear_about_us">
								<option>How did you hear about us?</option>
								<option value="friend">Friend</option>
								<option value="school">School</option>
								<option value="social media">Social Media</option>
								<option value="newspaper">Newspaper</option>
								<option value="search engine">Search Engine</option>
								<option value="others">Others</option>
							</select>
							@if ($errors->has('hear_about_us'))
								<span class="help-block">
                                        <strong>{{ $errors->first('hear_about_us') }}</strong>
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
						<button class="btn btn-lg btn-primary btn-block" type="submit">CREATE ACCOUNT</button>
						<br>
						Already have an account? <a href="{{url('login')}}">Login</a> now!
						{!! Form::close() !!}
					</div>
				</div>
			</div>
		</div>
	</section>
@stop
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
@stop