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
                                        print_r(admissionDisplay());
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
foreach ($_POST['assign_doc'] as $value)
{
    $assign_doc =$value;
    
}
foreach ($_POST['assign_staff'] as $value)
{
    $assign_staff =$value;
}
foreach ($_POST['id'] as $value)
{
    $rowId =$value;
}
       


$patientName=getOneData('admission','pt_name','id',$rowId);
$doctorName=getOneData('user','u_full_name','hms_id',$assign_doc);
$staffName=getOneData('user','u_full_name','hms_id',$assign_staff);
$patientEmail=getOneData('admission','pt_email','id',$rowId);
$department=getOneData('admission','dept','id',$rowId);

$mailSubject="Admission Success";
$mailContent="Dear $patientName , \r\n
Hospital is committed to provide efficient, 
effective and timely service to its patients through the best medical 
support in a clean and hygienic environment. \r\n
Details:- \r\n
PATIENT NAME: $patientName \r\n
DOCTOR NAME: $doctorName \r\n
DEPARTMENT: $department \r\n
STAFF NAME: $staffName \r\n
ADMITTED ON: $timestamp\r\n
";

     $dataUpdate = array(
         'assigned_to_hmsid_doc' => $assign_doc,
         'assigned_to_hmsid_staff' => $assign_staff,
         'timestamp' => $timestamp,
         'status' => 'active'   
     );
     if (updateData('admission', $dataUpdate, "WHERE id = '$rowId'")) {
        if(SendMail($patientEmail,$mailSubject,$mailContent))           
            echo "<script>alert('Admitted (Notification sent to patient)')</script>";           
        else
         echo "<script>alert('Admitted but sending mail failed')</script>";
     } else {
         echo "<script>alert('Error!!')</script>";
     }
             

     


        }

        ?>
       
        <!-- Modal end -->
<?php include_once('admin_footer.php') ?>