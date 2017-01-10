@extends('layouts.admin')



@section('title')
	Banks
@stop

@section('heading')
	<div class="page-heading">
		<h1><i class='icon icon-address-book-alt'></i> Banks</h1>
	</div>
@stop


@section('top-summary')
@stop
@section('row1')
	<div class="col-lg-6">
		<div class="col-md-12 portlets">
			<div class="widget">
				<div class="widget-header">
					<h2>Edit Bank </h2>
					<div class="additional-btn">
						<a href="#" class="hidden reload"><i class="icon-ccw-1"></i></a>
						<a href="#" class="widget-toggle"><i class="icon-down-open-2"></i></a>
						<a href="#" class="widget-close"><i class="icon-cancel-3"></i></a>
					</div>
				</div>
				<div class="widget-content padding">
					
					{!! Form::model($bank,array('method'=>'PATCH','url' => ['admin/bank',$bank->id],'role'=>'form')) !!}
					
					<div class="form-group">
						<label for="name">Bank Name</label>
						
						{!! Form::text('name',null,['class'=>'form-control','id'=>'name','placeholder'=>'New Bank']) !!}
						@if ($errors->has('name'))
							<span class="help-inline">
                        <strong>{{ $errors->first('name') }}</strong>
                    </span>
						@endif
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
							<th>Bank Name</th>
							<th data-sortable="false">Action</th>
						</tr>
						</thead>
						
						<tbody>
						<tr>
							@if($banks->isEmpty())
								<td colspan="8"><p class="text-center">No Bank found</p></td>
							@endif
						</tr>
						@foreach($banks as $key => $bank )
							<tr>
								<td>{{$key +1}}</td>
								<td><strong>{{$bank->name}}</strong></td>
								<td>
									<div class="btn-group btn-group-xs">
										<a href="{{url('admin/r_bank',['id'=>$bank->id])}}" data-toggle="tooltip"
										   title="Delete" class="btn btn-danger"><i class="fa fa-power-off"></i></a>
										<a href='{{url("admin/bank/$bank->id/edit")}}' data-toggle="tooltip"
										   title="Edit" class="btn btn-default"><i class="fa fa-edit"></i></a>
									</div>
								</td>
							</tr>
						@endforeach
						</tbody>
					</table>
				</div>
				
				<div class="data-table-toolbar">
					<ul class="pagination">
						{{$banks->links()}}
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
