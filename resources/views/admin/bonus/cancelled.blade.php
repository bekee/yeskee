@extends('layouts.admin')



@section('title')
	Cancelled Bonuses
@stop

@section('heading')
	<div class="page-heading">
		<h1><i class='icon icon-window'></i> Cancelled Bonuses</h1>
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

@stop

@section('heading')
	<div class="page-heading">
		<h1><i class='fa fa-arrows-alt'></i> All Cancelled Bonuses</h1>
	</div>
@stop

@section('top-summary')
@stop
@section('heading_right')

@stop
@section('row1')
	<div class="col-md-12 portlets">
		<div class="widget">
			<div class="widget-header">
				<h2>All Cancelled Bonuses
				</h2>
			
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
											<th>Description</th>
											<th>Client</th>
											<th>Amount Earned</th>
											<th>Quick Note</th>
											<th>Client Payment Status</th>
											<th>Level</th>
											<th>Status</th>
											<th>Date Created</th>
										</tr>
										</thead>
										
										<tbody>
										
										@if($bonuses->isEmpty())
											<tr>
												<td colspan="11"><p class="text-center">There is currently no cancelled
														bonus for any client</p></td>
											</tr>
										@endif
										
										@foreach($bonuses as $key => $bonus )
											
											<tr class='clickable-row'>
												<td>{{$key +1}}</td>
												<td>
													<strong>{{$bonus->purpose}}</strong>
												</td>
												<td>
													@if($bonus->user_type =='mine' )
														{{$bonus->user->user->first_name . ' ' . $bonus->user->user->last_name}}
														({{$bonus->user->email}})
														<small>---Client</small>
													@elseif($bonus->user_type =='referral')
														{{$bonus->user->user->first_name . ' ' . $bonus->user->user->last_name}}
														({{$bonus->user->email}})
														<small>--- Referred by</small>
														{{$bonus->user->parentOf->referredParentOfUser->user->first_name . ' ' . $bonus->user->parentOf->referredParentOfUser->user->last_name}}
														({{$bonus->user->parentOf->referredParentOfUser->email}})
													@else
														{{$bonus->user->agent->first_name . ' ' . $bonus->user->agent->last_name}}
														({{$bonus->user->email}})
														<small>---Agent</small>
													@endif
												</td>
												<td>₦ {!! number_format($bonus->amount,2) !!} </td>
												<td>{!! $bonus->user_type == 'mine' ? "First Time Bonus":
												 $bonus->user_type == 'referral' ? "Bonus based on client referral" : "Bonus for the Agent" !!} </td>
												<td>{{\Illuminate\Support\Str::ucfirst($bonus->userLevel->payment->status)}}</td>
												<td>{{$bonus->userLevel->level->name}}</td>
												
												
												<td>@if($bonus->status == 'approved')
														{!!  "<span class='label label-success'>Approved</span>"!!}
													@elseif($bonus->status == 'unapproved')
														{!!  "<span class='label label-info'>Waiting Approval</span>"!!}
													@else{!!  "<span class='label label-danger'>Cancelled</span>" !!}
													@endif
												</td>
												<td>{{$bonus->created_at}}</td>
											</tr>
										
										@endforeach
										</tbody>
									</table>
								</div>
								
								<div class="data-table-toolbar">
									<ul class="pagination">
										{{$bonuses->links()}}
									</ul>
								</div>
							</div>
						</div>
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
