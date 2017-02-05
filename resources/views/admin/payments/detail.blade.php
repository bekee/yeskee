@extends('layouts.admin')



@section('title')
	Payment Detail
@stop

@section('heading')
	<div class="page-heading">
		<h3><i class='icon icon-money'></i> Payment Detail</h3>
	</div>
@stop


@section('top-summary')
@stop
@section('row1')
	<div class="col-lg-12">
		<div class="widget">
			
			<div class="widget-content">
				<div class="data-table-toolbar">
					<div class="row">
						<div class="col-md-4">
						
						</div>
						<div class="col-md-8">
						
						</div>
					</div>
				</div>
				<h4 class="text-center">Payment Detail</h4>
				<div class="col-md-6">
					<img src="{{Storage::disk('teller')->url('images/teller/'.$payment->image)}}"
					     height="250px;" width="100%;">
				</div>
				<div class="col-md-6">
					@if($payment->status =='pending')
						<div class="btn-group ">
							<a href='{{url(Auth::user()->route."/a_view_payment_approve/".$payment->id)}}'
							   data-toggle="tooltip" title="Approve Payment"
							   class="btn btn-primary">Approve</a>
						</div>
						<div class="btn-group ">
							<a href='{{url(Auth::user()->route."/a_view_payment_reject/".$payment->id)}}'
							   data-toggle="tooltip" title="Reject Payment"
							   class="btn btn-danger">Reject</a>
						</div>
					@endif
					<hr>
					<div class="row">
						<div class="col-md-2">Name</div>
						<div class="col-md-6">{{$payment->user->user->first_name}} {{$payment->user->user->last_name}}</div>
					</div>
					<div class="row">
						<div class="col-md-2">Level</div>
						<div class="col-md-6">{{$payment->userLevel->level->name}}</div>
					</div>
					<div class="row">
						<div class="col-md-2">Payment Type</div>
						<div class="col-md-6">{{\Illuminate\Support\Str::upper($payment->type)}}</div>
					</div>
				</div>
			</div>
		</div>
	</div>
@stop

@section('row2')
@stop

@section('row3')
@stop
@section('row4')
@stop