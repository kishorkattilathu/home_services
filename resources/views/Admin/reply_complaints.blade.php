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
			border: 2px solid var(--primary-color);
			margin-bottom: 30px;
			margin-top: 30px;
		}
		h3
		{
			color: var(--primary-color);
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
			border-radius: 20px;
			width: 80px;
			border: 1px solid var(--primary-color);
		}
		input
		{	
			padding-left: 10px;
			width: 250px;
			height: 30px;
			border: 1px solid var(--primary-color);
		}
		textarea
		{
			border: 1px solid var(--primary-color);

		}
		.select
		{
			padding-left: 10px;
			width: 250px;
			height: 30px;
			border-color: var(--primary-color);
		}
		@media(max-width:768px)
		{
			#box
			{
				margin: 5px 5px;
				margin-top: 10px;
				margin-bottom: 10px;
			}
		}
	 </style>
	<center>
		<div id="box" class="col-md-4">
			<form id="form" method="post" action="{{'/update_complaints/'.$complaints->complaint_id}}" enctype="multipart/form-data">
				<h3>Reply Complaints</h3><br>
				
				{{csrf_field()}}

				<label>Customer Name</label><br>
				<input type="text" name="name"readonly value="{{$complaints->name}}"><br><br>
				
                <label>Customer Email</label><br>
				<input type="text" name="email"readonly value="{{$complaints->email}}"><br><br>

                <label>Subject</label><br>
				<input type="text" name="subject"readonly value="{{$complaints->subject}}"><br><br>

                <label>Customer Message</label><br>

				<textarea name="message" id="" readonly cols="30" value="{{$complaints->message}}"  rows="10">
                    {{$complaints->message}}</textarea><br><br>

                <label>Reply</label><br>
				<input type="text" name="reply" required><br><br>


				<button id="button">Update</button><br><br>

			</form>
		</div>
	</center>

@include ('Admin/layout/footer')