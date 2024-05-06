<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Customer Register Form</title>
    <!--/google-fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Sarabun:ital,wght@0,400;0,600;0,700;0,800;1,600&display=swap" rel="stylesheet">
    <!--//google-fonts -->
    <!--/Template-CSS -->
    <link rel="stylesheet" href="{{url('customer/assets/css/style-starter.css')}}">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
    
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
                                <p><a href="#">+91 974 733 0662</a></p>
                                <p><a href="#">+91 830 101 9662</a></p>
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
<head>
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
        @media(max-width:768px)
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
	<center>
		<div id="box" class="col-md-4" style="background-color:white;">
			<form id="form" method="post" action="{{'/customer_register_insert'}}" enctype="multipart/form-data">
				
				<h3>Customer Register Form</h3><br>
                {{csrf_field()}}
				<label>Your Name</label><br>
				<input type="text" name="name" required><br><br>
				
				<label>Your Email</label><br>
				<input type="email" name="email" required><br><br>

				<label>Your Phone No:</label><br>
				<input type="phone" name="phone" required><br><br>

				<label>Address</label><br>
                <input type="text" name="address" required><br><br>

                <label>Id Proof</label><br>
                <input class="select" style="border: none"  required type="file" name="id_proof"><br><br>

				<label>Password</label><br>
				<input type="password" name="password" required><br><br>

				<label>Confirm Password</label><br>
				<input type="password" name="confirm_pass" required><br><br>

				<button id="button">Register</button><br><br>

				<a style="color: var(--primary-color);" href="{{'/customer_login'}}">Already Registered..?</a><br><br>
				<a style="margin-left: 15px;color: var(--primary-color);" href="{{'/index'}}">
                    <span class="fa fa-home fa-2x" style="color: var(--primary-color);"></span></a>

			</form>
		</div>
	</center>

<br>	
<br>	


 <!--/footer-9-->
 <footer class="w3l-footer9">
    <section class="footer-inner-main py-5">
        <div class="container py-md-3">
            <div class="right-side">
                <div class="row footer-hny-grids sub-columns">
                    <div class="col-lg-4 sub-one-left pe-lg-5">
                        <h6>About </h6>
                        <p class="footer-phny pe-lg-3">"We provide dependable home services covering a wide range of needs, 
                            including electrical work, plumbing, carpentry, and more. "</p>
                        <div class="columns-2 mt-lg-5 mt-4">
                            <ul class="social">
                                <li><a href="#facebook"><span class="fab fa-facebook-f"></span></a>
                                </li>
                                <li><a href="#linkedin"><span class="fab fa-linkedin-in"></span></a>
                                </li>
                                <li><a href="#twitter"><span class="fab fa-twitter"></span></a>
                                </li>
                                <li><a href="#google"><span class="fab fa-google-plus-g"></span></a>
                                </li>

                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-2 sub-two-right">
                        <h6>Useful Links</h6>
                        <ul>
                            <li><a href="{{'/index'}}">Home</a>
                            </li>
                            <li><a href="#">About Us</a>
                            </li>

                            <li><a href="{{'/contact_admin'}}">Contact</a></li>
                        </ul>
                    </div>
                    <div class="col-lg-2 sub-two-right">
                        <h6>Contact Us</h6>
                        <ul>
                            <li><a href="">+91 974 733 0662</a>
                            </li>
                            <li><a href="">+91 830 101 9662
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-lg-4 sub-one-left">
                        <h6>Twitter Feed</h6>
                        <ul>
                            <li class="w3tweet-holder-grids">
                                <div class="w3-twitter-icon"><i class="fab fa-twitter"></i></div>
                                <div class="w3tweet-text">
                                    <a target="_blank" href="#">@nicefacilityservices</a> Hi <a target="_blank" href="#"></a> , can you please follow us on <a target="_blank" href="#">Twitter</a> your support is much appriciated... <a target="_blank" href="#"></a> <a class="w3tweet-time" target="_blank" href="#">
                                         </a>
                                </div>
                            </li>
                            
                        </ul>
                    </div>
                </div>
            </div>
            <div class="below-section mt-5">
                <div class="copyright-footer">
                    <div class="columns text-left">
                        <p>@ 2024 Maintenance Services. All rights reserved | Designed by KKK <a href="https://w3layouts.com" target="_blank">ATEES</a>
                        </p>
                    </div>
                    <ul class="footer-w3list text-right">
                        <li><a href="#">Privacy Policy</a>
                        </li>
                        <li><a href="#">Terms &amp; Conditions</a>
                        </li>
                    </ul>
                </div>

            </div>
        </div>
    </section>

    <!-- Js scripts -->
    <!-- move top -->
    <button onclick="topFunction()" id="movetop" title="Go to top">
        <span class="fas fa-level-up-alt" aria-hidden="true"></span>
    </button>
    <script>
        // When the user scrolls down 20px from the top of the document, show the button
        window.onscroll = function() {
            scrollFunction()
        };

        function scrollFunction() {
            if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
                document.getElementById("movetop").style.display = "block";
            } else {
                document.getElementById("movetop").style.display = "none";
            }
        }

        // When the user clicks on the button, scroll to the top of the document
        function topFunction() {
            document.body.scrollTop = 0;
            document.documentElement.scrollTop = 0;
        }

    </script>
    <!-- //move top -->
</footer>
<!--//footer-9 -->

<!-- Template JavaScript -->
<script src="{{url('customer/assets/js/jquery-3.3.1.min.js')}}"></script>
<script src="{{url('customer/assets/js/theme-change.js')}}"></script>
<!-- MENU-JS -->
<script>
    $(window).on("scroll", function() {
        var scroll = $(window).scrollTop();

        if (scroll >= 80) {
            $("#site-header").addClass("nav-fixed");
        } else {
            $("#site-header").removeClass("nav-fixed");
        }
    });

    //Main navigation Active Class Add Remove
    $(".navbar-toggler").on("click", function() {
        $("header").toggleClass("active");
    });
    $(document).on("ready", function() {
        if ($(window).width() > 991) {
            $("header").removeClass("active");
        }
        $(window).on("resize", function() {
            if ($(window).width() > 991) {
                $("header").removeClass("active");
            }
        });
    });

</script>
<!-- //MENU-JS -->

<!-- disable body scroll which navbar is in active -->
<script>
    $(function() {
        $('.navbar-toggler').click(function() {
            $('body').toggleClass('noscroll');
        })
    });

</script>
<!-- //disable body scroll which navbar is in active -->
<!-- //bootstrap -->
<script src="{{url('customer/assets/js/bootstrap.min.js')}}"></script>

</body>

@if(session('pass'))
<script type="text/javascript">
    Swal.fire({
        text:'{{session('pass')}}',
        icon:'success',
        confirmButtonText:'OK'
    });
</script>

@endif

</html>
