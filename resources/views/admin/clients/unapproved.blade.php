@extends('layouts.admin')



@section('title')
	Unapproved Clients
@stop

@section('heading')
	<div class="page-heading">
		<h3><i class='icon icon-address-book-alt'></i> Unapproved Clients</h3>
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
							<th>Email Confirmed</th>
							<th>Registration Date</th>
							<th data-sortable="false">Action</th>
						</tr>
						</thead>
						
						<tbody>
						<tr>
							@if($clients->isEmpty())
								<td colspan="11"><p class="text-center">No Pending Clients Found</p></td>
							@endif
						</tr>
						@foreach($clients as $key => $client )
							<tr>
								<td>{{$key +1}}</td>
								<td><strong>{{$client->user->first_name}}</strong></td>
								<td>{{$client->user->last_name}}</td>
								<td>{{$client->user->other_name}}</td>
								<td>{!!  $client->email_confirm== 1 ? "<span class='btn btn-success btn-sm'>Yes</span>":'<span class="btn btn-danger btn-sm">No</span>'!!}</td>
								<td>{!!  \Carbon\Carbon::parse($client->user->created_at)->diffForHumans() !!}</td>
								<td>
									<div class="btn-group btn-group-xs">
										<a href='{{url(Auth::user()->route."/a_approve_client/".$client->id)}}'
										   data-toggle="tooltip" title="Approve This Client"
										   class="btn btn-primary"><i
													class="fa fa-lock"></i></a>
										<div class="btn-group btn-group-xs">
											<a href='{{url(Auth::user()->route."/a_approve_client/".$client->id)}}'
											   data-toggle="tooltip" title="Cancel This Client"
											   class="btn btn-danger"><i
														class="fa fa-remove"></i></a>
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