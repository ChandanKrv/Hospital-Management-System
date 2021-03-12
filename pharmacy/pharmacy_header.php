<?php
//session_start(); //Already Started in dp.php
include_once('../include/function.php');
?>
<?php
//Session Checking
//WARNING: Don't Include this code in other file.
if (isset($_SESSION['email']) && !empty($_SESSION['email']) && isset($_SESSION['u_role']) && !empty($_SESSION['u_role'])) {
    $u_role = $_SESSION['u_role'];
    if ($u_role != 'pharmacy')
        echo "<script>location.href='../$u_role'</script>";
} else {
    header('location: ../login/login-user.php');
}
?>
<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from shreethemes.in/doctris/admin/ by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 28 Feb 2021 09:57:05 GMT -->

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
    <link rel="shortcut icon" href="../assets/images/favicon.ico">
    <!-- Bootstrap -->
    <link href="../assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <!-- simplebar -->
    <link href="../assets/css/simplebar.css" rel="stylesheet" type="text/css" />
    <!-- Select2 -->
    <link rel="stylesheet" href="../assets/css/select2.min.css" />
    <!-- Icons -->
    <link href="../assets/css/materialdesignicons.min.css" rel="stylesheet" type="text/css" />
    <link href="../assets/css/remixicon.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="../assets/css/line.css">
    <!-- SLIDER -->
    <link rel="stylesheet" href="../assets/css/tiny-slider.css" />
    <!-- Css -->
    <link href="../assets/css/style.min.css" rel="stylesheet" type="text/css" />

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

    <div class="page-wrapper chiller-theme toggled">
        <nav id="sidebar" class="sidebar-wrapper">
            <div class="sidebar-content" data-simplebar style="height: calc(100% - 60px);">
                <div class="sidebar-brand">
                    <a href="#"><img src="../assets/images/logo-dark.png" height="22" alt=""></a>
                </div>

                <ul class="sidebar-menu pt-3">
                    <li><a href="index-2.html"><i class="uil uil-dashboard me-2 d-inline-block"></i>Dashboard</a></li>
                    <li><a href="appointment.html"><i class="uil uil-stethoscope me-2 d-inline-block"></i>Appointment</a></li>

                    <li class="sidebar-dropdown">
                        <a href="javascript:void(0)"><i class="uil uil-user me-2 d-inline-block"></i>Doctors</a>
                        <div class="sidebar-submenu">
                            <ul>
                                <li><a href="doctors.html">Doctors</a></li>
                                <li><a href="add-doctor.html">Add Doctor</a></li>
                                <li><a href="dr-profile.html">Profile</a></li>
                            </ul>
                        </div>
                    </li>

                    <li><a href="patients.html"><i class="uil uil-wheelchair me-2 d-inline-block"></i>Patients</a></li>

                    <li class="sidebar-dropdown">
                        <a href="javascript:void(0)"><i class="uil uil-apps me-2 d-inline-block"></i>Apps</a>
                        <div class="sidebar-submenu">
                            <ul>
                                <li><a href="chat.html">Chat</a></li>
                                <li><a href="email.html">Email</a></li>
                                <li><a href="calendar.html">Calendar</a></li>
                            </ul>
                        </div>
                    </li>

                    <li class="sidebar-dropdown">
                        <a href="javascript:void(0)"><i class="uil uil-shopping-cart me-2 d-inline-block"></i>Pharmacy</a>
                        <div class="sidebar-submenu">
                            <ul>
                                <li><a href="shop.html">Shop</a></li>
                                <li><a href="product-detail.html">Shop Detail</a></li>
                                <li><a href="shopcart.html">Shopcart</a></li>
                                <li><a href="checkout.html">Checkout</a></li>
                            </ul>
                        </div>
                    </li>

                    <li class="sidebar-dropdown">
                        <a href="javascript:void(0)"><i class="uil uil-flip-h me-2 d-inline-block"></i>Blogs</a>
                        <div class="sidebar-submenu">
                            <ul>
                                <li><a href="blogs.html">Blogs</a></li>
                                <li><a href="blog-detail.html">Blog Detail</a></li>
                            </ul>
                        </div>
                    </li>

                    <li class="sidebar-dropdown">
                        <a href="javascript:void(0)"><i class="uil uil-file me-2 d-inline-block"></i>Pages</a>
                        <div class="sidebar-submenu">
                            <ul>
                                <li><a href="faqs.html">FAQs</a></li>
                                <li><a href="invoice-list.html">Invoice List</a></li>
                                <li><a href="invoice.html">Invoice</a></li>
                                <li><a href="terms.html">Terms & Policy</a></li>
                                <li><a href="privacy.html">Privacy Policy</a></li>
                                <li><a href="error.html">404 !</a></li>
                            </ul>
                        </div>
                    </li>

                    <li class="sidebar-dropdown">
                        <a href="javascript:void(0)"><i class="uil uil-sign-in-alt me-2 d-inline-block"></i>Authentication</a>
                        <div class="sidebar-submenu">
                            <ul>
                                <li><a href="login.html">Login</a></li>
                                <li><a href="signup.html">Signup</a></li>
                                <li><a href="forgot-password.html">Forgot Password</a></li>
                                <li><a href="lock-screen.html">Lock Screen</a></li>
                                <li><a href="thankyou.html">Thank you...!</a></li>
                            </ul>
                        </div>
                    </li>

                    <li><a href="components.html"><i class="uil uil-cube me-2 d-inline-block"></i>Components</a></li>

                    <li><a href="http://shreethemes.in/doctris/html/index-two.html" target="_blank"><i class="uil uil-window me-2 d-inline-block"></i>Landing page</a></li>
                </ul>
                <!-- sidebar-menu  -->
            </div>
            <!-- sidebar-content  -->
            <ul class="sidebar-footer list-unstyled mb-0">
                <li class="list-inline-item mb-0 ms-1">
                    <a href="#" class="btn btn-icon btn-pills btn-soft-primary">
                        <i class="uil uil-comment icons"></i>
                    </a>
                </li>

                <li class="list-inline-item mb-0 ms-1">
                    <div class="dropdown dropdown-primary">
                        <button type="button" class="btn btn-pills btn-soft-primary dropdown-toggle p-0" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img src="../assets/images/language/american.png" class="avatar avatar-ex-small rounded-circle" alt=""></button>
                        <div class="dropdown-menu dd-menu drop-ups dropdown-menu-end bg-white shadow border-0 mt-3 p-2" data-simplebar style="height: 175px;">
                            <a href="javascript:void(0)" class="d-flex align-items-center">
                                <img src="images/language/chinese.png" class="avatar avatar-client rounded-circle shadow" alt="">
                                <div class="flex-1 text-left ms-2 overflow-hidden">
                                    <small class="text-dark mb-0">Chinese</small>
                                </div>
                            </a>

                            <a href="javascript:void(0)" class="d-flex align-items-center mt-2">
                                <img src="images/language/european.png" class="avatar avatar-client rounded-circle shadow" alt="">
                                <div class="flex-1 text-left ms-2 overflow-hidden">
                                    <small class="text-dark mb-0">European</small>
                                </div>
                            </a>

                            <a href="javascript:void(0)" class="d-flex align-items-center mt-2">
                                <img src="images/language/indian.png" class="avatar avatar-client rounded-circle shadow" alt="">
                                <div class="flex-1 text-left ms-2 overflow-hidden">
                                    <small class="text-dark mb-0">Indian</small>
                                </div>
                            </a>

                            <a href="javascript:void(0)" class="d-flex align-items-center mt-2">
                                <img src="images/language/japanese.png" class="avatar avatar-client rounded-circle shadow" alt="">
                                <div class="flex-1 text-left ms-2 overflow-hidden">
                                    <small class="text-dark mb-0">Japanese</small>
                                </div>
                            </a>

                            <a href="javascript:void(0)" class="d-flex align-items-center mt-2">
                                <img src="images/language/russian.png" class="avatar avatar-client rounded-circle shadow" alt="">
                                <div class="flex-1 text-left ms-2 overflow-hidden">
                                    <small class="text-dark mb-0">Russian</small>
                                </div>
                            </a>
                        </div>
                    </div>
                </li>
            </ul>
        </nav>
        <!-- sidebar-wrapper  -->
        <!-- Start Page Content -->
        <main class="page-content bg-light">
            <div class="top-header">
                <div class="header-bar d-flex justify-content-between border-bottom">
                    <div class="d-flex align-items-center">
                        <a href="#" class="logo-icon">
                            <img src="../assets/images/logo-icon.png" height="30" class="small" alt="">
                            <img src="../assets/images/logo-dark.png" height="22" class="big" alt="">
                        </a>
                        <a id="close-sidebar" class="btn btn-icon btn-pills btn-soft-primary ms-2" href="#">
                            <i class="uil uil-bars"></i>
                        </a>
                        <div class="search-bar p-0 d-none d-md-block ms-2">
                            <div id="search" class="menu-search mb-0">
                                <form role="search" method="get" id="searchform" class="searchform">
                                    <div>
                                        <input type="text" class="border rounded-pill" name="s" id="s" placeholder="Search Keywords...">
                                        <input type="submit" id="searchsubmit" value="Search">
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>

                    <ul class="list-unstyled mb-0">
                        <li class="list-inline-item mb-0 ms-1">
                            <div class="dropdown dropdown-primary">
                                <button type="button" class="btn btn-icon btn-pills btn-soft-primary dropdown-toggle p-0" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="uil uil-bell icons"></i></button>
                                <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">3 <span class="visually-hidden">unread messages</span></span>

                                <div class="dropdown-menu dd-menu dropdown-menu-end bg-white shadow border-0 mt-3 px-2 py-2" data-simplebar style="height: 320px; width: 300px;">
                                    <a href="#" class="d-flex align-items-center justify-content-between py-2">
                                        <div class="d-inline-flex position-relative overflow-hidden">
                                            <img src="../assets/images/client/02.jpg" class="avatar avatar-md-sm rounded-circle shadow" alt="">
                                            <span class="text-dark mb-0 d-block text-truncat ms-3">You received a new user signup <small class="text-muted fw-normal d-inline-block">1 hour ago</small></span>
                                        </div>
                                    </a>

                                    <a href="#" class="d-flex align-items-center justify-content-between py-2 border-top">
                                        <div class="d-inline-flex position-relative overflow-hidden">
                                            <img src="../assets/images/client/Codepen.svg" class="avatar avatar-md-sm rounded-circle shadow" alt="">
                                            <span class="text-dark mb-0 d-block text-truncat ms-3">A new signin in <b>codepen</b> <small class="text-muted fw-normal d-inline-block">4 hour ago</small></span>
                                        </div>
                                    </a>

                                    <a href="#" class="d-flex align-items-center justify-content-between py-2 border-top">
                                        <div class="d-inline-flex position-relative overflow-hidden">
                                            <img src="../assets/images/client/03.jpg" class="avatar avatar-md-sm rounded-circle shadow" alt="">
                                            <span class="text-dark mb-0 d-block text-truncat ms-3"><b>Cristina</b> is like your medicine <small class="text-muted fw-normal d-inline-block">5 hour ago</small></span>
                                        </div>
                                    </a>

                                    <a href="#" class="d-flex align-items-center justify-content-between py-2 border-top">
                                        <div class="d-inline-flex position-relative overflow-hidden">
                                            <img src="../assets/images/client/dribbble.svg" class="avatar avatar-md-sm rounded-circle shadow" alt="">
                                            <span class="text-dark mb-0 d-block text-truncat ms-3"><b>Dribbble</b> accepted your shot <small class="text-muted fw-normal d-inline-block">24 hour ago</small></span>
                                        </div>
                                    </a>

                                    <a href="#" class="d-flex align-items-center justify-content-between py-2 border-top">
                                        <div class="d-inline-flex position-relative overflow-hidden">
                                            <img src="../assets/images/client/06.jpg" class="avatar avatar-md-sm rounded-circle shadow" alt="">
                                            <span class="text-dark mb-0 d-block text-truncat ms-3">Follow request from <b>Donald Aghori</b> <small class="text-muted fw-normal d-inline-block">1 day ago</small></span>
                                        </div>
                                    </a>

                                    <a href="#" class="d-flex align-items-center justify-content-between py-2 border-top">
                                        <div class="d-inline-flex position-relative overflow-hidden">
                                            <img src="../assets/images/client/07.jpg" class="avatar avatar-md-sm rounded-circle shadow" alt="">
                                            <span class="text-dark mb-0 d-block text-truncat ms-3"><b>Calvin</b> recently message you <small class="text-muted fw-normal d-inline-block">2 day ago</small></span>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </li>

                        <li class="list-inline-item mb-0 ms-1">
                            <div class="dropdown dropdown-primary">
                                <button type="button" class="btn btn-icon btn-pills btn-soft-primary dropdown-toggle p-0" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="uil uil-envelope icons"></i></button>
                                <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">4 <span class="visually-hidden">unread mail</span></span>

                                <div class="dropdown-menu dd-menu dropdown-menu-end bg-white shadow rounded border-0 mt-3 px-2 py-2" data-simplebar style="height: 320px; width: 300px;">
                                    <a href="#" class="d-flex align-items-center justify-content-between py-2">
                                        <div class="d-inline-flex position-relative overflow-hidden">
                                            <img src="../assets/images/client/02.jpg" class="avatar avatar-md-sm rounded-circle shadow" alt="">
                                            <span class="text-dark mb-0 d-block text-truncat ms-3">You received a new email from <b>Janalia</b> <small class="text-muted fw-normal d-inline-block">1 hour ago</small></span>
                                        </div>
                                    </a>

                                    <a href="#" class="d-flex align-items-center justify-content-between py-2 border-top">
                                        <div class="d-inline-flex position-relative overflow-hidden">
                                            <img src="../assets/images/client/Codepen.svg" class="avatar avatar-md-sm rounded-circle shadow" alt="">
                                            <span class="text-dark mb-0 d-block text-truncat ms-3">You received a new email from <b>codepen</b> <small class="text-muted fw-normal d-inline-block">4 hour ago</small></span>
                                        </div>
                                    </a>

                                    <a href="#" class="d-flex align-items-center justify-content-between py-2 border-top">
                                        <div class="d-inline-flex position-relative overflow-hidden">
                                            <img src="../assets/images/client/03.jpg" class="avatar avatar-md-sm rounded-circle shadow" alt="">
                                            <span class="text-dark mb-0 d-block text-truncat ms-3">You received a new email from <b>Cristina</b> <small class="text-muted fw-normal d-inline-block">5 hour ago</small></span>
                                        </div>
                                    </a>

                                    <a href="#" class="d-flex align-items-center justify-content-between py-2 border-top">
                                        <div class="d-inline-flex position-relative overflow-hidden">
                                            <img src="../assets/images/client/dribbble.svg" class="avatar avatar-md-sm rounded-circle shadow" alt="">
                                            <span class="text-dark mb-0 d-block text-truncat ms-3">You received a new email from <b>Dribbble</b> <small class="text-muted fw-normal d-inline-block">24 hour ago</small></span>
                                        </div>
                                    </a>

                                    <a href="#" class="d-flex align-items-center justify-content-between py-2 border-top">
                                        <div class="d-inline-flex position-relative overflow-hidden">
                                            <img src="../assets/images/client/06.jpg" class="avatar avatar-md-sm rounded-circle shadow" alt="">
                                            <span class="text-dark mb-0 d-block text-truncat ms-3">You received a new email from <b>Donald Aghori</b> <small class="text-muted fw-normal d-inline-block">1 day ago</small></span>
                                        </div>
                                    </a>

                                    <a href="#" class="d-flex align-items-center justify-content-between py-2 border-top">
                                        <div class="d-inline-flex position-relative overflow-hidden">
                                            <img src="../assets/images/client/07.jpg" class="avatar avatar-md-sm rounded-circle shadow" alt="">
                                            <span class="text-dark mb-0 d-block text-truncat ms-3">You received a new email from <b>Calvin</b> <small class="text-muted fw-normal d-inline-block">2 day ago</small></span>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </li>

                        <li class="list-inline-item mb-0 ms-1">
                            <div class="dropdown dropdown-primary">
                                <button type="button" class="btn btn-pills btn-soft-primary dropdown-toggle p-0" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img src="../assets/images/doctors/01.jpg" class="avatar avatar-ex-small rounded-circle" alt=""></button>
                                <div class="dropdown-menu dd-menu dropdown-menu-end bg-white shadow border-0 mt-3 py-3" style="min-width: 200px;">
                                    <a class="dropdown-item d-flex align-items-center text-dark" href="profile.html">
                                        <img src="../assets/images/doctors/01.jpg" class="avatar avatar-md-sm rounded-circle border shadow" alt="">
                                        <div class="flex-1 ms-2">
                                            <span class="d-block mb-1">Calvin Carlo</span>
                                            <small class="text-muted">Orthopedic</small>
                                        </div>
                                    </a>
                                    <a class="dropdown-item text-dark" href="index-2.html"><span class="mb-0 d-inline-block me-1"><i class="uil uil-dashboard align-middle h6"></i></span> Dashboard</a>
                                    <a class="dropdown-item text-dark" href="dr-profile.html"><span class="mb-0 d-inline-block me-1"><i class="uil uil-setting align-middle h6"></i></span> Profile Settings</a>
                                    <div class="dropdown-divider border-top"></div>
                                    <a class="dropdown-item text-dark" href="lock-screen.html"><span class="mb-0 d-inline-block me-1"><i class="uil uil-sign-out-alt align-middle h6"></i></span> Logout</a>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>