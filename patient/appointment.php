<?php include_once('patient_header.php') ?>
<div class="container-fluid">
    <div class="layout-specing">
        <div class="row">
            <div class="col-xl-9 col-lg-6 col-md-4">
                <h5 class="mb-0">Appointment</h5>
                <nav aria-label="breadcrumb" class="d-inline-block mt-2">
                    <ul class="breadcrumb breadcrumb-muted bg-transparent rounded mb-0 p-0">
                        <li class="breadcrumb-item"><a href="index">Doctris</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Appointment</li>
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
                                        <option value="EY">Today</option>
                                        <option value="GY">Tomorrow</option>
                                        <option value="PS">Yesterday</option>
                                    </select>
                                </div>
                            </div>
                            <!--end col-->

                            <div class="col-sm-12 col-md-auto mt-4 mt-sm-0">
                                <div class="d-grid">
                                    <a href="#" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#appointmentform">+ Appointment</a>
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
                                <th class="border-bottom py-3" style="min-width: 180px;">Doctor Name</th>
                                <th class="border-bottom py-3">Department</th>
                                <th class="border-bottom py-3" style="min-width: 150px;">Email</th>
                                <th class="border-bottom py-3" style="min-width: 150px;">Date</th>
                                <th class="border-bottom py-3">Token Number</th>
                                <th class="border-bottom py-3">Fees</th>
                                <th class="border-bottom py-3" style="min-width: 150px;"></th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>



                                <th>1</th>
                                <td class="py-3">
                                    <a href="#" class="text-dark">
                                        <div class="d-flex align-items-center">
                                            <img src="../assets/images/client/01.jpg" class="avatar avatar-md-sm rounded-circle shadow" alt="">
                                            <span class="ms-2">Chandan</span>
                                        </div>
                                    </a>
                                </td>
                                <td>Cardiology</td>
                                <td>howard@contact.com</td>
                                <td>20th Dec 2020</td>
                                <td>3</td>
                                <td>$100</td>




                            </tr>


                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <div class="modal fade" id="appointmentform" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header border-bottom p-3">
                        <h5 class="modal-title" id="exampleModalLabel">Book an Appointment</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body p-3 pt-4">
                        <form method="post">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="mb-3">
                                        Patient HMS-Id
                                        <input name="hms_id_pt" id="name" type="text" class="form-control" placeholder="Patient Name :" value="<?php echo $hms_id ?>" readonly>
                                        <label class="form-label">Patient Name <span class="text-danger">*</span></label>
                                        <input name="u_full_name" id="name" type="text" class="form-control" placeholder="Patient Name :" value="<?php echo $u_full_name ?>" readonly>
                                    </div>
                                </div>
                                <!--end col-->

                                <div class="col-lg-6 col-md-9">
                                    <div class="mb-3">
                                        <label class="form-label">Select Doctor</label>
                                        <select class="form-control doctor-name select2input">
                                            <?php $hms_id_dc = getDropdownDoctor(); ?>
                                        </select>
                                    </div>
                                </div>
                                <!--end col-->
                                <div class="col-lg-6 col-md-9">
                                    <div class="mb-3">
                                        <label class="form-label"> Date : </label>
                                        <input name="apt_date" type="date" class="flatpickr flatpickr-input form-control" id="checkin-date">
                                    </div>
                                </div>
                                <!--end col-->
                                <div class="col-lg-4 col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label">Your Email <span class="text-danger">*</span></label>
                                        <input name="pt_email" id="email" type="email" class="form-control" placeholder="Your email :" value="<?php echo $u_email ?>" readonly>
                                    </div>
                                </div>
                                <!--end col-->

                                <div class="col-lg-4 col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label">Your Phone <span class="text-danger">*</span></label>
                                        <input name="pt_phone" id="phone" type="tel" class="form-control" placeholder="Your Phone :" value="<?php echo $phone ?>" readonly>
                                    </div>
                                </div>
                                <!--end col-->


                                <div class="col-lg-12">
                                    <div class="mb-3">
                                        <label class="form-label">Any Message ? (Optional)</label>
                                        <textarea name="apt_message" id="comments" rows="4" class="form-control" placeholder="Your Message :"></textarea>
                                    </div>
                                </div>
                                <!--end col-->

                                <div class="col-lg-12">
                                    <div class="d-grid">
                                        <button type="submit" name="bookAnApt" class="btn btn-primary">Book An Appointment</button>
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

        <!-- View Appintment Start -->
        <div class="modal fade" id="viewappointment" tabindex="-1" aria-labelledby="exampleModalLabel1" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header border-bottom p-3">
                        <h5 class="modal-title" id="exampleModalLabel1">Appointment Detail</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body p-3 pt-4">
                        <div class="d-flex align-items-center">
                            <img src="../assets/images/client/01.jpg" class="avatar avatar-small rounded-pill" alt="">
                            <h5 class="mb-0 ms-3">Howard Tanner</h5>
                        </div>
                        <ul class="list-unstyled mb-0 d-md-flex justify-content-between mt-4">
                            <li>
                                <ul class="list-unstyled mb-0">
                                    <li class="d-flex">
                                        <h6>Age:</h6>
                                        <p class="text-muted ms-2">25 year old</p>
                                    </li>

                                    <li class="d-flex">
                                        <h6>Gender:</h6>
                                        <p class="text-muted ms-2">Male</p>
                                    </li>

                                    <li class="d-flex">
                                        <h6 class="mb-0">Department:</h6>
                                        <p class="text-muted ms-2 mb-0">Cardiology</p>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <ul class="list-unstyled mb-0">
                                    <li class="d-flex">
                                        <h6>Date:</h6>
                                        <p class="text-muted ms-2">20th Dec 2020</p>
                                    </li>

                                    <li class="d-flex">
                                        <h6>Time:</h6>
                                        <p class="text-muted ms-2">11:00 AM</p>
                                    </li>

                                    <li class="d-flex">
                                        <h6 class="mb-0">Doctor:</h6>
                                        <p class="text-muted ms-2 mb-0">Dr. Calvin Carlo</p>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- View Appintment End -->

        <!-- Accept Appointment Start -->
        <div class="modal fade" id="acceptappointment" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-body py-5">
                        <div class="text-center">
                            <div class="icon d-flex align-items-center justify-content-center bg-soft-success rounded-circle mx-auto" style="height: 95px; width:95px;">
                                <i class="uil uil-check-circle h1 mb-0"></i>
                            </div>
                            <div class="mt-4">
                                <h4>Accept Appointment</h4>
                                <p class="para-desc mx-auto text-muted mb-0">Great doctor if you need your family member to get immediate assistance, emergency treatment.</p>
                                <div class="mt-4">
                                    <a href="#" class="btn btn-soft-success">Accept</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Accept Appointment End -->

        <!-- Cancel Appointment Start -->
        <div class="modal fade" id="cancelappointment" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-body py-5">
                        <div class="text-center">
                            <div class="icon d-flex align-items-center justify-content-center bg-soft-danger rounded-circle mx-auto" style="height: 95px; width:95px;">
                                <i class="uil uil-times-circle h1 mb-0"></i>
                            </div>
                            <div class="mt-4">
                                <h4>Cancel Appointment</h4>
                                <p class="para-desc mx-auto text-muted mb-0">Great doctor if you need your family member to get immediate assistance, emergency treatment.</p>
                                <div class="mt-4">
                                    <a href="#" class="btn btn-soft-danger">Cancel</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Cancel Appointment End -->
        <!-- Modal end -->
        <?php
        if (isset($_POST['bookAnApt'])) {
            $apt_date = $_POST['apt_date'];
            $hms_id_pt = $_POST['hms_id_pt'];
            $aptToken = patientTokenGeneration($hms_id_dc, $hms_id_pt, $apt_date);
            if ($aptToken > $max_appointment_in_a_day) {
                echo "<script>alert('Appointment is full for selected date')</script>";
            } else {
                $dataPush = array(
                    'hms_id_dc' => $hms_id_dc,
                    'hms_id_pt' => $hms_id_pt,
                    'apt_date' => $_POST['apt_date'],
                    'apt_message' => $_POST['apt_message'],
                    'apt_token' => $aptToken,
                    'apt_timestamp' => $timestamp
                );
                if (insertData('appointment', $dataPush)) {
                    echo "<script>alert('Success, Your token number is $aptToken')</script>";
                } else {
                    echo "<script>alert('Error!!')</script>";
                }
            }
        }

        ?>

        <?php include_once('patient_footer.php') ?>