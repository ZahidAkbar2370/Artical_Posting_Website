@extends('admin/admin_layout')
@section('admin_content')

<div class="row-fluid sortable">		
	<div class="box span12">
		<div class="box-header" data-original-title>
			<h2><i class="halflings-icon user"></i><span class="break"></span>Add Category</h2>
		</div>
		<div class="box-content">

		<form action="{{URL::to('/save-artical')}}" method="post">
			@csrf

			<div class="control-group">

				<label class="control-label" for="date01">Title</label>
				<div class="controls">
					<input type="text" class="input-xlarge" name="title" required>
				</div>

				<label class="control-label" for="date01">Category Name</label>
				<div class="controls">
					<input type="text" class="input-xlarge" name="category_name" required>
				</div>

				<label class="control-label" for="date01">Description</label>
				<div class="controls">
					<input type="text" class="input-xlarge" name="description" required>
				</div>

				<label class="control-label" for="date01">Image</label>
				<div class="controls">
					<input type="file" class="input-xlarge" name="image" >
				</div>

				<label class="control-label" for="date01">Video Link</label>
				<div class="controls">
					<input type="text" class="input-xlarge" name="video_link" >
				</div>

				<label class="control-label" for="date01">Post Date</label>
				<div class="controls">
					<input type="date" class="input-xlarge" name="post_date" required>
				</div>

				<label class="control-label" for="date01">Post Time</label>
				<div class="controls">
					<input type="time" class="input-xlarge" name="post_time" required>
				</div>

				<label class="control-label" for="date01">Status</label>
				<div class="controls">
					<input type="checkbox" class="input-xlarge" name="status" required>
				</div>

				<div class="controls" style="margin-top: 20px">
					<input type="submit" class="input-xlarge" name="member_name" value="Save">
				</div>

			</div>
		</form>	
		</div>
	</div>		
</div>

@endsection