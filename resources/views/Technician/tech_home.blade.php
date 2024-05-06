@include('Technician/layout/header')

<style type="text/css">
		label
		{
			color: var(--primary-color);
		}
		#box
		{
			margin-left: 350px;
			margin-right: 350px;
			border: 2px solid var(--primary-color);
			margin-bottom: 30px;
			margin-top: 30px;
		}
		#form
		{
			height:auto;
			padding: auto;
			margin-bottom: 30px;
			margin-top: 30px;
		}
		#button
		{
			background-color: var(--primary-color);
			color: white;
			border: var(--primary-color);
			height: 30px;
			border-radius: 10px;
			
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
			margin-left:10px;
			margin-right:10px;	
		}
		}
	 </style>
	<center>
		<div id="box" class="col-md-4">
			<form id="form" method="post" action="{{'/update_tech'}}" enctype="multipart/form-data">
				<h3>Update Profile</h3><br>
				
				{{csrf_field()}}

				<label>Technician Name</label><br>
				<input type="text" name="name" value="{{$data->tech_name}}"><br><br>
				
				<label>Technician Email</label><br>
				<input type="email" readonly name="email" value="{{$data->tech_email}}"><br><br>

				<label>Technician Phone No:</label><br>
				<input type="phone" name="phone" value="{{$data->tech_phone}}"><br><br>

				<label>Technician Type:</label><br>
					<select name="tech_cat" class="select">
						<option value="{{$data->cat_id}}">{{$data->cat_name}}</option>
						@foreach ($categories as $cat)
						<option value="{{$cat->cat_id}}">{{$cat->cat_name}}</option>
						@endforeach
					</select><br><br>

				<label>Location</label><br>
				<input type="text" name="location"  value="{{$data->location}}"><br><br>

				<label>Old Profile Photo:</label><br><br>
				<img style="height: 200px;width: 250px;" src="{{'/Admin/profile/'.$data->profile}}"><br><br>

				<label>Old Licence Photo:</label><br><br>
				<img style="height: 200px;width: 250px;" src="{{'/Admin/licence/'.$data->licence}}"><br><br>

				<label>New Profile Photo:</label><br><br>
				<input type="file" style="border: none" name="profile"><br><br>

				<label>New Licence Photo:</label><br><br>
				<input type="file" style="border: none" name="licence"><br><br>

				<label>Password</label><br>
				<input type="text" name="password" value="{{$data->password}}"><br><br>

				<button id="button">Update</button><br><br>

			</form>
		</div>
	</center>
	
@include('Technician/layout/footer')


