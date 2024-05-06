@include ('Customer/layout/header')

<head>
	<title>My Profile</title>
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
			margin-bottom: 20px;
			background-color: white;
			padding-top: 30px;
		}
		#form
		{
			height:auto;
			padding: auto;
            margin-bottom: 20px;
		}
		#button
		{
			background-color: var(--primary-color);
			color: white;
			border: 1px solid var(--primary-color);
			border-radius: 20px;
			width: 80px;
		
		}
		h3
		{
			color: var(--primary-color);
		}
		input
		{
			padding-left: 10px;
			width: 250px;
			height: 30px;
			color: var(--primary-color);
			border: 1px solid var(--primary-color);
		}
        .select
		{
			padding-left: 10px;
			width: 250px;
			height: 30px;
			border-color: black;
		}
		@media(max-width:768px)
		{
			#box
			{
			margin-left: 20px;
			margin-right: 30px;
			margin-bottom: 10px;

			}
		}
	</style>
</head>
	<center>
		<div id="box" class="col-md-4">
			<form id="form" method="post" action="{{'/customer_update_profile'}}" enctype="multipart/form-data">
				<h3>My Profile</h3><br>
				{{csrf_field()}}
				<label>Your Name</label><br>
				<input type="text" value="{{$data->customer_name}}" name="name"><br><br>
				
				<label>Your Email</label><br>
				<input type="email" readonly value="{{$data->customer_email}}" name="email"><br><br>

				<label>Your Phone No:</label><br>
				<input type="phone"value="{{$data->customer_phone}}" name="phone"><br><br>

				<label>Address</label><br>
                <input type="text"value="{{$data->customer_address}}" name="address"><br><br>

                <label>Old Id Proof</label><br>
                <img style="height: 280px; width:280px;" src="{{'Customer/id_proof/'.$data->id_proof}}"
                 alt=""><br><br>

                <label>New Id Proof</label><br>
                <input class="select" style="border: none" type="file" name="id_proof"><br><br>

				<label>Password</label><br>
				<input type="text" value="{{$data->customer_password}}" name="password"><br><br>

				
				<button id="button">Update</button><br><br>


			</form>
		</div>
	</center>


@include('Customer/layout/footer')