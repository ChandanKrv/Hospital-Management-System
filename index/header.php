<?php
session_start();
if (isset($_SESSION['email']))
    $headerBtn="Dashboard";
 else 
    $headerBtn="Sign In";

?>
<!DOCTYPE html>
    <html lang="en">
<head>
        <meta charset="utf-8" />
        <title>Doctris - Doctor Appointment Booking System</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="Premium Bootstrap 4 Landing Page Template" />
        <meta name="keywords" content="Appointment, Booking, System, Dashboard, Health" />
        <meta name="author" content="Shreethemes" />
        <meta name="email" content="shreethemes@gmail.com" />
        <meta name="website" content="http://www.shreethemes.in/" />
        <meta name="Version" content="v1.0.0" />
        <!-- favicon -->
        <link rel="shortcut icon" href="images/favicon.ico">
        <!-- Bootstrap -->
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <!-- Icons -->
        <link href="css/materialdesignicons.min.css" rel="stylesheet" type="text/css" />
        <link href="css/remixicon.css" rel="stylesheet" type="text/css" />
        <link rel="stylesheet" href="../../../unicons.iconscout.com/release/v3.0.6/css/line.css">
        <!-- SLIDER -->
        <link rel="stylesheet" href="css/tiny-slider.css"/>
        <!-- Css -->
        <link href="css/style.min.css" rel="stylesheet" type="text/css" />
         <!-- include Iconify and your bundle before </body> -->
        <script src="https://code.iconify.design/1/1.0.7/iconify.min.js"></script>
        <script src="link_to_your_bundle.js"></script>
    </head>

    <body>
        <!-- Loader -->
        <div id="preloader">
            <div id="status">
                <div class="spinner">
                    <div class="double-bounce1"></div>
                    <div class="double-bounce2"></div>
                </div>
            </div>
        </div>
        <!-- Loader -->
        
        <!-- Navbar STart -->
        <header id="topnav" class="navigation sticky">
            <div class="container">
                <!-- Logo container-->
                <div>
                    <a class="logo" href="index">
                        <img src="images/logo-dark.png" class="l-dark" height="22" alt="">
                        <img src="images/logo-light.png" class="l-light" height="22" alt="">
                    </a>
                </div>
                <!-- End Logo container-->
                <ul class="dropdowns list-inline mb-0">
                    <li class="list-inline-item mb-0">
                        <div class="dropdown dropdown-primary">
                            <button type="button" class="btn btn-icon btn-pills btn-primary dropdown-toggle p-0" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="mdi mdi-magnify icons"></i></button>
                            <div class="dropdown-menu dd-menu dropdown-menu-end bg-white shadow rounded border-0 mt-3 py-0" style="width: 200px;">
                                <form id="f1" name="f1" action="javascript:void()" onsubmit="if(this.t1.value!=null &amp;&amp; this.t1.value!='')
                                parent.findString(this.t1.value);return false;">
                                    <div class="row">
                                        <div class="col-md-8">
                                            <input type="text" id="t1" name="t1" class="form-control" placeholder="Search...">
                                        </div>
                                        <div class="col-md-4">
                                            <input type="submit" class="form-control" name="b1" value="Find">
                                        </div>
                                        
                                    </div>
                                    
                                   <!--  <input type="submit" class="form-control" name="b1" value="Find"> -->
                                </form>
                                
                                <!-- <form id="f1" name="f1" action="javascript:void()" onsubmit="if(this.t1.value!=null &amp;&amp; this.t1.value!='')
                                parent.findString(this.t1.value);return false;">
                                <input type="text" id="t1" name="t1" value="text" size="20">
                                <input type="submit" name="b1" value="Find">
                                </form> -->
                            </div>
                        </div>
                    </li>
                    <li class="list-inline-item mb-0 ms-1"><a href="../login" class="btn btn-primary"><?php echo $headerBtn ?></a></li>
                    
                </ul>
                <div class="menu-extras">
                    <div class="menu-item">
                        <!-- Mobile menu toggle-->
                        <a class="navbar-toggle" id="isToggle" onclick="toggleMenu()">
                            <div class="lines">
                                <span></span>
                                <span></span>
                                <span></span>
                            </div>
                        </a>
                        <!-- End mobile menu toggle-->
                    </div>
                </div>
        
                <div id="navigation">
                    <!-- Navigation Menu-->   
                    <!-- <ul class="navigation-menu nav-left nav-light">
                        <li class="has-submenu parent-menu-item">
                            <a href="javascript:void(0)">Home</a><span class="menu-arrow"></span>
                            <ul class="submenu">
                                <li><a href="index" class="sub-menu-item">Index One</a></li>
                                <li><a href="index-two" class="sub-menu-item">Index Two</a></li>
                                <li><a href="index-three" class="sub-menu-item">Index Three</a></li>
                            </ul>
                        </li>

                        <li class="has-submenu parent-parent-menu-item">
                            <a href="javascript:void(0)">Doctors</a><span class="menu-arrow"></span>
                            <ul class="submenu">
                                <li class="has-submenu parent-menu-item">
                                    <a href="javascript:void(0)" class="menu-item"> Dashboard </a><span class="submenu-arrow"></span>
                                    <ul class="submenu">
                                        <li><a href="doctor-dashboard" class="sub-menu-item">Dashboard</a></li>
                                        <li><a href="doctor-appointment" class="sub-menu-item">Appointment</a></li>
                                        <li><a href="patient-list" class="sub-menu-item">Patients</a></li>
                                        <li><a href="doctor-schedule" class="sub-menu-item">Schedule Timing</a></li>
                                        <li><a href="invoices" class="sub-menu-item">Invoices</a></li>
                                        <li><a href="patient-review" class="sub-menu-item">Reviews</a></li>
                                        <li><a href="doctor-messages" class="sub-menu-item">Messages</a></li>
                                        <li><a href="doctor-profile" class="sub-menu-item">Profile</a></li>
                                        <li><a href="doctor-profile-setting" class="sub-menu-item">Profile Settings</a></li>
                                        <li><a href="doctor-chat" class="sub-menu-item">Chat</a></li>
                                        <li><a href="login" class="sub-menu-item">Login</a></li>
                                        <li><a href="signup" class="sub-menu-item">Sign Up</a></li>
                                        <li><a href="forgot-password" class="sub-menu-item">Forgot Password</a></li>
                                    </ul>
                                </li>
                                <li><a href="doctor-team-one" class="sub-menu-item">Doctors One</a></li>
                                <li><a href="doctor-team-two" class="sub-menu-item">Doctors Two</a></li>
                                <li><a href="doctor-team-three" class="sub-menu-item">Doctors Three</a></li>
                            </ul>
                        </li>

                        <li class="has-submenu parent-menu-item">
                            <a href="javascript:void(0)">Patients</a><span class="menu-arrow"></span>
                            <ul class="submenu">
                                <li><a href="patient-dashboard" class="sub-menu-item">Dashboard</a></li>
                                <li><a href="patient-profile" class="sub-menu-item">Profile</a></li>
                                <li><a href="booking-appointment" class="sub-menu-item">Book Appointment</a></li>
                                <li><a href="patient-invoice" class="sub-menu-item">Invoice</a></li>
                            </ul>
                        </li>

                        <li class="has-submenu parent-menu-item">
                            <a href="javascript:void(0)">Pharmacy</a><span class="menu-arrow"></span>
                            <ul class="submenu">
                                <li><a href="pharmacy" class="sub-menu-item">Pharmacy</a></li>
                                <li><a href="pharmacy-shop" class="sub-menu-item">Shop</a></li>
                                <li><a href="pharmacy-product-detail" class="sub-menu-item">Medicine Detail</a></li>
                                <li><a href="pharmacy-shop-cart" class="sub-menu-item">Shop Cart</a></li>
                                <li><a href="pharmacy-checkout" class="sub-menu-item">Checkout</a></li>
                                <li><a href="pharmacy-account" class="sub-menu-item">Account</a></li>
                            </ul>
                        </li>
        
                        <li class="has-submenu parent-parent-menu-item"><a href="javascript:void(0)">Pages</a><span class="menu-arrow"></span>
                            <ul class="submenu">
                                <li><a href="aboutus" class="sub-menu-item"> About Us</a></li>
                                <li><a href="departments" class="sub-menu-item">Departments</a></li>
                                <li><a href="faqs" class="sub-menu-item">FAQs</a></li>
                                <li class="has-submenu parent-menu-item">
                                    <a href="javascript:void(0)" class="menu-item"> Blogs </a><span class="submenu-arrow"></span>
                                    <ul class="submenu">
                                        <li><a href="blogs" class="sub-menu-item">Blogs</a></li>
                                        <li><a href="blog-detail" class="sub-menu-item">Blog Details</a></li>
                                    </ul>
                                </li>
                                <li><a href="terms" class="sub-menu-item">Terms & Policy</a></li>
                                <li><a href="privacy" class="sub-menu-item">Privacy Policy</a></li>
                                <li><a href="error" class="sub-menu-item">404 !</a></li>
                                <li><a href="contact" class="sub-menu-item">Contact</a></li>
                            </ul>
                        </li>
                        <li><a href="https://shreethemes.in/doctris/admin/index" class="sub-menu-item" target="_blank">Admin</a></li>
                    </ul> --><!--end navigation menu-->
                </div><!--end navigation-->
            </div><!--end container-->
        </header><!--end header-->
        <!-- Navbar End -->