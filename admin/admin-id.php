<?php
include_once('admin_header.php');
/* 
if ($hms_id != '') {
    echo "<script>location.href='index'</script>";
} */



if (isset($_POST['add_patient'])) {
    //$u_id = $_POST["u_id"];
    $u_full_name = $_POST["u_full_name"];
    $p_gender = $_POST["p_gender"];
    $p_dob = $_POST["p_dob"];
    $p_proof_type = $_POST["p_proof_type"];
    $p_proof_details = $_POST["p_proof_details"];
    $p_address = $_POST["p_address"];
    $p_phone = $_POST["p_phone"];
    $p_bio = $_POST["p_bio"];

    // Getting file name
    $filename = $_FILES['p_image']['name'];
    // Valid extension
    $valid_ext = array('png', 'jpeg', 'jpg');
    $photoExt1 = @end(explode('.', $filename)); // explode the image name to get the extension
    $phototest1 = strtolower($photoExt1);
    $new_profle_pic = uniqid() . '.' . $phototest1;
    // Image Location
    $location = "../assets/images/patients_img/" . $new_profle_pic;
    // file extension
    $file_extension = pathinfo($location, PATHINFO_EXTENSION);
    $file_extension = strtolower($file_extension);
    // Check extension
    echo $p_address;
    if (in_array($file_extension, $valid_ext)) {
        // Compress Image
        compressedImage($_FILES['p_image']['tmp_name'], $location, 60);
        //Here i am enter the insert code in the step ........
        //Pushing All data into database
        $data = array(
            'u_id' => $u_id,
            'p_image'  =>   $new_profle_pic,
            'p_gender'  =>  $p_gender,
            'p_dob'  =>  $p_dob,
            'p_proof_type'  =>  $p_proof_type,
            'p_proof_details'  =>  $p_proof_details,
            'p_address'  =>  cleanInput($_POST['p_address']),
            'p_phone'  =>  cleanInput($_POST['p_phone']),
            'p_bio'  =>  $p_bio,


        );

        if (insertData('patient', $data)) {
            if (updateOneData('user', 'hms_id', generateHMSID('patient'), 'u_email', $email) && updateOneData('user', 'u_full_name', $u_full_name, 'u_email', $email)) {
                echo "<script>alert('Patient Added Successfully')</script>";
                echo "<script>location.href='index'</script>";
            } else {
                echo "<script>alert('Data Inserted, HMS-Id NOT generated')</script>";
            }
        } else {
            echo "<script>alert('Error!! Patient Not Added')</script>";
        }
    } else {
        echo "<script>alert('Error!! Only png/jpg/jpeg are Allowed')</script>";
    }
}





?>
<div class="container-fluid">
    <div class="layout-specing">
        <div class="d-md-flex justify-content-between">
            <h5 class="mb-0">Create Patient Id</h5>

            <nav aria-label="breadcrumb" class="d-inline-block mt-4 mt-sm-0">
                <ul class="breadcrumb bg-transparent rounded mb-0 p-0">
                    <li class="breadcrumb-item"><a href="index">Doctris</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Add Patient</li>
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
                                    <input name="u_email" type="email" class="form-control" value="<?php echo $email ?>" disabled>
                                </div>
                            </div>
                            <!--end col-->



                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label class="form-label">Gender (select)</label>
                                    <select class="form-control department-name select2input" name="p_gender">
                                        <option value="Male">Male</option>
                                        <option value="Female">Female</option>
                                        <option value="Others">Others</option>
                                    </select>
                                </div>
                            </div>
                            <!--end col-->
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label class="form-label">Date Of Birth</label>
                                    <input name="p_dob" type="date" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label class="form-label">ID Proof (select)</label>
                                    <select class="form-control department-name select2input" name="p_proof_type">
                                        <option value="Aadhar card">Aadhar card</option>
                                        <option value="Voter card">Voter card</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label class="form-label">Enter ID Proof details</label>
                                    <input name="p_proof_details" type="text" class="form-control" placeholder="Enter Details :">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label class="form-label">Phone Number</label>
                                    <input name="p_phone" type="number" class="form-control" placeholder="Phone Number :">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label class="form-label">Address</label>
                                    <textarea name="p_address" rows="3" class="form-control" placeholder="Address :"></textarea>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label class="form-label">Profile Image</label>
                                    <input name="p_image" type="file" class="form-control" required>
                                </div>
                            </div>

                            <div class="col-md-12">
                                <div class="mb-3">
                                    <label class="form-label">Your Bio Here</label>
                                    <textarea name="p_bio" rows="3" class="form-control" placeholder="Bio :"></textarea>
                                </div>
                            </div>


                        </div>
                        <!--end row-->

                        <button type="submit" name="add_patient" class="btn btn-primary">Create Patient Id</button>
                    </form>
                </div>
            </div>
            <!--end col-->

        </div>
        <!--end row-->
    </div>
</div>
<!--end container-->
<?php include_once('admin_footer.php') ?>