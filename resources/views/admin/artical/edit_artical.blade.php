@extends('admin/admin_layout')
@section('admin_content')

<div class="row-fluid sortable">		
	<div class="box span12">
		<div class="box-header" data-original-title>
			<h2><i class="halflings-icon user"></i><span class="break"></span>Edit Articel</h2>
		</div>
		<div class="box-content">
		@foreach($articals as $artical)
		<form action="{{URL::to('/update-artical',$artical->id)}}" method="post">
			@csrf

			<div class="control-group">

				<label class="control-label" for="date01">Title</label>
				<div class="controls">
					<input type="text" class="input-xlarge" name="title" required value="{{$artical->title}}">
				</div>

				<label class="control-label" for="date01">Category Name</label>
				<div class="controls">
					<input type="text" class="input-xlarge" name="category_name" required value="{{$artical->category}}">
				</div>

				<label class="control-label" for="date01">Description</label>
				<div class="controls">
					<input type="text" class="input-xlarge" name="description" required value="{{$artical->description}}">
				</div>

				<label class="control-label" for="date01">Image</label>
				<div class="controls">
					<input type="file" class="input-xlarge" name="image" >
				</div>

				<label class="control-label" for="date01">Video Link</label>
				<div class="controls">
					<input type="text" class="input-xlarge" name="video_link" value="{{$artical->video_link}}">
				</div>

				<label class="control-label" for="date01">Status</label>
				<div class="controls">
					@if($artical->status=="on")
						<input type="checkbox" class="input-xlarge" name="status" required checked="">
					@else
						<input type="checkbox" class="input-xlarge" name="status" required>
					@endif
				</div>

				<div class="controls" style="margin-top: 20px">
					<input type="submit" class="input-xlarge" name="member_name" value="Save">
				</div>

			</div>
		</form>	
		@endforeach
		</div>
	</div>		
</div>

@endsection