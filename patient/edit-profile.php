<?php
include_once('patient_header.php');

if (isset($_POST['add_patient'])) {
    //$u_id = $_POST["u_id"];
    //$d_image = $_POST["d_image"];

    $p_gender = $_POST["p_gender"];
    $p_dob = $_POST["p_dob"];
    $u_full_name = $_POST["u_full_name"];
    $p_department = $_POST["p_department"];
    $p_address = apostrophePush($_POST["p_address"]);
    $p_proof_type = $_POST["p_proof_type"];
    $p_proof_details = $_POST["p_proof_details"];
    $p_phone = $_POST["p_phone"];
    $p_bio = apostrophePush($_POST["p_bio"]);
   
    // Getting file name
    $filename = $_FILES['p_image']['name'];

    if ($filename) {
        $imageUploaded = true;
        // Valid extension
        $valid_ext = array('png', 'jpeg', 'jpg');
        $photoExt1 = @end(explode('.', $filename)); // explode the image name to get the extension
        $phototest1 = strtolower($photoExt1);
        $new_profle_pic = uniqid() . '.' . $phototest1;
        // Image Location
        $location = "../assets/images/patients_img/" . $new_profle_pic;
        // file extension Hello
        $file_extension = pathinfo($location, PATHINFO_EXTENSION);
        $file_extension = strtolower($file_extension);
        // Check extension
        if (in_array($file_extension, $valid_ext)) {
            // Compress Image
            compressedImage($_FILES['p_image']['tmp_name'], $location, 60);
            //Pushing All data into database
            $pushData = array(
                // 'u_id' => $u_id,
                'p_image'  =>   $new_profle_pic,
                'p_gender'  =>  $p_gender,
                'p_dob'  =>  $p_dob,
                'p_proof_type'  =>  $p_proof_type,
                'p_proof_details'  =>  $p_proof_details,
                'p_address'  =>  $p_address,               
                'p_bio'  =>  $p_bio,
                'p_phone'  =>  $p_phone,
            );
            if (updateData('patient', $pushData, "WHERE u_id = '$u_id'") and updateOneData('user', 'u_full_name', $u_full_name, 'u_email', $email)) {
                echo "<script>alert('Profile Updated Successfully')</script>";
                echo "<meta http-equiv='refresh' content='0'>"; //Auto Refresh
            } else {
                echo "<script>alert('Alert!! Profile Not Updated')</script>";
            }
        } else {
            echo "<script>alert('Error!! Only png/jpg/jpeg are Allowed')</script>";
        }
    } else {
        $pushData2 = array(
            'p_gender'  =>  $p_gender,
                'p_dob'  =>  $p_dob,
                'p_proof_type'  =>  $p_proof_type,
                'p_proof_details'  =>  $p_proof_details,
                'p_address'  =>  $p_address,               
                'p_bio'  =>  $p_bio,
                'p_phone'  =>  $p_phone,
        );
        if (updateData('patient', $pushData2, "WHERE u_id = '$u_id'") and updateOneData('user', 'u_full_name', $u_full_name, 'u_email', $email)) {
            echo "<script>alert('Profile Updated Successfully')</script>";
            echo "<meta http-equiv='refresh' content='0'>";
        } else {
            echo "<script>alert('Profile Not Updated')</script>";
        }
    }
}

?>
<div class="container-fluid">
    <div class="layout-specing">
        <div class="d-md-flex justify-content-between">
            <h5 class="mb-0">Edit Profile</h5>

            <nav aria-label="breadcrumb" class="d-inline-block mt-4 mt-sm-0">
                <ul class="breadcrumb bg-transparent rounded mb-0 p-0">
                    <li class="breadcrumb-item"><a href="index">Doctris</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Edit Profile</li>
                </ul>
            </nav>
        </div>

        <div class="row">
            <div class="col-lg-12 mt-4">
                <div class="card border-0 p-4 rounded shadow">
                  

                    <form class="mt-4" action="" method="post" enctype='multipart/form-data'>
                        <div class="row">

                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label class="form-label">User Name</label>
                                    <input name="u_name" type="text" class="form-control" value="<?php echo $u_name ?>" disabled>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label class="form-label">Full Name</label>
                                    <input name="u_full_name" type="text" class="form-control" value="<?php echo $u_full_name ?>">
                                </div>
                            </div>
                            <!--end col-->

                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label class="form-label">Email Id</label>
                                    <input name="u_email" type="email" class="form-control" value="<?php echo $u_email ?>" disabled>
                                </div>
                            </div>
                            <!--end col-->



                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label class="form-label">Gender (select)</label>
                                    <select class="form-control department-name select2input" name="p_gender">
                                        <option value="Male" <?php if ($gender == 'Male') { ?>selected<?php } ?>>Male</option>
                                        <option value="Female" <?php if ($gender  == 'Female') { ?>selected<?php } ?>>Female</option>
                                        <option value="Others" <?php if ($gender  == 'Others') { ?>selected<?php } ?>>Others</option>
                                    </select>
                                </div>
                            </div>
                            <!--end col-->
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label class="form-label">Date Of Birth</label>
                                    <input name="p_dob" type="date" class="form-control" value="<?php echo $data['p_dob'] ?>">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label class="form-label">ID Proof (select)</label>
                                    <select class="form-control department-name select2input" name="p_proof_type">
                                        <option value="Aadhar Card" <?php if ($p_proof_type == 'Aadhar Card') { ?>selected<?php } ?>>Aadhar Card</option>
                                        <option value="Voter Card" <?php if ($p_proof_type == 'Voter Card') { ?>selected<?php } ?>>Voter Card</option>
                                        
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label class="form-label">Enter ID Proof details</label>
                                    <input name="p_proof_details" type="text" class="form-control" placeholder="Enter Details :" value="<?php echo $p_proof_details ?>">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label class="form-label">Phone Number</label>
                                    <input name="p_phone" type="number" class="form-control" placeholder="Phone Number :" value="<?php echo $phone ?>">
                                </div>
                            </div>
                            

                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label class="form-label">Address</label>
                                    <textarea name="p_address" rows="3" class="form-control" placeholder="Address :"><?php echo apostrophePull($address) ?> </textarea>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label class="form-label">Profile Image</label>
                                    <input name="p_image" type="file" class="form-control">
                                </div>
                            </div>
                            <!--end col-->
                            
                            <div class="col-md-12">
                                <div class="mb-3">
                                    <label class="form-label">Your Bio Here</label>
                                    <textarea name="p_bio" rows="3" class="form-control" placeholder="Bio :"><?php echo apostrophePull($bio) ?></textarea>
                                </div>
                            </div>
                            

                        </div>
                        <!--end row-->

                        <button type="submit" name="add_patient" class="btn btn-primary">Edit Profile</button>
                    </form>
                </div>
            </div>
            <!--end col-->

           
        </div>
        <!--end row-->
    </div>
</div>
<!--end container-->
<?php include_once('patient_footer.php') ?>