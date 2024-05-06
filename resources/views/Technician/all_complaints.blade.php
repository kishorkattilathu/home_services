@include ('Technician/layout/header')
<style>
	th,table,td
	{
		border: 1px solid black;
		padding: 8px
	}
	th
	{
		text-align: center;
	}
	table
	{
		
		margin: 10px auto;
		border-collapse: collapse;
		width: 80%;
	}
	
	h4
	{
		text-align: center;
	}
    #msg{
       
		max-width: 200px;
		max-height: 100px;
		overflow-y: auto;
		white-space: nowrap;
    }
	h2
		{
			text-align: center;
			color: var(--primary-color);
			padding-bottom: 5px;
		}
		#table
		{
			margin-top: 30px;
			margin-bottom: 50px;
		}
		@media(max-width:768px)
		{
			#table
			{
				margin: 0px 0px ;
				width: 100%;
				overflow-x: auto;
			}
		}
</style>

<div id="table">
	<table>
		<h2>Your Complaints</h2>
		<thead>
			<tr>
				<th>Sr No:</th>
				<th>Your Name</th>
				<th>Your Email</th>
                <th>Subject</th>
                <th>Your Message</th>
                <th>Reply</th>
			</tr>
			<?php
				$i=1;
			?>
			@foreach ($complaints  as $comp)
			
			<tr>
				<td>{{$i;}}</td>
				<td>{{$comp->name}}</td>
				<td>{{$comp->email}}</td>
				<td>{{$comp->subject}}</td>
				<td id="msg">{{$comp->message}}</td>
				<td id="msg">{{$comp->reply}}</td>
				
				
			</tr>
			<?php
				$i++;
			?>
			@endforeach
			
		</thead>
	</table>
</div>

@include ('Technician/layout/footer')