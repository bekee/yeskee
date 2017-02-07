@extends('layouts.admin')

@section('title')
	YESKEINTERCONNECT
@stop


@section('css')
	<!-- Base Css Files -->
	<link href="{{URL::asset('loggedin/assets/libs/jqueryui/ui-lightness/jquery-ui-1.10.4.custom.min.css')}}"
	      rel="stylesheet"/>
	<link href="{{URL::asset('loggedin/assets/libs/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet"/>
	<link href="{{URL::asset('loggedin/assets/libs/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet"/>
	<link href="{{URL::asset('loggedin/assets/libs/fontello/css/fontello.css')}}" rel="stylesheet"/>
	<link href="{{URL::asset('loggedin/assets/libs/animate-css/animate.min.css')}}" rel="stylesheet"/>
	<link href="{{URL::asset('loggedin/assets/libs/nifty-modal/css/component.css')}}" rel="stylesheet"/>
	<link href="{{URL::asset('loggedin/assets/libs/magnific-popup/magnific-popup.css')}}" rel="stylesheet"/>
	<link href="{{URL::asset('loggedin/assets/libs/ios7-switch/ios7-switch.css')}}" rel="stylesheet"/>
	<link href="{{URL::asset('loggedin/assets/libs/pace/pace.css')}}" rel="stylesheet"/>
	<link href="{{URL::asset('loggedin/assets/libs/sortable/sortable-theme-bootstrap.css')}}" rel="stylesheet"/>
	<link href="{{URL::asset('loggedin/assets/libs/bootstrap-datepicker/css/datepicker.css')}}" rel="stylesheet"/>
	<link href="{{URL::asset('loggedin/assets/libs/jquery-icheck/skins/all.css')}}" rel="stylesheet"/>
	<!-- Code Highlighter for Demo -->
	<link href="{{URL::asset('loggedin/assets/libs/prettify/github.css')}}" rel="stylesheet"/>
	
	<link href="{{URL::asset('loggedin/assets//libs/jquery-easypiechart/jquery.easy-pie-chart.css')}}" rel="stylesheet"
	      type="text/css"/>
	
	<link href="{{URL::asset('loggedin/assets/css/style.css')}}" rel="stylesheet" type="text/css"/>
	<!-- Extra CSS Libraries End -->
	<link href="{{URL::asset('loggedin/assets/css/style-responsive.css')}}" rel="stylesheet"/>
@show

@section('heading')
	<div class="page-heading">
		<h1><i class='fa fa-arrows-alt'></i> LEVELS</h1>
	</div>
@stop
@section('heading_right')
	<a href="{{url(Auth::user()->route.'/new_level/')}}" class="btn btn-primary">ADD LEVEL</a>
@stop
@section('top-summary')
@stop

@section('row3')
@stop
@section('row4')
@stop
@section('row1')
	<div class="col-md-12 portlets">
		<div class="widget">
			<div class="widget-header transparent">
				<h2><strong>@if(($active_levels->isEmpty()))No    @endif
						Active</strong> @if(($active_levels->isEmpty())) level @else levels    @endif</h2>
				<div class="additional-btn">
					<a href="#" class="hidden reload"><i class="icon-ccw-1"></i></a>
					<a href="#" class="widget-toggle"><i class="icon-down-open-2"></i></a>
					<a href="#" class="widget-close"><i class="icon-cancel-3"></i></a>
				</div>
			</div>
			<div class="widget-content padding">
				@if(($active_levels->isEmpty()))
					<h4 class="text-center">No Level Created YET</h4>
					<div class="col-sm-offset-5 col-lg-12">
						<a href="{{url('admin/new_level')}}" class="btn btn-primary">ADD LEVEL <span
									class="fa fa-arrow-circle-o-right"></span></a>
					</div>
				@endif
				@foreach($active_levels as $level)
					<a href="{{url(Auth::user()->route.'/level/'.$level->id.'/edit')}}">
						<div class="chart">
							<div class="percentage easyPieChart" data-percent="{{$level->amount}}"><span
										class="cpercent"></span>
							</div>
							<div class="label text-orange-2">{{$level->name}}</div>
							@if($level->discounted == 1)
								<div class="label text-green-1">Bonus of
									<small>{{$level->discount}}</small>%<br/> for
									<small>{{\Illuminate\Support\Str::ucfirst($level->set_users)}} users</small>
								</div>
							@endif
							@if($level->referral == 1)
								<div class="label text-blue-1">Referral Bonus of
									<small>{{$level->referred_discount}}</small>
									% </small>
								</div>
							@endif
						</div>
						
					</a>
				@endforeach
			</div>
		
		
		</div>
	</div>
@stop
@section('row2')
	<div class="col-md-12 portlets">
		<div class="widget">
			<div class="widget-header transparent">
				<h2><strong>@if(($inactive_levels->isEmpty()))No    @endif
						Inactive</strong> @if(($inactive_levels->isEmpty())) level @else levels    @endif</h2>
				<div class="additional-btn">
					<a href="#" class="hidden reload"><i class="icon-ccw-1"></i></a>
					<a href="#" class="widget-toggle"><i class="icon-down-open-2"></i></a>
					<a href="#" class="widget-close"><i class="icon-cancel-3"></i></a>
				</div>
			</div>
			<div class="widget-content padding">
				@if(($inactive_levels->isEmpty()))
					<h4 class="text-center">No Inactive Level YET</h4>
				@endif
				@foreach($inactive_levels as $level)
					<a href="{{url(Auth::user()->route.'/level/'.$level->id.'/edit')}}">
						<div class="chart">
							<div class="percentage easyPieChart" data-percent="{{$level->amount}}"><span
										class="cpercent"></span>
							</div>
							<div class="label text-orange-4">{{$level->name}}</div>
							@if($level->discounted == 1)
								<div class="label text-green-3">Bonus of
									<small>{{$level->discount}}</small>% <br/>for
									<small>{{\Illuminate\Support\Str::ucfirst($level->set_users)}} users</small>
								</div>
							@endif
							@if($level->referral == 1)
								<div class="label text-blue-3">Referral Bonus of
									<small>{{$level->referred_discount}}</small>
									% </small>
								</div>
							@endif
						</div>
					</a>
				@endforeach
			</div>
		
		
		</div>
	</div>
@stop

@section('load_script')
	<!-- End of page -->
	<!-- the overlay modal element -->
	<div class="md-overlay"></div>
	<!-- End of eoverlay modal -->
	<script>
        var resizefunc = [];
	</script>
	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
	<script src="{{URL::asset('loggedin/assets/libs/jquery/jquery-1.11.1.min.js')}}"></script>
	<script src="{{URL::asset('loggedin/assets/libs/bootstrap/js/bootstrap.min.js')}}"></script>
	<script src="{{URL::asset('loggedin/assets/libs/jqueryui/jquery-ui-1.10.4.custom.min.js')}}"></script>
	<script src="{{URL::asset('loggedin/assets/libs/jquery-ui-touch/jquery.ui.touch-punch.min.js')}}"></script>
	<script src="{{URL::asset('loggedin/assets/libs/jquery-detectmobile/detect.js')}}"></script>
	<script src="{{URL::asset('loggedin/assets/libs/jquery-animate-numbers/jquery.animateNumbers.js')}}"></script>
	<script src="{{URL::asset('loggedin/assets/libs/ios7-switch/ios7.switch.js')}}"></script>
	<script src="{{URL::asset('loggedin/assets/libs/fastclick/fastclick.js')}}"></script>
	<script src="{{URL::asset('loggedin/assets/libs/jquery-blockui/jquery.blockUI.js')}}"></script>
	<script src="{{URL::asset('loggedin/assets/libs/bootstrap-bootbox/bootbox.min.js')}}"></script>
	<script src="{{URL::asset('loggedin/assets/libs/jquery-slimscroll/jquery.slimscroll.js')}}"></script>
	<script src="{{URL::asset('loggedin/assets/libs/jquery-sparkline/jquery-sparkline.js')}}"></script>
	<script src="{{URL::asset('loggedin/assets/libs/nifty-modal/js/classie.js')}}"></script>
	
	<script src="{{URL::asset('loggedin/assets/libs/sortable/sortable.min.js')}}"></script>
	<script src="{{URL::asset('loggedin/assets/libs/bootstrap-fileinput/bootstrap.file-input.js')}}"></script>
	<script src="{{URL::asset('loggedin/assets/libs/bootstrap-select/bootstrap-select.min.js')}}"></script>
	<script src="{{URL::asset('loggedin/assets/libs/bootstrap-select2/select2.min.js')}}"></script>
	<script src="{{URL::asset('loggedin/assets/libs/magnific-popup/jquery.magnific-popup.min.js')}}"></script>
	<script src="{{URL::asset('loggedin/assets/libs/pace/pace.min.js')}}"></script>
	<script src="{{URL::asset('loggedin/assets/libs/bootstrap-datepicker/js/bootstrap-datepicker.js')}}"></script>
	<script src="{{URL::asset('loggedin/assets/libs/jquery-icheck/icheck.min.js')}}"></script>
	
	<!-- Demo Specific JS Libraries -->
	<script src="{{URL::asset('loggedin/assets/libs/prettify/prettify.js')}}"></script>
	
	<script src="{{URL::asset('loggedin/assets/js/init.js')}}"></script>
	<!-- Page Specific JS Libraries -->
	
@show
