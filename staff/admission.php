<?php include_once('staff_header.php') ?>
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

                           
                        </div><!--end row-->
                        
                        <div class="row">
                            
                            <div class="col-12 mt-4">
                                <div class="table-responsive shadow rounded">
                                <h5><u>Patient Admitted</u></h5>
                                        <?php                      
                                            $arr['t.assigned_to_hmsid_staff'] = $hms_id;                  
                                            $data= fetchAllData("admission","status","active",$arr,"assigned_to_hmsid_staff");
                                            if(!empty($data))
                                            {
                                            $count1=1;
                                        ?>
                                        <table class="table table-center bg-white mb-0">
                                        <thead>
                                            <tr>
                                               <th class="border-bottom py-3" style="min-width: 30px;">#</th>
                                                <th class="border-bottom py-3" style="min-width: 130px;">Name</th>
                                                <th class="border-bottom py-3" style="min-width: 130px;">Email</th>
                                                <th class="border-bottom py-3" style="min-width: 130px;">Department</th>
                                                <th class="border-bottom py-3" style="min-width: 140px;">Date</th>                                                
                                                <th class="border-bottom py-3">Doctor</th>
                                                <th class="border-bottom py-3">Staff</th>
                                            </tr>
                                        </thead> 
                                                                             
                                        <tbody>
                                         <?php
                                            foreach($data as $onedata)
                                            {
                                               $doctor_name = getOneData('user','u_full_name','hms_id',$onedata['assigned_to_hmsid_doc']);
                                                $staff_name = getOneData('user','u_full_name','hms_id',$onedata['assigned_to_hmsid_staff']);
                                        ?>                                      
                                          <tr>
                                            <th><?php echo $count1++ ?></th>
                                            <td><?php echo $onedata['pt_name'] ?></td>
                                            <td><?php echo $onedata['pt_email'] ?></td>
                                            <td><?php echo $onedata['dept'] ?></td>  
                                            <td><?php echo substr($onedata['timestamp'],0,10) ?></td>
                                            <td><?php echo $doctor_name  ?></td>                                         
                                            <td><?php echo $staff_name  ?></td>  
                                            </tr> 
                                        <?php
                                            }
                                        ?>                        
                                        </tbody>
                                    </table>
                                    <?php                                        
                                            }
                                            else
                                            {
                                                echo "<h4>No data found</h4>";
                                            }
                                        ?>
                                </div>
                            </div>

                            <div class="col-12 mt-4">
                                <div class="table-responsive shadow rounded">
                                <h5><u>Patient Released</u></h5>
                                        <?php       
                                            $arr1['t.assigned_to_hmsid_staff'] =$hms_id;                          
                                            $data= fetchAllData("admission","status","inactive",$arr1,"assigned_to_hmsid_staff");
                                            if(!empty($data))
                                            {
                                            $count2=1;
                                        ?>
                                         
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
                                            </tr>
                                        </thead> 
                                                                             
                                        <tbody>
                                         <?php
                                            foreach($data as $onedata)
                                            {
                                               $doctor_name = getOneData('user','u_full_name','hms_id',$onedata['assigned_to_hmsid_doc']);
                                                $staff_name = getOneData('user','u_full_name','hms_id',$onedata['assigned_to_hmsid_staff']);
                                        ?>                                      
                                          <tr>
                                            <th><?php echo $count2++ ?></th>
                                            <td><?php echo $onedata['pt_name'] ?></td>
                                            <td><?php echo $onedata['pt_email'] ?></td>                                                
                                            <td><?php echo $onedata['dept'] ?></td>  
                                            <td><?php echo substr($onedata['timestamp'],0,10) ?></td>
                                            <td><?php echo $doctor_name  ?></td>                                         
                                            <td><?php echo $staff_name  ?></td>  
                                            </tr> 
                                        <?php
                                            }
                                        ?>                        
                                        </tbody>
                                    </table>
                                    <?php                                        
                                            }
                                            else
                                            {
                                                echo "<h4>No data found</h4>";
                                            }
                                        ?>
                                </div>
                            </div>
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
             

     //Reload code needed

        }

        ?>
       
        <!-- Modal end -->
<?php include_once('staff_footer.php') ?>