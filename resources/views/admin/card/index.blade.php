@extends('layouts.admin')



@section('title')
	Recharge Cards
@stop

@section('heading')
	<div class="page-heading">
		<h1><i class='icon icon-address-book-alt'></i> Recharge Cards</h1>
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

@section('top-summary')
@stop
@section('row1')
	<div class="col-lg-6">
		<div class="col-md-12 portlets">
			<div class="widget">
				<div class="widget-header">
					<h2>New Recharge Cards </h2>
					<div class="additional-btn">
						<a href="#" class="hidden reload"><i class="icon-ccw-1"></i></a>
						<a href="#" class="widget-toggle"><i class="icon-down-open-2"></i></a>
						<a href="#" class="widget-close"><i class="icon-cancel-3"></i></a>
					</div>
				</div>
				<div class="widget-content padding">
					
					{!! Form::open(array('url' => 'admin/recharge_card','role'=>'form')) !!}
					
					<div class="form-group">
						<label for="name">Recharge Cards Number</label>
						
						{!! Form::text('number',null,['class'=>'form-control','id'=>'name','placeholder'=>'Card Number']) !!}
						@if ($errors->has('number'))
							<span class="help-inline">
                              <strong>{{ $errors->first('number') }}</strong>
                              </span>
						@endif
					</div>
					<div class="form-group">
						<label for="country_id">Network</label>
						
						{{ Form::select('network', [
						   'Network' => [''=>'Select-One','airtel'=>'Airtel','etisalat'=>'Etisalat','mtn'=>'MTN','glo'=>'GLO'] ,
						   ],null,['class'=>'form-control selectpicker','id'=>'network']
						) }}
						@if ($errors->has('network'))
							<span class="help-inline">
                                        <strong>{{ $errors->first('network') }}</strong>
                                    </span>
						@endif
					</div>
					<div class="form-group">
						<label for="name">Display Message</label>
						
						{!! Form::text('message',null,['class'=>'form-control','id'=>'name','placeholder'=>'Display Message']) !!}
						@if ($errors->has('message'))
							<span class="help-inline">
                              <strong>{{ $errors->first('message') }}</strong>
                              </span>
						@endif
					</div>
					<div class="form-group">
						<label for="name">Published</label>
						{!! Form::checkbox('active',null,false,['class'=>'form-control','id'=>'active'])  !!}
						@if ($errors->has('active'))
							<span class="help-inline">
                        <strong>{{ $errors->first('active') }}</strong>
                    </span>
						@endif
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
	
	<div class="col-lg-6">
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
				
				<div class="table-responsive">
					<table data-sortable class="table table-hover table-striped">
						<thead>
						<tr>
							<th>No</th>
							<th>Card Number</th>
							<th>Network</th>
							<th>Published</th>
							<th>Used</th>
							<th data-sortable="false">Action</th>
						</tr>
						</thead>
						
						<tbody>
						<tr>
							@if($cards->isEmpty())
								<td colspan="8"><p class="text-center">No Recharge Card Added</p></td>
							@endif
						</tr>
						@foreach($cards as $key => $card )
							<tr>
								<td>{{$key +1}}</td>
								<td><strong>{{$card->number}}</strong></td>
								<td>{{$card->network}}</td>
								<td>{!! $card->active == 1 ? "<span class='label label-success'>YES</span>": "<span class='label label-danger'>NO</span>"!!} </td>
								<td>{!! $card->used == 1 ? "<span class='label label-success'>YES</span>": "<span class='label label-danger'>NO</span>"!!} </td>
								<td>
									<div class="btn-group btn-group-xs">
										@if($card->active == 1)
											<a href='{{url(Auth::user()->route."/d_recharge_card/".$card->id)}}'
											   data-toggle="tooltip" title="Deactivate Card"
											   class="btn btn-success"><i
														class="fa fa-power-off"></i></a>
										@else
											<a href='{{url(Auth::user()->route."/a_recharge_card/".$card->id)}}'
											   data-toggle="tooltip" title="Activate"
											   class="btn btn-danger"><i
														class="fa fa-power-off"></i></a>
										@endif
										<a href='{{url(Auth::user()->route."/recharge_card/$card->id/edit")}}'
										   data-toggle="tooltip" title="Edit"
										   class="btn btn-default"><i
													class="fa fa-edit"></i></a>
										<a href='{{url(Auth::user()->route."/r_recharge_card/$card->id")}}'
										   data-toggle="tooltip" title="Delete"
										   class="btn btn-danger"><i class="fa fa-remove"></i></a>
									</div>
								</td>
							</tr>
						@endforeach
						</tbody>
					</table>
				</div>
				
				<div class="data-table-toolbar">
					<ul class="pagination">
						{{$cards->links()}}
					</ul>
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
