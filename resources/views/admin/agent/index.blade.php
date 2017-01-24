@extends('layouts.admin')



@section('title')
	Agents
@stop

@section('heading')
	<div class="page-heading">
		<h1><i class='icon icon-address-book-alt'></i> Agents</h1>
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
							<th>Agent Code</th>
							<th>Url</th>
							<th>Total Referrals</th>
							<th>Active</th>
							<th>Block</th>
							<th>Show</th>
							<th data-sortable="false">Action</th>
						</tr>
						</thead>
						
						<tbody>
						<tr>
							@if($agents->isEmpty())
								<td colspan="11"><p class="text-center">No Agent found</p></td>
							@endif
						</tr>
						@foreach($agents as $key => $agent )
							<tr>
								<td>{{$key +1}}</td>
								<td>{{$agent->first_name}}</td>
								<td>{{$agent->last_name}}</td>
								<td>{{$agent->other_name}}</td>
								<td>{{$agent->code}}</td>
								<td>{{$agent->url}}</td>
								<td class="text-center">{{$agent->referral->count()}}</td>
								<td>{{$agent->user->active ?"Yes":"No" }}</td>
								<td>{{$agent->user->block ?"Yes":"No" }}</td>
								<td><a href='{{url("admin/agents/$agent->id")}}'><span class="fa fa-eye"></span></a>
								</td>
								<td>
									<div class="btn-group btn-group-xs">
										@if($agent->block == 0)
											<a href='{{url(Auth::user()->route."/b_agent/".$agent->id)}}'
											   data-toggle="tooltip" title="Block Agent"
											   class="btn btn-success"><i
														class="fa fa-unlock"></i></a>
										@else
											<a href='{{url(Auth::user()->route."/unb_agent/".$agent->id)}}'
											   data-toggle="tooltip" title="Unblock Agent"
											   class="btn btn-danger"><i
														class="fa fa-lock"></i></a>
										@endif
										@if($agent->suspend == 1)
											<a href='{{url(Auth::user()->route."/uns_agent/$agent->id")}}'
											   data-toggle="tooltip" title="UnSuspend agent"
											   class="btn btn-default"><i
														class="fa fa-ban"></i></a>
										@else
											<a href='{{url(Auth::user()->route."/s_agent/$agent->id")}}'
											   data-toggle="tooltip" title="Suspend agent"
											   class="btn btn-default"><i
														class="fa fa-circle-o-notch"></i></a>
										@endif
									</div>
								</td>
							</tr>
						@endforeach
						</tbody>
					</table>
				</div>
				
				<div class="data-table-toolbar">
					<ul class="pagination">
						{{$agents->links()}}
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