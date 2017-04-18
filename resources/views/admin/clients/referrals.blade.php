@extends('layouts.admin')



@section('title')
	All Referrals
@stop

@section('heading')
	<div class="page-heading">
		<h3><i class='icon icon-address-book-alt'></i> All Referrals</h3>
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
							<th>User Name</th>
							<th>User Contact</th>
							<th>Referral By</th>
							<th>Referral Contact</th>
						</tr>
						</thead>
						
						<tbody>
						<tr>
							@if($clients->isEmpty())
								<td colspan="11"><p class="text-center">No Referrals Found</p></td>
							@endif
						</tr>
						@foreach($clients as $key => $client )
							<tr>
								<td>{{$key +1}}</td>
							
								<td>{{$client->user->user->first_name}} {{$client->user->user->last_name}}</td>
								
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