<?php include_once('doctor_header.php') ?>
<div class="container-fluid">
                    <div class="layout-specing">
                        <div class="d-md-flex justify-content-between">
                            <h5 class="mb-0">Doctor Profile & Settings</h5>

                            <nav aria-label="breadcrumb" class="d-inline-block mt-4 mt-sm-0">
                                <ul class="breadcrumb bg-transparent rounded mb-0 p-0">
                                    <li class="breadcrumb-item"><a href="index">Doctris</a></li>
                                    <li class="breadcrumb-item"><a href="doctors">Doctor</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Profile</li>
                                </ul>
                            </nav>
                        </div>

                        <div class="card bg-white rounded shadow overflow-hidden mt-4 border-0">
                            <div class="p-5 bg-primary bg-gradient"></div>
                            <div class="avatar-profile d-flex margin-nagative mt-n5 position-relative ps-3">
                                <img src="../assets/images/doctors/01.jpg" class="rounded-circle shadow-md avatar avatar-medium" alt="">
                                <div class="mt-4 ms-3 pt-3">
                                    <h5 class="mt-3 mb-1">Dr. Calvin Carlo</h5>
                                    <p class="text-muted mb-0">Orthopedic</p>
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
                                                </a><!--end nav link-->
                                            </li><!--end nav item-->
                                            
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
                                                </a><!--end nav link-->
                                            </li><!--end nav item-->
                                            
                                            <li class="nav-item">
                                                <a class="nav-link rounded-0" id="settings-tab" data-bs-toggle="pill" href="#pills-settings" role="tab" aria-controls="pills-settings" aria-selected="false">
                                                    <div class="text-center pt-1 pb-1">
                                                        <h4 class="title fw-normal mb-0">Settings</h4>
                                                    </div>
                                                </a><!--end nav link-->
                                            </li><!--end nav item-->
                                        </ul><!--end nav pills-->
            
                                        <div class="tab-content mt-2" id="pills-tabContent">
                                            <div class="tab-pane fade show active" id="pills-overview" role="tabpanel" aria-labelledby="overview-tab">
                                                <p class="text-muted">A gynecologist is a surgeon who specializes in the female reproductive system, which includes the cervix, fallopian tubes, ovaries, uterus, vagina and vulva. Menstrual problems, contraception, sexuality, menopause and infertility issues are diagnosed and treated by a gynecologist; most gynecologists also provide prenatal care, and some provide primary care.</p>
                                            
                                                <h6 class="mb-0">Specialties: </h6>
            
                                                <ul class="list-unstyled mt-4">
                                                    <li class="mt-1"><i class="uil uil-arrow-right text-primary"></i> Women's health services</li>
                                                    <li class="mt-1"><i class="uil uil-arrow-right text-primary"></i> Pregnancy care</li>
                                                    <li class="mt-1"><i class="uil uil-arrow-right text-primary"></i> Surgical procedures</li>
                                                    <li class="mt-1"><i class="uil uil-arrow-right text-primary"></i> Specialty care</li>
                                                    <li class="mt-1"><i class="uil uil-arrow-right text-primary"></i> Conclusion</li>
                                                </ul>
            
                                                <h6 class="mb-0">My Team: </h6>
            
                                                <div class="row row-cols-xl-5">
                                                    <div class="col-xl col-lg-3 col-md-6 mt-4">
                                                        <div class="card team border-0 rounded shadow overflow-hidden">
                                                            <div class="team-person position-relative overflow-hidden">
                                                                <img src="../assets/images/doctors/05.jpg" class="img-fluid" alt="">
                                                                <ul class="list-unstyled team-like">
                                                                    <li><a href="#" class="btn btn-icon btn-pills btn-soft-danger"><i data-feather="heart" class="icons"></i></a></li>
                                                                </ul>
                                                            </div>
                                                            <div class="card-body">
                                                                <a href="#" class="title text-dark h5 d-block mb-0">Jessica McFarlane</a>
                                                                <small class="text-muted speciality">M.B.B.S, Dentist</small>
                                                                <div class="d-flex justify-content-between align-items-center mt-2">
                                                                    <ul class="list-unstyled mb-0">
                                                                        <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                                                        <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                                                        <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                                                        <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                                                        <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                                                    </ul>
                                                                    <p class="text-muted mb-0">5 Star</p>
                                                                </div>
                                                                <ul class="list-unstyled mt-2 mb-0">
                                                                    <li class="d-flex">
                                                                        <i class="ri-map-pin-line text-primary align-middle"></i>
                                                                        <small class="text-muted ms-2">63, PG Shustoke, UK</small>
                                                                    </li>
                                                                    <li class="d-flex mt-2">
                                                                        <i class="ri-time-line text-primary align-middle"></i>
                                                                        <small class="text-muted ms-2">Mon: 2:00PM - 6:00PM</small>
                                                                    </li>
                                                                    <li class="d-flex mt-2">
                                                                        <i class="ri-money-dollar-circle-line text-primary align-middle"></i>
                                                                        <small class="text-muted ms-2">$ 75 USD / Visit</small>
                                                                    </li>
                                                                </ul>
                                                                <ul class="list-unstyled mt-2 mb-0">
                                                                    <li class="list-inline-item"><a href="#" class="btn btn-icon btn-pills btn-soft-primary"><i data-feather="facebook" class="icons"></i></a></li>
                                                                    <li class="mt-2 list-inline-item"><a href="#" class="btn btn-icon btn-pills btn-soft-primary"><i data-feather="linkedin" class="icons"></i></a></li>
                                                                    <li class="mt-2 list-inline-item"><a href="#" class="btn btn-icon btn-pills btn-soft-primary"><i data-feather="github" class="icons"></i></a></li>
                                                                    <li class="mt-2 list-inline-item"><a href="#" class="btn btn-icon btn-pills btn-soft-primary"><i data-feather="twitter" class="icons"></i></a></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div><!--end col-->
                                                    
                                                    <div class="col-xl col-lg-3 col-md-6 mt-4">
                                                        <div class="card team border-0 rounded shadow overflow-hidden">
                                                            <div class="team-person position-relative overflow-hidden">
                                                                <img src="../assets/images/doctors/06.jpg" class="img-fluid" alt="">
                                                                <ul class="list-unstyled team-like">
                                                                    <li><a href="#" class="btn btn-icon btn-pills btn-soft-danger"><i data-feather="heart" class="icons"></i></a></li>
                                                                </ul>
                                                            </div>
                                                            <div class="card-body">
                                                                <a href="#" class="title text-dark h5 d-block mb-0">Elsie Sherman</a>
                                                                <small class="text-muted speciality">M.B.B.S, Gastrologist</small>
                                                                <div class="d-flex justify-content-between align-items-center mt-2">
                                                                    <ul class="list-unstyled mb-0">
                                                                        <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                                                        <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                                                        <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                                                        <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                                                        <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                                                    </ul>
                                                                    <p class="text-muted mb-0">5 Star</p>
                                                                </div>
                                                                <ul class="list-unstyled mt-2 mb-0">
                                                                    <li class="d-flex">
                                                                        <i class="ri-map-pin-line text-primary align-middle"></i>
                                                                        <small class="text-muted ms-2">63, PG Shustoke, UK</small>
                                                                    </li>
                                                                    <li class="d-flex mt-2">
                                                                        <i class="ri-time-line text-primary align-middle"></i>
                                                                        <small class="text-muted ms-2">Mon: 2:00PM - 6:00PM</small>
                                                                    </li>
                                                                    <li class="d-flex mt-2">
                                                                        <i class="ri-money-dollar-circle-line text-primary align-middle"></i>
                                                                        <small class="text-muted ms-2">$ 75 USD / Visit</small>
                                                                    </li>
                                                                </ul>
                                                                <ul class="list-unstyled mt-2 mb-0">
                                                                    <li class="list-inline-item"><a href="#" class="btn btn-icon btn-pills btn-soft-primary"><i data-feather="facebook" class="icons"></i></a></li>
                                                                    <li class="mt-2 list-inline-item"><a href="#" class="btn btn-icon btn-pills btn-soft-primary"><i data-feather="linkedin" class="icons"></i></a></li>
                                                                    <li class="mt-2 list-inline-item"><a href="#" class="btn btn-icon btn-pills btn-soft-primary"><i data-feather="github" class="icons"></i></a></li>
                                                                    <li class="mt-2 list-inline-item"><a href="#" class="btn btn-icon btn-pills btn-soft-primary"><i data-feather="twitter" class="icons"></i></a></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div><!--end col-->
                                                    
                                                    <div class="col-xl col-lg-3 col-md-6 mt-4">
                                                        <div class="card team border-0 rounded shadow overflow-hidden">
                                                            <div class="team-person position-relative overflow-hidden">
                                                                <img src="../assets/images/doctors/07.jpg" class="img-fluid" alt="">
                                                                <ul class="list-unstyled team-like">
                                                                    <li><a href="#" class="btn btn-icon btn-pills btn-soft-danger"><i data-feather="heart" class="icons"></i></a></li>
                                                                </ul>
                                                            </div>
                                                            <div class="card-body">
                                                                <a href="#" class="title text-dark h5 d-block mb-0">Bertha Magers</a>
                                                                <small class="text-muted speciality">M.B.B.S, Urologist</small>
                                                                <div class="d-flex justify-content-between align-items-center mt-2">
                                                                    <ul class="list-unstyled mb-0">
                                                                        <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                                                        <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                                                        <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                                                        <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                                                        <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                                                    </ul>
                                                                    <p class="text-muted mb-0">5 Star</p>
                                                                </div>
                                                                <ul class="list-unstyled mt-2 mb-0">
                                                                    <li class="d-flex">
                                                                        <i class="ri-map-pin-line text-primary align-middle"></i>
                                                                        <small class="text-muted ms-2">63, PG Shustoke, UK</small>
                                                                    </li>
                                                                    <li class="d-flex mt-2">
                                                                        <i class="ri-time-line text-primary align-middle"></i>
                                                                        <small class="text-muted ms-2">Mon: 2:00PM - 6:00PM</small>
                                                                    </li>
                                                                    <li class="d-flex mt-2">
                                                                        <i class="ri-money-dollar-circle-line text-primary align-middle"></i>
                                                                        <small class="text-muted ms-2">$ 75 USD / Visit</small>
                                                                    </li>
                                                                </ul>
                                                                <ul class="list-unstyled mt-2 mb-0">
                                                                    <li class="list-inline-item"><a href="#" class="btn btn-icon btn-pills btn-soft-primary"><i data-feather="facebook" class="icons"></i></a></li>
                                                                    <li class="mt-2 list-inline-item"><a href="#" class="btn btn-icon btn-pills btn-soft-primary"><i data-feather="linkedin" class="icons"></i></a></li>
                                                                    <li class="mt-2 list-inline-item"><a href="#" class="btn btn-icon btn-pills btn-soft-primary"><i data-feather="github" class="icons"></i></a></li>
                                                                    <li class="mt-2 list-inline-item"><a href="#" class="btn btn-icon btn-pills btn-soft-primary"><i data-feather="twitter" class="icons"></i></a></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div><!--end col-->
                                                    
                                                    <div class="col-xl col-lg-3 col-md-6 mt-4">
                                                        <div class="card team border-0 rounded shadow overflow-hidden">
                                                            <div class="team-person position-relative overflow-hidden">
                                                                <img src="../assets/images/doctors/08.jpg" class="img-fluid" alt="">
                                                                <ul class="list-unstyled team-like">
                                                                    <li><a href="#" class="btn btn-icon btn-pills btn-soft-danger"><i data-feather="heart" class="icons"></i></a></li>
                                                                </ul>
                                                            </div>
                                                            <div class="card-body">
                                                                <a href="#" class="title text-dark h5 d-block mb-0">Louis Batey</a>
                                                                <small class="text-muted speciality">M.B.B.S, Neurologist</small>
                                                                <div class="d-flex justify-content-between align-items-center mt-2">
                                                                    <ul class="list-unstyled mb-0">
                                                                        <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                                                        <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                                                        <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                                                        <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                                                        <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                                                    </ul>
                                                                    <p class="text-muted mb-0">5 Star</p>
                                                                </div>
                                                                <ul class="list-unstyled mt-2 mb-0">
                                                                    <li class="d-flex">
                                                                        <i class="ri-map-pin-line text-primary align-middle"></i>
                                                                        <small class="text-muted ms-2">63, PG Shustoke, UK</small>
                                                                    </li>
                                                                    <li class="d-flex mt-2">
                                                                        <i class="ri-time-line text-primary align-middle"></i>
                                                                        <small class="text-muted ms-2">Mon: 2:00PM - 6:00PM</small>
                                                                    </li>
                                                                    <li class="d-flex mt-2">
                                                                        <i class="ri-money-dollar-circle-line text-primary align-middle"></i>
                                                                        <small class="text-muted ms-2">$ 75 USD / Visit</small>
                                                                    </li>
                                                                </ul>
                                                                <ul class="list-unstyled mt-2 mb-0">
                                                                    <li class="list-inline-item"><a href="#" class="btn btn-icon btn-pills btn-soft-primary"><i data-feather="facebook" class="icons"></i></a></li>
                                                                    <li class="mt-2 list-inline-item"><a href="#" class="btn btn-icon btn-pills btn-soft-primary"><i data-feather="linkedin" class="icons"></i></a></li>
                                                                    <li class="mt-2 list-inline-item"><a href="#" class="btn btn-icon btn-pills btn-soft-primary"><i data-feather="github" class="icons"></i></a></li>
                                                                    <li class="mt-2 list-inline-item"><a href="#" class="btn btn-icon btn-pills btn-soft-primary"><i data-feather="twitter" class="icons"></i></a></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div><!--end col-->

                                                    <div class="col-xl col-lg-3 col-md-6 mt-4">
                                                        <div class="card team border-0 rounded shadow overflow-hidden">
                                                            <div class="team-person position-relative overflow-hidden">
                                                                <img src="../assets/images/doctors/02.jpg" class="img-fluid" alt="">
                                                                <ul class="list-unstyled team-like">
                                                                    <li><a href="#" class="btn btn-icon btn-pills btn-soft-danger"><i data-feather="heart" class="icons"></i></a></li>
                                                                </ul>
                                                            </div>
                                                            <div class="card-body">
                                                                <a href="#" class="title text-dark h5 d-block mb-0">Cristino Murphy</a>
                                                                <small class="text-muted speciality">M.B.B.S, Gynecologist</small>
                                                                <div class="d-flex justify-content-between align-items-center mt-2">
                                                                    <ul class="list-unstyled mb-0">
                                                                        <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                                                        <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                                                        <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                                                        <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                                                        <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                                                    </ul>
                                                                    <p class="text-muted mb-0">5 Star</p>
                                                                </div>
                                                                <ul class="list-unstyled mt-2 mb-0">
                                                                    <li class="d-flex">
                                                                        <i class="ri-map-pin-line text-primary align-middle"></i>
                                                                        <small class="text-muted ms-2">63, PG Shustoke, UK</small>
                                                                    </li>
                                                                    <li class="d-flex mt-2">
                                                                        <i class="ri-time-line text-primary align-middle"></i>
                                                                        <small class="text-muted ms-2">Mon: 2:00PM - 6:00PM</small>
                                                                    </li>
                                                                    <li class="d-flex mt-2">
                                                                        <i class="ri-money-dollar-circle-line text-primary align-middle"></i>
                                                                        <small class="text-muted ms-2">$ 75 USD / Visit</small>
                                                                    </li>
                                                                </ul>
                                                                <ul class="list-unstyled mt-2 mb-0">
                                                                    <li class="list-inline-item"><a href="#" class="btn btn-icon btn-pills btn-soft-primary"><i data-feather="facebook" class="icons"></i></a></li>
                                                                    <li class="mt-2 list-inline-item"><a href="#" class="btn btn-icon btn-pills btn-soft-primary"><i data-feather="linkedin" class="icons"></i></a></li>
                                                                    <li class="mt-2 list-inline-item"><a href="#" class="btn btn-icon btn-pills btn-soft-primary"><i data-feather="github" class="icons"></i></a></li>
                                                                    <li class="mt-2 list-inline-item"><a href="#" class="btn btn-icon btn-pills btn-soft-primary"><i data-feather="twitter" class="icons"></i></a></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div><!--end col-->
                                                </div><!--end row-->
                                            </div><!--end teb pane-->
                                            
                                            
                
                                            <div class="tab-pane fade" id="pills-timetable" role="tabpanel" aria-labelledby="timetable-tab">
                                                <div class="row">
                                                    <div class="col-lg-4 col-md-12">
                                                        <div class="card border-0 p-3 rounded shadow">
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
                                                        </div>
                                                    </div><!--end col-->
            
                                                    <div class="col-lg-4 col-md-6 mt-4 mt-lg-0 pt-2 pt-lg-0">
                                                        <div class="card border-0 text-center features feature-primary">
                                                            <div class="icon text-center mx-auto rounded-md">
                                                                <i class="uil uil-phone h3 mb-0"></i>
                                                            </div>
                                
                                                            <div class="card-body p-0 mt-4">
                                                                <h5 class="title fw-bold">Phone</h5>
                                                                <p class="text-muted">Great doctor if you need your family member to get effective immediate assistance</p>
                                                                <a href="tel:+152534-468-854" class="link">+152 534-468-854</a>
                                                            </div>
                                                        </div>
                                                    </div><!--end col-->
                                
                                                    <div class="col-lg-4 col-md-6 mt-4 mt-lg-0 pt-2 pt-lg-0">
                                                        <div class="card border-0 text-center features feature-primary">
                                                            <div class="icon text-center mx-auto rounded-md">
                                                                <i class="uil uil-envelope h3 mb-0"></i>
                                                            </div>
                                
                                                            <div class="card-body p-0 mt-4">
                                                                <h5 class="title fw-bold">Email</h5>
                                                                <p class="text-muted">Great doctor if you need your family member to get effective immediate assistance</p>
                                                                <a href="mailto:contact@example.com" class="link">contact@example.com</a>
                                                            </div>
                                                        </div>
                                                    </div><!--end col-->
                                                </div><!--end row-->
                                            </div><!--end teb pane-->
                
                                            <div class="tab-pane fade" id="pills-settings" role="tabpanel" aria-labelledby="settings-tab">
                                                <h5 class="mb-1">Settings</h5>
                                                <div class="row">
                                                    <div class="col-lg-6">
                                                        <div class="rounded shadow mt-4">
                                                            <div class="p-4 border-bottom">
                                                                <h6 class="mb-0">Personal Information :</h6>
                                                            </div>
                                
                                                            <div class="p-4">
                                                                <div class="row align-items-center">
                                                                    <div class="col-lg-2 col-md-4">
                                                                        <img src="../assets/images/doctors/01.jpg" class="avatar avatar-md-md rounded-pill shadow mx-auto d-block" alt="">
                                                                    </div><!--end col-->

                                                                    <div class="col-lg-5 col-md-8 text-center text-md-start mt-4 mt-sm-0">
                                                                        <h6 class="">Upload your picture</h6>
                                                                        <p class="text-muted mb-0">For best results, use an image at least 256px by 256px in either .jpg or .png format</p>
                                                                    </div><!--end col-->

                                                                    <div class="col-lg-5 col-md-12 text-lg-end text-center mt-4 mt-lg-0">
                                                                        <a href="#" class="btn btn-primary">Upload</a>
                                                                        <a href="#" class="btn btn-soft-primary ms-2">Remove</a>
                                                                    </div><!--end col-->
                                                                </div><!--end row-->
                                                            
                                                                <form class="mt-4">
                                                                    <div class="row">
                                                                        <div class="col-md-6">
                                                                            <div class="mb-3">
                                                                                <label class="form-label">First Name</label>
                                                                                <input name="name" id="name" type="text" class="form-control" placeholder="First Name :">
                                                                            </div>
                                                                        </div><!--end col-->

                                                                        <div class="col-md-6">
                                                                            <div class="mb-3">
                                                                                <label class="form-label">Last Name</label>
                                                                                <input name="name" id="name2" type="text" class="form-control" placeholder="Last Name :">
                                                                            </div>
                                                                        </div><!--end col-->

                                                                        <div class="col-md-6">
                                                                            <div class="mb-3">
                                                                                <label class="form-label">Your Email</label>
                                                                                <input name="email" id="email" type="email" class="form-control" placeholder="Your email :">
                                                                            </div> 
                                                                        </div><!--end col-->

                                                                        <div class="col-md-6">
                                                                            <div class="mb-3">
                                                                                <label class="form-label">Phone no.</label>
                                                                                <input name="number" id="number" type="text" class="form-control" placeholder="Phone no. :">
                                                                            </div>                                                                               
                                                                        </div><!--end col-->

                                                                        <div class="col-md-12">
                                                                            <div class="mb-3">
                                                                                <label class="form-label">Your Bio Here</label>
                                                                                <textarea name="comments" id="comments" rows="4" class="form-control" placeholder="Bio :"></textarea>
                                                                            </div>
                                                                        </div>
                                                                    </div><!--end row-->
                                                                    
                                                                    <div class="row">
                                                                        <div class="col-sm-12">
                                                                            <input type="submit" id="submit" name="send" class="btn btn-primary" value="Save changes">
                                                                        </div><!--end col-->
                                                                    </div><!--end row-->
                                                                </form><!--end form-->
                                                            </div>
                                                        </div>

                                                        <div class="rounded shadow mt-4">
                                                            <div class="p-4 border-bottom">
                                                                <h6 class="mb-0">Account Notifications :</h6>
                                                            </div>
                                
                                                            <div class="p-4">
                                                                <form>
                                                                    <div class="row">
                                                                        <div class="col-lg-12">
                                                                            <div class="mb-3">
                                                                                <label class="form-label">Old password :</label>
                                                                                <input type="password" class="form-control" placeholder="Old password" required="">
                                                                            </div>
                                                                        </div><!--end col-->
                                    
                                                                        <div class="col-lg-12">
                                                                            <div class="mb-3">
                                                                                <label class="form-label">New password :</label>
                                                                                <input type="password" class="form-control" placeholder="New password" required="">
                                                                            </div>
                                                                        </div><!--end col-->
                                    
                                                                        <div class="col-lg-12">
                                                                            <div class="mb-3">
                                                                                <label class="form-label">Re-type New password :</label>
                                                                                <input type="password" class="form-control" placeholder="Re-type New password" required="">
                                                                            </div>
                                                                        </div><!--end col-->
                                    
                                                                        <div class="col-lg-12 mt-2 mb-0">
                                                                            <button class="btn btn-primary">Save password</button>
                                                                        </div><!--end col-->
                                                                    </div><!--end row-->
                                                                </form>
                                                            </div>
                                                        </div>
                                                    </div><!--end col-->
                                                    
                                                    <div class="col-lg-6">
                                                        <div class="rounded shadow mt-4">
                                                            <div class="p-4 border-bottom">
                                                                <h6 class="mb-0">General Notifications :</h6>
                                                            </div>
                                
                                                            <div class="p-4">
                                                                <div class="d-flex justify-content-between pb-4">
                                                                    <h6 class="mb-0 fw-normal">When someone mentions me</h6>
                                                                    <div class="form-check">
                                                                        <input type="checkbox" class="form-check-input" value="" id="customSwitch1">
                                                                        <label class="form-check-label" for="customSwitch1"></label>
                                                                    </div>
                                                                </div>
                                                                <div class="d-flex justify-content-between py-4 border-top">
                                                                    <h6 class="mb-0 fw-normal">When someone follows me</h6>
                                                                    <div class="form-check">
                                                                        <input type="checkbox" class="form-check-input" id="customSwitch2" checked>
                                                                        <label class="form-check-label" for="customSwitch2"></label>
                                                                    </div>
                                                                </div>
                                                                <div class="d-flex justify-content-between py-4 border-top">
                                                                    <h6 class="mb-0 fw-normal">When shares my activity</h6>
                                                                    <div class="form-check">
                                                                        <input type="checkbox" class="form-check-input" id="customSwitch3">
                                                                        <label class="form-check-label" for="customSwitch3"></label>
                                                                    </div>
                                                                </div>
                                                                <div class="d-flex justify-content-between py-4 border-top">
                                                                    <h6 class="mb-0 fw-normal">When someone messages me</h6>
                                                                    <div class="form-check">
                                                                        <input type="checkbox" class="form-check-input" id="customSwitch4" checked>
                                                                        <label class="form-check-label" for="customSwitch4"></label>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="rounded shadow mt-4">
                                                            <div class="p-4 border-bottom">
                                                                <h6 class="mb-0">Marketing Notifications :</h6>
                                                            </div>
                                
                                                            <div class="p-4">
                                                                <div class="d-flex justify-content-between pb-4">
                                                                    <h6 class="mb-0 fw-normal">There is a sale or promotion</h6>
                                                                    <div class="form-check">
                                                                        <input type="checkbox" class="form-check-input" id="customSwitch5" checked>
                                                                        <label class="form-check-label" for="customSwitch5"></label>
                                                                    </div>
                                                                </div>
                                                                <div class="d-flex justify-content-between py-4 border-top">
                                                                    <h6 class="mb-0 fw-normal">Company news</h6>
                                                                    <div class="form-check">
                                                                        <input type="checkbox" class="form-check-input" id="customSwitch6">
                                                                        <label class="form-check-label" for="customSwitch6"></label>
                                                                    </div>
                                                                </div>
                                                                <div class="d-flex justify-content-between py-4 border-top">
                                                                    <h6 class="mb-0 fw-normal">Weekly jobs</h6>
                                                                    <div class="form-check"> 
                                                                        <input type="checkbox" class="form-check-input" id="customSwitch7">
                                                                        <label class="form-check-label" for="customSwitch7"></label>
                                                                    </div>
                                                                </div>
                                                                <div class="d-flex justify-content-between py-4 border-top">
                                                                    <h6 class="mb-0 fw-normal">Unsubscribe News</h6>
                                                                    <div class="form-check">
                                                                        <input type="checkbox" class="form-check-input" id="customSwitch8" checked>
                                                                        <label class="form-check-label" for="customSwitch8"></label>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="rounded shadow mt-4">
                                                            <div class="p-4 border-bottom">
                                                                <h6 class="mb-0">General Notifications :</h6>
                                                            </div>
                                
                                                            <div class="p-4">
                                                                <div class="p-4 border-bottom">
                                                                    <h5 class="mb-0 text-danger">Delete Account :</h5>
                                                                </div>

                                                                <div class="p-4">
                                                                    <h6 class="mb-0 fw-normal">Do you want to delete the account? Please press below "Delete" button</h6>
                                                                    <div class="mt-4">
                                                                        <button class="btn btn-danger">Delete Account</button>
                                                                    </div><!--end col-->
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div><!--end col-->
                                                </div><!--end row-->
                                            </div><!--end teb pane-->
                                        </div><!--end tab content-->
                                    </div>
                                </div><!--end col-->
                            </div><!--end row-->
                        </div>
                    </div>
                </div><!--end container-->
<?php include_once('doctor_footer.php') ?>