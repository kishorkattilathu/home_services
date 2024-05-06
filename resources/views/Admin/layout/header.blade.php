    <!--/Header-->
<!--
Author: W3layouts
Author URL: http://w3layouts.com
-->
<!DOCTYPE html>
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
                <h1><a class="navbar-brand pe-xl-5 pe-lg-4" style="color:var(--primary-color);text-align: center;" href="">
                        Nice Facility Services
                    </a></h1>
                <button class="navbar-toggler collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon fa icon-expand fa-bars"></span>
                    <span class="navbar-toggler-icon fa icon-close fa-times"></span>
                </button>
                <div style="background-color:orange;" class="collapse navbar-collapse" id="navbarScroll">
                    <ul class="navbar-nav ms-lg-auto my-2 my-lg-0 navbar-nav-scroll">
                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="{{'/admin_home'}}">My Profile</a>
                        </li>
                        <div class="dropdown">
                            <button class="dropbtn">Technician</button>
                              <div class="dropdown-content">
                                <a href="{{'/add_technician'}}">Add Technician</a>
                                <a href="{{'/manage_technician'}}">Manage Technician</a>
                                <a href="{{'/approve_reject'}}">Verify Technician</a>
                              </div>
                        </div>
                        <div class="dropdown">
                            <button class="dropbtn">Category</button>
                              <div class="dropdown-content">
                                <a href="{{'/add_categories'}}">Add Category</a>
                                <a href="{{'/all_categories'}}">Manage Category</a>
                              </div>
                        </div>
                      
                        <div class="dropdown">
                            <button class="dropbtn">Complaints</button>
                              <div class="dropdown-content">
                                <a href="{{'/pending_complaints'}}">Pending Complaints</a>
                                <a href="{{'/all_replied_complaints'}}">All Complaints</a>
                              </div>
                        </div>
                        <div class="dropdown">
                            <button class="dropbtn">Other Details</button>
                              <div class="dropdown-content">
                                <a href="{{'/user_details'}}">User Details</a>
                                <a href="{{'/booking_details'}}">Booking Details</a>
                                <a href="{{'/payment_details'}}">Payment Details</a>
                              </div>
                        </div>
                        <li class="nav-item">
                            <a class="nav-link" href="{{'/admin_logout'}}">Logout</a>
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
