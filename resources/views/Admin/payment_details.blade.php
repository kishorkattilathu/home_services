@include('Admin/layout/header')

<style type="text/css">
	
	th,table,td
	{
		border: 1px solid black;
		padding: 8px
	}
	th,td
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
	<h2>Total Payment</h2>
	<table>
	
		<tr>
			<th>Sr. No.</th>
			<th>Customer Name</th>
			<th>Technician Name</th>
			<th>Card Holder Name</th>
			<th>Amount</th>
			
		</tr>
		@php
            $i=1;
        @endphp
		@foreach($payment as $pay)
        <tr>
            <td>{{$i;}}</td>
            <td>{{$pay->customer_name}}</td>
            <td>{{$pay->tech_name}}</td>
            <td>{{$pay->card_holder_name}}</td>
            <td>{{$pay->amount}}</td>
        </tr>
            @php
             $i++;   
            @endphp
        @endforeach
		
		
		
		
	</table>
	
</center>

@include('Admin/layout/footer')