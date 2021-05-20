<?php include_once('doctor_header.php');
/* //$IdCheck = getOneData('user', 'hms_id', 'u_email', $email);
if ($IdCheck == '') {
    echo "<script>alert('It seems that you have not created your HMS Id. Please create it to continue!!')</script>";
    echo "<script>location.href='doctor-id'</script>";
} */
?>

<div class="container-fluid">
    <div class="layout-specing" style="background-color:#f8f9fc">
        <h5 class="mb-0">Doctor's Dashboard</h5>

        <br>
                <!-- Cta Start -->
        <section class="section" style="background: url('../index/images/cta.jpg') center center;padding:70px;">
            <div class="bg-overlay" style="opacity: 0.3;"></div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-5 offset-lg-7 col-md-7 offset-md-5">
                        <div class="features feature-bg-primary d-flex bg-white p-4 rounded-md shadow position-relative overflow-hidden">
                            <i class="uil uil-stethoscope icons h2 mb-0 text-primary"></i>
                            <div class="ms-3">
                                <h5 class="titles">Appointment</h5>
                                <p class="text-muted para mb-0">In this section doctor can view all the details of the patient who has taken an appointment in this hospital.</p>
                            </div>
                            <div class="big-icon">
                                <i class="uil uil-stethoscope"></i>
                            </div>
                        </div>

                        <div class="features feature-bg-primary d-flex bg-white p-4 rounded-md shadow position-relative overflow-hidden mt-4">
                            <i class="uil uil-book-medical icons h2 mb-0 text-primary"></i>
                            <div class="ms-3">
                                <h5 class="titles">Admission</h5>
                                <p class="text-muted para mb-0">Here the doctor can view all the patients who are admittedd in this hospital and can also request patient to take a release.  </p>
                            </div>
                            <div class="big-icon">
                                <i class="uil uil-book-medical"></i>
                            </div>
                        </div>

                        <div >
                            
                            </div>
                        </div>
                    </div><!--end col-->
                </div><!--end row-->
            </div><!--end container-->
        </section><!--end section-->
        <!-- Cta End -->
    </div>
</div>
<!--end container-->
<?php include_once('doctor_footer.php') ?>