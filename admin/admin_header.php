<?php
//session_start(); //Already Started in dp.php
include_once('../include/function.php');
?>
<?php
//Session Checking
//WARNING: Don't Include this code in other file.
if (isset($_SESSION['email']) && !empty($_SESSION['email']) && isset($_SESSION['u_role']) && !empty($_SESSION['u_role'])) {
    $u_role = $_SESSION['u_role'];
    if ($u_role != 'admin')
        echo "<script>location.href='../$u_role'</script>";
} else {
    header('location: ../login/login-user.php');
}

if (isset($_GET['ref']) && !empty($_GET['ref'])) {

    $refId = cleanInput($_GET['ref']);
    $new_email = getOneData('temp', 'email', 'unique_id', $refId);
    if ($new_email) {
        echo "<script>alert('Alert!! Found $new_email')</script>";
    } else {
        echo "<script>alert('Not Found $new_email')</script>";
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<!-- Mirrored from shreethemes.in/doctris/admin/ by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 28 Feb 2021 09:57:05 GMT -->

<head>
    <meta charset="utf-8" />
    <title>HMS - Doctor Appointment Booking System</title>
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

    <script src="https://cdn.tiny.cloud/1/bmnlktul2fb3s7jcgj8tp5nf9clebe6e3clfzcj7k23ku9r5/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
</head>
<script>
    tinymce.init({
        selector: 'textarea'
    });
</script>

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
                    <li><a href="index"><i class="uil uil-dashboard me-2 d-inline-block"></i>Dashboard</a></li>
                    <li><a href="add-doctor-staff"><i class="uil uil-dashboard me-2 d-inline-block"></i>Add Doctor-Staff</a></li>
                    <li class="sidebar-dropdown">
                        <a href="javascript:void(0)"><i class="uil uil-user-md me-2 d-inline-block"></i>Admin</a>
                        <div class="sidebar-submenu">
                            <ul>
                                <li><a href="doctors">Admin</a></li>
                                <li><a href="add-doctor">Add Admin</a></li>
                                <li><a href="dr-profile">Profile</a></li>
                            </ul>
                        </div>
                    </li>
                    <!-- <li><a href="appointment"><i class="uil uil-stethoscope me-2 d-inline-block"></i>Appointment</a></li>
                     -->
                     <li><a href="admission"><i class="uil uil-book-medical me-2 d-inline-block"></i>Admission</a></li>
                    <li class="sidebar-dropdown">
                        <a href="javascript:void(0)"><i class="uil uil-user-md me-2 d-inline-block"></i>Doctors</a>
                        <div class="sidebar-submenu">
                            <ul>
                                <li><a href="doctors">Doctors</a></li>
                                <li><a href="add-doctor">Add Doctor</a></li>
                                <li><a href="dr-profile">Profile</a></li>
                            </ul>
                        </div>
                    </li>

                    <li><a href="patients"><i class="uil uil-wheelchair me-2 d-inline-block"></i>Patients</a></li>

                  <!--   <li class="sidebar-dropdown">
                        <a href="javascript:void(0)"><i class="uil uil-shopping-cart me-2 d-inline-block"></i>Pharmacy</a>
                        <div class="sidebar-submenu">
                            <ul>
                                <li><a href="shop.html">Shop</a></li>
                                <li><a href="product-detail.html">Shop Detail</a></li>
                                <li><a href="shopcart.html">Shopcart</a></li>
                                <li><a href="checkout.html">Checkout</a></li>
                            </ul>
                        </div>
                    </li> -->


                    <li class="sidebar-dropdown">
                        <a href="javascript:void(0)"><i class="uil uil-user-nurse me-2 d-inline-block"></i>Employees</a>
                        <div class="sidebar-submenu">
                            <ul>
                                <li><a href="employees">Employees</a></li>
                                <li><a href="add-employee">Add Employee</a></li>
                                <li><a href="emp-profile">Profile</a></li>
                            </ul>
                        </div>
                    </li>
                    <li><a href="#"><i class="uil uil-window me-2 d-inline-block"></i>Miscellaneous</a></li>
                    <li><a href="contact-forms"><i class="uil uil-form me-2 d-inline-block"></i>Contact Forms</a></li>

                </ul>
                <!-- sidebar-menu  -->
            </div>
            <!-- sidebar-content  -->

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
                                <form id="f1" name="f1" class="searchform" action="javascript:void()" onsubmit="if(this.t1.value!=null &amp;&amp; this.t1.value!='')
                                parent.findString(this.t1.value);return false;">
                                    <div>
                                        <input type="text" class="border rounded-pill" id="t1" name="t1" placeholder="Search Keywords...">
                                        <input type="submit" name="b1" value="Search">
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
                                    <a class="dropdown-item text-dark" href="../login/logout"><span class="mb-0 d-inline-block me-1"><i class="uil uil-sign-out-alt align-middle h6"></i></span> Logout</a>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>