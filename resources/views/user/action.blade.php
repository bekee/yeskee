@extends('layouts.user')



@section('title')
	Proceed
@stop

@section('heading')
	<div class="page-heading">
		<h1><i class='icon icon-address-book-alt'></i> Checkout</h1>
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
		<h1><i class='fa fa-arrows-alt'></i> Profile</h1>
	</div>
@stop

@section('top-summary')
@stop
@section('heading_right')

@stop
@section('row1')
	<div class="col-lg-12">
		<div class="col-md-12 portlets">
			<div class="widget">
				<div class="widget-header">
					<h2>My Profile </h2>
					<div class="additional-btn">
						<a href="#" class="hidden reload"><i class="icon-ccw-1"></i></a>
						<a href="#" class="widget-toggle"><i class="icon-down-open-2"></i></a>
						<a href="#" class="widget-close"><i class="icon-cancel-3"></i></a>
					</div>
				</div>
				<div class="widget-content padding">
					{!! Form::open(array('route' => 'selected_level','role'=>'form','class'=>'form-horizontal','files' => true)) !!}
					<input type="hidden" name="selected" value="{{$level->id}}">
					<div class="col-sm-6">
						<h4>Level Details</h4>
						<legend></legend>
						<div class="col-sm-12">
							<div class="col-sm-3"><strong>Selected Level: </strong></div>
							<div class="col-sm-5"><h4 style="margin-top: 0px;">{{$level->name}}</h4></div>
						</div>
						<div class="col-sm-12">
							<div class="col-sm-3"><strong>Level Amount: </strong></div>
							<div class="col-sm-5"><h4 style="margin-top: 0px;">₦ {{$level->amount}}</h4></div>
						</div>
						@if(($level->discounted == true) && ($level->set_users == 'new'))
							<div class="col-sm-12">
								<div class="col-sm-3"><strong>Bonus per entry: </strong></div>
								<div class="col-sm-5"><h4 style="margin-top: 0px;">
										₦ {{round(($level->discount*$level->amount)/100)}}</h4></div>
							</div>
						@endif
						<p style="color: green; padding-top: 185px;"><br/><br/>
							<strong>NOTE</strong> The good news here is that, when you register and find it difficult
							introducing two people or the system is unable to queue you up with somebody within the the
							space of two weeks, you can humbly apply for a refund of money or send us email –
							ecn@yeskeinterconnect.com
							<br/>This is possible because we operate a single account and a registered platform to avoid
							delay and issues in payment. Invest your money and see how things turns swiftly with ease.
							We are reliable and trusted
						</p>
					
					</div>
					<div class="col-sm-6">
						<h4>Payment Details</h4>
						<legend></legend>
						<div class="col-sm-12">
							<div class="col-sm-3"><strong>Bank: </strong></div>
							<div class="col-sm-5"><h4 style="margin-top: 0px;"> DIAMOND BANK</h4>
							</div>
						</div>
						<div class="col-sm-12">
							<div class="col-sm-3"><strong>Account Name: </strong></div>
							<div class="col-sm-5"><h4 style="margin-top: 0px;"> YESKE INTERCONNECT</h4>
							</div>
						</div>
						<div class="col-sm-12">
							<div class="col-sm-3"><strong>Account Number: </strong></div>
							<div class="col-sm-5"><h4 style="margin-top: 0px;">0086072880</h4>
							</div>
						</div>
						<div class="col-sm-12">
							<div class="col-sm-3"><strong>Pay: </strong></div>
							<div class="col-sm-5"><h4 style="margin-top: 0px;">₦ {{$level->amount}}</h4></div>
						</div>
						<div class="col-sm-12">
							<div class="col-sm-3"><strong>Payment Type: </strong></div>
							<div class="col-sm-5">
								{{ Form::select('payment_type', [
											   'Payment Type' => [''=>'Select-One','bank-transfer'=>'Bank Transfer','bank-deposit'=>'Bank Deposit'] ,
											   ],null,['class'=>'form-control selectpicker']
											) }}
								@if ($errors->has('payment_type'))
									<span class="help-block">
                                <strong>{{ $errors->first('payment_type') }}</strong>
                            </span>
								@endif
							</div>
						</div>
						<div class="col-sm-12">
							<div class="col-sm-3"><strong>Upload Teller: </strong></div>
							<div class="col-sm-5">
								<label>{!! Form::file('teller',['class'=>'btn btn-default','title'=>'Upload Logo','id'=>'imagep']) !!}</label>
								@if ($errors->has('teller'))
									<span class="help-block">
                                        <strong>{{ $errors->first('teller') }}</strong>
                                    </span>
								@endif
							</div>
						</div>
						<div class="col-sm-4 pull-right">
							<button class="btn btn-sm btn-primary btn-block" type="submit">SUBMIT</button>
						</div>
					</div>
				</div>
				{!! Form::close() !!}
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
