<?php

if (isset($_SESSION['email']) && !empty($_SESSION['email']) && isset($_SESSION['u_role']) && !empty($_SESSION['u_role'])) {
    // echo "<script>location.href='../admin'</script>";
   // header('location: ../' . $_SESSION['u_role']);
} else {
    header('location: ../login/login-user.php');
    //echo "<script>location.href='../login/login-user.php'</script>";
}
