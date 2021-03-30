@extends('user/user_layout')
@section('contents')

<center><h1>Contact Us</h1></center>
<form action="{{URL::to('send-message')}}" method="post">
	@csrf()
	<div class="fluid-container" style="margin-left:40px;margin-bottom:40px;margin-top: 30px">
		<div class="row">
			<div class="col-md-4">
				
			</div>
			<div class="col-md-5">

				<input type="text" name="name" placeholder="Enter Name" style="width: 300px;height:35px;border-radius:10px;border:1px solid"><br><br>
				<input type="email" name="email" placeholder="Enter Email" style="width: 300px;height:35px;border-radius:10px;border:1px solid"><br><br>
				<input type="date" name="message_date" style="width: 300px;height:35px;border-radius:10px;border:1px solid">
				<br>
				<input type="textarea" placeholder="Enter Your Message" name="message" rows="4" cols="50" style="width: 300px;height:130px;border-radius:10px;border:1px solid;margin-top: 20px">
				<br>
				<input type="checkbox" name="status" checked="" required="">
				<br><br>

				<button type="submit" style="width: 130px;height:35px;border-radius:10px;border:1px solid;color: white;background-color:green">Send Message</button>
			</div>
			
		</div>
	</div>
	</form>

@endsection