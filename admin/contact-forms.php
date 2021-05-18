<?php include_once('admin_header.php') ?>
<div class="container-fluid">
    <div class="layout-specing">
        <div class="row">
            <div class="col-xl-9 col-lg-6 col-md-4">
                <h5 class="mb-0">Contact Forms</h5>
                <nav aria-label="breadcrumb" class="d-inline-block mt-2">                  
                </nav>
            </div>
         
        <div class="row">
            <div class="col-12 mt-4">
                <div class="table-responsive shadow rounded">
                    <table class="table table-center bg-white mb-0">
                        <thead>
                            <tr>
                                <th class="border-bottom py-3" style="min-width: 50px;">#</th>
                                <th class="border-bottom py-3" style="min-width: 180px;">Name</th>
                                <th class="border-bottom py-3" style="min-width: 150px;">Email</th>
                                <th class="border-bottom py-3">Subject</th>
                                <th class="border-bottom py-3">Message</th>
                                <th class="border-bottom py-3">Date Time</th>                              
                            </tr>
                        </thead>
                        <tbody>
                          <?php
                                //echo contactFormDisplay();
                          ?>


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
                                    <option value="admin">Admin</option>
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


<!-- Modal end -->
<?php include_once('admin_footer.php') ?>