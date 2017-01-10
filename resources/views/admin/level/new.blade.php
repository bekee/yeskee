@extends('layouts.admin')



@section('title')
	New Level
@stop

@section('heading')
	<div class="page-heading">
		<h1><i class='icon icon-address-book-alt'></i> New Level</h1>
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
		<h1><i class='fa fa-arrows-alt'></i> LEVELS</h1>
	</div>
@stop

@section('top-summary')
@stop
@section('row1')
	<div class="col-lg-6">
		<div class="col-md-12 portlets">
			<div class="widget">
				<div class="widget-header">
					<h2>New Level </h2>
					<div class="additional-btn">
						<a href="#" class="hidden reload"><i class="icon-ccw-1"></i></a>
						<a href="#" class="widget-toggle"><i class="icon-down-open-2"></i></a>
						<a href="#" class="widget-close"><i class="icon-cancel-3"></i></a>
					</div>
				</div>
				<div class="widget-content padding">
					
					{!! Form::open(array('url' => 'admin/level','role'=>'form')) !!}
					
					<div class="form-group">
						<label for="name">Level Name</label>
						
						{!! Form::text('name',null,['class'=>'form-control','id'=>'name','placeholder'=>'Level Name']) !!}
						@if ($errors->has('name'))
							<span class="help-inline">
                              <strong>{{ $errors->first('name') }}</strong>
                              </span>
						@endif
					</div>
					<div class="form-group">
						<label for="name">Level Amount</label>
						
						<div class="input-group">
							<span class="input-group-addon">$</span>
							{!! Form::text('amount',null,['class'=>'form-control','id'=>'name','placeholder'=>'Level Amount']) !!}
							<span class="input-group-addon">.00</span>
						</div>
						@if ($errors->has('amount'))
							<span class="help-inline">
                              <strong>{{ $errors->first('amount') }}</strong>
                              </span>
						@endif
					
					</div>
					<div class="form-group">
						<label for="name">Activated</label>
						
						<div class="input-groupw">
							
							{!! Form::checkbox('active',null,false,['class'=>'form-control','id'=>'active'])  !!}
							
						</div>
						@if ($errors->has('active'))
							<span class="help-inline">
                              <strong>{{ $errors->first('active') }}</strong>
                              </span>
						@endif
					
					</div>
					
					<div class="form-group">
						<div class="row">
							<div class="col-lg-1">
								<label for="name">Bonus</label>
								<div class="input-group2">
									{!! Form::checkbox('discounted',null,false,['class'=>'form-control','id'=>'discounted'])  !!}
									@if ($errors->has('discounted'))
										<span class="help-inline">
                                     <strong>{{ $errors->first('discounted') }}</strong>
                                 </span>
									@endif
								</div>
							</div>
							<div class="col-lg-4">
								<label for="name">Discount Bonus</label>
								<div class="input-group">
									{!! Form::text('discount',null,['class'=>'form-control','id'=>'name','placeholder'=>'Bonus Percentage']) !!}
									<span class="input-group-addon">%</span>
								</div>
								@if ($errors->has('discount'))
									<span class="help-inline">
                                     <strong>{{ $errors->first('discount') }}</strong>
                                 </span>
								@endif
							</div>
							<div class="col-lg-4">
								<label for="name">Users</label>
								<div class="input-group1">
									{{ Form::select('set_users', [
						   'User Type' => [''=>'Select-One','new'=>'New User','all'=>'All Users'] ,
						   ],null,['class'=>'form-control selectpicker','id'=>'set_users']
						) }}
								</div>
								@if ($errors->has('set_users'))
									<span class="help-inline">
                                     <strong>{{ $errors->first('set_users') }}</strong>
                                 </span>
								@endif
							</div>
						</div>
					</div>
					<div class="form-group">
						<div class="row">
							<div class="col-lg-2">
								<label for="referral">Referral Bonus</label>
								<div class="input-group1">
									{!! Form::checkbox('referral',null,false,['class'=>'form-control','id'=>'referral'])  !!}
									@if ($errors->has('referral'))
										<span class="help-inline">
                                     <strong>{{ $errors->first('referral') }}</strong>
                                 </span>
									@endif
								</div>
							</div>
							<div class="col-lg-4">
								<label for="name">Discount Bonus</label>
								<div class="input-group">
									{!! Form::text('referred_discount',null,['class'=>'form-control','id'=>'name','placeholder'=>'Referral Bonus Percentage']) !!}
									<span class="input-group-addon">%</span>
								</div>
								@if ($errors->has('referred_discount'))
									<span class="help-inline">
                                     <strong>{{ $errors->first('referred_discount') }}</strong>
                                 </span>
								@endif
							</div>
						</div>
					</div>
					
					<div class="row">
						<div class="col-sm-6">
							<div class="form-group">
								
								{{ Form::submit('Save',['class'=>'btn btn-primary md-trigger']) }}
							
							</div>
						</div>
					</div>
					{!! Form::close() !!}
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
	<script src="{{URL::asset('loggedin/assets/js/assessment.js')}}"></script>
@stop
