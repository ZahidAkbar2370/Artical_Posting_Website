@extends('admin/admin_layout')
@section('admin_content')

<div class="row-fluid sortable">		
		<div class="box span12">

			<a href="{{URL::to('create-artical')}}"><button>Add Artial</button></a>

			<div class="box-header" data-original-title>
				<h2><i class="halflings-icon user"></i><span class="break"></span>All Articals</h2>
			</div>

			<div class="box-content">
				<table class="table table-striped table-bordered bootstrap-datatable datatable">
					<thead>
						<tr>
							<th>ID</th>
							<th>Title</th>
							<th>Category Name</th>
							<th>Description</th>
							<th>Image</th>
							<th>Video Link</th>
							<th>Post Date</th>
							<th>Post Time</th>
							<th>Status</th>
							<th>Action</th>
						</tr>
					</thead>

				<tbody>
					@if(!empty($articals))
					@foreach($articals as $key=> $artical)
					<tr>
						<td>{{$artical->id}}</td>
						<td>{{$artical->title}}</td>
						<td>{{$artical->category}}</td>
						<td>{{$artical->description}}</td>
						<td>{{$artical->image}}</td>
						<td>{{$artical->video_link}}</td>
						<td>{{$artical->post_date}}</td>
						<td>{{$artical->post_time}}</td>
						<td>{{$artical->status}}</td>
						<td>
							<a class="btn btn-info" href="edit-artical/{{$artical->id}}">
							<i class="halflings-icon white edit"></i> 
							</a>
							<a class="btn btn-danger" href="delete-artical/{{$artical->id}}">
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