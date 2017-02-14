@extends('layouts.admin')



@section('title')
	Suspended Clients
@stop

@section('heading')
	<div class="page-heading">
		<h3><i class='icon icon-address-book-alt'></i> Suspended Clients</h3>
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
							<th>First Name</th>
							<th>Last Name</th>
							<th>Other Name</th>
							<th>Phone</th>
							<th data-sortable="false">Action</th>
						</tr>
						</thead>
						
						<tbody>
						<tr>
							@if($clients->isEmpty())
								<td colspan="11"><p class="text-center">No Suspended Clients Found</p></td>
							@endif
						</tr>
						@foreach($clients as $key => $client )
							<tr>
								<td>{{$key +1}}</td>
								<td><strong>{{$client->user->first_name}}</strong></td>
								<td>{{$client->user->last_name}}</td>
								<td>{{$client->user->other_name}}</td>
								<td>{{$client->user->phone}}</td>
								<td>
									<div class="btn-group btn-group-xs">
										<a href='{{url(Auth::user()->route."/a_unsuspend_client/".$client->id)}}'
										   data-toggle="tooltip" title="Return This Client"
										   class="btn btn-primary"><i
													class="fa fa-lock"></i></a>
									</div>
								</td>
							</tr>
						@endforeach
						</tbody>
					</table>
				</div>
				
				<div class="data-table-toolbar">
					<ul class="pagination">
						{{$clients->links()}}
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