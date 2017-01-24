@extends('layouts.admin')



@section('title')
	Deposits
@stop

@section('heading')
	<div class="page-heading">
		<h3><i class='icon icon-address-book-alt'></i> Deposits</h3>
	</div>
@stop


@section('top-summary')
@stop
@section('row1')
	<div class="col-lg-12">
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
							<th>Name</th>
							<th>Account Name</th>
							<th>Level</th>
							<th>Payment Date</th>
							<th>Payment Type</th>
							<th>Status</th>
							<th data-sortable="false">Action</th>
						</tr>
						</thead>
						
						<tbody>
						<tr>
							@if($deposits->isEmpty())
								<td colspan="11"><p class="text-center">No Payments Found</p></td>
							@endif
						</tr>
						@foreach($deposits as $key => $deposit )
							<tr>
								<td>{{$key +1}}</td>
								<td>
									<strong>{{$deposit->user->user->first_name}} {{$deposit->user->user->last_name}}</strong>
								</td>
								<td>{{$deposit->user->userBank->acc_name}}</td>
								<td>{{$deposit->userLevel->level->name}}</td>
								<td>{{ \Carbon\Carbon::parse($deposit->user->created_at)->diffForHumans()}}</td>
								<td>{{\Illuminate\Support\Str::upper($deposit->type)}}</td>
								<td>{{\Illuminate\Support\Str::upper($deposit->status)}}</td>
								<td>
									<div class="btn-group btn-group-xs">
										<a href='{{url(Auth::user()->route."/a_view_payment_detail/".$deposit->id)}}'
										   data-toggle="tooltip" title="View Payment Details"
										   class="btn btn-primary">View</a>
									</div>
									
								</td>
							</tr>
						@endforeach
						</tbody>
					</table>
				</div>
				
				<div class="data-table-toolbar">
					<ul class="pagination">
						{{$deposits->links()}}
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