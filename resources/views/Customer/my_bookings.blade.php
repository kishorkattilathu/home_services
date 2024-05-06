@include ('Customer/layout/header')
<style>
	th,table,td
	{
		border: 1px solid black;
	}
	table
	{
		/* width: 100%; */
		margin-top: 30px;
		margin-bottom: 30px;
		margin-left: 125px;
		margin-right: 240px;
		text-align: center;
		width: 80%;

	}
	#button
	{
		background-color:var(--primary-color);
		color:white;
		width: 50px;
		border: 1px solid var(--primary-color);
		border-radius: 20px;
		width: 60px;
		height: 30px;

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
		<h2>Your Bookings</h2>
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
				<th>Payment Status</th>
				<th>Pay</th>
			</tr>
			<?php
				$i=1;
			?>
			@foreach ($bookings as $book)
			
			<tr>
				<td>{{$i;}}</td>
				<td>{{$book->customer_name}}</td>
				<td>{{$book->tech_name}}</td>
				<td>{{$book->tech_phone}}</td>
				<td><img style="height: 100px; width:100px;" src="{{url('/Admin/profile/'.$book->profile)}}" alt=""></td>
				<td>{{$book->cat_name}}</td>
				<td>{{$book->booking_date}}</td>
				<td>{{$book->booking_status}}</td>
				<td>{{$book->payment_status}}</td>
				
				@if($book->booking_status=='approved')
				<td><a type="button" id="button"  href="{{'/payment/'.$book->booking_id}}">Pay</a></td>
				@else
				
				<td>Need Approval to do payment</td>

				@endif
				
			</tr>
			<?php
				$i++;
			?>
			@endforeach
			
		</thead>
	</table>
</div>

@include ('Customer/layout/footer')