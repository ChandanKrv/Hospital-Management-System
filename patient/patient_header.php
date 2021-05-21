<?php
//session_start(); //Already Started in dp.php
include_once('../include/function.php');

$email = $_SESSION['email'];
?>
<?php
//Session Checking
if (isset($_SESSION['email']) && !empty($_SESSION['email']) && isset($_SESSION['u_role']) && !empty($_SESSION['u_role'])) {
    $u_role = $_SESSION['u_role'];
    if ($u_role != 'patient')
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
    if (!strpos($actual_link, 'patient-id')) {
        echo "<script>alert('It seems that you have not created your HMS Id. Please create it to continue!!')</script>";
        echo "<script>location.href='patient-id'</script>";
    }
} else {
    /* FETCHING USER DATA */

    $data = getAllData('patient', 'user.u_email', $email);
    $u_id = $data['u_id'];
    $u_name = $data['u_name'];
    $u_full_name = $data['u_full_name'];
    $u_email = $data['u_email'];
    $hms_id = $data['hms_id'];
    $gender = $data['p_gender'];
    $p_proof_type = $data['p_proof_type'];
    $p_proof_details = $data['p_proof_details'];
    $image = "../assets/images/patients_img/" . $data['p_image'];
    $dob = $data['p_dob'];
    $address = $data['p_address'];
    $bio = $data['p_bio'];
    $phone = $data['p_phone'];
  
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
                    <li><a href="admission"><i class="uil uil-user me-2 d-inline-block"></i>Admission</a></li>
                         <li><a href="pt-profile"><i class="uil uil-user-md me-2 d-inline-block"></i>Profile</a></li>
                

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
                                <button type="button" class="btn btn-pills btn-soft-primary dropdown-toggle p-0" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img src="<?php echo $image ?>" class="avatar avatar-ex-small rounded-circle" alt=""></button>
                                <div class="dropdown-menu dd-menu dropdown-menu-end bg-white shadow border-0 mt-3 py-3" style="min-width: 200px;">
                                    <a class="dropdown-item d-flex align-items-center text-dark" href="pt-profile">
                                        <img src="<?php echo $image ?>" class="avatar avatar-md-sm rounded-circle border shadow" alt="">
                                        <div class="flex-1 ms-2">
                                            <span class="d-block mb-1"><?php echo $u_full_name ?></span>
                                            <small class="text-muted">Patient</small>
                                        </div>
                                    </a>
                                    <a class="dropdown-item text-dark" href="index"><span class="mb-0 d-inline-block me-1"><i class="uil uil-dashboard align-middle h6"></i></span> Dashboard</a>
                                    <a class="dropdown-item text-dark" href="pt-profile"><span class="mb-0 d-inline-block me-1"><i class="uil uil-setting align-middle h6"></i></span> Profile Settings</a>
                                    <div class="dropdown-divider border-top"></div>
                                    <a class="dropdown-item text-dark" href="../login/logout"><span class="mb-0 d-inline-block me-1"><i class="uil uil-sign-out-alt align-middle h6"></i></span> Logout</a>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>