<?php include_once('admin_header.php') ?>

          

                <div class="container-fluid">
                    <div class="layout-specing">
                        <h5 class="mb-0">Dashboard</h5>

                        <div class="row">
                            <div class="col-xl-2 col-lg-4 col-md-4 mt-4">
                                <div class="card features feature-primary rounded border-0 shadow p-4">
                                    <div class="d-flex align-items-center">
                                        <div class="icon text-center rounded-md">
                                            <i class="uil uil-bed h3 mb-0"></i>
                                        </div>
                                        <div class="flex-1 ms-2">
                                            <h5 class="mb-0">558</h5>
                                            <p class="text-muted mb-0">Patients</p>
                                        </div>
                                    </div>
                                </div>
                            </div><!--end col-->
                            
                            <div class="col-xl-2 col-lg-4 col-md-4 mt-4">
                                <div class="card features feature-primary rounded border-0 shadow p-4">
                                    <div class="d-flex align-items-center">
                                        <div class="icon text-center rounded-md">
                                            <i class="uil uil-file-medical-alt h3 mb-0"></i>
                                        </div>
                                        <div class="flex-1 ms-2">
                                            <h5 class="mb-0">$2164</h5>
                                            <p class="text-muted mb-0">Avg. costs</p>
                                        </div>
                                    </div>
                                </div>
                            </div><!--end col-->
                            
                            <div class="col-xl-2 col-lg-4 col-md-4 mt-4">
                                <div class="card features feature-primary rounded border-0 shadow p-4">
                                    <div class="d-flex align-items-center">
                                        <div class="icon text-center rounded-md">
                                            <i class="uil uil-social-distancing h3 mb-0"></i>
                                        </div>
                                        <div class="flex-1 ms-2">
                                            <h5 class="mb-0">112</h5>
                                            <p class="text-muted mb-0">Staff Members</p>
                                        </div>
                                    </div>
                                </div>
                            </div><!--end col-->
                            
                            <div class="col-xl-2 col-lg-4 col-md-4 mt-4">
                                <div class="card features feature-primary rounded border-0 shadow p-4">
                                    <div class="d-flex align-items-center">
                                        <div class="icon text-center rounded-md">
                                            <i class="uil uil-ambulance h3 mb-0"></i>
                                        </div>
                                        <div class="flex-1 ms-2">
                                            <h5 class="mb-0">16</h5>
                                            <p class="text-muted mb-0">Vehicles</p>
                                        </div>
                                    </div>
                                    
                                </div>
                            </div><!--end col-->
                            
                            <div class="col-xl-2 col-lg-4 col-md-4 mt-4">
                                <div class="card features feature-primary rounded border-0 shadow p-4">
                                    <div class="d-flex align-items-center">
                                        <div class="icon text-center rounded-md">
                                            <i class="uil uil-medkit h3 mb-0"></i>
                                        </div>
                                        <div class="flex-1 ms-2">
                                            <h5 class="mb-0">220</h5>
                                            <p class="text-muted mb-0">Appointment</p>
                                        </div>
                                    </div>
                                </div>
                            </div><!--end col-->
                            
                            <div class="col-xl-2 col-lg-4 col-md-4 mt-4">
                                <div class="card features feature-primary rounded border-0 shadow p-4">
                                    <div class="d-flex align-items-center">
                                        <div class="icon text-center rounded-md">
                                            <i class="uil uil-medical-drip h3 mb-0"></i>
                                        </div>
                                        <div class="flex-1 ms-2">
                                            <h5 class="mb-0">10</h5>
                                            <p class="text-muted mb-0">Operations</p>
                                        </div>
                                    </div>
                                </div>
                            </div><!--end col-->
                        </div><!--end row-->

                        <div class="row">
                            <div class="col-xl-8 col-lg-7 mt-4">
                                <div class="card shadow border-0 p-4">
                                    <div class="d-flex justify-content-between align-items-center mb-3">
                                        <h6 class="align-items-center mb-0">Patients visit by Gender</h6>
                                        
                                        <div class="mb-0 position-relative">
                                            <select class="form-select form-control" id="yearchart">
                                                <option selected>2020</option>
                                                <option value="2019">2019</option>
                                                <option value="2018">2018</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div id="dashboard" class="apex-chart"></div>
                                </div>
                            </div><!--end col-->

                            <div class="col-xl-4 col-lg-5 mt-4">
                                <div class="card shadow border-0 p-4">
                                    <div class="d-flex justify-content-between align-items-center mb-3">
                                        <h6 class="align-items-center mb-0">Patients by Department</h6>
                                        
                                        <div class="mb-0 position-relative">
                                            <select class="form-select form-control" id="dailychart">
                                                <option selected>Today</option>
                                                <option value="2019">Yesterday</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div id="department" class="apex-chart"></div>
                                </div>
                            </div><!--end col-->
                        </div><!--end row-->

                        <div class="row">
                            <div class="col-xl-4 col-lg-6 mt-4">
                                <div class="card border-0 shadow rounded">
                                    <div class="d-flex justify-content-between align-items-center p-4 border-bottom">
                                        <h6 class="mb-0"><i class="uil uil-calender text-primary me-1 h5"></i> Latest Appointment</h6>
                                        <h6 class="text-muted mb-0">55 Patients</h6>
                                    </div>

                                    <ul class="list-unstyled mb-0 p-4">
                                        <li>
                                            <div class="d-flex align-items-center justify-content-between">
                                                <div class="d-inline-flex">
                                                    <img src="../assets/images/client/01.jpg" class="avatar avatar-md-sm rounded-circle border shadow" alt="">
                                                    <div class="ms-3">
                                                        <h6 class="text-dark mb-0 d-block">Calvin Carlo</h6>
                                                        <small class="text-muted">Booking on 27th Nov, 2020</small>
                                                    </div>
                                                </div>
                                                <div>
                                                    <a href="#" class="btn btn-icon btn-pills btn-soft-success"><i class="uil uil-check icons"></i></a>
                                                    <a href="#" class="btn btn-icon btn-pills btn-soft-danger"><i class="uil uil-times icons"></i></a>
                                                </div>
                                            </div>
                                        </li>

                                        <li class="mt-4">
                                            <div class="d-flex align-items-center justify-content-between">
                                                <div class="d-inline-flex">
                                                    <img src="../assets/images/client/02.jpg" class="avatar avatar-md-sm rounded-circle border shadow" alt="">
                                                    <div class="ms-3">
                                                        <h6 class="text-dark mb-0 d-block">Joya Khan</h6>
                                                        <small class="text-muted">Booking on 27th Nov, 2020</small>
                                                    </div>
                                                </div>
                                                <div>
                                                    <a href="#" class="btn btn-icon btn-pills btn-soft-success"><i class="uil uil-check icons"></i></a>
                                                    <a href="#" class="btn btn-icon btn-pills btn-soft-danger"><i class="uil uil-times icons"></i></a>
                                                </div>
                                            </div>
                                        </li>

                                        <li class="mt-4">
                                            <div class="d-flex align-items-center justify-content-between">
                                                <div class="d-inline-flex">
                                                    <img src="../assets/images/client/03.jpg" class="avatar avatar-md-sm rounded-circle border shadow" alt="">
                                                    <div class="ms-3">
                                                        <h6 class="text-dark mb-0 d-block">Amelia Muli</h6>
                                                        <small class="text-muted">Booking on 27th Nov, 2020</small>
                                                    </div>
                                                </div>
                                                <div>
                                                    <a href="#" class="btn btn-icon btn-pills btn-soft-success"><i class="uil uil-check icons"></i></a>
                                                    <a href="#" class="btn btn-icon btn-pills btn-soft-danger"><i class="uil uil-times icons"></i></a>
                                                </div>
                                            </div>
                                        </li>

                                        <li class="mt-4">
                                            <div class="d-flex align-items-center justify-content-between">
                                                <div class="d-inline-flex">
                                                    <img src="../assets/images/client/04.jpg" class="avatar avatar-md-sm rounded-circle border shadow" alt="">
                                                    <div class="ms-3">
                                                        <h6 class="text-dark mb-0 d-block">Nik Ronaldo</h6>
                                                        <small class="text-muted">Booking on 27th Nov, 2020</small>
                                                    </div>
                                                </div>
                                                <div>
                                                    <a href="#" class="btn btn-icon btn-pills btn-soft-success"><i class="uil uil-check icons"></i></a>
                                                    <a href="#" class="btn btn-icon btn-pills btn-soft-danger"><i class="uil uil-times icons"></i></a>
                                                </div>
                                            </div>
                                        </li>

                                        <li class="mt-4">
                                            <div class="d-flex align-items-center justify-content-between">
                                                <div class="d-inline-flex">
                                                    <img src="../assets/images/client/05.jpg" class="avatar avatar-md-sm rounded-circle border shadow" alt="">
                                                    <div class="ms-3">
                                                        <h6 class="text-dark mb-0 d-block">Crista Joseph</h6>
                                                        <small class="text-muted">Booking on 27th Nov, 2020</small>
                                                    </div>
                                                </div>
                                                <div>
                                                    <a href="#" class="btn btn-icon btn-pills btn-soft-success"><i class="uil uil-check icons"></i></a>
                                                    <a href="#" class="btn btn-icon btn-pills btn-soft-danger"><i class="uil uil-times icons"></i></a>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div><!--end col-->

                            

                            <div class="col-xl-4 col-lg-12 mt-4">
                                <div class="card border-0 shadow rounded">
                                    <div class="p-4 border-bottom">
                                        <div class="d-flex justify-content-between align-items-center">
                                            <h6 class="mb-0"><i class="uil uil-user text-primary me-1 h5"></i> Patients Reviews</h6>
                                            
                                            <div class="mb-0 position-relative">
                                                <select class="form-select form-control" id="dailypatient">
                                                    <option selected>New</option>
                                                    <option value="2019">Old</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>

                                    <ul class="list-unstyled mb-0 p-4" data-simplebar style="height: 355px;">
                                        <li class="d-flex align-items-center justify-content-between">
                                            <div class="d-flex align-items-center">
                                                <img src="../assets/images/doctors/01.jpg" class="avatar avatar-small rounded-circle border shadow" alt="">
                                                <div class="flex-1 ms-3">
                                                    <span class="d-block h6 mb-0">Dr. Calvin Carlo</span>
                                                    <small class="text-muted">Orthopedic</small>

                                                    <ul class="list-unstyled mb-0">
                                                        <li class="list-inline-item text-muted">(45)</li>
                                                        <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                                        <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                                        <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                                        <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                                        <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                                    </ul>
                                                </div>
                                            </div>

                                            <p class="text-muted mb-0">150 Patients</p>
                                        </li>

                                        <li class="d-flex align-items-center justify-content-between mt-4">
                                            <div class="d-flex align-items-center">
                                                <img src="../assets/images/doctors/02.jpg" class="avatar avatar-small rounded-circle border shadow" alt="">
                                                <div class="flex-1 ms-3">
                                                    <span class="d-block h6 mb-0">Dr. Cristino Murphy</span>
                                                    <small class="text-muted">Gynecology</small>

                                                    <ul class="list-unstyled mb-0">
                                                        <li class="list-inline-item text-muted">(75)</li>
                                                        <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                                        <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                                        <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                                        <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                                        <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                                    </ul>
                                                </div>
                                            </div>

                                            <p class="text-muted mb-0">350 Patients</p>
                                        </li>

                                        <li class="d-flex align-items-center justify-content-between mt-4">
                                            <div class="d-flex align-items-center">
                                                <img src="../assets/images/doctors/03.jpg" class="avatar avatar-small rounded-circle border shadow" alt="">
                                                <div class="flex-1 ms-3">
                                                    <span class="d-block h6 mb-0">Dr. Alia Reddy</span>
                                                    <small class="text-muted">Psychotherapy</small>

                                                    <ul class="list-unstyled mb-0">
                                                        <li class="list-inline-item text-muted">(48)</li>
                                                        <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                                        <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                                        <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                                        <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                                        <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                                    </ul>
                                                </div>
                                            </div>

                                            <p class="text-muted mb-0">450 Patients</p>
                                        </li>

                                        <li class="d-flex align-items-center justify-content-between mt-4">
                                            <div class="d-flex align-items-center">
                                                <img src="../assets/images/doctors/04.jpg" class="avatar avatar-small rounded-circle border shadow" alt="">
                                                <div class="flex-1 ms-3">
                                                    <span class="d-block h6 mb-0">Dr. Toni Kover</span>
                                                    <small class="text-muted">Dentist</small>

                                                    <ul class="list-unstyled mb-0">
                                                        <li class="list-inline-item text-muted">(68)</li>
                                                        <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                                        <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                                        <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                                        <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                                        <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                                    </ul>
                                                </div>
                                            </div>

                                            <p class="text-muted mb-0">484 Patients</p>
                                        </li>

                                        <li class="d-flex align-items-center justify-content-between mt-4">
                                            <div class="d-flex align-items-center">
                                                <img src="../assets/images/doctors/05.jpg" class="avatar avatar-small rounded-circle border shadow" alt="">
                                                <div class="flex-1 ms-3">
                                                    <span class="d-block h6 mb-0">Dr. Jennifer Ballance</span>
                                                    <small class="text-muted">Cardiology</small>

                                                    <ul class="list-unstyled mb-0">
                                                        <li class="list-inline-item text-muted">(55)</li>
                                                        <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                                        <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                                        <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                                        <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                                        <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                                    </ul>
                                                </div>
                                            </div>

                                            <p class="text-muted mb-0">476 Patients</p>
                                        </li>
                                    </ul>
                                </div>
                            </div><!--end col-->
                            <div class="col-xl-4 col-lg-12 mt-4">
                                <div class="card border-0 shadow rounded">
                                    <div class="p-4 border-bottom">
                                        <div class="d-flex justify-content-between align-items-center">
                                            <h6 class="mb-0"><i class="uil uil-user text-primary me-1 h5"></i> Patients Reviews</h6>
                                            
                                            <div class="mb-0 position-relative">
                                                <select class="form-select form-control" id="dailypatient">
                                                    <option selected>New</option>
                                                    <option value="2019">Old</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>

                                    <ul class="list-unstyled mb-0 p-4" data-simplebar style="height: 355px;">
                                        <li class="d-flex align-items-center justify-content-between">
                                            <div class="d-flex align-items-center">
                                                <img src="../assets/images/doctors/01.jpg" class="avatar avatar-small rounded-circle border shadow" alt="">
                                                <div class="flex-1 ms-3">
                                                    <span class="d-block h6 mb-0">Dr. Calvin Carlo</span>
                                                    <small class="text-muted">Orthopedic</small>

                                                    <ul class="list-unstyled mb-0">
                                                        <li class="list-inline-item text-muted">(45)</li>
                                                        <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                                        <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                                        <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                                        <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                                        <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                                    </ul>
                                                </div>
                                            </div>

                                            <p class="text-muted mb-0">150 Patients</p>
                                        </li>

                                        <li class="d-flex align-items-center justify-content-between mt-4">
                                            <div class="d-flex align-items-center">
                                                <img src="../assets/images/doctors/02.jpg" class="avatar avatar-small rounded-circle border shadow" alt="">
                                                <div class="flex-1 ms-3">
                                                    <span class="d-block h6 mb-0">Dr. Cristino Murphy</span>
                                                    <small class="text-muted">Gynecology</small>

                                                    <ul class="list-unstyled mb-0">
                                                        <li class="list-inline-item text-muted">(75)</li>
                                                        <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                                        <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                                        <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                                        <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                                        <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                                    </ul>
                                                </div>
                                            </div>

                                            <p class="text-muted mb-0">350 Patients</p>
                                        </li>

                                        <li class="d-flex align-items-center justify-content-between mt-4">
                                            <div class="d-flex align-items-center">
                                                <img src="../assets/images/doctors/03.jpg" class="avatar avatar-small rounded-circle border shadow" alt="">
                                                <div class="flex-1 ms-3">
                                                    <span class="d-block h6 mb-0">Dr. Alia Reddy</span>
                                                    <small class="text-muted">Psychotherapy</small>

                                                    <ul class="list-unstyled mb-0">
                                                        <li class="list-inline-item text-muted">(48)</li>
                                                        <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                                        <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                                        <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                                        <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                                        <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                                    </ul>
                                                </div>
                                            </div>

                                            <p class="text-muted mb-0">450 Patients</p>
                                        </li>

                                        <li class="d-flex align-items-center justify-content-between mt-4">
                                            <div class="d-flex align-items-center">
                                                <img src="../assets/images/doctors/04.jpg" class="avatar avatar-small rounded-circle border shadow" alt="">
                                                <div class="flex-1 ms-3">
                                                    <span class="d-block h6 mb-0">Dr. Toni Kover</span>
                                                    <small class="text-muted">Dentist</small>

                                                    <ul class="list-unstyled mb-0">
                                                        <li class="list-inline-item text-muted">(68)</li>
                                                        <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                                        <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                                        <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                                        <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                                        <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                                    </ul>
                                                </div>
                                            </div>

                                            <p class="text-muted mb-0">484 Patients</p>
                                        </li>

                                        <li class="d-flex align-items-center justify-content-between mt-4">
                                            <div class="d-flex align-items-center">
                                                <img src="../assets/images/doctors/05.jpg" class="avatar avatar-small rounded-circle border shadow" alt="">
                                                <div class="flex-1 ms-3">
                                                    <span class="d-block h6 mb-0">Dr. Jennifer Ballance</span>
                                                    <small class="text-muted">Cardiology</small>

                                                    <ul class="list-unstyled mb-0">
                                                        <li class="list-inline-item text-muted">(55)</li>
                                                        <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                                        <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                                        <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                                        <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                                        <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                                    </ul>
                                                </div>
                                            </div>

                                            <p class="text-muted mb-0">476 Patients</p>
                                        </li>
                                    </ul>
                                </div>
                            </div><!--end col-->
                        </div><!--end row-->
                    </div>
                </div><!--end container-->
                <?php include_once('admin_footer.php') ?>