<?php
require_once "controllerUserData.php";
if (isset($_SESSION['email']) && !empty($_SESSION['email']) && isset($_SESSION['u_role']) && !empty($_SESSION['u_role'])) {
    $u_role = $_SESSION['u_role'];
    //Folder name must be same as the data in u_role
    echo "<script>location.href='../$u_role'</script>";
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
                    <br>
                    <h2 class="title">Sign In </h2>
                    <div class="input-field">
                        <i class="fas fa-user"></i>
                        <input class="form-control " type="text" name="email" placeholder="Email Address / RM-Id" required value="<?php echo $email ?>">
                    </div>
                    <div class="input-field">
                        <i class="fas fa-lock"></i>
                        <input class="form-control" type="password" name="password" placeholder="Password" required>
                    </div>
                    <div class="link login-link text-center"><a href="forgot-password">Forgot Password ?</a></div>

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
                <form action="login-user.php?page=register" class="sign-up-form" method="POST" autocomplete="">
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
                    <h2 class="title">Sign up</h2>
                    <!--  <div class="input-field">
              <i class="fas fa-user"></i>
              <input class="form-control" type="text" name="name" placeholder="Username" required value="<?php //echo $u_name 
                                                                                                            ?>">
            </div>  -->
                    <div class="input-field">
                        <i class="fas fa-user"></i>
                        <input class="form-control" type="text" name="name" placeholder="Full Name" required value="<?php echo $name ?>">
                    </div>
                    <div class="input-field">
                        <i class="fas fa-envelope"></i>
                        <input class="form-control" type="email" name="email" placeholder="Email Address" required value="<?php echo $email ?>">
                    </div>
                    <div class="input-field">
                        <i class="fas fa-lock"></i>
                        <input class="form-control" type="password" name="password" placeholder="Password" required>
                    </div>
                    <div class="input-field">
                        <i class="fas fa-lock"></i>
                        <input class="form-control" type="password" name="cpassword" placeholder="Confirm password" required>
                    </div>
                    <input type="submit" name="signup" class="btn" value="Sign up" />
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

                    <a href="signup-user.php"><button class="btn transparent" id="sign-up-bt">
                            Sign up
                        </button></a>
                </div>
                <img src="assets/img/log.svg" class="image" alt="" />
            </div>
            <div class="panel right-panel">
                <div class="content">
                    <h3>Already a member ?</h3>
                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Nostrum
                        laboriosam ad deleniti.
                    </p>

                    <button class="btn transparent" id="sign-in-btn">
                        Sign in
                    </button>
                </div>
                <img src="assets/img/register.svg" class="image" alt="" />
            </div>
        </div>
    </div>
    <script type="text/javascript">
        const sign_in_btn = document.querySelector("#sign-in-btn");
        const sign_up_btn = document.querySelector("#sign-up-btn");
        const container = document.querySelector(".container");

        container.classList.add("sign-in-mode");

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