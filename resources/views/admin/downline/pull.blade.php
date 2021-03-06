@extends('layouts.admin')



@section('title')
	Select A DownLine
@stop

@section('heading')
	<div class="page-heading">
		<h3><i class='icon icon-compass-2'></i>Select A DownLine</h3>
	</div>
@stop


@section('css')
	<meta name="csrf-token" content="{!! csrf_token() !!}"/>
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
	
	<!-- Extra CSS Libraries Start -->
	<!-- Extra CSS Libraries Start -->
	<link href="{{URL::asset('loggedin/assets/libs/bootstrap-select/bootstrap-select.min.css')}}" rel="stylesheet"
	      type="text/css"/>
	<link href="{{URL::asset('loggedin/assets/libs/summernote/summernote.css')}}" rel="stylesheet" type="text/css"/>
	<link href="{{URL::asset('loggedin/assets/css/style.css')}}" rel="stylesheet" type="text/css"/>
	<link href="{{URL::asset('loggedin/assets/css/style2.css')}}" rel="stylesheet" type="text/css"/>
	<!--<link href="{ {URL::asset('loggedin/assets/css/jquery.timepicker.min.css')}}" rel="stylesheet" type="text/css"/>-->
	<link href="{{URL::asset('loggedin/assets/css/jquery.timepicker.min.css')}}" rel="stylesheet"/>
	<!-- Extra CSS Libraries End -->
	<link href="{{URL::asset('loggedin/assets/css/style-responsive.css')}}" rel="stylesheet"/>
	
	<link href="{{URL::asset('loggedin/assets/libs/bootstrap-select/bootstrap-select.min.css')}}" rel="stylesheet"
	      type="text/css"/>
	<link href="{{URL::asset('loggedin/assets/libs/summernote/summernote.css')}}" rel="stylesheet" type="text/css"/>
	<link href="{{URL::asset('loggedin/assets/css/custom.css')}}" rel="stylesheet"/>
@stop

@section('heading')
	<div class="page-heading">
		<h1><i class='fa fa-arrows-alt'></i> Select A DownLine</h1>
	</div>
@stop

@section('top-summary')
@stop
@section('heading_right')

@stop
@section('row1')
	@unless(count($downlines))
		<div class="col-md-12 portlets">
			<div class="widget">
				<div class="widget-header transparent">
					<div class="additional-btn">
					</div>
				</div>
				<div class="widget-content padding">
					<h5 class="text-center">No downline found for this level</h5>
					<div class="btn-group col-md-offset-6"><a href="{{url('admin/assign_to_root/'.$user_level_id)}}"
					                                          class="btn btn-danger btn-sm">Assign To ROOT <span
									class="fa fa-arrows-h"></span></a></div>
				</div>
			</div>
		</div>
	@endunless
@stop


@section('row2')
	@if(count($downlines))
		<div class="col-md-12 portlets">
			<div class="widget">
				<div class="widget-header">
					<h2>Select A DownLine </h2>
				
				</div>
				<div class="widget-content padding">
					
					<div class="row">
						<div class="col-md-12">
							<div class="widget">
								
								<div class="widget-content">
									
									<div class="table-responsive">
										<table data-sortable class="table table-hover table-striped">
											<thead>
											<tr>
												<th>No</th>
												<th>Client</th>
												<th>Level</th>
												<th>Date</th>
												<th>Current Payouts (₦)</th>
												<th>Y</th>
												<th>E</th>
											</tr>
											</thead>
											<tbody>
											<tr>
												@if($downlines->isEmpty())
													<td colspan="10"><p class="text-center">There are no Level DownLines
															Found</p></td>
												@endif
											</tr>
											@foreach($downlines as $key => $level )
												<tr>
													<td>{{$key +1}}</td>
													<td>
														{{$level->user->user->first_name}} {{$level->user->user->last_name}}
														<span>({{$level->user->email}})</span>
													</td>
													<td>{{$level->level->name}}</td>
													<td>{{\Carbon\Carbon::parse($level->created_at)->diffForHumans()}}</td>
													<td> ₦ {{number_format(round((empty($level->levelStatus->y)? 0 : ($level->level->amount)*.33333)+
									 (empty($level->levelStatus->e)? 0 : ($level->level->amount)*.33333)+
									 (empty($level->levelStatus->s)? 0 : ($level->level->amount)*.33333)+
									 (empty($level->levelStatus->k)? 0 : ($level->level->amount)*.33333)+
									 (empty($level->levelStatus->e1)? 0 : ($level->level->amount)*.33333)+
									 (empty($level->levelStatus->e2)? 0 : ($level->level->amount)*.33333)
									 ),2)
									   }}
													</td>
													<td>@if(!empty($level->levelStatus->y))
															{{$level->levelStatus->y->user->first_name}} {{$level->levelStatus->y->user->last_name}}
															<span>({{$level->levelStatus->y->email}})</span>
														@else
															<div class="btn-group btn-group-xs">
																<a href='{{url(Auth::user()->route."/assign_to_left/".$user_id."/".$level->level->id."/".$user_level_id)}}'
																   data-toggle="tooltip"
																   title="Assign to LEFT LEG"
																   class="btn btn-primary btn-sm">ASSIGN TO LEFT LEG</a>
															</div>
														@endif
													</td>
													
													<td>@if(!empty($level->levelStatus->e))
															{{$level->levelStatus->e->user->first_name}} {{$level->levelStatus->e->user->last_name}}
															<span>({{$level->levelStatus->e->email}})</span>
														@else
															<div class="btn-group btn-group-xs">
																<a href='{{url(Auth::user()->route."/assign_to_right/".$user_id."/".$level->level->id."/".$user_level_id)}}'
																   data-toggle="tooltip"
																   title="Assign to RIGHT  LEG"
																   class="btn btn-primary btn-sm">ASSIGN TO RIGHT
																	LEG</a>
															</div>
														@endif
													</td>
													<td>
													
													</td>
												
												</tr>
											
											@endforeach
											</tbody>
										</table>
									</div>
									
									<div class="data-table-toolbar">
										<ul class="pagination">
											{{$downlines->links()}}
										</ul>
									</div>
								</div>
							</div>
						</div>
					
					</div>
				</div>
			</div>
		</div>
	@endif
@stop

@section('row3')
@stop
@section('row4')
@stop

@section('load_script')
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
	
	<!--Modal effects-->
	
	
	<!-- Demo Specific JS Libraries -->
	<script src="{{URL::asset('loggedin/assets/libs/prettify/prettify.js')}}"></script>
	
	<script src="{{URL::asset('loggedin/assets/js/init.js')}}"></script>
	<!--<script src="{ {URL::asset('loggedin/assets/js/jquery.timepicker.min.js')}}"></script>-->
	
	<script src="{{URL::asset('loggedin/assets/js/jquery.timepicker.min.js')}}"></script>
	
	<script src="{{URL::asset('loggedin/assets/libs/bootstrap-select/bootstrap-select.min.js')}}"></script>
	<script src="{{URL::asset('loggedin/assets/libs/bootstrap-inputmask/inputmask.js')}}"></script>
	<script src="{{URL::asset('loggedin/assets/libs/summernote/summernote.js')}}"></script>
	<script src="{{URL::asset('loggedin/assets/js/pages/forms.js')}}"></script>

@stop