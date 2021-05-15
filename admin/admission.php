<?php include_once('admin_header.php') ?>
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
                                            
                                            <div class="col-sm-12 col-md-auto mt-4 mt-sm-0">
                                                <div class="d-grid">
                                                   <!--  <a href="#" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#admissionform">+ Admission</a> -->
                                                </div>
                                            </div><!--end col-->
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
                                               <th class="border-bottom py-3" style="min-width: 30px;">#</th>
                                                <th class="border-bottom py-3" style="min-width: 130px;">Name</th>
                                                <th class="border-bottom py-3" style="min-width: 130px;">Email</th>
                                                
                                                <th class="border-bottom py-3">Department</th>
                                                <th class="border-bottom py-3" style="min-width: 140px;">Date</th>
                                                
                                                <th class="border-bottom py-3">Doctor</th>
                                                <th class="border-bottom py-3">Staff</th>
                                                <th class="border-bottom py-3">Action</th>
                                                <!-- <th class="border-bottom py-3">Fees</th>
                                                <th class="border-bottom py-3" style="min-width: 150px;"></th> -->
                                            </tr>
                                        </thead>                                        
                                        <tbody>
                                        <form method="post">
                                            <tr>
                                               <td> </td>
                                                <td>Name</td>
                                                <td>howard@contact.com</td>                                                
                                                <td>Cardiology</td>
                                                <td>20th Dec 2020</td>                                                
                                                <td>
                                                <select class="form-control" >
                                                <option value="">-Select-(Sort doctor by respective department name)</option>
                                                <option value="HMSID">Dr. First Doctor(Sort by department name)</option>
                                                </select>
                                                </td>
                                                <td>
                                                <select class="form-control" >
                                                <option value="">-Select-(Sort doctor by respective department name)</option>
                                                <option value="HMSID">First Staff(Sort by department name)</option>
                                                </select>
                                                </td>
                                                <td><button type="submit" class="btn btn-primary" >Submit</button></td>
                                                <!-- <td>$50/Patient</td>
                                                <td class="text-end">
                                                    <a href="#" class="btn btn-icon btn-pills btn-soft-primary" data-bs-toggle="modal" data-bs-target="#viewadmission"><i class="uil uil-eye"></i></a>
                                                    <a href="#" class="btn btn-icon btn-pills btn-soft-success" data-bs-toggle="modal" data-bs-target="#acceptadmission"><i class="uil uil-check-circle"></i></a>
                                                    <a href="#" class="btn btn-icon btn-pills btn-soft-danger" data-bs-toggle="modal" data-bs-target="#canceladmission"><i class="uil uil-times-circle"></i></a>
                                                </td> -->
                                            </tr> 
                                        </form>                                      
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
                                </ul><end pagination-->
                            </div><!--end col-->
                        </div><!--end row-->
                    </div>
                </div><!--end container-->


       
        <!-- Modal end -->
<?php include_once('admin_footer.php') ?>