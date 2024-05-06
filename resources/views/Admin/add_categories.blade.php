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
			margin-top: 30px;
			margin-bottom: 30px;
			border: 2px solid var(--primary-color);
		}
		#form
		{
			height:auto;
			padding: auto;
			margin-top: 30px;
			bottom: 30px;
		}
		#button
		{
			background-color: var(--primary-color);
			color: white;
			border: 1px solid var(--primary-color);
			border-radius: 20px;
			width: 80px;
			height: 40px;
		}
		input
		{	
			padding-left: 10px;
			width: 250px;
			height: 30px;
			border: 1px solid var(--primary-color);
		}
		h3{
			color: var(--primary-color);
		}
		@media(max-width:768px)
			{
				#box
				{
					margin: 5px 0px;
					overflow-x: auto;
					width: 100%;
				}
			}
	</style>

	<center>
		<div id="box" class="col-md-4">
			<form id="form" method="post" action="{{'/insert_category'}}" enctype="multipart/form-data">
				<h3>Add Categories</h3><br>
				
				{{csrf_field()}}
				<label>Category Name</label><br>
				<input type="text" required name="name"><br><br>
				
				<label>Category Image</label><br>
				<input style="border: none" type="file" required name="image"><br><br>

				
				<button id="button">Add</button><br><br>

				<!-- <a style="color: black;" href="{{'/admin_login'}}">Already Registered..?</a><br><br>
				<a style="margin-left: 15px;
			color: black;" href="{{'/index'}}"><img style="height: 40px;width: 40px;	" src="{{'/Admin/logo/home2.png'}}"></a> -->

			</form>
		</div>
	</center>


	

@include ('Admin/layout/footer')