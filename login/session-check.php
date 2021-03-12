<?php

if (isset($_SESSION['email']) && !empty($_SESSION['email']) && isset($_SESSION['u_role']) && !empty($_SESSION['u_role'])) {
    $u_role = $_SESSION['u_role'];
    echo "<script>location.href='../$u_role'</script>";
} else {
    header('location: ../login/login-user.php');
}
?>
