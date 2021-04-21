@extends('user/user_layout')
@section('contents')

<center><h1>Videos</h1></center>

	<div class="fluid-container" style="margin-left:40px;margin-bottom:40px;margin-top: 30px">
		<div class="row">

			@foreach($videos as $video)
			<div class="col-md-4">
				<?php echo($video->video_link); ?>
			</div>
			@endforeach
			
		</div>
	</div>

@endsection