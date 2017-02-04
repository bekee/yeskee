@extends('layouts.index2')



@section('title')
	YESKEINTERCONNECT1
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

@section('recharge')
	<h5 class="title1">
		@if(empty($recharge))Stay up for our lot's of freebis coming this week. You be a winner
		@else
			You too can be a winner, today's card is {{$recharge->network}} {{$recharge->number}}
		@endif
	</h5>
@stop