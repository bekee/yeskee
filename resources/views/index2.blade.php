@extends('layouts.index2')



@section('title')
	YESKEINTERCONNECT
@stop
@section('slider')
	<section class="main-slider fullsize" data-stellar-background-ratio="0.5"
	         style="background-image: url({{URL::asset('guest/images/headers/portal2.jpg')}})">
		<div class="slider-caption">
			<h1 data-animate="fadeInDown" data-delay="1000" data-duration="2s">Whenever you feel lost, <br>we
				are
				here to guide you!
			</h1>
			<h3>We are happy yo make you happy</h3>
			<a data-animate="fadeInUp" data-duration="2s" data-delay="1300" href="javascript:;"
			   class="btn btn-primary btn-lg">CONTACT US</a>
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
@section('portfolio')
@stop

@section('our_clients')
@stop