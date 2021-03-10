<?php 
include_once('admin_header.php');
$c_name = $_POST["c_name"];
$c_subhead = $_POST["c_subhead"];
$c_duration = $_POST["c_duration"];
$c_level = $_POST["c_level"];
$c_category = $_POST["c_category"];
$c_image = $_POST["image"];
$c_price = $_POST["c_price"];
$c_dis_price = $_POST["c_dis_price"];
$video_link = $_POST["c_video"];
$c_video = getYoutubeEmbedUrl($video_link, '1');
$s_link = $_POST["s_link"];
$c_id = $_POST["c_id"];
?>
<div class="container-fluid">
    <div class="layout-specing">
        <div class="d-md-flex justify-content-between">
            <h5 class="mb-0">Add New Doctor</h5>

            <nav aria-label="breadcrumb" class="d-inline-block mt-4 mt-sm-0">
                <ul class="breadcrumb bg-transparent rounded mb-0 p-0">
                    <li class="breadcrumb-item"><a href="index-2">Doctris</a></li>
                    <li class="breadcrumb-item"><a href="doctors">Doctors</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Add Doctor</li>
                </ul>
            </nav>
        </div>

        <div class="row">
            <div class="col-lg-8 mt-4">
                <div class="card border-0 p-4 rounded shadow">
                    <!-- <div class="row align-items-center">
                        <div class="col-lg-2 col-md-4">
                            <img src="../assets/images/doctors/01.jpg" class="avatar avatar-md-md rounded-pill shadow mx-auto d-block" alt="">
                        </div>
                        <!--end col--

                        <div class="col-lg-5 col-md-8 text-center text-md-start mt-4 mt-sm-0">
                            <h5 class="">Upload your picture</h5>
                            <p class="text-muted mb-0">For best results, use an image at least 600px by 600px in either .jpg or .png format</p>
                        </div>
                        <!--end col--

                        <div class="col-lg-5 col-md-12 text-lg-end text-center mt-4 mt-lg-0">
                            <a href="#" class="btn btn-primary">Upload</a>
                            <a href="#" class="btn btn-soft-primary ms-2">Remove</a>
                        </div>
                        <!--end col--
                    </div>
                    <!--end row-- -->

                    <form class="mt-4">
                        <div class="row">

                        <div class="col-md-6">
                                <div class="mb-3">
                                    <label class="form-label">User Name</label>
                                    <input name="u_name" type="text" class="form-control" placeholder="User Name :">
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label class="form-label">Full Name</label>
                                    <input name="u_full_name" type="text" class="form-control" placeholder="Full Name :">
                                </div>
                            </div>
                            <!--end col-->

                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label class="form-label">Email Id</label>
                                    <input name="u_email" type="email" class="form-control" placeholder="Email Id :">
                                </div>
                            </div>
                            <!--end col-->

                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label class="form-label">Profile Image</label>
                                    <input name="d_image" type="file" class="form-control">
                                </div>
                            </div>
                            <!--end col-->

                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label class="form-label">Gender</label>
                                    <select class="form-control department-name select2input" name="d_gender" >
                                        <option value="Male">Male</option>
                                        <option value="Female">Female</option>
                                        <option value="Others">Others</option>
                                    </select>
                                </div>
                            </div>
                            <!--end col-->
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label class="form-label">Date Of Birth</label>
                                    <input name="d_dob" type="date" class="form-control" >
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label class="form-label">Departments</label>
                                    <select class="form-control department-name select2input">
                                        <option value="EY">Eye Care</option>
                                        <option value="GY">Gynecologist</option>
                                        <option value="PS">Psychotherapist</option>
                                        <option value="OR">Orthopedic</option>
                                        <option value="DE">Dentist</option>
                                        <option value="GA">Gastrologist</option>
                                        <option value="UR">Urologist</option>
                                        <option value="NE">Neurologist</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label class="form-label">Phone Number</label>
                                    <input name="d_phone" type="number" class="form-control" placeholder="Phone Number :">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="mb-3">
                                    <label class="form-label">Your Bio Here</label>
                                    <textarea name="d_bio" rows="3" class="form-control" placeholder="Bio :"></textarea>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label class="form-label">Instagram</label>
                                    <div class="input-group flex-nowrap">
                                        <span class="input-group-text bg-white border border-end-0" id="insta-id"><i data-feather="instagram" class="fea icon-sm"></i></span>
                                        <input type="text" name="sc_instagram" class="form-control border" placeholder="Username" aria-label="Username" aria-describedby="insta-id">
                                    </div>
                                </div>
                            </div>
                            <!--end col-->

                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label class="form-label">Facebook</label>
                                    <div class="input-group flex-nowrap">
                                        <span class="input-group-text bg-white border border-end-0" id="fb-id"><i data-feather="facebook" class="fea icon-sm"></i></span>
                                        <input type="text" name="sc_facebook" class="form-control border" placeholder="Username" aria-label="Username" aria-describedby="fb-id">
                                    </div>
                                </div>
                            </div>
                            <!--end col-->

                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label class="form-label">Linkedin</label>
                                    <div class="input-group flex-nowrap">
                                        <span class="input-group-text bg-white border border-end-0" id="linke-pro"><i data-feather="linkedin" class="fea icon-sm"></i></span>
                                        <input type="text" name="sc_linkedin" class="form-control border" placeholder="Username" aria-label="Username" aria-describedby="linke-pro">
                                    </div>
                                </div>
                            </div>
                            <!--end col-->

                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label class="form-label">Twitter</label>
                                    <div class="input-group flex-nowrap">
                                        <span class="input-group-text bg-white border border-end-0" id="twitter-id"><i data-feather="twitter" class="fea icon-sm"></i></span>
                                        <input type="text" name="sc_twitter" class="form-control border" placeholder="Username" aria-label="Username" aria-describedby="twitter-id">
                                    </div>
                                </div>
                            </div>
                            <!--end col-->

                            <!-- <div class="col-md-12">
                                <div class="mb-3">
                                    <label class="form-label">Your Bio Here</label>
                                    <textarea name="comments" id="comments" rows="3" class="form-control" placeholder="Bio :"></textarea>
                                </div>
                            </div> -->
                        </div>
                        <!--end row-->

                        <button type="submit" class="btn btn-primary">Add Doctor</button>
                    </form>
                </div>
            </div>
            <!--end col-->

            <div class="col-lg-4 mt-4">
                <div class="card rounded border-0 shadow">
                    <div class="p-4 border-bottom">
                        <h5 class="mb-0">Doctors List</h5>
                    </div>

                    <ul class="list-unstyled mb-0 p-4" data-simplebar style="height: 664px;">
                        <li class="d-md-flex align-items-center text-center text-md-start">
                            <img src="../assets/images/doctors/01.jpg" class="avatar avatar-medium rounded-md shadow" alt="">

                            <div class="ms-md-3 mt-4 mt-sm-0">
                                <a href="#" class="text-dark h6">Dr. Calvin Carlo</a>
                                <p class="text-muted my-1">Cardiologist</p>
                                <p class="text-muted mb-0">3 Years Experienced</p>
                            </div>
                        </li>

                        <li class="d-md-flex align-items-center text-center text-md-start mt-4">
                            <img src="../assets/images/doctors/02.jpg" class="avatar avatar-medium rounded-md shadow" alt="">

                            <div class="ms-md-3 mt-4 mt-sm-0">
                                <a href="#" class="text-dark h6">Dr. Alex Smith</a>
                                <p class="text-muted my-1">Dentist</p>
                                <p class="text-muted mb-0">1 Years Experienced</p>
                            </div>
                        </li>

                        <li class="d-md-flex align-items-center text-center text-md-start mt-4">
                            <img src="../assets/images/doctors/03.jpg" class="avatar avatar-medium rounded-md shadow" alt="">

                            <div class="ms-md-3 mt-4 mt-sm-0">
                                <a href="#" class="text-dark h6">Dr. Cristina Luly</a>
                                <p class="text-muted my-1">Orthopedic</p>
                                <p class="text-muted mb-0">5 Years Experienced</p>
                            </div>
                        </li>

                        <li class="d-md-flex align-items-center text-center text-md-start mt-4">
                            <img src="../assets/images/doctors/04.jpg" class="avatar avatar-medium rounded-md shadow" alt="">

                            <div class="ms-md-3 mt-4 mt-sm-0">
                                <a href="#" class="text-dark h6">Dr. Dwayen Maria</a>
                                <p class="text-muted my-1">Gastrologist</p>
                                <p class="text-muted mb-0">2 Years Experienced</p>
                            </div>
                        </li>

                        <li class="d-md-flex align-items-center text-center text-md-start mt-4">
                            <img src="../assets/images/doctors/05.jpg" class="avatar avatar-medium rounded-md shadow" alt="">

                            <div class="ms-md-3 mt-4 mt-sm-0">
                                <a href="#" class="text-dark h6">Dr. Jenelia Focia</a>
                                <p class="text-muted my-1">Psychotherapist</p>
                                <p class="text-muted mb-0">3 Years Experienced</p>
                            </div>
                        </li>

                        <li class="mt-4">
                            <a href="doctors" class="btn btn-primary">All Doctors</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <!--end row-->
    </div>
</div>
<!--end container-->
<?php include_once('admin_footer.php') ?>