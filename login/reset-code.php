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
                <form action="reset-code.php" method="POST" autocomplete="" class="sign-in-form">
                    <h2 class="title">Code Verification</h2>
                    <center>
                        <?php
                        if (isset($_SESSION['info'])) {
                        ?>
                            <div class="alert alert-success text-center" style="padding: 0.4rem 0.4rem">
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
                        <input class="form-control" type="number" name="otp" placeholder="Enter code" required>
                    </div>

                    <input type="submit" name="check-reset-otp" value="Submit" class="btn solid" />

                </form>

            </div>


            <div class="panels-container">
                <div class="panel left-panel">
                    <div class="content" hidden>
                        <!-- <h3>Not yet a member ?</h3>
            <p>
              Lorem ipsum, dolor sit amet consectetur adipisicing elit. Debitis,
              ex ratione. Aliquid!
            </p>
            
            <button class="btn transparent" id="sign-up-btn">
              Sign up
            </button> -->
                    </div>
                    <img src="assets/img/log.svg" class="image" alt="" />
                </div>

            </div>
        </div>
        <script type="text/javascript">
            const sign_in_btn = document.querySelector("#sign-in-btn");
            const sign_up_btn = document.querySelector("#sign-up-btn");
            const container = document.querySelector(".container");



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