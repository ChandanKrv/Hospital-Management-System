<!-- line no. 341 -->
<?php include_once('admin_header.php') ?>
<div class="container-fluid">
                    <div class="layout-specing">
                        <div class="row">
                            <div class="col-xl-9 col-md-6">
                                <h5 class="mb-0">Doctors</h5>

                                <nav aria-label="breadcrumb" class="d-inline-block mt-2">
                                    <ul class="breadcrumb breadcrumb-muted bg-transparent rounded mb-0 p-0">
                                        <li class="breadcrumb-item"><a href="index">Doctris</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">Doctors</li>
                                    </ul>
                                </nav>
                            </div><!--end col-->

                            <div class="col-xl-3 col-md-6 mt-4 mt-md-0 text-md-end">
                                <a href="add-doctor" class="btn btn-primary">Add New Doctor</a>
                            </div><!--end col-->
                        </div><!--end row-->
                        
                        <div class="row row-cols-xl-5">


                        
                        <?php doctorGigDisplay(); ?>
                            
                            
                         
                        </div><!--end row-->
                    </div>
                </div><!--end container-->
<?php include_once('admin_footer.php') ?>