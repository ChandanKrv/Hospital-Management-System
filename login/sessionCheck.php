<?php
//session_start();
error_reporting(E_ERROR | E_WARNING | E_PARSE);
$email =  $_SESSION['email'];
$u_role =  $_SESSION['u_role'];

if (!isset($email) || !isset($u_role)) {
    //  header("location:../login/login-user.php");
    echo "<script>alert('Not set Email: $email  U_Role: $u_role') </script>";
} else {

    echo "<script>alert('Set Email: $email  U_Role: $u_role') </script>";
}
