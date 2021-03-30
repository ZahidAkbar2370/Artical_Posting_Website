@extends('admin/admin_layout')
@section('admin_content')

<div class="row-fluid sortable">		
		<div class="box span12">

			<a href="{{URL::to('create-newsletter')}}"><button>Add Newsletter</button></a>

			<div class="box-header" data-original-title>
				<h2><i class="halflings-icon user"></i><span class="break"></span>All Newsletters</h2>
			</div>

			<div class="box-content">
				<table class="table table-striped table-bordered bootstrap-datatable datatable">
					<thead>
						<tr>
							<th>ID</th>
							<th>Email</th>
							<th>Subcribe Date</th>
							<th>Status</th>
							<th>Action</th>
						</tr>
					</thead>

				<tbody>
					@if(!empty($newsletters))
					@foreach($newsletters as $key=> $newsletter)
					<tr>
						<td>{{$newsletter->id}}</td>
						<td>{{$newsletter->email}}</td>
						<td>{{$newsletter->subcribe_date}}</td>
						<td>{{$newsletter->status}}</td>
						<td>
							
							<a class="btn btn-danger" href="delete-newsletter/{{$newsletter->id}}">
							<i class="halflings-icon white trash"></i> 
							</a>
						</td>
					</tr>
		@endforeach
		@endif
		
		</tbody>
	</table>
</div>

@endsection