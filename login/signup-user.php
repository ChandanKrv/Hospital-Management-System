<?php require_once "controllerUserData.php"; ?>
<?php
error_reporting(E_ERROR | E_WARNING | E_PARSE);
$email =  $_SESSION['email'];
$sql = "SELECT * FROM user WHERE u_email ='$email'";
$run_Sql = mysqli_query($con, $sql);
if ($run_Sql) {
    $fetch_info = mysqli_fetch_assoc($run_Sql);
    $u_role = $fetch_info['u_role'];
}

if ($u_role == "doctor")
    header('location: ../doctor');
else
if ($u_role == "admin")
    header('location: ../admin');
$forgot = "";

$memberSignUp = false;
if (isset($_GET['ref']) && !empty($_GET['ref'])) {
    $refId = cleanInput($_GET['ref']);
    $email = getOneData('temp', 'email', 'unique_id', $refId);
    if ($email) {
        echo "<script>alert('Alert!! $email')</script>";
        $memberSignUp = true;
    } else {
        echo "<script>alert('Invalid Link')</script>";
        echo "<script>location.href='../'</script>";
    }
}



?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script src="https://kit.fontawesome.com/64d58efce2.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="assets/css/login_style.css" />
    <title>Sign in & Sign up Form</title>
</head>

<body>
    <div class="container">
        <div class="forms-container">
            <div class="signin-signup">
                <form action="login-user.php" class="sign-in-form" method="POST" autocomplete="">

                    <h2 class="title">Sign In</h2>
                    <div class="input-field">
                        <i class="fas fa-user"></i>
                        <input class="form-control" type="email" name="email" placeholder="Email Address" required value="">
                    </div>
                    <div class="input-field">
                        <i class="fas fa-lock"></i>
                        <input class="form-control" type="password" name="password" placeholder="Password" required>
                    </div>


                    <!-- <div class="link login-link text-center">Not yet a member? <a href="signup-user.php">Signup now</a></div> -->

                    <!-- <input class="form-control button" type="submit" name="login" value="Login"> -->
                    <input type="submit" value="Login" name="login" class="btn solid" />
                    <!-- <p class="social-text">Or Sign in with social platforms</p>
            <div class="social-media">
              <a href="#" class="social-icon">
                <i class="fab fa-facebook-f"></i>
              </a>
              <a href="#" class="social-icon">
                <i class="fab fa-twitter"></i>
              </a>
              <a href="#" class="social-icon">
                <i class="fab fa-google"></i>
              </a>
              <a href="#" class="social-icon">
                <i class="fab fa-linkedin-in"></i>
              </a>
            </div> -->
                </form>
                <form action="signup-user.php" class="sign-up-form" method="POST" autocomplete="">
                    <?php
                    if (count($errors) == 1) {
                    ?>
                        <div class="alert alert-danger text-center">
                            <?php
                            foreach ($errors as $showerror) {
                                echo $showerror;
                            }
                            ?>
                        </div>
                    <?php
                    } elseif (count($errors) > 1) {
                    ?>
                        <div class="alert alert-danger">
                            <?php
                            foreach ($errors as $showerror) {
                            ?>
                                <li><?php echo $showerror; ?></li>
                            <?php
                            }
                            ?>
                        </div>
                    <?php
                    }
                    ?>
                    <h2 class="title">Sign Up</h2>
                    <div class="input-field">
                        <i class="fas fa-user"></i>
                        <input class="form-control" type="text" name="u_name" placeholder="Username" required value="<?php echo $u_name ?>">
                    </div>
                    <div class="input-field">
                        <i class="fas fa-user"></i>
                        <input class="form-control" type="text" name="name" placeholder="Full Name" required value="<?php echo $name ?>">
                    </div>
                    <div class="input-field">
                        <i class="fas fa-envelope"></i>
                        <input class="form-control" type="email" name="email" placeholder="Email Address" <?php if ($memberSignUp) {
                                                                                                                echo "disabled";
                                                                                                            }    ?> required value="<?php echo $email ?>">
                    </div>
                    <div class="input-field">
                        <i class="fas fa-lock"></i>
                        <input class="form-control" type="password" name="password" minlength="6" placeholder="Password (Min 6 characters)" required>
                    </div>
                    <div class="input-field">
                        <i class="fas fa-lock"></i>
                        <input class="form-control" type="password" name="cpassword" minlength="6" placeholder="Confirm password" required>
                    </div>
                    <input type="submit" <?php if ($memberSignUp) {
                                                echo "name = 'signUpAsMember'";
                                            } else {
                                                echo "name = 'signup'";
                                            } ?> class="btn" value="Sign up" />
                </form>
            </div>
        </div>

        <div class="panels-container">
            <div class="panel left-panel">
                <div class="content">
                    <h3>Not yet a member ?</h3>
                    <p>
                        Please click on SIGN UP to continue
                    </p>

                    <button class="btn transparent" id="sign-up-btn">
                        Sign up
                    </button>
                </div>
                <img src="assets/img/log.svg" class="image" alt="" />
            </div>
            <div class="panel right-panel">
                <div class="content">
                    <h3>Already a member ?</h3>
                    <p>
                        Please click on SIGN IN to continue
                    </p>

                    <a href="login-user.php"><button class="btn transparent" id="sign-up-bt">
                            Sign In
                        </button></a>
                </div>
                <img src="assets/img/register.svg" class="image" alt="" />
            </div>
        </div>
    </div>
    <script type="text/javascript">
        const sign_in_btn = document.querySelector("#sign-in-btn");
        const sign_up_btn = document.querySelector("#sign-up-btn");
        const container = document.querySelector(".container");

        container.classList.add("sign-up-mode");

        sign_up_btn.addEventListener("click", () => {
            container.classList.add("sign-up-mode");
        });

        sign_in_btn.addEventListener("click", () => {
            container.classList.remove("sign-up-mode");
        });
    </script>
    <!-- <script src="assets/js/login_app1.js"></script> -->
</body>

</html>
<!-- <?php
        if (isset($_GET['page'])) {
            $page = $_GET['page'];
        } else {
            $page = 'login';
        }

        //echo $page;
        if ($page == 'register') {
            $source = 'sign-up-mode';
        } else {
            $source = 'sign-in-mode';
        }
        $forgot = "";
        ?> -->