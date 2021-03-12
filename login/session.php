<?php
//This page not in use

//session_start();  //Already Started in controllerUserData: Edited by Chandan
error_reporting(E_ERROR | E_WARNING | E_PARSE);
$email =  $_SESSION['email'];
$u_role =  $_SESSION['u_role'];
//echo $email;
//echo $u_role;

if (!isset($email)) {
    header("location:../login/login-user.php");
} else {
    $sql = "SELECT * FROM user WHERE u_email ='$email'";
    $run_Sql = mysqli_query($con, $sql);
    if ($run_Sql) {
        $fetch_info = mysqli_fetch_assoc($run_Sql);
        $status = $fetch_info['u_status'];
        $code = $fetch_info['u_vcode'];
        $name = $fetch_info['u_name'];
        $u_role = $fetch_info['u_role'];
        $full_name = $fetch_info['u_full_name'];
           if($u_role=='admin')
           {
            header('Location: ../login/login-user.php');
           }
           else
           {
            if ($status == "verified") {
                if ($code != 0) {
                    header('Location: reset-code.php');
                }
            } else {
                header('Location: user-otp.php');
            }
           }        
    }
}
