<?php include_once('doctor_header.php') ?>
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
                            </div><!--end col-->

                            <div class="col-xl-3 col-lg-6 col-md-8 mt-4 mt-md-0">
                                <div class="justify-content-md-end">
                                    <form>
                                        <div class="row justify-content-between align-items-center">
                                            <div class="col-sm-12 col-md">
                                                <div class="mb-0 position-relative">
                                                    <input type="date" class="form-control time-during select2input">
                                                       
                                                </div>
                                            </div><!--end col-->
                                            
                                           <!--  <div class="col-sm-12 col-md-auto mt-4 mt-sm-0">
                                                <div class="d-grid">
                                                    <a href="#" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#appointmentform">+ Appointment</a>
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
                                                <th class="border-bottom py-3" style="min-width: 180px;">Patient Name</th>
                                                <th class="border-bottom py-3" style="min-width: 150px;">Email</th>
                                                <th class="border-bottom py-3" style="min-width: 80px;">Age</th>
                                                <th class="border-bottom py-3" style="min-width: 80px;">Gender</th>
                                                <th class="border-bottom py-3" style="min-width: 120px;">Phone</th>                                       
                                                <th class="border-bottom py-3" style="min-width: 150px;">Apt Date</th>
                                                <th class="border-bottom py-3">Apt No.</th>
                                                <th class="border-bottom py-3" style="min-width: 180px;">Patient HMS Id</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <!-- <tr>
                                           
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
                                                <td>9878956458</td>
                                                <td>20/05/2021</td>
                                                <td><center>1</center></td>
                                                <td>HMS-07-78</td>
                                                
                                            </tr> -->

                                            <?php appointmentDisplayDoctor($hms_id);  ?>
                                            
                                             
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div><!--end row-->

                        <!-- <div class="row text-center">
                            <div class="col-12 mt-4">
                                <ul class="pagination justify-content-end mb-0 list-unstyled">
                                    <li><a href="#" class="pe-3 ps-3 pt-2 pb-2 border"> Prev</a></li>
                                    <li class="active"><a href="#" class="pe-3 ps-3 pt-2 pb-2 border">1</a></li>
                                    <li><a href="#" class="pe-3 ps-3 pt-2 pb-2 border">2</a></li>
                                    <li><a href="#" class="pe-3 ps-3 pt-2 pb-2 border">Next </a></li>
                                </ul><!-end pagination--
                            </div><!-end col--
                        </div><!-end row-- --
                    </div>
                </div><--end container-->


<?php include_once('doctor_footer.php') ?>