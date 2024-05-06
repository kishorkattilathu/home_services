    <!--/Header-->
<!--
Author: W3layouts
Author URL: http://w3layouts.com
-->
<!DOCTYPE html>
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
{{-- <script>
    function showMessage(message, icon_name){
        Swal.fire({
            text: message,
            icon: icon_name,
            confirmButtonText: 'OK'
        });
    }
</script> --}}
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
                            <a class="nav-link" aria-current="page" href="{{'/tech_home'}}">My Profile</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="{{'/tech_payment_details'}}">Payment Details</a>
                        </li>
                        <div class="dropdown">
                            <button class="dropbtn">Bookings</button>
                              <div class="dropdown-content">
                                <a href="{{'/manage_bookings'}}">Manage Bookings</a>
                                <a href="{{'/all_customer_bookings'}}">All Bookings</a>
                              </div>
                        </div>
                      
                        {{-- <li class="nav-item">
                            <a class="nav-link" href="about.html">About</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{'/add_technician'}}">Adds</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="services.html">Services</a>
                        </li> --}}
                        <!-- <li class="nav-item">
                            <a class="nav-link" href="{{url('/admin_login')}}}">Admin</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="services.html">Technician</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="services.html">Customer</a>
                        </li> -->
                        {{-- <li class="nav-item">
                            <a class="nav-link" href="{{'/contact_admin'}}">Contact</a>
                        </li> --}}
                        <div class="dropdown">
                            <button class="dropbtn">Contacts</button>
                              <div class="dropdown-content">
                                <a href="{{'/contact_admin'}}">Contact Admin</a>
                                <a href="{{'/all_technician_complaints'}}">All Complaints</a>
                              </div>
                        </div>
                        <li class="nav-item">
                            <a class="nav-link" href="{{'/technician_logout'}}">Logout</a>
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
