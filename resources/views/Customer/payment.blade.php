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
            margin-bottom: 20px;
			margin-right: 350px;
            border: 2px solid var(--primary-color);
			margin-bottom: 50px;
			padding-top: 10px;
			margin-top: 30px;
		}
		h3
		{
			color: var(--primary-color);

		}
		#form
		{
			padding: auto;
            margin-bottom: 20px;
		}
		#button
		{
			background-color: var(--primary-color);
            width: 250px;
            border: 1px solid var(--primary-color);
            
		}
		input
		{
			padding-left: 10px;
			width: 250px;
			height: 30px;
			border-color: var(--primary-color);

		}
        .select
		{
			padding-left: 10px;
			width: 250px;
			height: 30px;
			border-color: var(--primary-color);
		}
		button
		{
			border: 1px solid var(--primary-color);
			background-color: var(--primary-color);
			color: white;
			border-radius: 20px;
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
</head>
	<center>
		<div id="box" class="col-md-4" style="background-color:white;">
				<h3>Pay Here</h3><br>
			<form id="form" method="post" action="{{'/payment_insert'}}" enctype="multipart/form-data">
				{{csrf_field()}}
				<input type="hidden" value="{{$payment->customer_id}}" name="customer_id">
				<input type="hidden" value="{{$payment->tech_id}}" name="tech_id">
				<input type="hidden" value="{{$payment->booking_id}}" name="booking_id">

				<label>Card Holders Name</label><br>
				<input type="text" value="" required name="name"><br><br>
				
				<label>Card Number</label><br>
				<input type="text" required name="card"><br><br>

                <label>Expiry Year</label><br>
                <input type="text" required name="year"><br><br>

                <label>Expiry Month</label><br>
                <input type="text" required name="month"><br><br>

                <label>Cvv No:</label><br>
                <input type="text" required name="cvv"><br><br>

                <label>Total Amount</label><br>
                <input type="text" required name="amount"><br><br>

				<button  id="button">Pay</button><br><br>


			</form>
		</div>
		
	</center>


@include('Customer/layout/footer')