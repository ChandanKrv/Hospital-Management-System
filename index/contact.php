<?php include_once('header.php'); ?>


        <!-- Start Hero -->
        <section class="bg-half-170 d-table w-100" style="background: url('images/bg/03.jpg');">
            <div class="bg-overlay"></div>
            <div class="container">
                <div class="row mt-5 justify-content-center">
                    <div class="col-12">
                        <div class="section-title text-center">
                            <h3 class="sub-title mb-4 text-white">Contact Us</h3>
                            <p class="para-desc mx-auto text-white-50">Great doctor if you need your family member to get effective immediate assistance, emergency treatment or a simple consultation.</p>
                        
                            <nav aria-label="breadcrumb" class="d-inline-block mt-3">
                                <ul class="breadcrumb bg-light rounded mb-0 py-1">
                                    <li class="breadcrumb-item"><a href="index">Doctris</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Contact Us</li>
                                </ul>
                            </nav>
                        </div>
                    </div><!--end col-->
                </div><!--end row-->
            </div><!--end container-->
        </section><!--end section-->
        <div class="position-relative">
            <div class="shape overflow-hidden text-white">
                <svg viewBox="0 0 2880 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M0 48H1437.5H2880V0H2160C1442.5 52 720 0 720 0H0V48Z" fill="currentColor"></path>
                </svg>
            </div>
        </div>
        <!-- End Hero -->

        <!-- Start -->
        <section class="mt-100 mt-60">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-6">
                        <div class="card features feature-primary text-center border-0">
                            <div class="icon text-center rounded-md mx-auto">
                            <span class="iconify" data-icon="uil:phone" data-inline="false" data-width="30" data-height="30"></span>
                            </div>
                            <div class="card-body p-0 mt-3">
                                <h5>Phone</h5>
                                <p class="text-muted mt-3">Contact us in this phone number</p>
                                <a href="tel:+91-98574-8806" class="link">+91 98574 8806</a>
                            </div>
                        </div>
                    </div><!--end col-->

                    <div class="col-lg-4 col-md-6 mt-4 mt-sm-0 pt-2 pt-sm-0">
                        <div class="card features feature-primary text-center border-0">
                            <div class="icon text-center rounded-md mx-auto">
                            <span class="iconify" data-icon="uil:envelope" data-inline="false" data-width="30" data-height="30"></span>
                            </div>
                            <div class="card-body p-0 mt-3">
                                <h5>Email</h5>
                                <p class="text-muted mt-3">Mail us in this email address</p>
                                <a href="mailto:contact@softcse.ml.comy" class="link">contact@softcse.ml.com</a>
                            </div>
                        </div>
                    </div><!--end col-->
                    
                    <div class="col-lg-4 col-md-6 mt-4 mt-lg-0 pt-2 pt-lg-0">
                        <div class="card features feature-primary text-center border-0">
                            <div class="icon text-center rounded-md mx-auto">
                            <span class="iconify" data-icon="uil:location-point" data-inline="false" data-width="30" data-height="30"></span>
                            </div>
                            <div class="card-body p-0 mt-3">
                                <h5>Location</h5>
                                <p class="text-muted mt-3">Agarpara, <br>Kolkata, West Bengal 485</p>
                                <a href="#" class="link">View on Google map</a>
                            </div>
                        </div>
                    </div><!--end col-->
                </div><!--end row-->
            </div><!--end container-->

            <div class="container mt-100 mt-60">
                <div class="row align-items-center">
                    <div class="col-lg-5 col-md-6">
                        <div class="me-lg-5">
                            <img src="images/about/about-2.png" class="img-fluid" alt="">
                        </div>
                    </div>

                    <div class="col-lg-7 col-md-6 mt-4 pt-2 mt-sm-0 pt-sm-0">
                        <div class="custom-form rounded shadow p-4">
                            <h5 class="mb-4">Get in touch!</h5>
                            <form method="post" onsubmit=" return validateForm()">
                                <p id="error-msg"></p>
                                <div id="simple-msg"></div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label class="form-label">Your Name <span class="text-danger">*</span></label>
                                            <input name="name" id="name" type="text" class="form-control border rounded" placeholder="First Name :">
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label class="form-label">Your Email <span class="text-danger">*</span></label>
                                            <input name="email" id="email" type="email" class="form-control border rounded" placeholder="Your email :">
                                        </div> 
                                    </div><!--end col-->

                                    <div class="col-md-12">
                                        <div class="mb-3">
                                            <label class="form-label">Subject</label>
                                            <input name="sub" id="subject" class="form-control border rounded" placeholder="Your subject :">
                                        </div>
                                    </div><!--end col-->

                                    <div class="col-md-12">
                                        <div class="mb-3">
                                            <label class="form-label">Comments <span class="text-danger">*</span></label>
                                            <textarea name="comment" id="comments" rows="4" class="form-control border rounded" placeholder="Your Message :"></textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-12">
                                        <button type="submit" name="submitForm" class="btn btn-primary">Send Message</button>
                                    </div><!--end col-->
                                </div><!--end row-->
                            </form>
                        </div><!--end custom-form-->
                    </div><!--end col-->
                </div><!--end row-->
            </div><!--end container-->

            <div class="container-fluid mt-100 mt-60">
                <div class="row">
                    <div class="col-12 p-0">
                        <div class="card map border-0">
                            <div class="card-body p-0">
                                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3681.386369394711!2d88.37688531479404!3d22.67665648512923!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39f899adb6e5139f%3A0x8e43eace10c1361d!2sNarula%20Institute%20of%20Technology!5e0!3m2!1sen!2sin!4v1621108591114!5m2!1sen!2sin" style="border:0" allowfullscreen></iframe>
                            </div>
                        </div>
                    </div><!--end col-->
                </div><!--end row-->
            </div><!--end container-->
        </section><!--end section-->
        <!-- End -->
<?php
if (isset($_POST['submitForm'])) {
    $dataPush = array(
        'name'  =>  cleanInput($_POST['name']),
        'email'  =>  cleanInput($_POST['email']),
        'sub'  =>  cleanInput($_POST['sub']),
        'comment'  =>  cleanInput($_POST['comment']),     
        'timestamp' => $timestamp       
    );

    if (insertData('contact', $dataPush)) {
        echo "<script>alert('*Thank You,Your message has been sent*')</script>";
    }else{
        echo "<script>alert('*Error*')</script>";
    }
}
?>


        <?php include_once('footer.php') ?>
