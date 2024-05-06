@include ('Customer/layout/header')
<style>
	th,table,td
	{
		border: 1px solid black;
	}
	table
	{
		/* width: 100%; */
		margin-top: 10px;
		margin-bottom: 10px;
		margin-left:130px;
		margin-right: 10px;
		text-align: center;
		width: 80%;
	}
	#table
		{
			margin-top: 30px;
			margin-bottom: 50px;
		}
	h2
		{
			text-align: center;
			color: var(--primary-color);
			padding-bottom: 5px;
		}
		@media(max-width:768px)
      {
        table{
         margin: 0px 0px;
          margin-bottom: 10px;
          margin-top: 10px;

        }
		#table{
			overflow-x: auto; 

		}
      }
</style>

<div id="table">
	<table>
		<h2>Your Bookings:</h2>
		<thead>
			<tr>
				<th>Sr No:</th>
				<th>Your Name</th>
				<th>Technician Name</th>
				<th>Technician Phone No</th>
				<th>Technician Profile</th>
				<th>Profession</th>
				<th>Booking Date</th>
				<th>Booking Status</th>
				<th>Amount</th>
				<th>Payment Status</th>
			</tr>
			<?php
				$i=1;
			?>
			@foreach ($booked  as $book)
			
			<tr>
				<td>{{$i;}}</td>
				<td>{{$book->customer_name}}</td>
				<td>{{$book->tech_name}}</td>
				<td>{{$book->tech_phone}}</td>
				<td><img style="height: 100px; width:100px;" src="{{url('/Admin/profile/'.$book->profile)}}" alt=""></td>
				<td>{{$book->cat_name}}</td>
				<td>{{$book->booking_date}}</td>
				<td>{{$book->booking_status}}</td>
				<td>{{$book->amount}}</td>
				<td>{{$book->payment_status}}</td>
				
				
			</tr>
			<?php
				$i++;
			?>
			@endforeach
			
		</thead>
	</table>
</div>

@include ('Customer/layout/footer')