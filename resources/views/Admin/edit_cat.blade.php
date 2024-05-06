@include ('Admin/layout/header')

	 <style type="text/css">
		label
		{
			color: black;
		}
		#box
		{
			margin-left: 350px;
			margin-right: 350px;
		}
		#form
		{
			height:450px;
			padding: auto;
			margin-bottom: 30px;
		}
		#button
		{
			background-color: lightgreen;
		}
		input
		{	
			padding-left: 10px;
			width: 250px;
			height: 30px;
		}
		.select
		{
			padding-left: 10px;
			width: 250px;
			height: 30px;
			border-color: black;
		}
	 </style>
	<center>
		<div id="box" class="col-md-4" style="background-color:var(--primary-color);">
				<h3>Edit Category</h3><br>
			<form id="form" method="post" action="{{'/update_cat/'.$data->cat_id}}" enctype="multipart/form-data">
				{{csrf_field()}}

				<label>Category Name</label><br>
				<input type="text" name="name" value="{{$data->cat_name}}"><br><br>
				
				<label>Old Category Image</label><br>
				<img style="height: 200px;width: 250px;" src="{{'/Admin/category/'.$data->cat_image}}"><br><br>

				<label>New Category Image:</label><br>
				<input type="file" name="image"><br><br>


				<button id="button">Update</button><br><br>

			</form>
		</div>
	</center>

@include ('Admin/layout/footer')