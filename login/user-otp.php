<?php require_once "controllerUserData.php"; ?>
<?php
$email = $_SESSION['email'];
if ($email == false) {
    header('Location: login-user.php');
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script src="https://kit.fontawesome.com/64d58efce2.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../assets/css/login_style.css" />
    <title>Code Verification</title>
</head>

<body>
    <div class="container">
        <div class="forms-container">
            <div class="signin-signup">
                <form action="login-user.php" class="sign-in-form" method="POST" autocomplete="">
                    <!-- <h3 style="color: #444;"><?php
                                                    // if (count($errors) > 0) {
                                                    ?>
                        <div class="alert alert-danger text-center">
                            <?php
                            //     foreach ($errors as $showerror) {
                            //echo $showerror;
                            //     }
                            ?>
                        </div>
                        <?php
                        //    }
                        ?></h3><br>
            <h2 class="title">Sign in</h2>
            <div class="input-field">
              <i class="fas fa-user"></i>
              <input class="form-control" type="email" name="email" placeholder="Email Address" required value="<?php //echo $email 
                                                                                                                ?>">
            </div>
            <div class="input-field">
              <i class="fas fa-lock"></i>
              <input class="form-control" type="password" name="password" placeholder="Password" required>
            </div>
            <?php //echo $forgot; 
            ?> -->

                    <!-- <div class="link login-link text-center">Not yet a member? <a href="signup-user.php">Signup now</a></div> -->

                    <!-- <input class="form-control button" type="submit" name="login" value="Login"> -->
                    <!-- <input type="submit" value="Login" name="login" class="btn solid" /> -->
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
                <form action="user-otp.php" class="sign-up-form" method="POST" autocomplete="off">
                    <h2 class="title">Code Verification </h2>
                    <center>
                        <?php
                        if (isset($_SESSION['info'])) {
                        ?>
                            <div class="alert alert-success text-center">
                                <?php echo $_SESSION['info']; ?>
                            </div>
                        <?php
                        }
                        ?>
                        <?php
                        if (count($errors) > 0) {
                        ?>
                            <div class="alert alert-danger text-center">
                                <?php
                                foreach ($errors as $showerror) {
                                    echo $showerror;
                                }
                                ?>
                            </div>
                        <?php
                        }
                        ?>
                    </center>

                    <div class="input-field">
                        <i class="fas fa-lock"></i>
                        <input class="form-control" type="number" name="otp" placeholder="Enter verification code" require>
                    </div>

                    <input class="btn" type="submit" name="check" value="Submit" />
                    <!-- <p class="social-text">Or Sign up with social platforms</p>
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
                    <!-- <center><div class='link forget-pass text-left' ><a href='forgot-password.php'>Forgot password?</a></div></center> -->
                </form>

                <div>
                    <form action="user-otp.php" method="POST" autocomplete="off">

                        <input class="btn" type="submit" name="resend" value="Resend Code">

                    </form>
                </div>
            </div>
        </div>

        <div class="panels-container">
            <div class="panel left-panel">
                <div class="content">
                    <!-- <h3>Not yet a member ?</h3>
            <p>
              Lorem ipsum, dolor sit amet consectetur adipisicing elit. Debitis,
              ex ratione. Aliquid!
            </p>
            
            <button class="btn transparent" id="sign-up-btn">
              Sign up
            </button> -->
                </div>
                <img src="../assets/img/log.svg" class="image" alt="" />
            </div>
            <div class="panel right-panel">
                <div class="content">
                    <!-- <h3>Already a member ?</h3>
            <p>
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Nostrum
              laboriosam ad deleniti.
            </p>
           
            <a href="login-user.php"><button class="btn transparent" id="sign-up-bt">
              Sign up
            </button></a> -->
                </div>
                <img src="../assets/img/register.svg" class="image" alt="" />
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