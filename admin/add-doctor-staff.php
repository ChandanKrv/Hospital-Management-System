<?php include_once('admin_header.php') ?>
<div class="container-fluid">
    <div class="layout-specing">
        <div class="row">
            <div class="col-xl-9 col-lg-6 col-md-4">
                <h5 class="mb-0">Admission</h5>
                <nav aria-label="breadcrumb" class="d-inline-block mt-2">
                    <ul class="breadcrumb breadcrumb-muted bg-transparent rounded mb-0 p-0">
                        <li class="breadcrumb-item"><a href="index">Doctris</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Add Doctor-staff</li>
                    </ul>
                </nav>
            </div>
            <!--end col-->

            <div class="col-xl-3 col-lg-6 col-md-8 mt-4 mt-md-0">
                <div class="justify-content-md-end">
                    <form method="post">
                        <div class="row justify-content-between align-items-center">
                            <div class="col-sm-12 col-md">
                                <div class="mb-0 position-relative">
                                    <select class="form-control time-during select2input">
                                        <option value="EY">All</option>
                                        <option value="GY">Doctor</option>
                                        <option value="PS">Staff</option>
                                    </select>
                                </div>
                            </div>
                            <!--end col-->

                            <div class="col-sm-12 col-md-auto mt-4 mt-sm-0">
                                <div class="d-grid">
                                    <a href="#" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#additionform">+ Doctor / Staff</a>
                                </div>
                            </div>
                            <!--end col-->
                        </div>
                        <!--end row-->
                    </form>
                    <!--end form-->
                </div>
            </div>
            <!--end col-->
        </div>
        <!--end row-->

        <div class="row">
            <div class="col-12 mt-4">
                <div class="table-responsive shadow rounded">
                    <table class="table table-center bg-white mb-0">
                        <thead>
                            <tr>
                                <th class="border-bottom py-3" style="min-width: 50px;">#</th>
                                <th class="border-bottom py-3" style="min-width: 180px;">Name</th>
                                <th class="border-bottom py-3" style="min-width: 150px;">Email</th>
                                <th class="border-bottom py-3">Age</th>
                                <th class="border-bottom py-3">Gender</th>
                                <th class="border-bottom py-3">Department</th>
                                <th class="border-bottom py-3" style="min-width: 150px;">Date</th>
                                <th class="border-bottom py-3">Time</th>
                                <th class="border-bottom py-3" style="min-width: 220px;">Doctor</th>
                                <th class="border-bottom py-3">Fees</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th>1</th>
                                <td class="py-3">
                                    <a href="#" class="text-dark">
                                        <div class="d-flex align-items-center">
                                            <img src="../assets/images/client/01.jpg" class="avatar avatar-md-sm rounded-circle shadow" alt="">
                                            <span class="ms-2">Howard Tanner</span>
                                        </div>
                                    </a>
                                </td>
                                <td>howard@contact.com</td>
                                <td>25</td>
                                <td>Male</td>
                                <td>Cardiology</td>
                                <td>20th Dec 2020</td>
                                <td>11:00AM</td>
                                <td>
                                    <a href="#" class="text-dark">
                                        <div class="d-flex align-items-center">
                                            <img src="../assets/images/doctors/01.jpg" class="avatar avatar-md-sm rounded-circle border shadow" alt="">
                                            <span class="ms-2">Dr. Calvin Carlo</span>
                                        </div>
                                    </a>
                                </td>
                                <td>$50/Patient</td>
                            </tr>


                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <!--end row-->


    </div>
</div>
<!--end container-->

<!-- MODAL START -->
<!-- Modal start -->
<!-- Add New Appointment Start -->
<div class="modal fade" id="additionform" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-md modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header border-bottom p-3">
                <h5 class="modal-title" id="exampleModalLabel">Add Doctor / Staff</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body p-3 pt-4">
                <form method="post">
                    <div class="row">
                        <div class="col-lg-12">
                        </div>
                        <!--end col-->
                        <div class="col-lg-12">
                            <div class="mb-3">
                                <label class="form-label">Email Id <span class="text-danger">*</span></label>
                                <input name="email" id="email" type="email" class="form-control" placeholder="Email Id :">
                            </div>
                        </div>
                        <!--end col-->

                        <div class="col-lg-12">
                            <div class="mb-3">
                                <label class="form-label">Select Role</label>
                                <select class="form-control department-name select2input" name="role">
                                    <option>-Select-</option>
                                    <option value="doctor">Doctor</option>
                                    <option value="staff">Staff</option>
                                </select>
                            </div>
                        </div>
                        <!--end col-->

                        <div class="col-lg-12">
                            <div class="d-grid">
                                <button type="submit" name="addNow" class="btn btn-primary">Add Now</button>
                            </div>
                        </div>
                        <!--end col-->
                    </div>
                    <!--end row-->
                </form>
            </div>
        </div>
    </div>
</div>
<!-- Add New Appointment End -->

<?php
if (isset($_POST['addNow'])) {
    $new_email = $_POST["email"];
    $role = $_POST["role"];
    $ROLE = strtoupper($role);
    $unique_id = uniqid();
    $getLink = getCurrentURL() . '/login/signup-user?ref=' . $unique_id;
    $allData = array(
        'email' => $new_email,
        'role'  =>   $role,
        'unique_id'  =>  $unique_id
    );
    if (insertData('temp', $allData)) {
        echo "<script>alert('$ROLE Added Successfully')</script>";
        $mailContent = "Use this link and register yourself as $role : $getLink";
        if (SendMail($new_email, "You got joining link as $ROLE", $mailContent))
            echo "<script>alert('We have sent a joining link to $new_email')</script>";
        echo "<script>alert('OR you can share this link to new $role : $getLink ')</script>";
    } else {
        echo "<script>alert('Error!! $ROLE Not Added')</script>";
    }
}
?>

<!-- Modal end -->
<?php include_once('admin_footer.php') ?>