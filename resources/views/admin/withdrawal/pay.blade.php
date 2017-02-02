@extends('layouts.admin')



@section('title')
	Withdrawals Details
@stop

@section('heading')
	<div class="page-heading">
		<h1><i class='icon icon-window'></i> Withdrawals</h1>
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
		<h1><i class='fa fa-arrows-alt'></i> Withdrawals Details</h1>
	</div>
@stop

@section('top-summary')
@stop
@section('heading_right')

@stop
@section('row1')
	<div class="col-md-12 portlets">
		<div class="widget">
			
			<div class="widget-content padding">
				
				<div class="row">
					<div class="col-md-12">
						<div class="widget">
							
							<div class="widget-content">
								<h3 class="text-center ">Withdrawal Details</h3>
								{!! Form::open(array('url' => ['admin/withdrawal_pay',$withdrawal->id],'role'=>'form','class'=>'form-horizontal')) !!}
								<div class="col-sm-12">
									
									<legend></legend>
									<div class="col-sm-12">
										<div class="col-sm-2"><h5><strong>Wallet: </strong></h5>
										</div>
										<div class="col-sm-5"><h5>
												₦ {{number_format($withdrawal->user->mywallet->sum('amount'),2)}} </h5>
										</div>
									</div>
									<div class="col-sm-12">
										<div class="col-sm-2"><h5><strong>Withdrawal Amount: </strong></h5>
										</div>
										<div class="col-sm-5"><h5>
												₦ {{number_format(round($withdrawal->amount),2)}} </h5>
											{{Form::hidden('amount',round($withdrawal->amount))}}
										</div>
									</div>
									<div class="col-sm-12">
										<div class="col-sm-2"><h5><strong>Client: </strong></h5></div>
										<div class="col-sm-5">
											<h5>{{$withdrawal->user->user->first_name}} {{$withdrawal->user->user->last_name}}</h5>
										</div>
									</div>
									<div class="col-sm-12">
										<div class="col-sm-2"><h5><strong>Account Number: </strong></h5></div>
										<div class="col-sm-5"><h5>{{$withdrawal->user->userBank->acc_number}}</h5></div>
									</div>
									<div class="col-sm-12">
										<div class="col-sm-2"><h5><strong>Account Name: </strong></h5></div>
										<div class="col-sm-5"><h5>{{$withdrawal->user->userBank->acc_name}}</h5></div>
									</div>
									<div class="col-sm-12">
										<div class="col-sm-2"><h5><strong>Bank: </strong></h5></div>
										<div class="col-sm-5"><h5>{{$withdrawal->user->userBank->bank->name}}</h5></div>
									</div>
									
									<div class="col-sm-12">
										<div class="form-group">
											<label class="control-label"><strong>Comment: </strong></label>
											{{Form::textarea('comment',null,['class'=>'form-control'])}}
											@if ($errors->has('comment'))
												<span class="help-block">
                                        <strong>{{ $errors->first('comment') }}</strong>
                                    </span>
											@endif
										</div>
									</div>
								</div>
								<div class="col-sm-4 pull-right">
									
									<div class="col-sm-6">
										<button class="btn btn-sm btn-primary btn-block" type="submit">APPROVE
										</button>
									</div>
								</div>
							</div>
							{!! Form::close() !!}
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
