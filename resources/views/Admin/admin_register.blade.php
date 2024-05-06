<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Construe - Industrial Category Bootstrap Responsive Template | Home :: W3layouts </title>
    <!--/google-fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Sarabun:ital,wght@0,400;0,600;0,700;0,800;1,600&display=swap" rel="stylesheet">
    <!--//google-fonts -->
    <!--/Template-CSS -->
    <link rel="stylesheet" href="{{url('customer/assets/css/style-starter.css')}}">
    <!--//Template-CSS -->
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
<!DOCTYPE html>
<html>
<head>
	<title>Admin Register Form</title>
	<style type="text/css">
		label
		{
			color: var(--primary-color);
		}
		#box
		{
			margin-left: 350px;
			margin-right: 350px;
            border:2px solid var(--primary-color);
            margin-top: 10px;
            margin-bottom: 20px;
		}
		#form
		{
			height:auto;
			padding: auto;
            margin-bottom: 20px;
		}
		#button
		{
			background-color: var(--primary-color);
            color: white;
            border: 1px solid var(--primary-color);
            border-radius: 20px;
            width: 100px;
		}
		input
		{
			padding-left: 10px;
			width: 250px;
			height: 30px;
            border: 1px solid var(--primary-color);
		}
        h3
        {
            color:var(--primary-color);
        }
        @media(max-width:768px)
        {
            #box
            {
                margin: 5px 5px;
                margin-top: 10px;
                margin-bottom: 10px;
            }
        }
	</style>
</head>
<body>
	<center>
		<div id="box" class="col-md-4">
			<form id="form" method="post" action="{{'/admin_register_insert'}}">
				<h3>Admin Register Form</h3><br>
			
                {{csrf_field()}}
				<label>Your Name</label><br>
				<input type="text" name="name"><br><br>
				
				<label>Your Email</label><br>
				<input type="email" name="email"><br><br>

				<label>Your Phone No:</label><br>
				<input type="phone" name="phone"><br><br>

				<label>Password</label><br>
				<input type="password" name="password"><br><br>

				<label>Confirm Password</label><br>
				<input type="password" name="confirm_pass"><br><br>

				<button id="button">Register</button><br><br>

				<a style="color: var(--primary-color);" href="{{'/admin_login'}}">Already Registered..?</a><br><br>
				{{-- <a style="margin-left: 15px;
			color: black;" href="{{'/index'}}"><img style="height: 40px;width: 40px;	" src="{{'/Admin/logo/home2.png'}}"></a> --}}
                <a style="margin-left: 15px;
                color: black;" href="{{'/index'}}"><span class="fa fa-home fa-2x" style="color: var(--primary-color);"></span></a>
			</form>
		</div>
	</center>



@include ('Admin/layout/footer')