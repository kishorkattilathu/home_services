@include('Admin/layout/header')

<style type="text/css">
	
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
	#button
	{
		color: white;
		background-color: var(--primary-color);
		border-radius: 2rem;
		text-align: center
	}
	h2
		{
			text-align: center;
			color: var(--primary-color);
			padding-bottom: 5px;
		}
		#table
		{
			margin-bottom: 50px;
			margin-top: 30px;
		}
		@media(max-width:768px){
			#table{
				width: 100%;
				overflow-x: auto;
				margin: 0px 0px;
			}
		}
</style>
<center id="table">
	<h2>Pending Complaints</h2>
	<table>
	
		<tr>
			<th>Sr. No.</th>
			<th>Name</th>
			<th>Email</th>
			<th>Subject</th>
			<th>Customer Message</th>
			<th>Reply</th>
			
		</tr>
		
		@php
		$i=1;
		@endphp
		
		
		@foreach ($complaints as $comp)
		
		<tr>
			<td>{{$i;}}</td>
			<td>{{$comp->name}}</td>
			<td>{{$comp->email}}</td>
			<td>{{$comp->subject}}</td>
			<td id="msg">{{$comp->message}}</td>
			<td style="text-align: center"><a href="{{'/reply_complaints/'.$comp->complaint_id}}" id="button"  class="btn btn-warning">Reply</a></td>

		</tr>
		@php
		$i++;
		@endphp
		@endforeach
		
	</table>
	
</center>

@include('Admin/layout/footer')