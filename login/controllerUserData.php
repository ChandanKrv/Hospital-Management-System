<?php
//session_start(); //Already Started in dp.php
require '../include/function.php';
$email = "";
$name = "";
$errors = array();

//if user signup button

if (isset($_POST['signup'])) {
    $u_name = mysqli_real_escape_string($con, $_POST['u_name']);
    $name = mysqli_real_escape_string($con, $_POST['name']);
    $email = mysqli_real_escape_string($con, $_POST['email']);
    $password = mysqli_real_escape_string($con, $_POST['password']);
    $cpassword = mysqli_real_escape_string($con, $_POST['cpassword']);
    if ($password !== $cpassword) {
        $errors['password'] = "Confirm password not matched!";
    }
    $email_check = "SELECT * FROM user WHERE u_email = '$email'";
    $res = mysqli_query($con, $email_check);
    if (mysqli_num_rows($res) > 0) {
        $errors['email'] = "Email that you have entered is already exist!";
    }

    $username_check = "SELECT * FROM user WHERE u_name = '$u_name'";
    $run_username = mysqli_query($con, $username_check);
    if (mysqli_num_rows($run_username) > 0) {
        $errors['email'] = "Username that you have entered is already exist!";
    }


    if (count($errors) === 0) {
        $encpass = password_hash($password, PASSWORD_BCRYPT);
        $code = rand(999999, 111111);
        $u_role = "patient";
        $status = "notverified";
        global $ip, $timestamp;
        // $lastIdValue = getLastIdValue('user', 'u_id');
        //   $rm_id = "RM" . $year2 . "STU" . $lastIdValue;
        $insert_data = "INSERT INTO user (u_name,u_full_name, u_email, u_password, u_vcode, u_status, u_role,u_timestamp,u_ip)
                        values('$u_name','$name','$email', '$encpass', '$code', '$status','$u_role', '$timestamp','$ip')";
        $data_check = mysqli_query($con, $insert_data);
        if ($data_check) {
            $subject = "Verification Code For HMS";
            $msg_with_code = "<h1>Use this OTP for registration $code</h1>";
            if (Send_Email($email, $subject, $msg_with_code)) {
                $info = "We've sent a verification code to your email - $email";
                $_SESSION['info'] = $info;
                $_SESSION['email'] = $email;
                $_SESSION['password'] = $password;
                header('location: user-otp.php');
                exit();
            } else {
                $errors['otp-error'] = "Failed while sending code!";
            }
        } else {
            $errors['db-error'] = "Failed while inserting data into database! ";
        }
    }
}


if (isset($_POST['signUpAsMember'])) {
    $u_name = mysqli_real_escape_string($con, $_POST['u_name']);
    $name = mysqli_real_escape_string($con, $_POST['name']);
    $email = mysqli_real_escape_string($con, $_POST['email']);
    $password = mysqli_real_escape_string($con, $_POST['password']);
    $cpassword = mysqli_real_escape_string($con, $_POST['cpassword']);
    if ($password !== $cpassword) {
        $errors['password'] = "Confirm password not matched!";
    }
    $email_check = "SELECT * FROM user WHERE u_email = '$email'";
    $res = mysqli_query($con, $email_check);
    if (mysqli_num_rows($res) > 0) {
        $errors['email'] = "Email that you have entered is already exist!";
    }

    $username_check = "SELECT * FROM user WHERE u_name = '$u_name'";
    $run_username = mysqli_query($con, $username_check);
    if (mysqli_num_rows($run_username) > 0) {
        $errors['email'] = "Username that you have entered is already exist!";
    }


    if (count($errors) === 0) {
        $encpass = password_hash($password, PASSWORD_BCRYPT);
        $code = rand(999999, 111111);
        $u_role = getOneData('temp', 'role', 'email', $email);
        $status = "notverified";
        global $ip, $timestamp;
        // $lastIdValue = getLastIdValue('user', 'u_id');
        //   $rm_id = "RM" . $year2 . "STU" . $lastIdValue;
        $insert_data = "INSERT INTO user (u_name,u_full_name, u_email, u_password, u_vcode, u_status, u_role,u_timestamp,u_ip)
                        values('$u_name','$name','$email', '$encpass', '$code', '$status','$u_role', '$timestamp','$ip')";
        $data_check = mysqli_query($con, $insert_data);
        if ($data_check) {
            // deleteOneRow('temp', 'email', $email);
            $subject = "Verification Code For HMS";
            $msg_with_code = "<h1>Use this OTP for registration $code</h1>";
            if (Send_Email($email, $subject, $msg_with_code)) {
                $info = "We've sent a verification code to your email - $email";
                $_SESSION['info'] = $info;
                $_SESSION['email'] = $email;
                $_SESSION['password'] = $password;
                header('location: user-otp.php');
                exit();
            } else {
                $errors['otp-error'] = "Failed while sending code!";
                echo "<script>alert('Alert!! $email')</script>";
            }
        } else {
            $errors['db-error'] = "Failed while inserting data into database! ";
        }
    }
}















//if user click verification code submit button
if (isset($_POST['check'])) {
    $_SESSION['info'] = "";
    $otp_code = mysqli_real_escape_string($con, $_POST['otp']);
    $check_code = "SELECT * FROM user WHERE u_vcode = $otp_code";
    $code_res = mysqli_query($con, $check_code);
    if (mysqli_num_rows($code_res) > 0) {
        $fetch_data = mysqli_fetch_assoc($code_res);
        $fetch_code = $fetch_data['u_vcode'];
        $email = $fetch_data['u_email'];
        $code = 0;
        $status = 'verified';
        $update_otp = "UPDATE user SET u_vcode = $code, u_status = '$status' WHERE u_vcode = $otp_code";
        $update_res = mysqli_query($con, $update_otp);
        if ($update_res) {
            $_SESSION['name'] = $u_name;
            $_SESSION['email'] = $email;
            header('location: index.php');
            exit();
        } else {
            $errors['otp-error'] = "Failed while updating code!";
        }
    } else {
        $errors['otp-error'] = "You've entered incorrect code!";
    }
}

//if user click resend code submit button
if (isset($_POST['resend'])) {
    $email = $_SESSION['email'];
    $query = mysqli_query($con, "SELECT * FROM user WHERE u_email='$email'");
    while ($row = mysqli_fetch_assoc($query))
        $code = $row['u_vcode'];
    $subject = "Resend Verification Code For HMS";
    $message = "<h1>We have resend your verification code, use this code to continue $code</h1>";
    if (Send_Email($email, $subject, $message)) {
        $info = "Resent Successfully - $email";
        $_SESSION['info'] = $info;
    } else {
        $info = "Failed while resending code to $email <br>Please contact us.";
        $_SESSION['info'] = $info;
    }
    header('location: user-otp.php');
}
//if user click login button
if (isset($_POST['login'])) {
    $rawEmail = mysqli_real_escape_string($con, $_POST['email']);
    if (!filter_var($rawEmail, FILTER_VALIDATE_EMAIL)) {
        //   $email = getOneData('user', 'u_email', 'hmd_id', $rawEmail);
        echo "<script>alert('Invalid Email')</script>";
    } else
        $email = $rawEmail;
    $password = mysqli_real_escape_string($con, $_POST['password']);
    $check_email = "SELECT * FROM user WHERE u_email = '$email'";
    $res = mysqli_query($con, $check_email);
    if (mysqli_num_rows($res) > 0) {
        $fetch = mysqli_fetch_assoc($res);
        $fetch_pass = $fetch['u_password'];
        if (password_verify($password, $fetch_pass)) {
            $_SESSION['email'] = $email;
            $status = $fetch['u_status'];
            $u_role = $fetch['u_role'];
            if ($status == 'verified') {
                $_SESSION['password'] = $password;
                $_SESSION['u_role'] = $u_role;
            } else {
                $query = mysqli_query($con, "SELECT * FROM user WHERE u_email='$email'");
                while ($row = mysqli_fetch_assoc($query))
                    $code = $row['u_vcode'];
                $subject = "Verification Code For HMS";
                $message = "<h1>Your verification code is $code</h1>";
                if (Send_Email($email, $subject, $message)) {
                    $info = "We have resent verification code, Please verify your email - $email";
                    $_SESSION['info'] = $info;
                    header('location: user-otp.php');
                } else {
                    $errors['otp-error'] = "Failed while sending code!!";
                }
            }
        } else {
            $errors['email'] = "Incorrect email or password!";
            $forgot = "<div class='link forget-pass text-left' ><a href='forgot-password.php'>Forgot password?</a></div>";
        }
    } else {
        $errors['email'] = "It's look like you're not yet a member! Click on SIGN UP.";
        // header('location: signup-user.php');
    }
}

//if user click continue button in forgot password form
if (isset($_POST['check-email'])) {
    $email = mysqli_real_escape_string($con, $_POST['email']);
    $check_email = "SELECT * FROM user WHERE u_email='$email'";
    $run_sql = mysqli_query($con, $check_email);
    if (mysqli_num_rows($run_sql) > 0) {
        $code = rand(999999, 111111);
        $insert_code = "UPDATE user SET u_vcode = $code WHERE u_email = '$email'";
        $run_query =  mysqli_query($con, $insert_code);
        if ($run_query) {
            $subject = "Password Reset Verification Code For HMS";
            $message = "<h1>Use this OTP to reset your password: <b>$code</b></h1>";
            if (Send_Email($email, $subject, $message)) {
                $info = "We've sent a password reset otp to your email - $email";
                $_SESSION['info'] = $info;
                $_SESSION['email'] = $email;
                header('location: reset-code.php');
                exit();
            } else {
                $errors['otp-error'] = "Failed while sending code!!";
            }
        } else {
            $errors['db-error'] = "Something went wrong! Please Contact us";
        }
    } else {
        $errors['email'] = "This email address does NOT EXIST!";
    }
}

//if user click check reset otp button
if (isset($_POST['check-reset-otp'])) {
    $_SESSION['info'] = "";
    $otp_code = mysqli_real_escape_string($con, $_POST['otp']);
    $check_code = "SELECT * FROM user WHERE u_vcode = $otp_code";
    $code_res = mysqli_query($con, $check_code);
    if (mysqli_num_rows($code_res) > 0) {
        $fetch_data = mysqli_fetch_assoc($code_res);
        $email = $fetch_data['u_email'];
        $_SESSION['email'] = $email;
        $info = "Please create a new password that you don't use on any other site.";
        $_SESSION['info'] = $info;
        header('location: new-password.php');
        exit();
    } else {
        $errors['otp-error'] = "You've entered incorrect code!";
    }
}

//if user click change password button
if (isset($_POST['change-password'])) {
    $_SESSION['info'] = "";
    $password = mysqli_real_escape_string($con, $_POST['password']);
    $cpassword = mysqli_real_escape_string($con, $_POST['cpassword']);
    if ($password !== $cpassword) {
        $errors['password'] = "Confirm password not matched!";
    } else {
        $code = 0;
        $email = $_SESSION['email']; //getting this email using session
        $encpass = password_hash($password, PASSWORD_BCRYPT);
        $update_pass = "UPDATE user SET u_vcode = $code, u_password = '$encpass' WHERE u_email = '$email'";
        $run_query = mysqli_query($con, $update_pass);
        if ($run_query) {
            $info = "Your password changed.<br>Now you can login with your new password.";
            $_SESSION['info'] = $info;
            header('Location: password-changed.php');
        } else {
            $errors['db-error'] = "Failed to change your password!";
        }
    }
}

//if login now button click
if (isset($_POST['login-now'])) {
    header('Location: login-user.php');
}


function Send_Email($user_email, $subject, $msg_with_code)
{
    $sender_email = "admin@hospital.softcse.ml	";
    $headers  = 'MIME-Version: 1.0' . "\r\n";
    $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
    $headers .= 'From: Hospital Management System<' . $sender_email . ">\r\n" .
        'Reply-To: ' . $sender_email . "\r\n" .
        'X-Mailer: PHP/' . phpversion();
    return mail($user_email, $subject, $msg_with_code, $headers);
}
