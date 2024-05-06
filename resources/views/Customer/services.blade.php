@include ('Customer/layout/header')
<style>

h2,h3
{
	text-align: center;
	color: var(--primary-color);
	padding-bottom: 5px;
}
</style>
<section class="w3l-gallery" id="gallery">
        <div class="destionation-innf py-5">
            <div class="container py-lg-5 py-md-4 py-2 HomePageGallery">
                <div class="title-content text-center">
                    <!-- <h6 class="title-subw3hny text-center">Gallery</h6> -->
                    <h3 class="title-w3l mb-5 text-center">All Services</h3>
                </div>
                <!--/grids-grids-->
                <center>
                <ul class="gallery_agile">
                    @foreach ($data as $dat)
                    <li>
                        <div class="w3_agile_portfolio_grid mt-4">
                            <a href="{{'/technician_selection/'.$dat->cat_id}}">
                                <h2 style="margin-left:50px;">{{$dat->cat_name}}</h2><br>

                                <img style="height: 180px;width:250px;" src="{{url('Admin/category/'.$dat->cat_image)}}" alt=" " class="img-fluid radius-image" />
                               


                                <div class="w3layouts_news_grid_pos">
                                    <div class="wthree_text">
                                        <h3><i class="fas fa-search-plus"></i></h3>

                                    </div>
                                </div>
                            </a>
                        </div>
                    </li>
                    @endforeach
                </ul>
            </center>
                
                <!--//grids-grids-->

            </div>
        </div>
    </section>

    <!-- <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script> -->



    @if(session('login'))
        <script type="text/javascript">
            Swal.fire({
                text: "{{ session('login') }}",
                icon: 'danger',
                confirmButtonText: 'OK'
            });
        </script>
    @endif
@include ('Customer/layout/footer')
