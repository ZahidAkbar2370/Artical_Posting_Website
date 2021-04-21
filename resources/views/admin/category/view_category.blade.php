@extends('admin/admin_layout')
@section('admin_content')

<div class="row-fluid sortable">		
		<div class="box span12">

			<a href="{{URL::to('create-category')}}"><button>Add Category</button></a>

			<div class="box-header" data-original-title>
				<h2><i class="halflings-icon user"></i><span class="break"></span>All Categorys</h2>
			</div>

			<div class="box-content">
				<table class="table table-striped table-bordered bootstrap-datatable datatable">
					<thead>
						<tr>
							<th>ID</th>
							<th>Category Name</th>
							<th>Status</th>
							<th>Action</th>
						</tr>
					</thead>

				<tbody>
					@if(!empty($categorys))
					@foreach($categorys as $key=> $category)
					<tr>
						<td><?php echo $category->id; ?></td>
						<td><?php echo $category->category_name; ?></td>
						@if($category->status == "on")
							<td>Active</td>
						@else
							<td>Unactive</td>
						@endif
						<td>
							<a class="btn btn-info" href="edit-category/{{$category->id}}">
							<i class="halflings-icon white edit"></i> 
							</a>
							<a class="btn btn-danger" href="delete-category/{{$category->id}}">
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