@extends('layouts.admin')



@section('title')
	Message
@stop

@section('heading')
	<div class="page-heading">
		<h1><i class='icon icon-address-book-alt'></i> Message</h1>
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
					<h2>New Message </h2>
					<div class="additional-btn">
						<a href="#" class="hidden reload"><i class="icon-ccw-1"></i></a>
						<a href="#" class="widget-toggle"><i class="icon-down-open-2"></i></a>
						<a href="#" class="widget-close"><i class="icon-cancel-3"></i></a>
					</div>
				</div>
				<div class="widget-content padding">
					
					{!! Form::model($message,array('method'=>'PATCH','url' => ['admin/message',$message->id],'role'=>'form')) !!}
					<div class="form-group">
						<label for="name">Title</label>
						
						{!! Form::text('title',null,['class'=>'form-control','id'=>'title','placeholder'=>'Message Title']) !!}
						@if ($errors->has('title'))
							<span class="help-inline">
                              <strong>{{ $errors->first('title') }}</strong>
                              </span>
						@endif
					</div>
					<div class="form-group">
						<label for="name">Message</label>
						@if ($errors->has('message'))
							<span class="help-inline">
                              <strong>{{ $errors->first('message') }}</strong>
                              </span>
						@endif
						{!! Form::textarea('message',null,['class'=>'form-control summernote','id'=>'name','placeholder'=>'Type Message']) !!}
					
					</div>
					
					<div class="form-group">
						<label for="name">Published</label>
						{!! Form::checkbox('published',null,$message->published ==1?true:false,['class'=>'form-control','id'=>'published'])  !!}
					</div>
					
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
							<th>Message</th>
							<th>Published</th>
							<th data-sortable="false">Action</th>
						</tr>
						</thead>
						
						<tbody>
						<tr>
							@if($messages->isEmpty())
								<td colspan="8"><p class="text-center">No Message Added</p></td>
							@endif
						</tr>
						@foreach($messages as $key => $message )
							<tr>
								<td>{{$key +1}}</td>
								<td>{!! \Illuminate\Support\Str::limit( $message->message,55,'...')!!}</td>
								<td>{!! $message->published == 1 ? "<span class='label label-success'>YES</span>": "<span class='label label-danger'>NO</span>"!!} </td>
								<td>
									<div class="btn-group btn-group-xs">
										@if($message->published == 1)
											<a href='{{url(Auth::user()->route."/d_message/".$message->id)}}'
											   data-toggle="tooltip" title="Unpublish Message"
											   class="btn btn-success"><i
														class="fa fa-unlock"></i></a>
										@else
											<a href='{{url(Auth::user()->route."/a_message/".$message->id)}}'
											   data-toggle="tooltip" title="Publish Message"
											   class="btn btn-danger"><i
														class="fa fa-lock"></i></a>
										@endif
										<a href='{{url(Auth::user()->route."/message/$message->id/edit")}}'
										   data-toggle="tooltip" title="Edit Message"
										   class="btn btn-default"><i
													class="fa fa-edit"></i></a>
										<a href='{{url(Auth::user()->route."/r_message/$message->id")}}'
										   data-toggle="tooltip" title="Delete Message"
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
						{{$messages->links()}}
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
