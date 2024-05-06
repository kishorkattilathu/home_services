@include ('Technician/layout/header')

<style>
	th,table,td
	{
		border: 1px solid black;
	}
	table
	{
		width: 80%; 
		margin-top: 10px;
		margin-bottom: 10px;
		margin-left: 125px;
		margin-right: 300px;
		text-align: center;
	}
	h2
		{
			text-align: center;
			color: var(--primary-color);
			padding-bottom: 5px;
		}
		#manage_bookings
		{
			margin-top: 30px;
			margin-bottom: 50px;
		}
		@media(max-width:768px){
			#manage_bookings
			{
				margin: 10px 10px;
				overflow-x: auto;
			}
			table
			{
				width: 100%;
				margin: 0px 0px;
			}
		}
</style>

<div id="manage_bookings">
	<table>
		<h2>Payment Details</h2>
		<thead>
			<tr>
				<th>Sr No:</th>
				<th>Customer Name</th>
				<th>Card Holder Name</th>
				<th>Amount</th>
				
			</tr>
			<?php
				$i=1;
			?>
			@foreach ($payment as $pay)
				<tr>
					<td>{{$i;}}</td>
					<td>{{$pay->customer_name}}</td>
					<td>{{$pay->card_holder_name}}</td>
					<td>{{$pay->amount}}</td>
					
				</tr>
				<?php
				$i++;
			?>
			@endforeach
			
		</thead>
	</table>
</div>

@include('Technician/layout/footer')