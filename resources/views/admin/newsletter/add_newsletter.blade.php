@extends('admin/admin_layout')
@section('admin_content')

<div class="row-fluid sortable">		
	<div class="box span12">
		<div class="box-header" data-original-title>
			<h2><i class="halflings-icon user"></i><span class="break"></span>Add Newsletter</h2>
		</div>
		<div class="box-content">

		<form action="{{URL::to('/save-newsletter')}}" method="post">
			@csrf

			<div class="control-group">

				<label class="control-label" for="date01">Email</label>
				<div class="controls">
					<input type="email" class="input-xlarge" name="email" required>
				</div>

				<label class="control-label" for="date01">Subcribe Date</label>
				<div class="controls">
					<input type="date" class="input-xlarge" name="subcribe_date" required>
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