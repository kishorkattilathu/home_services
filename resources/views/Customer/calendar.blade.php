<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- <title>Construe - Industrial Category Bootstrap Responsive Template | Home :: W3layouts </title> -->
    <!--/google-fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Sarabun:ital,wght@0,400;0,600;0,700;0,800;1,600&display=swap" rel="stylesheet">
    <!--//google-fonts -->
    <!--/Template-CSS -->
    <link rel="stylesheet" href="{{url('customer/assets/css/style-starter.css')}}">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
    
    <!--//Template-CSS -->
    <style>
.dropbtn {
  background-color:orange;
  color: white;
  padding: 10px;
  font-size: 16px;
  border: none;
}

.dropdown {
  position: relative;
  display: inline-block;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f1f1f1;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
}

.dropdown-content a:hover {background-color: #ddd;}

.dropdown:hover .dropdown-content {display: block;}

.dropdown:hover .dropbtn {background-color: orange;}
</style>
</head>

<body style="background-color:white;">

  

        <header id="site-header" class="">
             <meta charset="utf-8">
             <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <div class="container">
            <nav class="navbar navbar-expand-lg navbar-light stroke py-lg-0">
                <h1><a class="navbar-brand pe-xl-5 pe-lg-4" style="color:var(--primary-color);text-align: center;" href="index.html">
                        Nice Facility Services
                    </a></h1>
                <button class="navbar-toggler collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon fa icon-expand fa-bars"></span>
                    <span class="navbar-toggler-icon fa icon-close fa-times"></span>
                </button>
                <div style="background-color:orange;" class="collapse navbar-collapse" id="navbarScroll">
                    <ul class="navbar-nav ms-lg-auto my-2 my-lg-0 navbar-nav-scroll">
                        <li class="nav-item">
                            <a class="nav-link" href="{{'/customer_services'}}">Services</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="{{'/customer_home'}}">My Profile</a>
                        </li>
                        
                        {{-- <div style="background-color:orange;" class="dropdown nav-link" >
                            <button class="dropdown-toggle" style="border: none; color:white;background-color:orange;"
                             type="button"  data-bs-toggle="dropdown">Bookings</button>
                            <ul class="dropdown-menu">
                                <li style="color: white; background-color:rgb(240, 203, 136);"><a href="/my_bookings">Pending Bookings</a></li>
                                {{-- <li><hr class="dropdown-divider"></li>
                                <li style="color: white; background-color:rgb(240, 203, 136);"><a href="/">Rejected Bookings</a></li> --}}
                                {{-- <li><hr class="dropdown-divider"></li>
                                <li style="color: white; background-color:rgb(240, 203, 136);"s><a href="/all_bookings">All Bookings</a></li>

                            </ul>
                        </div> --}} 
                        <div class="dropdown">
                            <button class="dropbtn">Bookings</button>
                              <div class="dropdown-content">
                                <a href="{{'/my_bookings'}}">Pending Bookings</a>
                                {{-- <a href="{{'/rejected_bookings'}}">Rejected Bookings</a> --}}
                                <a href="/all_bookings">All Bookings</a>
                              </div>
                        </div>
                        
                        {{-- <li class="nav-item">
                            <a class="nav-link" href="about.html">Bookings</a>
                        </li> --}}
                        {{-- <li class="nav-item">
                            <a class="nav-link" href="{{'/add_technician'}}">Adds</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="services.html">Services</a>
                        </li>
                         --}}
                        {{-- <li class="nav-item">
                            <a class="nav-link" href="">Contact</a>
                        </li> --}}
                        <div class="dropdown">
                            <button class="dropbtn">Contact</button>
                              <div class="dropdown-content">
                                <a href="{{'/contact'}}">Contact Admin</a>
                                {{-- <a href="{{'/rejected_bookings'}}">Rejected Bookings</a> --}}
                                <a href="/all_complaints">All Complaints</a>
                              </div>
                        </div>
                        <li class="nav-item">
                            <a class="nav-link" href="{{'/customer_logout'}}">Logout</a>
                        </li>

                    </ul>
                    <!--/search-right-->
                    {{-- <ul class="header-search mx-lg-4">
                        <div class="w3hny-search">
                            <form action="#" method="GET" style="" class="d-flex search-form">
                                <input class="form-control" style="width: 150px;" type="search" placeholder="Search..." aria-label="Search" required="">
                                <button  class="btn btn-style btn-primary" type="submit">
                                    <i class="fas fa-search"></i>
                                </button>
                            </form>
                        </div>
                    </ul> --}}
                    <!--//search-right-->
                </div>
                <!-- toggle switch for light and dark theme -->
                <div class="mobile-position">
                    <nav class="navigation">
                        <div class="theme-switch-wrapper">
                            <label class="theme-switch" for="checkbox">
                                <input type="checkbox" id="checkbox">
                                <div class="mode-container">
                                    <i class="gg-sun"></i>
                                    <i class="gg-moon"></i>
                                </div>
                            </label>
                        </div>
                    </nav>
                </div>
            </nav>
        </div>
    </header>
    <br>
    <br>
    <br>
    <br>

  <br>
  <br>
  <br>
  <br>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{url('Customer/assets/calendar.css')}}">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
    <script src="{{url('Customer/assets/js/calendar.js')}}"></script> 
    <style>
      #form
      {
        margin-left: 250px;
        margin-right: 100px;
        margin-top: 30px;
        text-align: center;
        border: 2px solid var(--primary-color);
        background-color: rgb(252, 246, 246);
        height: auto;
      }
      label
      {
        color: var(--primary-color);
      }
      #button
      {
        background-color: var(--primary-color);
        color: white;
        border: 1px solid var(--primary-color);
        border-radius: 20px;
        width: 60px;
        height: 40px;
      }
      input
      {
        border: 1px solid var(--primary-color);
      }

      @media(max-width:768px)
      {
        #form{
          margin-left: 20px;
          margin-right: 30px;
          margin-bottom: 10px;

        }
      }
    </style>

    <title>Booking</title>

      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
                 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <script src='https://cdn.jsdelivr.net/npm/fullcalendar@6.1.10/index.global.min.js'></script>
    <script>

      document.addEventListener('DOMContentLoaded', function() 
      {
        var calendarEl = document.getElementById('calendar');
        var calendar = new FullCalendar.Calendar(calendarEl, 
          {
            events: <?php echo json_encode($calendar_data); ?>,
            initialView: 'dayGridMonth'
          });
        calendar.render();
      });

    </script>
</head>
<body>
      <div class="container">
        <div class="row">
        <div class="col-md-6">
        
           
            <div id="calendar"></div>
          </div>
        
        <div class="col-md-6">
              <div id="form">
                <form action="{{'/book_now'}}" method="post">
                  {{csrf_field()}}
                  <h3 style="color: var(--primary-color);">Book Now</h3>
                  
                  <label for=""><strong>Select Date</strong></label><br>
                  <input style="width: 180px;" type="date" name="date"><br><br>
                  <button id="button" name="button">Book</button>
                  <input type="hidden" name="customer_id" value="{{$customer->customer_id}}"><br><br>
                  <input type="hidden" name="technician_id" value="{{$tech->tech_id}}"><br><br>

                  </form>
              </div>
        </div>

        </div>

      </div>
      


<div class="bubble">
  <div class="arrow"></div>
</div>
    
<br>
@include('Customer/layout/footer')