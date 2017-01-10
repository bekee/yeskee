@extends('layouts.user')



@section('title')
	My Profile
@stop

@section('heading')
	<div class="page-heading">
		<h1><i class='icon icon-address-book-alt'></i> My Profile</h1>
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
					
					<div class="form-group">
						
						<div class="col-sm-12">
							<div class="col-sm-1"><strong>First Name: </strong></div>
							<div class="col-sm-5"><h4 style="margin-top: 0px;">{{$profile->first_name}}</h4></div>
						</div>
						<div class="col-sm-12">
							<div class="col-sm-1"><strong>Last Name: </strong></div>
							<div class="col-sm-5"><h4 style="margin-top: 0px;"> {{$profile->last_name}}</h4></div>
						</div>
						<div class="col-sm-12">
							<div class="col-sm-1"><strong>Other Name: </strong></div>
							<div class="col-sm-5"><h4
										style="margin-top: 0px;"> {{$profile->other_name?$profile->other_name:'Nil'}}</h4>
							</div>
						</div>
						<div class="col-sm-12">
							<div class="col-sm-1"><strong>Gender: </strong></div>
							<div class="col-sm-5"><h4
										style="margin-top: 0px;"> {{\Illuminate\Support\Str::ucfirst($profile->sex)}}</h4>
							</div>
						</div>
						<div class="col-sm-12">
							<div class="col-sm-1"><strong>Email: </strong></div>
							<div class="col-sm-5"><h4 style="margin-top: 0px;"> {{$profile->user->email}}</h4></div>
						</div>
						<br/>
						<h4>Account Detail</h4>
						<legend></legend>
						<div class="col-sm-12">
							<div class="col-sm-2"><strong>Bank: </strong></div>
							<div class="col-sm-5"><h4
										style="margin-top: 0px;"> {{empty($profile->user->userBank) ?'Nil':$profile->user->userBank->bank->name}}</h4>
							</div>
						</div>
						<div class="col-sm-12">
							<div class="col-sm-2"><strong>Account Number: </strong></div>
							<div class="col-sm-5"><h4
										style="margin-top: 0px;"> {{empty($profile->user->userBank) ?'Nil':$profile->user->userBank->acc_name}}</h4>
							</div>
						</div>
						<div class="col-sm-12">
							<div class="col-sm-2"><strong>Account Name: </strong></div>
							<div class="col-sm-5"><h4
										style="margin-top: 0px;"> {{empty($profile->user->userBank) ?'Nil':$profile->user->userBank->acc_number}}</h4>
							</div>
						</div>
						<h4>Referral Detail</h4>
						<legend></legend>
						<div class="col-sm-12">
							<div class="col-sm-2"><strong>Referral Code: </strong></div>
							<div class="col-sm-5"><h4
										style="margin-top: 0px;"> {{empty($profile->user->userBank) ?'Nil':$profile->user->userBank->acc_name}}</h4>
							</div>
						</div>
						<div class="col-sm-12">
							<div class="col-sm-2"><strong>Referral Link: </strong></div>
							<div class="col-sm-5"><h4
										style="margin-top: 0px;"> {!! ($profile->user->approved  == false) ?'You have not paid for any level yet':"<a href='".$profile->url."'>".$profile->url."</a>"!!}</h4>
							</div>
						
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
@stop

@section('row2')
	@if(empty($profile->user->userBank))
	<div class="col-lg-12">
		<div class="col-md-12 portlets">
			<div class="widget">
				<div class="widget-header">
					<h2>Update Profile </h2>
					<div class="additional-btn">
						<a href="#" class="hidden reload"><i class="icon-ccw-1"></i></a>
						<a href="#" class="widget-toggle"><i class="icon-down-open-2"></i></a>
						<a href="#" class="widget-close"><i class="icon-cancel-3"></i></a>
					</div>
				</div>
				<div class="widget-content padding">
					
					{!! Form::model($profile,array('method'=>'PATCH','url' => ['dashboard/profile',$profile->id],'role'=>'form')) !!}
					<div class="form-group">
						<label for="name">Other Name</label>
						
						{!! Form::text('other_name',null,['class'=>'form-control','id'=>'name','placeholder'=>'Other Name']) !!}
						
						@if ($errors->has('other_name'))
							<span class="help-inline">
                              <strong>{{ $errors->first('other_name') }}</strong>
                              </span>
						@endif
					</div>
					<h4>Account Details</h4>
					<legend></legend>
					<div class="form-group">
						<label for="name">Account Number</label>
						{!! Form::text('acc_number',null,['class'=>'form-control','id'=>'name','placeholder'=>'Account Number']) !!}
						@if ($errors->has('acc_number'))
							<span class="help-inline">
                              <strong>{{ $errors->first('acc_number') }}</strong>
                              </span>
						@endif
					
					</div>
					<div class="form-group">
						<label for="name">Account Name</label>
						{!! Form::text('acc_name',null,['class'=>'form-control','id'=>'name','placeholder'=>'Account Name']) !!}
						@if ($errors->has('acc_name'))
							<span class="help-inline">
                              <strong>{{ $errors->first('acc_name') }}</strong>
                              </span>
						@endif
					
					</div>
							<div class="form-group">
								{{ Form::select('bank_id', [
											   'Bank' => [''=>'Select-One'] + $banks->toArray(),
											   ],null,['class'=>'form-control selectpicker']
											) }}
								@if ($errors->has('bank_id'))
									<span class="help-block">
		                                <strong>{{ $errors->first('bank_id') }}</strong>
		                            </span>
								@endif
							</div>
					<p class="alert-danger">Ensure that information you are updating are current as you will not be able to change this again</p>
					<div class="row">
						<div class="col-sm-6">
							<div class="form-group">
								
								{{ Form::submit('Update',['class'=>'btn btn-primary md-trigger']) }}
							
							</div>
						</div>
					</div>
					
					{!! Form::close() !!}
				
				
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
