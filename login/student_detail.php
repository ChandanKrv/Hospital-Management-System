<?php
//Not in use
session_start();
if (!isset($_SESSION['student_email'])) {
    echo "<script>alert('Please Login With RM-ID Or Email')</script>";
    header("location:../login/login-user.php");
    exit();
}
include_once('../include/function.php');
$u_email = $_SESSION['student_email'];

if (getOneData('user', 'rm_id', 'u_email', $u_email)) {
    echo "<script>alert('You have already created your RM-ID, You Can not generate multiple')</script>";
    echo "<script>location.href='index'</script>";
    exit();
}

$d_name = getOneData('user', 'u_full_name', 'u_email', $u_email);

if (isset($_POST['submit'])) {
    // $d_email = $_POST['d_email'];
    $d_phone = $_POST['d_phone'];
    $d_class = $_POST['d_class'];
    $d_RMID = generateHMSID($d_class);
    $d_school_name = $_POST['d_school_name'];
    $d_gender = $_POST['d_gender'];
    $d_dob = $_POST['d_dob'];
    $d_city = $_POST['d_city'];
    $d_state = $_POST['d_state'];
    $d_pin = $_POST['d_pin'];
    $d_parent_name = $_POST['d_parent_name'];
    $d_parent_email = $_POST['d_parent_email'];
    $d_parent_phone = $_POST['d_parent_phone'];

    if (!empty($_POST['check_list'])) {
        foreach ($_POST['check_list'] as $check) {
            $d_timing = $d_timing . $check . ',';
        }
    }

    // Getting file name
    $filename = $_FILES['pic']['name'];
    // Valid extension
    $valid_ext = array('png', 'jpeg', 'jpg');
    $photoExt1 = @end(explode('.', $filename)); // explode the image name to get the extension
    $phototest1 = strtolower($photoExt1);
    $new_profle_pic = uniqid() . '.' . $phototest1;
    // Image Location
    $location = "../dashboard/profile_pic/" . $new_profle_pic;

    $file_extension = pathinfo($location, PATHINFO_EXTENSION);
    $file_extension = strtolower($file_extension);

    if (in_array($file_extension, $valid_ext)) {
        compressedImage($_FILES['pic']['tmp_name'], $location, 60);
        $data = array(
            'u_email'  =>  $u_email,
            'd_phone'  =>  cleanInput($_POST['d_phone']),
            'd_class'  =>  cleanInput($_POST['d_class']),
            'd_image'  =>   $new_profle_pic,
            'd_school_name'  =>  cleanInput($_POST['d_school_name']),
            'd_gender'  =>  cleanInput($_POST['d_gender']),
            'd_dob'  =>  cleanInput($_POST['d_dob']),
            'd_city'  =>  cleanInput($_POST['d_city']),
            'd_state'  =>  cleanInput($_POST['d_state']),
            'd_pin'  =>  cleanInput($_POST['d_pin']),
            'd_parent_name'  =>  cleanInput($_POST['d_parent_name']),
            'd_parent_email'  =>  cleanInput($_POST['d_parent_email']),
            'd_parent_phone'  =>  cleanInput($_POST['d_parent_phone']),
            'd_timing'  =>  $d_timing,
            'd_timestamp' => $timestamp,
            'd_ip' => $ip,
        );
        if (insertData('student_detail', $data)) {
            if (updateOneData('user', 'rm_id', $d_RMID, 'u_email', $u_email)) {
                echo "<script>alert('Submitted Successfully')</script>";
                echo "<script>location.href='index'</script>";
            } else
                echo "<script>alert('RMID Not Generated, Record Added')</script>";
        } else {
            echo "<script>alert('Error!! Not Submitted')</script>";
        }
    } else {
        echo "<script>alert('Error!! Only png/jpg/jpeg are Allowed')</script>";
    }
}

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
    </style>
</head>

<body>
    <nav class="navbar">
        <a class="navbar-brand" href="#">Robomanthan</a>
        <button type="button" class="btn btn-light"><a href="logout-user.php">Logout</a></button>
    </nav>

    <div style="padding:50px;">

        <center>
            <h2>Student Details</h2>
        </center>
        <form method="post" enctype="multipart/form-data">
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label>Student Name</label>
                    <input disabled type="text" class="form-control" placeholder="<?php echo $d_name  ?>">
                </div>
                <div class="form-group col-md-6">
                    <label>Email ID</label>
                    <input disabled type="email" class="form-control" placeholder="<?php echo $u_email  ?>">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-4">
                    <label>Phone Number *</label>
                    <input name="d_phone" required type="number" placeholder="Your Contact Number" class="form-control">
                </div>
                <div class="form-group col-md-4">
                    <label for="inputState">Select Your Class *</label>
                    <select class="form-control" name="d_class" required>
                        <option value="S1">Below 6</option>
                        <option value="S6">6 to 8</option>
                        <option value="S9">9 to 12</option>
                        <option value="C1">1st Year</option>
                        <option value="C2">2nd Year</option>
                        <option value="C3">3rd Year</option>
                        <option value="C4">4th Year</option>
                        <option value="OT">Others</option>
                    </select>
                </div>
                <div class="form-group col-md-4">
                    <label>Profile Image *</label>
                    <input name="pic" type="file" class="form-control-file" required>
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label>School/College Name *</label>
                    <input name="d_school_name" type="text" class="form-control" required>
                </div>
                <div class="form-group col-md-3">
                    <label>Gender *</label>
                    <select class="form-control" name="d_gender" required>
                        <option value="Male">Male</option>
                        <option value="Female">Female</option>
                        <option value="Other">Other</option>
                    </select>
                </div>
                <div class="form-group col-md-3">
                    <label>Date Of Birth *</label>
                    <input name="d_dob" type="date" class="form-control" required>
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-4">
                    <label>City *</label>
                    <input name="d_city" type="text" class="form-control" required>
                </div>
                <div class="form-group col-md-4">
                    <label>State *</label>
                    <select id="" name="d_state" class="form-control" required>
                        <option value="Andhra Pradesh">Andhra Pradesh</option>
                        <option value="Andaman and Nicobar Islands">Andaman and Nicobar Islands</option>
                        <option value="Arunachal Pradesh">Arunachal Pradesh</option>
                        <option value="Assam">Assam</option>
                        <option value="Bihar">Bihar</option>
                        <option value="Chandigarh">Chandigarh</option>
                        <option value="Chhattisgarh">Chhattisgarh</option>
                        <option value="Dadar and Nagar Haveli">Dadar and Nagar Haveli</option>
                        <option value="Daman and Diu">Daman and Diu</option>
                        <option value="Delhi">Delhi</option>
                        <option value="Lakshadweep">Lakshadweep</option>
                        <option value="Puducherry">Puducherry</option>
                        <option value="Goa">Goa</option>
                        <option value="Gujarat">Gujarat</option>
                        <option value="Haryana">Haryana</option>
                        <option value="Himachal Pradesh">Himachal Pradesh</option>
                        <option value="Jammu and Kashmir">Jammu and Kashmir</option>
                        <option value="Jharkhand">Jharkhand</option>
                        <option value="Karnataka">Karnataka</option>
                        <option value="Kerala">Kerala</option>
                        <option value="Madhya Pradesh">Madhya Pradesh</option>
                        <option value="Maharashtra">Maharashtra</option>
                        <option value="Manipur">Manipur</option>
                        <option value="Meghalaya">Meghalaya</option>
                        <option value="Mizoram">Mizoram</option>
                        <option value="Nagaland">Nagaland</option>
                        <option value="Odisha">Odisha</option>
                        <option value="Punjab">Punjab</option>
                        <option value="Rajasthan">Rajasthan</option>
                        <option value="Sikkim">Sikkim</option>
                        <option value="Tamil Nadu">Tamil Nadu</option>
                        <option value="Telangana">Telangana</option>
                        <option value="Tripura">Tripura</option>
                        <option value="Uttar Pradesh">Uttar Pradesh</option>
                        <option value="Uttarakhand">Uttarakhand</option>
                        <option value="West Bengal" selected>West Bengal</option>
                    </select>
                </div>
                <div class="form-group col-md-4">
                    <label>Pin Code *</label>
                    <input type="number" name="d_pin" class="form-control" required>
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label>Parent's Name *</label>
                    <input type="text" name="d_parent_name" class="form-control" required>
                </div>
                <div class="form-group col-md-6">
                    <label>Parent's Email ID</label>
                    <input type="email" name="d_parent_email" class="form-control" placeholder="Email">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label>Parent's Phone Number</label>
                    <input type="number" name="d_parent_phone" class="form-control">
                </div>


                <div class="form-group col-md-6">
                    <label>Check All Suitable Class Timings</label><br>

                    <div class="form-check form-check-inline">
                        <label class="form-check-label">
                            <input type="checkbox" name="check_list[]" class="form-check-input" value="8-9AM">8-9 AM
                        </label>
                    </div>
                    <div class="form-check form-check-inline">
                        <label class="form-check-label">
                            <input type="checkbox" name="check_list[]" class="form-check-input" value="2-3PM">2-3 PM
                        </label>
                    </div>
                    <div class="form-check form-check-inline">
                        <label class="form-check-label">
                            <input type="checkbox" name="check_list[]" class="form-check-input" value="3-4PM">3-4 PM
                        </label>
                    </div>

                    <div class="form-check form-check-inline">
                        <label class="form-check-label">
                            <input type="checkbox" name="check_list[]" class="form-check-input" value="4-5PM">4-5 PM
                        </label>
                    </div>
                    <div class="form-check form-check-inline">
                        <label class="form-check-label">
                            <input type="checkbox" name="check_list[]" class="form-check-input" value="5-6PM">5-6 PM
                        </label>
                    </div>
                    <br>
                    <div class="form-check form-check-inline">
                        <label class="form-check-label">
                            <input type="checkbox" name="check_list[]" class="form-check-input" value="6-7PM">6-7 PM
                        </label>
                    </div>
                    <div class="form-check form-check-inline">
                        <label class="form-check-label">
                            <input type="checkbox" name="check_list[]" class="form-check-input" value="7-8PM">7-8 PM
                        </label>
                    </div>
                    <div class="form-check form-check-inline">
                        <label class="form-check-label">
                            <input type="checkbox" name="check_list[]" class="form-check-input" value="8-9PM">8-9 PM
                        </label>
                    </div>
                    <div class="form-check form-check-inline">
                        <label class="form-check-label">
                            <input type="checkbox" name="check_list[]" class="form-check-input" value="Other">Other
                        </label>
                    </div>


                </div>
                <button type="submit" name="submit" class="btn btn-primary">Submit</button>
        </form>




    </div>

</body>

</html>