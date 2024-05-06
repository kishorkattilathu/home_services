@include('Customer/layout/header')
<style>
    h3
    {
        
			text-align: center;
			color: var(--primary-color);
    }
</style>
    <!--/inner-page-->
    <div class="inner-banner py-5 pb-sm-0">
        <section class="w3l-breadcrumb text-left py-sm-5 pb-0">
            <div class="container">
                <div class="w3breadcrumb-gids">
                    <div class="w3breadcrumb-right">
                        <ul class="breadcrumbs-custom-path">
                            <li><a href="{{'/customer_services'}}">Home</a></li>
                            <li class="active"><span class="fas fa-angle-double-right mx-2"></span> Contact</li>
                        </ul>
                    </div>
                </div>

            </div>
        </section>
    </div>
    <!--//inner-page-->
    <!-- /contact-section -->
    <section class="py-5 about-main" id="contact">
        <div class="container py-md-4 py-2">
            <!--/form-->
            <div class="map-content-9 py-5" id="contact">
                <div class="map-content-9-in">
                    <div class="w3-map-content-9-form">
                        <h6 class="title-subw3hny mb-2 text-center mx-auto">Fill out the form.</h6>
                        <h3 class="title-w3l mb-sm-5 mb-3 text-center">Contact Admin</h3>
                        <form action="{{'/customer_complaint_insert'}}" method="post">
                            {{csrf_field()}}
                            <div class="twice-two">
                                <input type="hidden" name="customer_id" value="{{$customer->customer_id}}" id="">
                                <input type="text" class="form-control" readonly name="name" id="w3lName" placeholder="Name" value="{{$customer->customer_name}}" >
                                <input type="email" class="form-control" readonly name="email" id="w3lSender" placeholder="Email" value="{{$customer->customer_email}}" >
                            </div>
                            <div class="twice">
                                <input type="text" class="form-control" name="subject" required id="w3lSubject" placeholder="Subject" required="">
                            </div>
                            <textarea name="message" class="form-control" id="w3lMessage" required placeholder="Message" required=""></textarea>
                            <div class="text-right">
                                <button type="submit" class="btn btn-primary btn-style mt-4 d-sm-inline d-block">Send Message <i class="fas fa-paper-plane ms-2"></i></button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <!--//form-->
            <div class="row cont-details">
                <div class="col-md-6 col-md-6 inn-con-phnema-gd margin-up mt-lg-5 mt-4">
                    <div class="cont-top">
                        <div class="cont-left text-center">
                            <span class="fas fa-phone-alt"></span>
                        </div>
                        <div class="cont-right">
                            <h6>Call for help :</h6>
                            <p><a href="">+(91) 974 733 0662</a></p>
                            <p><a href="">+(91) 830 101 9662</a></p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-md-6 inn-con-phnema-gd margin-up mt-lg-5 mt-4">
                    <div class="cont-top">
                        <div class="cont-left text-center">
                            <span class="far fa-envelope"></span>
                        </div>
                        <div class="cont-right">
                            <h6>
                                Mail us:</h6>
                                <p><a href="" class="mail">nicefacilityservice@gmail.com</a></p>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="wthree-row py-5 about-main" id="contact1">
        <div class="container py-md-4 py-2">
            <div class="row getform-info">
                <div class="col-lg-6 mb-lg-0 mb-lg-5 pr-lg-5">
                    <div class="title-content text-left w3l-content-6">
                        <h6 class="title-subw3hny mb-2">Get in touch</h6>
                        <h3 class="title-w3l">Keep In Touch With <br> Us.</h3>
                    </div>

                </div>
                <div class="col-lg-6 pl-lg-3">
                    <p class="pt-4">Our technicians are dedicated to delivering flawless results using 
                        modern tools and techniques. With an emphasis on precision and efficiency, we aim to accomplish more 
                        in less time, ensuring a high-quality finish on every project.</p>
                </div>
            </div>
        </div>
    </section>
    {{-- <div class="map-iframe">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d317718.69319292053!2d-0.3817765050863085!3d51.528307984912544!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47d8a00baf21de75%3A0x52963a5addd52a99!2sLondon%2C+UK!5e0!3m2!1sen!2spl!4v1562654563739!5m2!1sen!2spl" width="100%" height="400" frameborder="0" style="border: 0px;" allowfullscreen=""></iframe>
    </div> --}}
    <!-- //contact-section -->
    <!-- //contact block -->
    @include('Customer/layout/footer')