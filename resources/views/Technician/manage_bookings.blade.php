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
		<h2>Pending Bookings:</h2>
		<thead>
			<tr>
				<th>Sr No:</th>
				<th>Customer Name</th>
				<th>Customer Address</th>
				<th>Booking Date</th>
				<th>Booking Status</th>
				<th>Payment Status</th>
				<th>Approve</th>
				<th>Reject</th>
			</tr>
			<?php
				$i=1;
			?>
			@foreach ($bookings as $book)
				<tr>
					<td>{{$i;}}</td>
					<td>{{$book->customer_name}}</td>
					<td>{{$book->customer_address}}</td>
					<td>{{$book->booking_date}}</td>
					<td>{{$book->booking_status}}</td>
					<td>{{$book->payment_status}}</td>
					<td><a href="{{'/approve_bookings/'.$book->booking_id}}"><img style="height: 60px;width:60px;" src="/Admin/logo/approve.jpg" alt=""></a></td>
					<td><a href="{{'/reject_bookings/'.$book->booking_id}}"><img style="height: 60px;width:60px;" src="/Admin/logo/reject.jpg" alt=""></a></td>
				</tr>
				<?php
				$i++;
			?>
			@endforeach
			
		</thead>
	</table>
</div>

@include('Technician/layout/footer')