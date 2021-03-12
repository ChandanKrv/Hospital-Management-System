<?php require_once "controllerUserData.php";
include_once('session.php');
session_start();
$u_email = $_SESSION['student_email'];
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title><?php echo $name ?> | Home</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        @import url('https://fonts.googleapis.com/css?family=Poppins:400,500,600,700&display=swap');

        nav {
            padding-left: 100px !important;
            padding-right: 100px !important;
            background: #6665ee;
            font-family: 'Poppins', sans-serif;
        }

        nav a.navbar-brand {
            color: #fff;
            font-size: 30px !important;
            font-weight: 500;
        }

        button a {
            color: #6665ee;
            font-weight: 500;
        }

        button a:hover {
            text-decoration: none;
        }

        h1 {
            position: absolute;
            top: 50%;
            left: 50%;
            width: 100%;
            text-align: center;
            transform: translate(-50%, -50%);
            font-size: 50px;
            font-weight: 600;
        }

        iframe {
            height: 646px;
        }

        /*@media (min-width: 320px) and (max-width: 920px)
		{
			iframe {
			    height:1200px;
			}
		}*/
    </style>
</head>

<body>
    <nav class="navbar">
        <a class="navbar-brand" href="#">HMS</a>
        <button type="button" class="btn btn-light"><a href="logout-user.php">Logout</a></button>
    </nav>
    <!--<h1>Welcome <?php echo $name ?> Bro Its working</h1>
    <h3>Your full name is <?php echo $full_name ?></h3>
    <h3>Your email is <?php echo $email ?></h3>-->
    <iframe src="../idcard.php?u_email=<?php echo $u_email ?>" width="100%" frameborder="0" allowfullscreen></iframe>



</body>

</html>