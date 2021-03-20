<?php
include_once('doctor_header.php');
//$data=getAllData('doctor','user.u_id', $u_id);

?>
<div class="container-fluid">
    <div class="layout-specing">
        <div class="d-md-flex justify-content-between">
            <h5 class="mb-0">Doctor Profile & Settings</h5>

            <nav aria-label="breadcrumb" class="d-inline-block mt-4 mt-sm-0">
                <ul class="breadcrumb bg-transparent rounded mb-0 p-0">
                    <li class="breadcrumb-item"><a href="index">Doctris</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Profile</li>
                </ul>
            </nav>
        </div>

        <div class="card bg-white rounded shadow overflow-hidden mt-4 border-0">
            <div class="p-5 bg-primary bg-gradient"></div>
            <div class="avatar-profile d-flex margin-nagative mt-n5 position-relative ps-3">
                <img src="../assets/images/doctors_img/<?php echo $data['d_image']; ?>" class="rounded-circle shadow-md avatar avatar-medium" alt="">
                <div class="mt-4 ms-3 pt-3">
                    <h5 class="mt-3 mb-1">Dr. <?php echo $data['u_full_name']; ?></h5>
                    <p class="text-muted mb-0"><?php echo $data['d_department']; ?></p>
                </div>
            </div>

            <div class="row">
                <div class="col-12 mt-4">
                    <div class="card border-0 rounded-0 p-4">
                        <ul class="nav nav-pills nav-justified flex-column flex-sm-row rounded shadow overflow-hidden bg-light" id="pills-tab" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link rounded-0 active" id="overview-tab" data-bs-toggle="pill" href="#pills-overview" role="tab" aria-controls="pills-overview" aria-selected="false">
                                    <div class="text-center pt-1 pb-1">
                                        <h4 class="title fw-normal mb-0">Overview</h4>
                                    </div>
                                </a>
                                <!--end nav link-->
                            </li>
                            <!--end nav item-->

                            <!-- <li class="nav-item">
                                                <a class="nav-link rounded-0" id="experience-tab" data-bs-toggle="pill" href="#pills-experience" role="tab" aria-controls="pills-experience" aria-selected="false">
                                                    <div class="text-center pt-1 pb-1">
                                                        <h4 class="title fw-normal mb-0">Experience</h4>
                                                    </div>
                                                </a><!-end nav link--
                                            </li><!-end nav item--
                                            
                                            <li class="nav-item">
                                                <a class="nav-link rounded-0" id="review-tab" data-bs-toggle="pill" href="#pills-review" role="tab" aria-controls="pills-review" aria-selected="false">
                                                    <div class="text-center pt-1 pb-1">
                                                        <h4 class="title fw-normal mb-0">Reviews</h4>
                                                    </div>
                                                </a><!-end nav link--
                                            </li><!-end nav item-- -->

                            <li class="nav-item">
                                <a class="nav-link rounded-0" id="timetable-tab" data-bs-toggle="pill" href="#pills-timetable" role="tab" aria-controls="pills-timetable" aria-selected="false">
                                    <div class="text-center pt-1 pb-1">
                                        <h4 class="title fw-normal mb-0">Time Table</h4>
                                    </div>
                                </a>
                                <!--end nav link-->
                            </li>
                            <!--end nav item-->

                            <li class="nav-item">
                                <a class="nav-link rounded-0" id="settings-tab" data-bs-toggle="pill" href="#pills-settings" role="tab" aria-controls="pills-settings" aria-selected="false">
                                    <div class="text-center pt-1 pb-1">
                                        <h4 class="title fw-normal mb-0">Settings</h4>
                                    </div>
                                </a>
                                <!--end nav link-->
                            </li>
                            <!--end nav item-->
                        </ul>
                        <!--end nav pills-->

                        <div class="tab-content mt-2" id="pills-tabContent">
                            <div class="tab-pane fade show active" id="pills-overview" role="tabpanel" aria-labelledby="overview-tab">
                                <p class="text-muted"><?php echo apostrophePull($data['d_bio']); ?></p>

                                <h6 class="mb-0">Specialties: </h6>
                                <p><?php echo apostrophePull($data['d_speciality']); ?></p>

                                <!-- <ul class="list-unstyled mt-4">
                                                    <li class="mt-1"><i class="uil uil-arrow-right text-primary"></i> Women's health services</li>
                                                    <li class="mt-1"><i class="uil uil-arrow-right text-primary"></i> Pregnancy care</li>
                                                    <li class="mt-1"><i class="uil uil-arrow-right text-primary"></i> Surgical procedures</li>
                                                    <li class="mt-1"><i class="uil uil-arrow-right text-primary"></i> Specialty care</li>
                                                    <li class="mt-1"><i class="uil uil-arrow-right text-primary"></i> Conclusion</li>
                                                </ul> -->


                            </div>
                            <!--end teb pane-->



                            <div class="tab-pane fade" id="pills-timetable" role="tabpanel" aria-labelledby="timetable-tab">
                                <div class="row">
                                    <div class="col-lg-4 col-md-12">
                                        <h4>Visiting Hours</h4>
                                        <p><?php echo apostrophePull($data['d_timings']); ?></p>
                                        <!-- <div class="card border-0 p-3 rounded shadow">
                                                            <ul class="list-unstyled mb-0">
                                                                <li class="d-flex justify-content-between my-1">
                                                                    <p class="text-muted mb-0"><i class="ri-time-fill text-primary align-middle h5 mb-0"></i> Monday</p>
                                                                    <p class="text-primary mb-0"><span class="text-dark">Time:</span> 8.00 - 20.00</p>
                                                                </li>
                                                                <li class="d-flex justify-content-between my-1">
                                                                    <p class="text-muted mb-0"><i class="ri-time-fill text-primary align-middle h5 mb-0"></i> Tuesday</p>
                                                                    <p class="text-primary mb-0"><span class="text-dark">Time:</span> 8.00 - 20.00</p>
                                                                </li>
                                                                <li class="d-flex justify-content-between my-1">
                                                                    <p class="text-muted mb-0"><i class="ri-time-fill text-primary align-middle h5 mb-0"></i> Wednesday</p>
                                                                    <p class="text-primary mb-0"><span class="text-dark">Time:</span> 8.00 - 20.00</p>
                                                                </li>
                                                                <li class="d-flex justify-content-between my-1">
                                                                    <p class="text-muted mb-0"><i class="ri-time-fill text-primary align-middle h5 mb-0"></i> Thursday</p>
                                                                    <p class="text-primary mb-0"><span class="text-dark">Time:</span> 8.00 - 20.00</p>
                                                                </li>
                                                                <li class="d-flex justify-content-between my-1">
                                                                    <p class="text-muted mb-0"><i class="ri-time-fill text-primary align-middle h5 mb-0"></i> Friday</p>
                                                                    <p class="text-primary mb-0"><span class="text-dark">Time:</span> 8.00 - 20.00</p>
                                                                </li>
                                                                <li class="d-flex justify-content-between my-1">
                                                                    <p class="text-muted mb-0"><i class="ri-time-fill text-primary align-middle h5 mb-0"></i> Saturday</p>
                                                                    <p class="text-primary mb-0"><span class="text-dark">Time:</span> 8.00 - 18.00</p>
                                                                </li>
                                                                <li class="d-flex justify-content-between my-1">
                                                                    <p class="text-muted mb-0"><i class="ri-time-fill text-primary align-middle h5 mb-0"></i> Sunday</p>
                                                                    <p class="text-primary mb-0"><span class="text-dark">Time:</span> 8.00 - 14.00</p>
                                                                </li>
                                                            </ul>
                                                        </div> -->
                                    </div>
                                    <!--end col-->

                                    <div class="col-lg-4 col-md-6 mt-4 mt-lg-0 pt-2 pt-lg-0">
                                        <div class="card border-0 text-center features feature-primary">
                                            <div class="icon text-center mx-auto rounded-md">
                                                <i class="uil uil-phone h3 mb-0"></i>
                                            </div>

                                            <div class="card-body p-0 mt-4">
                                                <h5 class="title fw-bold">Phone</h5>
                                                <p class="text-muted">Great doctor if you need your family member to get effective immediate assistance</p>
                                                <a href="tel:<?php echo $data['d_phone']; ?>" class="link"><?php echo $data['d_phone']; ?></a>
                                            </div>
                                        </div>
                                    </div>
                                    <!--end col-->

                                    <div class="col-lg-4 col-md-6 mt-4 mt-lg-0 pt-2 pt-lg-0">
                                        <div class="card border-0 text-center features feature-primary">
                                            <div class="icon text-center mx-auto rounded-md">
                                                <i class="uil uil-envelope h3 mb-0"></i>
                                            </div>

                                            <div class="card-body p-0 mt-4">
                                                <h5 class="title fw-bold">Email</h5>
                                                <p class="text-muted">Great doctor if you need your family member to get effective immediate assistance</p>
                                                <a href="mailto:<?php echo $data['u_email']; ?>" class="link"><?php echo $data['u_email']; ?></a>
                                            </div>
                                        </div>
                                    </div>
                                    <!--end col-->
                                </div>
                                <!--end row-->
                            </div>
                            <!--end teb pane-->

                            <div class="tab-pane fade" id="pills-settings" role="tabpanel" aria-labelledby="settings-tab">
                                <h5 class="mb-1">Settings</h5>
                                <div class="row">
                                    <?php include_once('edit-profile.php') ?>
                                </div>
                                <!--end row-->
                            </div>
                            <!--end teb pane-->
                        </div>
                        <!--end tab content-->
                    </div>
                </div>
                <!--end col-->
            </div>
            <!--end row-->
        </div>
    </div>
</div>
<!--end container-->
<?php include_once('doctor_footer.php') ?>