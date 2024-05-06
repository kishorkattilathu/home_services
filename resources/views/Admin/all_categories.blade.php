@include('Admin/layout/header')
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
table{
  width: 80%;
    border-collapse: collapse;
    border-spacing: 0;
    border: 1px solid #ddd;
    margin-top: 30px;
    margin-bottom: 50px;
    margin-left: 125px;
  }
    

th, td 
{
  text-align: left;
  padding: 8px;
}
table,th,td
{
	border:2px solid black;
	text-align: center;
}

h2
{
	text-align: center;
	color: var(--primary-color);
	padding-bottom: 5px;
}

tr:nth-child(even){background-color: #f2f2f2}
@media (max-width: 767px) {
    table {
      width: 100%;
      margin-left: 0;
    }
    th, td {
      padding: 5px;
    }
    h2 {
      font-size: 20px;
    }
  }
</style>
<h2>All Categories</h2>


<div id="box" style="overflow-x:auto;">
  <table>
    <tr>
    	<th>Sr. No:</th>
      <th>Category Name</th>
      <th>Category Image</th>
      <th>Edit</th>
      <th>Delete</th>
    </tr>
    @php
    $i=1;
    @endphp
    @foreach ($data as $dat)
    
    <tr>
      <td>{{$i;}}</td>
      <td>{{$dat->cat_name}}</td>
      <td><img style="height: 200px;width:250px;" src="{{'Admin/category/'.$dat->cat_image}}"></td>
      <td><a href="{{'/edit_cat/'.$dat->cat_id}}"><img style="height:50px;width: 80px;" src="{{'Admin/logo/edit.jpg'}}"></a></td>
      <td><a href="{{'/delete_cat/'.$dat->cat_id}}"><img style="height:80px;width: 80px;" src="{{'Admin/logo/delete.png'}}"></a></td>
    </tr>
    
    @php
    $i++;
    @endphp
    @endforeach
  </table>
</div>
@include('Admin/layout/footer')