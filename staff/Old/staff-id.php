<?php
include_once('staff_header.php');

if ($hms_id != '') {
    echo "<script>location.href='index'</script>";
}

if (isset($_POST['ads_staff'])) {
    //$u_id = $_POST["u_id"];
    $u_full_name = $_POST["s_full_name"];
    $s_gender = $_POST["s_gender"];
    $s_dob = $_POST["s_dob"];
    $s_department = $_POST["s_department"];
    $s_address = $_POST["s_address"];
    $s_timings = $_POST["s_timings"];
    $s_phone = $_POST["s_phone"];
    $s_bio = $_POST["s_bio"];
    $s_fees = $_POST["s_fees"];
    $s_speciality = $_POST["s_speciality"];
    // Getting file name
    $filename = $_FILES['s_image']['name'];
    // Valid extension
    $valis_ext = array('png', 'jpeg', 'jpg');
    $photoExt1 = @end(explode('.', $filename)); // explode the image name to get the extension
    $phototest1 = strtolower($photoExt1);
    $new_profle_pic = uniqid() . '.' . $phototest1;
    // Image Location
    $location = "../assets/images/doctors_img/" . $new_profle_pic;
    // file extension
    $file_extension = pathinfo($location, PATHINFO_EXTENSION);
    $file_extension = strtolower($file_extension);
    // Check extension
    echo $s_address;
    if (in_array($file_extension, $valis_ext)) {
        // Compress Image
        compressedImage($_FILES['s_image']['tmp_name'], $location, 60);
        //Here i am enter the insert code in the step ........
        //Pushing All data into database
        $data = array(
            'u_id' => $u_id,
            's_image'  =>   $new_profle_pic,
            's_gender'  =>  $s_gender,
            's_dob'  =>  $s_dob,
            's_department'  =>  $s_department,
            's_address'  =>  cleanInput($_POST['s_address']),
            's_timings'  =>  $s_timings,
            's_phone'  =>  cleanInput($_POST['s_phone']),
            's_bio'  =>  $s_bio,
            's_fees'  =>  cleanInput($_POST['s_fees']),
            's_speciality'  =>  $s_speciality,

        );
        
        if (insertData('staff', $data)) {
            if (updateOneData('user', 'hms_id', generateHMSID('staff'), 'u_email', $email) && updateOneData('user', 'u_full_name', $u_full_name, 'u_email', $email)) {
                echo "<script>alert('staff Added Successfully')</script>";
                echo "<script>location.href='index'</script>";
            } else {
                echo "<script>alert('Data Inserted, HMS-Id NOT generated')</script>";
            }
        } else {
            echo "<script>alert('Error!! staff Not Added')</script>";
        }
    } else {
        echo "<script>alert('Error!! Only png/jpg/jpeg are Allowed')</script>";
    }
}





?>
<div class="container-fluid">
    <div class="layout-specing">
        <div class="d-md-flex justify-content-between">
            <h5 class="mb-0">Add New staff</h5>

            <nav aria-label="breadcrumb" class="d-inline-block mt-4 mt-sm-0">
                <ul class="breadcrumb bg-transparent rounded mb-0 p-0">
                    <li class="breadcrumb-item"><a href="index-2">Doctris</a></li>
                    <li class="breadcrumb-item"><a href="staffs">staffs</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Add staff</li>
                </ul>
            </nav>
        </div>

        <div class="row">
            <div class="col-lg-8 mt-4">
                <div class="card border-0 p-4 rounded shadow">
                    <!-- <div class="row align-items-center">
                        <div class="col-lg-2 col-md-4">
                            <img src="../assets/images/doctors/01.jpg" class="avatar avatar-md-md rounded-pill shadow mx-auto d-block" alt="">
                        </div>
                        <!--end col--

                        <div class="col-lg-5 col-md-8 text-center text-md-start mt-4 mt-sm-0">
                            <h5 class="">Upload your picture</h5>
                            <p class="text-muted mb-0">For best results, use an image at least 600px by 600px in either .jpg or .png format</p>
                        </div>
                        <!--end col--

                        <div class="col-lg-5 col-md-12 text-lg-end text-center mt-4 mt-lg-0">
                            <a href="#" class="btn btn-primary">Upload</a>
                            <a href="#" class="btn btn-soft-primary ms-2">Remove</a>
                        </div>
                        <!--end col--
                    </div>
                    <!--end row-- -->

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
                                    <input name="s_full_name" type="text" class="form-control" value="<?php echo $u_full_name ?>" >
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
                                    <label class="form-label">Gender</label>
                                    <select class="form-control department-name select2input" name="s_gender">
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
                                    <input name="s_dob" type="date" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label class="form-label">Departments</label>
                                    <select class="form-control department-name select2input" name="s_department">
                                        <option value="Eye Care">Eye Care</option>
                                        <option value="Gynecologist">Gynecologist</option>
                                        <option value="Psychotherapist">Psychotherapist</option>
                                        <option value="Orthopedic">Orthopedic</option>
                                        <option value="Dentist">Dentist</option>
                                        <option value="Gastrologist">Gastrologist</option>
                                        <option value="Urologist">Urologist</option>
                                        <option value="Neurologist">Neurologist</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label class="form-label">Phone Number</label>
                                    <input name="s_phone" type="number" class="form-control" placeholder="Phone Number :">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label class="form-label">Appointment Fees</label>
                                    <input name="s_fees" type="number" class="form-control" placeholder="Appointment Fees :">
                                </div>
                            </div>
                            
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label class="form-label">Address</label>
                                    <textarea name="s_address" rows="3" class="form-control" placeholder="Address :"></textarea>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label class="form-label">Profile Image</label>
                                    <input name="s_image" type="file" class="form-control" required>
                                </div>
                            </div>
                            <!--end col-->
                            <div class="col-md-12">
                                <div class="mb-3">
                                    <label class="form-label">Visiting Hrs</label>
                                    <textarea name="s_timings" rows="3" class="form-control" placeholder="Visiting Hrs :"></textarea>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="mb-3">
                                    <label class="form-label">Your Bio Here</label>
                                    <textarea name="s_bio" rows="3" class="form-control" placeholder="Bio :"></textarea>
                                </div>
                            </div>                            
                            <div class="col-md-12">
                                <div class="mb-3">
                                    <label class="form-label">Your Specialities</label>
                                    <textarea name="s_speciality" rows="3" class="form-control" placeholder="Enter specialization in your field :"></textarea>
                                </div>
                            </div>
                           
                        </div>
                        <!--end row-->

                        <button type="submit" name="ads_staff" class="btn btn-primary">Create staff Id</button>
                    </form>
                </div>
            </div>
            <!--end col-->

            <div class="col-lg-4 mt-4">
                <div class="card rounded border-0 shadow">
                    <div class="p-4 border-bottom">
                        <h5 class="mb-0">staffs List</h5>
                    </div>

                    <ul class="list-unstyled mb-0 p-4" data-simplebar style="height: 664px;">
                        <li class="d-md-flex align-items-center text-center text-md-start">
                            <img src="../assets/images/doctors/01.jpg" class="avatar avatar-medium rounded-md shadow" alt="">

                            <div class="ms-md-3 mt-4 mt-sm-0">
                                <a href="#" class="text-dark h6">Dr. Calvin Carlo</a>
                                <p class="text-muted my-1">Cardiologist</p>
                                <p class="text-muted mb-0">3 Years Experienced</p>
                            </div>
                        </li>

                        <li class="d-md-flex align-items-center text-center text-md-start mt-4">
                            <img src="../assets/images/doctors/02.jpg" class="avatar avatar-medium rounded-md shadow" alt="">

                            <div class="ms-md-3 mt-4 mt-sm-0">
                                <a href="#" class="text-dark h6">Dr. Alex Smith</a>
                                <p class="text-muted my-1">Dentist</p>
                                <p class="text-muted mb-0">1 Years Experienced</p>
                            </div>
                        </li>

                        <li class="d-md-flex align-items-center text-center text-md-start mt-4">
                            <img src="../assets/images/doctors/03.jpg" class="avatar avatar-medium rounded-md shadow" alt="">

                            <div class="ms-md-3 mt-4 mt-sm-0">
                                <a href="#" class="text-dark h6">Dr. Cristina Luly</a>
                                <p class="text-muted my-1">Orthopedic</p>
                                <p class="text-muted mb-0">5 Years Experienced</p>
                            </div>
                        </li>

                        <li class="d-md-flex align-items-center text-center text-md-start mt-4">
                            <img src="../assets/images/doctors/04.jpg" class="avatar avatar-medium rounded-md shadow" alt="">

                            <div class="ms-md-3 mt-4 mt-sm-0">
                                <a href="#" class="text-dark h6">Dr. Dwayen Maria</a>
                                <p class="text-muted my-1">Gastrologist</p>
                                <p class="text-muted mb-0">2 Years Experienced</p>
                            </div>
                        </li>

                        <li class="d-md-flex align-items-center text-center text-md-start mt-4">
                            <img src="../assets/images/doctors/05.jpg" class="avatar avatar-medium rounded-md shadow" alt="">

                            <div class="ms-md-3 mt-4 mt-sm-0">
                                <a href="#" class="text-dark h6">Dr. Jenelia Focia</a>
                                <p class="text-muted my-1">Psychotherapist</p>
                                <p class="text-muted mb-0">3 Years Experienced</p>
                            </div>
                        </li>

                        <li class="mt-4">
                            <a href="staffs" class="btn btn-primary">All staffs</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <!--end row-->
    </div>
</div>
<!--end container-->
<?php include_once('staff_footer.php') ?>