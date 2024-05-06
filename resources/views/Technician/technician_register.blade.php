<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Construe - Industrial Category Bootstrap Responsive Template | Home :: W3layouts </title>
    <!--/google-fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Sarabun:ital,wght@0,400;0,600;0,700;0,800;1,600&display=swap" rel="stylesheet">
    <!--//google-fonts -->
    <!--/Template-CSS -->
    <link rel="stylesheet" href="{{url('customer/assets/css/style-starter.css')}}">
    <!--//Template-CSS -->
  
    <style type="text/css">
		label
		{
			color: black;
		}
		#box
		{
			padding-top: 20px;
			padding-bottom: 20px;
			margin-left: 400px;
			margin-right: 500px;
            border: 5px solid var(--primary-color);
            width: 550px;
            border-radius: 10px;
		}
        label
        {
            color: var(--primary-color);
        }
		#form
		{
			height: auto;
			margin-left: 20px;
		}
		h3
		{
           color: var(--primary-color);
		}
		button
		{
			background-color: var(--primary-color);
			margin-left: 0px;
            border: none;
            color: white;
            border: 1px solid var(--primary-color);
            border-radius: 15px;
            width: 80px;
            height: 40px;

		}
		a:hover
        {
            color: blue;
        }
		input
		{	
            border: 2px solid var(--primary-color);
			padding: 10px;
			width: 300px;
			height: 40px;
            border-radius: 5px;
		}
        .select
		{
			padding-left: 10px;
			width: 300px;
            border-radius: 5px;
			height: 40px;
            border: 2px solid var(--primary-color);

		}
        @media (max-width: 768px) 
        {
            #box {
                width: 90%;
                margin: 5px;
                 }

            input,
            select {
                width: 60%;
            }
        }
	</style>
</head>

<body>

    <!-- top header -->
    <section class="w3l-top-header py-3">
        <div class="container">
            <div class="d-grid main-top">
                <div class="top-header-left">
                    <ul class="info-top-gridshny">
                        <li class="info-grid">
                            <div class="info-icon"><span class="far fa-clock"></span></div>
                            <div class="info-text">
                                <p>Monday - Saturday 08:00 - 20:00</p>
                                <p>Sunday - CLOSED</p>
                            </div>

                        </li>
                        <li class="info-grid">
                            <div class="info-icon"><span class="fas fa-phone-alt"></span></div>
                            <div class="info-text">
                                <p><a href="tel:+91 974 733 0662">+91 974 733 0662</a></p>
                                <p><a href="tel:+91 830 101 9662">+91 830 101 9662</a></p>
                            </div>

                        </li>
                        <li class="info-grid">
                            <div class="info-icon"><span class="fas fa-map-marker-alt"></span></div>
                            <div class="info-text">
                                <p>ATTASSERY HOUSE,<br>KOLANGATTUKKARA,</p>
                                <p>P.O.CHOOLISSERY,THRISSUR KERALA-680541.</p>

                            </div>

                        </li>
                    </ul>
                </div>
                <div class="top-header-right text-lg-right">
                    <ul>
                        <li>
                            <a href="#facebook"><span class="fab fa-facebook-f"></span></a>
                        </li>
                        <li>
                            <a href="#twitter"><span class="fab fa-twitter"></span></a>
                        </li>
                        <li><a href="#instagram" class="instagram mr-0"><span class="fab fa-instagram"></span></a></li>

                    </ul>
                </div>
            </div>
        </div>
    </section>

	

	<center>
        <div id="box" class="col-md-4">
            <form id="form" method="post" action="{{'/insert_register_technician'}}" enctype="multipart/form-data">
                <h3>Register Technician</h3><br>
                
                {{csrf_field()}}

                <label>Technician Name</label><br>
                <input type="text" name="name" required><br><br>
                
                <label>Technician Email</label><br>
                <input type="email" name="email" required><br><br>

                <label>Technician Phone No:</label><br>
                <input type="phone" name="phone" required><br><br>

                <label>Technician Type:</label><br>
                
                    <select name="tech_cat_id" class="select">

                        @foreach ($data as $dat)
                        <option value="{{$dat->cat_id}}">{{$dat->cat_name}}</option>
                        @endforeach

                    </select><br><br>
                

                <label>Location</label><br>
                <input type="text" name="location" required><br><br>

                <label>Profile Photo:</label><br><br>
                <input style="border: none" type="file" required name="profile"><br><br>

                <label>Licence Photo:</label><br><br>
                <input style="border: none" type="file" required name="licence"><br><br>

                <label>Password</label><br>
                <input type="password" name="password" required><br><br>

                <label>Confirm Password</label><br>
                <input type="password" name="confirm_pass" required><br><br>

                <button id="button">Register</button><br><br>

                <a style="color:var(--primary-color)" href="{{'/technician_login'}}">Already Registered..?</a><br><br>
                <a style="margin-left: 10px;
			color: var(--primary-color);" href="{{'/index'}}" ><span class="fa fa-home fa-2x" style="color: var(--primary-color);"></span></a>
            </form>
        </div>
    </center>


<br>	
<br>	
<br>	

	@if(session('status'))
	    <script type="text/javascript">
	        Swal.fire({
	            text: "{{ session('status') }}",
	            icon: 'success',
	            confirmButtonText: 'OK'
	        });
	    </script>
	@endif

    @if(session('emailexist'))
	    <script type="text/javascript">
            console.log('email exist');
	        Swal.fire({
	            text: "{{ session('emailexist') }}",
	            icon: 'danger',
	            confirmButtonText: 'OK'
	        });
	    </script>
	@endif

    @if(session('password'))
    <script type="text/javascript">
        Swal.fire({
            text: "{{ session('emailexist') }}",
            icon: 'danger',
            confirmButtonText: 'OK'
        });
    </script>
@endif
    
@include ('Admin/layout/footer')