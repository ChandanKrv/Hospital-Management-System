<?php include_once('doctor_header.php') ?>
<div class="container-fluid">
                    <div class="layout-specing">
                        <div class="row">
                            <div class="col-xl-9 col-lg-6 col-md-4">
                                <h5 class="mb-0">Admission</h5>
                                <nav aria-label="breadcrumb" class="d-inline-block mt-2">
                                    <ul class="breadcrumb breadcrumb-muted bg-transparent rounded mb-0 p-0">
                                        <li class="breadcrumb-item"><a href="index">Doctris</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">Admission</li>
                                    </ul>
                                </nav>
                            </div><!--end col-->

                            <div class="col-xl-3 col-lg-6 col-md-8 mt-4 mt-md-0">
                                <div class="justify-content-md-end">
                                    <form>
                                        <div class="row justify-content-between align-items-center">
                                            <div class="col-sm-12 col-md">
                                                <!-- <div class="mb-0 position-relative">
                                                    <select class="form-control time-during select2input">
                                                        <option value="EY">Today</option>
                                                        <option value="GY">Tomorrow</option>
                                                        <option value="PS">Yesterday</option>
                                                    </select>
                                                </div> -->
                                            </div><!--end col-->
                                            
                                            <!-- <div class="col-sm-12 col-md-auto mt-4 mt-sm-0">
                                                <div class="d-grid">
                                                    <a href="#" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#admissionform">+ Admission</a>
                                                </div>
                                            </div> --><!--end col-->
                                        </div><!--end row-->
                                    </form><!--end form-->
                                </div>
                            </div><!--end col-->
                        </div><!--end row-->
                        
                        <div class="row">
                            <div class="col-12 mt-4">
                                <div class="table-responsive shadow rounded">
                                    <table class="table table-center bg-white mb-0">
                                        <thead>
                                            <tr>
                                                <th class="border-bottom py-3" style="min-width: 50px;">#</th>
                                                <th class="border-bottom py-3" style="min-width: 180px;">Name</th>
                                                <th class="border-bottom py-3">Email Id</th>                                                
                                                <th class="border-bottom py-3">Age</th>
                                                <th class="border-bottom py-3">Gender</th>                                                
                                                <th class="border-bottom py-3" style="min-width: 150px;">Admission Date</th>                                        
                                                <th class="border-bottom py-3">Accept/Decline</th>                                               
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
                                                <td>patient@gmail.com</td>                                               
                                                <td>25</td>
                                                <td>Male</td>                                                
                                                <td>20th Dec 2020</td>                                       
                                                <td>
                                                    <a href="#" class="btn btn-icon btn-pills btn-soft-primary" data-bs-toggle="modal" data-bs-target="#viewadmission"><i class="uil uil-eye"></i></a>
                                                    <a href="#" class="btn btn-icon btn-pills btn-soft-success" data-bs-toggle="modal" data-bs-target="#acceptadmission"><i class="uil uil-check-circle"></i></a>
                                                    <a href="#" class="btn btn-icon btn-pills btn-soft-danger" data-bs-toggle="modal" data-bs-target="#canceladmission"><i class="uil uil-times-circle"></i></a>
                                                </td>
                                            </tr>                                       
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div><!--end row-->

                       <!--  <div class="row text-center">
                            <div class="col-12 mt-4">
                                <ul class="pagination justify-content-end mb-0 list-unstyled">
                                    <li><a href="#" class="pe-3 ps-3 pt-2 pb-2 border"> Prev</a></li>
                                    <li class="active"><a href="#" class="pe-3 ps-3 pt-2 pb-2 border">1</a></li>
                                    <li><a href="#" class="pe-3 ps-3 pt-2 pb-2 border">2</a></li>
                                    <li><a href="#" class="pe-3 ps-3 pt-2 pb-2 border">Next </a></li>
                                </ul><!--end pagination-->
                            </div><!--end col-->
                        </div><!--end row--> -->
                    </div>
                </div><!--end container-->

<!-- MODAL START -->
 

        <!-- View Appintment Start -->
        <div class="modal fade" id="viewadmission" tabindex="-1" aria-labelledby="exampleModalLabel1" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header border-bottom p-3">
                        <h5 class="modal-title" id="exampleModalLabel1">Admission Detail</h5>
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
        <div class="modal fade" id="acceptadmission" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-body py-5">
                        <div class="text-center">
                            <div class="icon d-flex align-items-center justify-content-center bg-soft-success rounded-circle mx-auto" style="height: 95px; width:95px;">
                                <i class="uil uil-check-circle h1 mb-0"></i>
                            </div>
                            <div class="mt-4">
                                <h4>Accept Admission</h4>
                                <b><p class="para-desc mx-auto text-muted mb-0">Select Staff for this patient and accept</p></b>
                                <center>
                                <div class="mb-3 col-md-6">                                
                                <select class="form-control department-name select2input" name="role">
                                    <option>-Select-</option>
                                    <option value="admin">Staff 1</option>
                                    <option value="doctor">Staff 2</option>
                                    <option value="staff">Staff 3</option>
                                </select>
                                </div>
                                </center>
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
        <div class="modal fade" id="canceladmission" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-body py-5">
                        <div class="text-center">
                            <div class="icon d-flex align-items-center justify-content-center bg-soft-danger rounded-circle mx-auto" style="height: 95px; width:95px;">
                                <i class="uil uil-times-circle h1 mb-0"></i>
                            </div>
                            <div class="mt-4">
                                <h4>Refer Admission</h4>
                                <b><p class="para-desc mx-auto text-muted mb-0">Refer this patient to other Doctor</p></b>
                                <center>
                                <div class="mb-3 col-md-6">                                
                                <select class="form-control department-name select2input" name="role">
                                    <option>-Select-</option>
                                    <option value="admin">Doctor 1</option>
                                    <option value="doctor">Doctor 2</option>
                                    <option value="staff">Doctor 3</option>
                                </select>
                                </div>
                                </center>
                                <div class="mt-4">
                                    <a href="#" class="btn btn-soft-danger">Refer</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Cancel Appointment End -->
        <!-- Modal end -->
<?php include_once('doctor_footer.php') ?>