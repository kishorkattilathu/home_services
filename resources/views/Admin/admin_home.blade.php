@include('admin/layout/header')



	
	<style type="text/css">
		label
		{
			color: var(--primary-color);
		}
		#box
		{
			margin-left: 350px;
			margin-right: 350px;
			margin-bottom: 20px;
			margin-top: 10px;
			border: 2px solid var(--primary-color);

		}
		#form
		{
			height:auto;
			padding: auto;
		}
		#button
		{
			background-color: var(--primary-color);
			color: white;
			border: 1px solid var(--primary-color);
			border-radius: 2rem;
			width: 80px;
			height: 40px;;
		}
		input
		{	
			padding-left: 10px;
			width: 250px;
			height: 30px;
			border: 1px solid var(--primary-color);


		}
		h3
		{
			color: var(--primary-color);
		}
		@media(max-width:768px)
		{
			#box
			{
				margin: 10px 10px ;
				width: 80%;
				overflow-x: auto;
			}
		}
	</style>

	<center>
		<div id="box" class="col-md-4">
				<h3>My Profile</h3><br>
			<form id="form" method="post" action="{{'/admin_profile_update'}}">
				{{csrf_field()}}
				<label>Your Name</label><br>
				<input type="text" required value="{{$data->admin_name}}" name="name"><br><br>
				
				<label>Your Email</label><br>
				<input type="email" value="{{$data->admin_email}}" readonly="" name="email"><br><br>

				<label>Your Phone No:</label><br>
				<input type="phone" value="{{$data->admin_phone}}" required name="phone"><br><br>

				<label>Password</label><br>
				<input type="text" value="{{$data->admin_password}}" required name="password"><br><br>

				
				<button id="button">Update</button><br><br>

				<!-- <a style="color: black;" href="{{'/admin_login'}}">Already Registered..?</a><br><br>
				<a style="margin-left: 15px;
			color: black;" href="{{'/index'}}"><img style="height: 40px;width: 40px;	" src="{{'/Admin/logo/home2.png'}}"></a> -->

			</form>
		</div>
	</center>




@include ('Admin/layout/footer')