@include ('Admin/layout/header')
<meta name="viewport" content="width=device-width, initial-scale=1">
<style type="text/css">

	table {
            border-collapse: collapse;
            width: 100%;
			margin-top: 30px;
			margin-bottom: 30px;
			height: auto;
        }

        th, td {
            border: 2px solid;
            padding: 2px;
            text-align: center;
        }

        th {
            background-color: #f2f2f2;
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
				#table
				{
					width: 100%;
					overflow-x: auto;
					margin: 0px 0px;
				}
			}
</style>
<center id="table">
	<h2>Verify Technician</h2>
	<table>
	
		<tr>
			<th>Sr. No.</th>
			<th>Name</th>
			<th>Email</th>
			<th>Phone</th>
			<th>Profession</th>
			<th>Type</th>
			<th>Location</th>
			<th>Profile</th>
			<th>Licence</th>
			<th>Status</th>
			<th>Approve</th>
			<th>Reject</th>
		</tr>
		
		@php
		$i=1;
		@endphp
		@foreach ($data as $dat)
		
		<tr>
			<td>{{$i;}}</td>
			<td>{{$dat->tech_name}}</td>
			<td>{{$dat->tech_email}}</td>
			<td>{{$dat->tech_phone}}</td>
			<td>{{$dat->cat_name}}</td>
			<td>{{$dat->type}}</td>
			<td>{{$dat->location}}</td>
			<td><img style="height: 200px;width: 250px;" src="{{'/Admin/profile/'.$dat->profile}}"></td>
			<td><img style="height: 200px;width: 250px;" src="{{'/Admin/licence/'.$dat->licence}}"></td>
			<td>{{$dat->tech_status}}</td>

			<td><a href="{{'/approve_tech/'.$dat->tech_id}}"><img style="height: 40px;width: 70px;" src="{{'/Admin/logo/approve.png'}}"></a></td>

			<td><a href="{{'/reject_tech/'.$dat->tech_id}}"><img style="height: 120px;width: 70px;" src="{{'/Admin/logo/rejected.png'}}"></a></td>
		</tr>
		@php
		$i++;
		@endphp
		@endforeach
	</table>
	
</center>


@include ('Admin/layout/footer')