@extends('admin/admin_layout')
@section('admin_content')

<div class="row-fluid sortable">		
		<div class="box span12">

			<div class="box-header" data-original-title>
				<h2><i class="halflings-icon user"></i><span class="break"></span>All Messages</h2>
			</div>

			<div class="box-content">
				<table class="table table-striped table-bordered bootstrap-datatable datatable">
					<thead>
						<tr>
							<th>ID</th>
							<th>Name</th>
							<th>Email</th>
							<th>Message</th>
							<th>Date</th>
							<th>Status</th>
							<th>Action</th>
						</tr>
					</thead>

				<tbody>
					@if(!empty($messages))
					@foreach($messages as $key=> $message)
					<tr>
						<td>{{$message->id}}</td>
						<td>{{$message->name}}</td>
						<td>{{$message->email}}</td>
						<td>{{$message->message}}</td>
						<td>{{$message->message_date}}</td>
						<td>{{$message->status}}</td>
						<td>
							<a class="btn btn-danger" href="delete-message/{{$message->id}}">
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