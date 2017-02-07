@extends('layouts.user')



@section('title')
	DASHBOARD
@stop

@section('heading')
	<div class="page-heading">
		<h3><i class='icon icon-air'></i>DASHBOARD</h3>
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
		<h1><i class='fa fa-arrows-alt'></i> Profile</h1>
	</div>
@stop

@section('top-summary')
@stop
@section('heading_right')

@stop
@section('row1')
	@unless(count($transactions))
		<div class="col-md-12 portlets">
			<div class="widget">
				<div class="widget-header transparent">
					<h2><strong>Active</strong> levels</h2>
					<div class="additional-btn">
						<a href="#" class="hidden reload"><i class="icon-ccw-1"></i></a>
						<a href="#" class="widget-toggle"><i class="icon-down-open-2"></i></a>
						<a href="#" class="widget-close"><i class="icon-cancel-3"></i></a>
					</div>
				</div>
				<div class="widget-content padding">
					<h5 class="text-center">You currently do not have any LEVEL</h5>
				</div>
			</div>
		</div>
	@endunless
@stop

@section('row2')
	
	@foreach($transactions as $level)
		@if($level->status == 'pending')
			<a href="{{url('dashboard/pending_level')}}">
				<div class="col-md-12 portlets">
					<div class="widget">
						<div class="widget-header transparent">
							<div class="col-sm-8">
								<div class="col-sm-12">
									<div class="col-sm-2"><span style="color: #1b7e5a">Level Name:</span></div>
									<div class="col-sm-9"><span
												style="color: #1b7e5a"><strong>{{$level->level->name}}</strong></span>
									</div>
								</div>
								<div class="col-sm-12">
									<div class="col-sm-2"><span style="color: #1b7e5a">Amount Invested:</span></div>
									<div class="col-sm-9"><span
												style="color: #ee1e2d"><strong>₦ {{number_format($level->level->amount)}}</strong></span>
									</div>
								</div>
								<div class="col-sm-12">
									<div class="col-sm-2"><span style="color: #ee1e2d">Expected Payout:</span></div>
									<div class="col-sm-9"><span
												style="color: #1b7e5a"><strong> ₦{{(number_format(round($level->level->amount)*.33333*6))}}</strong></span>
									</div>
								</div>
							</div>
							<div class="col-sm-4">
								<h3>PAYMENT STATUS: @if($level->payment->status == 'paid') <span class="btn btn-success">APPROVED </span>@else
										<span class="btn btn-info">PENDING APPROVAL</span>@endif
								</h3>
							</div>
						</div>
						<div class="col-sm-8">
							<div class="widget-content padding">
								<div class="text-center">
									<div class="{{empty($level->levelStatus->y) ?'yesk':'yeskee'}}">Y</div>
									<div class="{{empty($level->levelStatus->e) ?'yesk':'yeskee'}}">E</div>
									<div class="{{empty($level->levelStatus->s) ?'yesk':'yeskee'}}">S</div>
									<div class="{{empty($level->levelStatus->k) ?'yesk':'yeskee'}}">K</div>
									<div class="{{empty($level->levelStatus->e1) ?'yesk':'yeskee'}}">E</div>
									<div class="{{empty($level->levelStatus->e2) ?'yesk':'yeskee'}}">E</div>
								</div>
							</div>
							<div class="text-left text-red-1"><strong>Note</strong>, your level will be approved within
								24hrs of
								payment. <br/> For any issue regarding your transaction, kindly drop a request message
								as we
								will respond to you swiftly. <br/>
								The good news here is that, when you register and find it difficult introducing two
								people or
								the system is unable to queue you up with somebody within the the space of two weeks,
								you can
								humbly apply for a refund of money or send us email – ecn@yeskeinterconnect.com
								This is possible because we operate a single account and a registered platform to avoid
								delay
								and issues in payment. Invest your money and see how things turns swiftly with ease. We
								are
								reliable and trusted
							</div>
						</div>
						<div class="col-sm-4">
							<h5 class="text-center"><strong>My Teller</strong></h5>
							<img src="{{Storage::disk('teller')->url('images/teller/'.$level->payment->image)}}"
							     height="250px;" width="100%;">
						</div>
						<div class="col-sm-12" style="margin-top: 21px; margin-bottom: 15px;">
							<div class="pull-right"><a class="btn btn-yellow-1" href="{{url('my-request')}}">Make a
									Request
									<span class="icon icon-message"></span></a></div>
						</div>
					</div>
				</div>
			</a>
		@else
			<a href="{{url('dashboard/active_level')}}">
				<div class="col-md-12 portlets">
					<div class="widget">
						<div class="widget-header transparent">
							<div class="col-sm-8">
								<div class="col-sm-12">
									<div class="col-sm-2"><span style="color: #1b7e5a">Level Name:</span></div>
									<div class="col-sm-9"><span
												style="color: #1b7e5a"><strong>{{$level->level->name}}</strong></span>
									</div>
								</div>
								<div class="col-sm-12">
									<div class="col-sm-2"><span style="color: #1b7e5a">Amount Invested:</span></div>
									<div class="col-sm-9"><span
												style="color: #ee1e2d"><strong>₦ {{number_format($level->level->amount)}}</strong></span>
									</div>
								</div>
								<div class="col-sm-12">
									<div class="col-sm-2"><span style="color: #ee1e2d">Expected Payout:</span></div>
									<div class="col-sm-9"><span
												style="color: #1b7e5a"><strong> ₦{{(number_format(round(( $level->level->amount)*.33333*6),2))}} </strong></span>
									</div>
								</div>
								<div class="col-sm-12">
									<div class="col-sm-2"><span style="color: #1b7e5a">Current Payout:</span></div>
									<div class="col-sm-9"><span
												style="color: #ee1e2d"><strong>₦ {{number_format(round(
									 (empty($level->levelStatus->y)? 0 : ($level->level->amount)*.33333)+
									 (empty($level->levelStatus->e)? 0 : ($level->level->amount)*.33333)+
									 (empty($level->levelStatus->s)? 0 : ($level->level->amount)*.33333)+
									 (empty($level->levelStatus->k)? 0 : ($level->level->amount)*.33333)+
									 (empty($level->levelStatus->e1)? 0 : ($level->level->amount)*.33333)+
									 (empty($level->levelStatus->e2)? 0 : ($level->level->amount)*.33333)
									 ),2)
									   }}</strong></span>
									</div>
								</div>
							</div>
							<div class="col-sm-4">
								<h3>PAYMENT STATUS: @if($level->payment->status == 'paid') <span class="btn btn-success">APPROVED </span>@else
										<span class="btn btn-info">PENDING APPROVAL</span>@endif
								</h3>
							</div>
						</div>
						<div class="col-sm-12">
							<div class="widget-content padding">
								<div class="text-center">
									<table style=" margin: auto;">
										<tr>
											<td>
												<div class="{{empty($level->levelStatus->y) ?'yesk':'yeskee'}}">Y</div>
											</td>
											
											<td>
												<div class="{{empty($level->levelStatus->e) ?'yesk':'yeskee'}}">E</div>
											</td>
											
											<td>
												<div class="{{empty($level->levelStatus->s) ?'yesk':'yeskee'}}">S</div>
											</td>
											
											<td>
												<div class="{{empty($level->levelStatus->k) ?'yesk':'yeskee'}}">K</div>
											</td>
											
											<td>
												<div class="{{empty($level->levelStatus->e1) ?'yesk':'yeskee'}}">E</div>
											</td>
											
											<td>
												<div class="{{empty($level->levelStatus->e2) ?'yesk':'yeskee'}}">E</div>
											</td>
										</tr>
										<tr>
											<td>
												<div class="{{empty($level->levelStatus->y) ?'yesk2':'yeskee2'}}">
													@if(empty($level->levelStatus->y))
														₦ 0.0<span
																class="icon icon-down-3"></span>
													@else
														₦ {{(number_format(round(( $level->level->amount)*.33333),2))}}
														<span class="icon icon-up-3"></span>
													@endif
												</div>
											</td>
											
											<td>
												<div class="{{empty($level->levelStatus->e) ?'yesk2':'yeskee2'}}">
													@if(empty($level->levelStatus->e))
														₦ 0.0<span
																class="icon icon-down-3"></span>
													@else
														₦ {{(number_format(round(( $level->level->amount)*.33333),2))}}
														<span class="icon icon-up-3"></span>
													@endif
												</div>
											</td>
											
											<td>
												<div class="{{empty($level->levelStatus->s) ?'yesk2':'yeskee2'}}">
													@if(empty($level->levelStatus->s))
														₦ 0.0<span
																class="icon icon-down-3"></span>
													@else
														₦ {{(number_format(round(( $level->level->amount)*.33333),2))}}
														<span class="icon icon-up-3"></span>
													@endif
												</div>
											</td>
											
											<td>
												<div class="{{empty($level->levelStatus->k) ?'yesk2':'yeskee2'}}">
													@if(empty($level->levelStatus->k))
														₦ 0.0<span
																class="icon icon-down-3"></span>
													@else
														₦ {{(number_format(round(( $level->level->amount)*.33333),2))}}
														<span class="icon icon-up-3"></span>
													@endif
												</div>
											</td>
											
											<td>
												<div class="{{empty($level->levelStatus->e1) ?'yesk2':'yeskee2'}}">
													@if(empty($level->levelStatus->e1))
														₦ 0.0<span
																class="icon icon-down-3"></span>
													@else
														₦ {{(number_format(round(( $level->level->amount)*.33333),2))}}
														<span class="icon icon-up-3"></span>
													@endif
												</div>
											</td>
											
											<td>
												<div class="{{empty($level->levelStatus->e2) ?'yesk2':'yeskee2'}}">
													@if(empty($level->levelStatus->e2))
														₦ 0.0<span
																class="icon icon-down-3"></span>
													@else
														₦ {{(number_format(round(( $level->level->amount)*.33333),2))}}
														<span class="icon icon-up-3"></span>
													@endif
												</div>
											</td>
										</tr>
									</table>
								</div>
							</div>
						
						</div>
						
						<div class="col-sm-12" style="margin-top: 21px; margin-bottom: 15px;">
							<div class="pull-right"><a class="btn btn-yellow-1"
							                           href="{{url('dashboard/my-request/'.$level->id.'/')}}">Issue
									Tracker
									<span class="icon icon-message"></span></a></div>
						</div>
					</div>
				</div>
			</a>
		@endif
	@endforeach
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
