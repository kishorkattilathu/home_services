@include ('Customer/layout/header')

<style>

  h3
  {
    text-align: center;
	  color: var(--primary-color);
	  padding-bottom: 5px;
  }
  #button
  {
    background-color: var(--primary-color);
    height:40px;
    border: none;
    margin-top: 5px;
    border-radius: 20px;
  }
</style>

<section class="w3l-gallery" id="gallery">
        <div class="destionation-innf py-5">
            <div class="container py-lg-5 py-md-4 py-2 HomePageGallery">
                <div class="title-content text-center">
                    <!-- <h6 class="title-subw3hny text-center">Gallery</h6> -->
                    <h3 class="title-w3l mb-5 text-center">All Technicians</h3>
                </div>
                <link rel="stylesheet" href="{{url('Customer/assets/css/calendar.css')}}">
                <script src='https://cdn.jsdelivr.net/npm/@fullcalendar/core@6.1.10/index.global.min.js'></script>
                <script src='https://cdn.jsdelivr.net/npm/@fullcalendar/daygrid@6.1.10/index.global.min.js'></script>
                <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
                
                <ul class="gallery_agile">
                    @foreach ($data as $dat)
                    <center>
                      <li>
                              <a href="#">
                                  {{-- <h2 style="margin-left:50px;">{{$dat->tech_name}}</h2><br> --}}

                                  <img style="height: 180px;width:250px;" src="{{url('Admin/profile/'.$dat->profile)}}" alt=" " class="img-fluid radius-image" />
                                  <p>Name:{{$dat->tech_name}}</p>
                                  <p>Phone No:{{$dat->tech_phone}}</p>
                                  <p>Location:{{$dat->location}}</p>
                                  <div class="w3layouts_news_grid_pos">
                                      <div class="wthree_text">
                                          <h3><i class="fas fa-search-plus"></i></h3>
                                      </div>
                                  </div>
                              </a>
                              {{-- <a class="button" href="{{'/calendar/'.$dat->tech_id}}" style="background-color: lightgreen;">Book Now</a> --}}
                              <a href="{{'/calendar/'.$dat->tech_id}}"><button id="button">Book Now</button></a>
                      </li>
                    </center> 
                    @endforeach
                </ul>
                <!--//grids-grids-->

            </div>
        </div>
    </section>
  

  <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog modal-lg" style="height: 100% !important;">
    
      <!-- Modal content-->
      <div class="modal-content" style="height: 100% !important;">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Modal Header</h4>
        </div>
        <div class="modal-body">
            <div id="calendar"></div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
  </div>
  
</div>
<!-- End of Modal -->
<script>

      // document.addEventListener('DOMContentLoaded', function() {
      //   console.log('add event');
      //   var calendarEl = document.getElementById('calendar');
      //   var calendar = new FullCalendar.Calendar(calendarEl, {
      //     initialView: 'dayGridMonth'
      //   });
      //   calendar.render();
      // });

      $(document).ready(function(){
        console.log('ready');
        $(".load_calendar").click(function(){
          $("#myModal").modal('show');
          var calendarEl = document.getElementById('calendar');
          var calendar = new FullCalendar.Calendar(calendarEl, {
            initialView: 'dayGridMonth'
          });
          calendar.render();
        });
      });

    </script>
@include ('Customer/layout/footer')
