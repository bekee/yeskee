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
					<h1>Email <span class="invert bg-success">Sent</span></h1>
				</div>
			</div>
		</div>
	</section>
@stop

@section('name')
	Your account have been suspended
@stop

@section('about_us')
	<div class="sections_group">
		<div class="section " style="padding:20px 0;">
			<div class="section_wrapper clearfix">
				<div class="items_group clearfix">
					<div class="column one column">
						<div style="text-align: center;">
							
							<p style="font-size: 15px; line-height: 24px; text-align: left; line-height: 35px;">
								Your account have been suspended, kindly contact the administrator.
							</p>
						
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