 <!--/footer-9-->
 <footer class="w3l-footer9">
    <section class="footer-inner-main py-5">
        <div class="container py-md-3">
            <div class="right-side">
                <div class="row footer-hny-grids sub-columns">
                    <div class="col-lg-4 sub-one-left pe-lg-5">
                        <h6>About </h6>
                        <p class="footer-phny pe-lg-3">"We provide dependable home services covering a wide range of needs, 
                            including electrical work, plumbing, carpentry, and more."</p>
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
                            <li><a href="{{'/customer_home'}}">Home</a>
                            </li>
                           

                            <li><a href="{{'/customer_services'}}">Services</a>
                            </li>

                            <li><a href="{{'/contact'}}">Contact</a></li>
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
                        <p>@ 2024 Maintenance Services. All rights reserved | Designed by KKK <a href="#" target="_blank">ATEES</a>
                        </p>
                    </div>
                    <ul class="footer-w3list text-right">
                        <li><a href="#url">Privacy Policy</a>
                        </li>
                        <li><a href="#url">Terms &amp; Conditions</a>
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

    @if(session('pass'))
        <script type="text/javascript">
            Swal.fire({
                text: "{{ session('pass') }}",
                icon: 'success',
                confirmButtonText: 'OK'
            });
        </script>
    @endif  

    @if(session('fail'))
        <script type="text/javascript">
            Swal.fire({
                text: "{{ session('fail') }}",
                icon: 'danger',
                confirmButtonText: 'OK'
            });
        </script>
    @endif  

</body>

</html>
