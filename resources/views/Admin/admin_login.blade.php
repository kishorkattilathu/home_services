<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Admin Login Form</title>

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
            margin-top: 30px;
            margin-bottom: 50px;
		}
        label
        {
            color: var(--primary-color);
        }
		#form
		{
			height: auto;
			margin-left: 120px;
		}
		h3
		{
			margin-left: 160px;
           color: var(--primary-color);
		}
		button
		{
			background-color: var(--primary-color);
			margin-left: 100px;
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
        @media(max-width:768px)
        {
            #box
            {
                margin: 5px 5px;
                margin-top: 10px;
                margin-bottom: 10px;
                width: 98%;
            }
            #form
            {
                height: auto;
                margin-left: 80px;
            }
            h3
            {
                margin-left: 125px;
                color: var(--primary-color);
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
   



	


	
		<div id="box" class="col-md-4">
				<h3>Admin Login Form</h3><br>
			<form id="form" method="post" action="{{'/admin_login_insert'}}">
				{{csrf_field()}}
				
				<label>Your Email</label><br>
				<input type="email" name="email" required><br><br>


				<label>Password</label><br>
				<input type="password" name="password" required><br><br>

				

				<button>Login</button><br><br>
					{{-- <a style="margin-left: 60px;
			color: black;" href="{{'/admin_register'}}">Click Here To Register..</a><br><br> --}}
					<a style="margin-left: 125px;
			color: black;" href="{{'/index'}}"><span class="fa fa-home fa-2x" style="color: var(--primary-color);"></span></a>
			</form>
				
		</div>
	



	

@include ('Admin/layout/footer')