@include ('Admin/layout/header')

	<style type="text/css">
		label
		{
			color: var(--primary-color);
		}
		#box
		{
			margin-left: 350px;
			margin-right: 350px;
			margin-top: 30px;
			margin-bottom: 30px;
			border: 2px solid var(--primary-color);
		}
		#form
		{
			height:auto;
			padding: auto;
			margin-top: 30px;
			margin-bottom: 20px;

		}
		#button
		{
			background-color: var(--primary-color);
			color: white;
			border: 1px solid var(--primary-color);
			border-radius: 20px;
			width: 70px;
		}
		input
		{
			padding-left: 10px;
			width: 250px;
			height: 30px;
			border: 1px solid var(--primary-color);
		}
		.select
		{
			padding-left: 10px;
			width: 250px;
			height: 30px;
			border-color: var(--primary-color);
		}
		h3
		{
			color: var(--primary-color);
		}
		@media(max-width:768px)
		{
			#box
			{
				margin: 0px 0px;
				width: 100%;
				margin-top: 10px;
				margin-bottom: 10px;
			}
		}
	</style>
	<center>
		<div id="box" class="col-md-4">
			<form id="form" method="post" action="{{'/add_insert_technician'}}" enctype="multipart/form-data">
				<h3>Add Technician</h3><br>
				
				{{csrf_field()}}

				<label>Technician Name</label><br>
				<input required type="text" name="name"><br><br>
				
				<label>Technician Email</label><br>
				<input required type="email" name="email"><br><br>

				<label>Technician Phone No:</label><br>
				<input required type="phone" name="phone"><br><br>

				<label>Technician Type:</label><br>
				
					<select  name="tech_cat_id" class="select">

						@foreach ($data as $dat)
						<option value="{{$dat->cat_id}}">{{$dat->cat_name}}</option>
						@endforeach

					</select><br><br>
				

				<label>Location</label><br>
				<input type="text" required name="location"><br><br>

				<label>Profile Photo:</label><br><br>
				<input type="file" required style="border: none" name="profile"><br><br>

				<label>Licence Photo:</label><br><br>
				<input type="file" required style="border: none" name="licence"><br><br>

				<label>Password</label><br>
				<input type="password" required name="password"><br><br>

				<label>Confirm Password</label><br>
				<input type="password" required name="confirm_pass"><br><br>

				<button id="button">Add</button><br><br>

				<!-- <a style="color: black;" href="{{'/admin_login'}}">Already Registered..?</a><br><br>
				<a style="margin-left: 15px;
			color: black;" href="{{'/index'}}"><img style="height: 40px;width: 40px;	" src="{{'/Admin/logo/home2.png'}}"></a> -->

			</form>
		</div>
	</center>

	
@include ('Admin/layout/footer')