<?php
//session_start(); //Already Started in dp.php
include_once('../include/function.php');

$email = $_SESSION['email'];
?>
<?php
//Session Checking
if (isset($_SESSION['email']) && !empty($_SESSION['email']) && isset($_SESSION['u_role']) && !empty($_SESSION['u_role'])) {
    $u_role = $_SESSION['u_role'];
    if ($u_role != 'staff')
        echo "<script>location.href='../$u_role'</script>";
} else {
    header('location: ../login/login-user.php');
}
$IdCheck = getOneData('user', 'hms_id', 'u_email', $email);
if ($IdCheck == '') {
    $u_id = getOneData('user', 'u_id', 'u_email', $email);
    $u_name = getOneData('user', 'u_name', 'u_email', $email);
    $u_full_name = getOneData('user', 'u_full_name', 'u_email', $email);
    $image = "../assets/images/dummy.png";
    $department = "DEPARTMENT";

    $actual_link = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
    if (!strpos($actual_link, 'staff-id')) {
        echo "<script>alert('It seems that you have not created your HMS Id. Please create it to continue!!')</script>";
        echo "<script>location.href='doctor-id'</script>";
    }
} else {
    /* FETCHING USER DATA */

    $data = getAllData('staff', 'user.u_email', $email);
    $u_id = $data['u_id'];
    $u_name = $data['u_name'];
    $u_full_name = $data['u_full_name'];
    $u_email = $data['u_email'];
    $hms_id = $data['hms_id'];
    $gender = $data['s_gender'];
    $department = $data['s_department'];
    $image = "../assets/images/doctors_img/" . $data['s_image'];
    $dob = $data['s_dob'];
    $address = $data['s_address'];
    $timings = $data['s_timings'];
    $bio = $data['s_bio'];
    $phone = $data['s_phone'];
    $fees = $data['s_fees'];
    $speciality = $data['s_speciality'];


}
?>
<!DOCTYPE html>
<html lang="en">
<!-- Mirrored from shreethemes.in/doctris/admin/ by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 28 Feb 2021 09:57:05 GMT -->

<head>
    <meta charset="utf-8" />
    <title>HMS- Doctor Appointment Booking System</title>
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
                    <li><a href="appointment"><i class="uil uil-stethoscope me-2 d-inline-block"></i>Appointment</a></li>
                    <li><a href="patients"><i class="uil uil-user me-2 d-inline-block"></i>Patients</a></li>
                    <!-- <li class="sidebar-dropdown">
                        <a href="javascript:void(0)"><i class="uil uil-user me-2 d-inline-block"></i>Patients</a>
                        <div class="sidebar-submenu">
                            <ul>
                                <li><a href="patients">All Patients</a></li>
                                <li><a href="add-doctor.html">Add Patients</a></li>
                            </ul>
                        </div>
                    </li> -->


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



                    <li><a href="components.html"><i class="uil uil-cube me-2 d-inline-block"></i>Staff</a></li>
                    <li><a href="dr-profile"><i class="uil uil-user-md me-2 d-inline-block"></i>Profile</a></li>
                    <li><a href="components.html"><i class="uil uil-window me-2 d-inline-block"></i>Miscellaneous</a></li>

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
                                <button type="button" class="btn btn-pills btn-soft-primary dropdown-toggle p-0" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img src="<?php echo $image ?>" class="avatar avatar-ex-small rounded-circle" alt=""></button>
                                <div class="dropdown-menu dd-menu dropdown-menu-end bg-white shadow border-0 mt-3 py-3" style="min-width: 200px;">
                                    <a class="dropdown-item d-flex align-items-center text-dark" href="dr-profile">
                                        <img src="<?php echo $image ?>" class="avatar avatar-md-sm rounded-circle border shadow" alt="">
                                        <div class="flex-1 ms-2">
                                            <span class="d-block mb-1">Dr.<?php echo $u_full_name ?></span>
                                            <small class="text-muted"><?php echo $department ?></small>
                                        </div>
                                    </a>
                                    <a class="dropdown-item text-dark" href="index"><span class="mb-0 d-inline-block me-1"><i class="uil uil-dashboard align-middle h6"></i></span> Dashboard</a>
                                    <a class="dropdown-item text-dark" href="dr-profile"><span class="mb-0 d-inline-block me-1"><i class="uil uil-setting align-middle h6"></i></span> Profile Settings</a>
                                    <div class="dropdown-divider border-top"></div>
                                    <a class="dropdown-item text-dark" href="../login/logout"><span class="mb-0 d-inline-block me-1"><i class="uil uil-sign-out-alt align-middle h6"></i></span> Logout</a>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>