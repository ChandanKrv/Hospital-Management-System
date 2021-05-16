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
                                                                                
                                          <?php                                          
                                          //print_r(admissionDisplay());
                                          ?>

  <?php

  global $con;
    $getData = "SELECT * FROM admission WHERE status='pending'";
    $run_products = mysqli_query($con, $getData);
    $count=0;    
    while ($row_product = mysqli_fetch_array($run_products)) {
        $booked_by_hmsid_pt = $row_product['booked_by_hmsid_pt'];
        $assigned_to_hmsid_doc = $row_product['assigned_to_hmsid_doc'];       
        $assigned_to_hmsid_staff = $row_product['assigned_to_hmsid_staff'];
        $pt_name = $row_product['pt_name'];
        $dept = $row_product['dept'];
        $pt_email = $row_product['pt_email'];
        $pt_phone = $row_product['pt_phone'];   
        $msg = $row_product['msg'];
        $timestamp = $row_product['timestamp'];
        $id=$row_product['id'];
        $date=substr($timestamp, 0, 10);
        $count++;
        
        ?>      
        <form method="post">       
            <tr>
            <th><?php echo $count ?></th>
            <td><?php echo $pt_name ?></td>
            <td><?php echo $pt_email ?></td>                                                
            <td><?php echo $dept ?></td>
            <td><?php echo $date ?></td>                                                
            <td>
            <select class='form-control' name='assign_doc'>                                                
            <option value='$assigned_to_hmsid_doc'><?php echo getOneData('user','u_full_name','hms_id',$assigned_to_hmsid_doc) ?> ( <?php echo $dept ?>)</option>
            <?php getDropdownDoctor(null) ?>
            </select>
            </td>
            <td>
            <select class='form-control' name='assign_staff' >                                                
            <option value='$assigned_to_hmsid_staff'><?php echo  getOneData('user','u_full_name','hms_id',$assigned_to_hmsid_staff) ?> (<?php echo $dept ?>)</option>
            <?php getDropdownStaff() ?>
            </select>
            </td>
           <td><button type='submit' name="admitBtn" class='btn btn-primary'>Admit</button></td>
        
            <!-- <td> <a href='admit-page?id=<?php echo $id ?>&d=<?php echo $assigned_to_hmsid_doc ?>&s=<?php echo $assigned_to_hmsid_staff ?>' class='btn btn-primary'>Admit</a> </td> -->
            </tr>
            </form>  
        <?php     
    }

?>








<!--                                        
                                                <th>1</th>
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
                                                <td><button type="admit" class="btn btn-primary">Admit</button></td> -->
                                                              
                                                                           
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

 <?php  
        if (isset($_POST['admitBtn'])) {
            $assign_doc = $_POST['assign_doc'];
            $assign_staff = $_POST['assign_staff'];     
            echo "<script>alert('$assign_doc, $assign_staff')</script>";
            
          /*  
                $dataPush = array(
                    'hms_id_dc' => $_POST['hms_id_dc'],
                    'hms_id_pt' => $hms_id_pt,
                    'apt_date' => $_POST['apt_date'],
                    'apt_message' => $_POST['apt_message'],
                    'apt_token' => $aptToken,
                    'apt_timestamp' => $timestamp
                );
                if (insertData('appointment', $dataPush)) {
                    echo "<script>alert('Success,')</script>";
                } else {
                    echo "<script>alert('Error!!')</script>";
                }
             */

     


        }

        ?>
       
        <!-- Modal end -->
<?php include_once('admin_footer.php') ?>