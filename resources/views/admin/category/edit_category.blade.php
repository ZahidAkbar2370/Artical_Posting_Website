@extends('admin/admin_layout')
@section('admin_content')

<div class="row-fluid sortable">		
	<div class="box span12">
		<div class="box-header" data-original-title>
			<h2><i class="halflings-icon user"></i><span class="break"></span>Add Category</h2>
		</div>
		<div class="box-content">
			@foreach($all_category as $category)
		<form action="{{URL::to('/update-category',$category->id)}}" method="post">
			@csrf

			<div class="control-group">

				<label class="control-label" for="date01">Category Name</label>
				<div class="controls">
					<input type="text" class="input-xlarge" name="category_name" required value="{{$category->category_name}}">
				</div>
  
				<label class="control-label" for="date01">Status</label>
				<div class="controls">
					@if($category->status=="on")
					<input type="checkbox" class="input-xlarge" name="status" checked="">
					@else
					<input type="checkbox" name="status" class="input-xlarge">
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