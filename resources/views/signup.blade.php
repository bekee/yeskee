@extends('layouts.anciliary')



@section('title')
	CREATE ACCOUNT
@stop


@section('name')
	CREATE ACCOUNT
@stop

@section('about_us')
	<div class="section "
	     style="padding:40px 0 20px;  background-image:url({{asset("rcoco/upload/background_1.jpg")}}); background-repeat:no-repeat; background-position:center; background-attachment:fixed; -webkit-background-size:cover; background-size:cover">
		<div class="section_wrapper clearfix">
			<div class="items_group">
				<div class="column one column">
					<div style="text-align: center;">
						<div class="container">
							<div class="row">
								<div class="column one-fourth column">
								</div>
								<div class="column one-second column">
									<div role="form" class="wpcf7" id="wpcf7-f8643-p165-o1" dir="ltr">
										<div class="screen-reader-response">
										</div>
										
										<div class="col-sm-8 col-sm-offset-1">
											
											{!! Form::open(array('action' => 'IndexController@store','role'=>'form','class'=>'contact')) !!}
											
											@if (session()->has('flash_notification.message'))
												<div class="alert alert-{{ session('flash_notification.level') }}">
													<button type="button" class="close" data-dismiss="alert"
													        aria-hidden="true">&times;</button>
													{!! session('flash_notification.message') !!}
												</div>
											@endif
											
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
										       {!! Form::text('email',null,['class'=>'wpcf7-form-control wpcf7-text wpcf7-email wpcf7-validates-as-required wpcf7-validates-as-email','placeholder'=>'E-mail address','required'])   !!}
												@if ($errors->has('email'))
									<span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
												@endif
									</span>
											<span class="wpcf7-form-control-wrap message">
										 {{ Form::select('sex', [
                                   'Select-One' => [''=>'Gender','male'=>"Male",'female'=>'Female'],
                                   ],null,['class'=>'form-control selectpicker','id'=>'sex']
                                ) }}
												@if ($errors->has('sex'))
													<span class="help-block">
                                        <strong>{{ $errors->first('sex') }}</strong>
                                    </span>
												@endif
									</span>
											<span class="wpcf7-form-control-wrap email">
										       {!! Form::text('sponsor',null,['class'=>'wpcf7-form-control wpcf7-text wpcf7-email wpcf7-validates-as-email','placeholder'=>'Sponsor email (Optional)'])   !!}
												@if ($errors->has('sponsor'))
													<span class="help-block">
                                        <strong>{{ $errors->first('sponsor') }}</strong>
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
										{{ Form::select('hear_about_us', [
                                   'Select-One' => [''=>'How did you hear about us?','friend'=>"Friend",'school'=>'School','social media'=>'Social Media','newspaper'=>'Newspaper','search engine'=>'Search Engine','others'=>'Others'],
                                   ],null,['class'=>'form-control selectpicker','id'=>'hear_about_us']
                                ) }}
												@if ($errors->has('hear_about_us'))
													<span class="help-block">
                                        <strong>{{ $errors->first('hear_about_us') }}</strong>
                                    </span>
												@endif
									</span>
											<div class="form-group">
												<div class="checkbox">
													<label>
														<input type="checkbox" name="read_policy"> I have read and
														accepted
														the
														policy
													</label>
												</div>
												@if ($errors->has('read_policy'))
													<span class="help-block">
                                        <strong>{{ $errors->first('read_policy') }}</strong>
                                    </span>
												@endif
											</div>
											<button class="btn btn-lg btn-primary btn-block" type="submit">CREATE
												ACCOUNT
											</button>
											<br>
											Already have an account? <a href="{{url('login')}}">Login</a> now!
											{!! Form::close() !!}
										</div>
									</div>
								</div>
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