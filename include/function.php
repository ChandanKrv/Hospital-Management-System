<?php
require 'db.php'; //Already Started in dp.php

//Some Important Global Variable
$max_appointment_in_a_day = 2;

//$ip = getUserIP();
date_default_timezone_set('Asia/Kolkata');
$date = date('Y-m-d');
$year4 = date("Y");
$year2 = date("y"); //Get last two digits
$plusOneYear = date('Y-m-d', strtotime('+1 year'));
$time24h = date('H:i:s');
$time = date("g:iA", strtotime($time24h));
$timestamp = $date . ' ' . $time24h; //Date and Time


function ageCalculator($gimmeYourDOB)
{
    global $date;
    return date_diff(date_create($gimmeYourDOB), date_create($date))->y;
}

//for getting user ip
/* function getUserIp()
{
    switch (true) {
        case (!empty($_SERVER['HTTP_X_REAL_IP'])):
            return $_SERVER['HTTP_X_REAL_IP'];
        case (!empty($_SERVER['HTTP_CLIENT_IP'])):
            return $_SERVER['HTTP_CLIENT_IP'];
        case (!empty($_SERVER['HTTP_X_FORWARDEs_FOR'])):
            return $_SERVER['HTTP_X_FORWARDEs_FOR'];
        default:
            return $_SERVER['REMOTE_ADDR'];
    }
} */


function apostrophePush($gimmePushingString)
{
    $pattern = "/'/i";
    $insert = "~>";
    $strLen = strlen($gimmePushingString);

    $all = preg_replace($pattern, $insert, $gimmePushingString);
    /* for ($i = 1; $i <= $strLen; $i++) {
        $all = preg_replace($pattern, $insert, $gimmePushingString);
    } */
    return $all;
}

function apostrophePull($gimmePullingString)
{
    $pattern = '/~>/i';
    $insert = "'";
    $strLen = strlen($gimmePullingString);
    $all = preg_replace($pattern, $insert, $gimmePullingString);
    /*  for ($i = 1; $i <= $strLen; $i++) {
        $all = preg_replace($pattern, $insert, $gimmePullingString);
    } */
    return $all;
}
//Returning only date from timestamp
function getDateFromTimestamp($table_name, $column_name, $where_condition, $match_this)
{
    global $con;
    $getData = "SELECT $column_name FROM $table_name WHERE $where_condition='$match_this'";
    $run = mysqli_query($con, $getData);
    $row = mysqli_fetch_array($run);
    $gotDate = $row[$column_name];
    return substr($gotDate, 0, 10);
}

function getCurrentPageURL()
{
    if (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on')
        $url = "https://";
    else
        $url = "http://";
    // Append the host(domain name, ip) to the URL.   
    $url .= $_SERVER['HTTP_HOST'];

    // Append the requested resource location to the URL   
    $url .= $_SERVER['REQUEST_URI'];

    return $url;
}

function getCurrentURL()
{
    if (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on')
        $url = "https://";
    else
        $url = "http://";

    $url .= $_SERVER['SERVER_NAME'];

    return $url;
}


function SendMail($user_email, $subject, $content)
{
    $sender_email = "admin@hospital.softcse.ml	";
    $headers  = 'MIME-Version: 1.0' . "\r\n";
    $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
    $headers .= 'From: Hospital Management System<' . $sender_email . ">\r\n" .
        'Reply-To: ' . $sender_email . "\r\n" .
        'X-Mailer: PHP/' . phpversion();
    return mail($user_email, $subject, $content, $headers);
}


function deleteOneRow($table_name, $where_condition, $match_this)
{
    global $con;
    $getData = "DELETE FROM $table_name WHERE $where_condition='$match_this'";
    return mysqli_query($con, $getData);
}

/* DOCTOR FUNCTION */
// Compress image
function compressedImage($source, $path, $quality)
{

    $info = getimagesize($source);

    if ($info['mime'] == 'image/jpeg')
        $image = imagecreatefromjpeg($source);

    elseif ($info['mime'] == 'image/gif')
        $image = imagecreatefromgif($source);

    elseif ($info['mime'] == 'image/png')
        $image = imagecreatefrompng($source);
    imagejpeg($image, $path, $quality);
}

//Generating ID
function generateHMSID($u_role)
{ //WARNING:: DO NOT MODIFY THIS FUNCTION
    global $year2;
    //HMS21-DOC-01
    $step1 = "HMS";
    $step2 = $year2;
    $step3 = $u_role[0] . $u_role[1] . $u_role[2];
    $hyphen = "-";
    $step4 = countRows('user', 'u_role', $u_role) + 1;
    if ($step4 < 10) {
        $step4 = '0' . $step4;
    }
    $final = $step1 . $step2 . $hyphen . $step3 . $hyphen . $step4;
    return strtoupper($final);
}
//$where_condition, $match_this are optional just pass null 
function countRows($table_name, $where_condition, $match_this)
{
    global $mysqli;
    if ($where_condition == NULL || $match_this == NULL)
        $get = "SELECT * FROM $table_name";
    else
        $get = "SELECT * FROM $table_name WHERE $where_condition='$match_this'";
    $run = mysqli_query($mysqli, $get);
    $counted = mysqli_num_rows($run);
    return $counted;
}

function patientTokenGeneration($doctor_hms_id, $patient_hms_id, $appointment_date)
{
    global $mysqli;
    $get = "SELECT * FROM appointment WHERE hms_id_dc='$doctor_hms_id' AND hms_id_pt='$patient_hms_id' AND apt_date='$appointment_date'";
    $run = mysqli_query($mysqli, $get);
    $counted = mysqli_num_rows($run);
    return $counted + 1;
}

// clean input field
function cleanInput($input)
{
    $input = htmlentities(addslashes(trim($input)));
    return $input;
}

# Insert Data 
function insertData($table_name, $data_array)
{
    global $mysqli;
    $fields = array_keys($data_array);
    $values = array_map(array($mysqli, 'real_escape_string'), array_values($data_array));
    return mysqli_query($mysqli, "INSERT INTO $table_name(" . implode(",", $fields) . ") VALUES ('" . implode("','", $values) . "');");
}

/* UPDATE ONE DATA */
function updateOneData($table_name, $columnName, $updatingData, $where_condition, $match_this)
{
    global $con;
    $getData = "UPDATE $table_name SET $columnName='$updatingData' WHERE $where_condition='$match_this'";
    return mysqli_query($con, $getData);
}

function updateData($table_name, $form_data, $where_clause = '')
{
    global $mysqli;
    $whereSQL = '';
    if (!empty($where_clause)) {
        if (substr(strtoupper(trim($where_clause)), 0, 5) != 'WHERE') {
            $whereSQL = " WHERE " . $where_clause;
        } else {
            $whereSQL = " " . trim($where_clause);
        }
    }
    $sql = "UPDATE " . $table_name . " SET ";
    $sets = array();
    foreach ($form_data as $column => $value) {
        $sets[] = "`" . $column . "` = '" . $value . "'";
    }
    $sql .= implode(', ', $sets);
    $sql .= $whereSQL;
    return mysqli_query($mysqli, $sql);
}

function appointmentDisplay($hms_id)
{
    global $con;

    $table1 = "user";
    $columnOfT1 = "hms_id";
    $table2 = "doctor";
    $columnOfT2 = "u_id";
    $table3 = "appointment";
    $columnOfT3 = "hms_id_pt";

    //For local
    $get_product = "SELECT * FROM $table1 INNER JOIN $table2 ON user.u_id=doctor.u_id INNER JOIN $table3 ON user.hms_id=appointment.hms_id_dc  WHERE appointment.hms_id_pt='$hms_id' ORDER BY appointment.apt_token DESC";
    $run_products = mysqli_query($con, $get_product);
    while ($row_product = mysqli_fetch_array($run_products)) {
        $u_full_name = $row_product['u_full_name'];
        $d_image = $row_product['d_image'];
        $d_department = $row_product['d_department'];
        $u_email = $row_product['u_email'];
        $apt_date = $row_product['apt_date'];
        $d_fees = $row_product['d_fees'];
        $apt_token = $row_product['apt_token'];

        echo "<tr>
                               
                                <td class='py-3'>
                                    <a href='#' class='text-dark'>
                                        <div class='d-flex align-items-center'>
                                            <img src='../assets/images/doctors_img/$d_image' class='avatar avatar-md-sm rounded-circle shadow' alt=''>
                                            <span class='ms-2'>$u_full_name</span>
                                        </div>
                                    </a>
                                </td>
                                <td>$d_department</td>
                                <td>$u_email</td>
                                <td>$apt_date</td>
                                <td>$d_fees</td>
                                <td><center>$apt_token</center></td>
                            </tr>";
    }
}

/* For displaying in doctor's appointment page */

function appointmentDisplayDoctor($hms_id)
{
    global $con;

    $table1 = "user";
    $columnOfT1 = "hms_id";
    $table2 = "patient";
    $columnOfT2 = "u_id";
    $table3 = "appointment";
    $columnOfT3 = "hms_id_pt";

    //For local
    $get_product = "SELECT * FROM $table1 INNER JOIN $table2 ON user.u_id=patient.u_id INNER JOIN $table3 ON user.hms_id=appointment.hms_id_pt  WHERE appointment.hms_id_dc='$hms_id' ORDER BY appointment.apt_token DESC";
    $run_products = mysqli_query($con, $get_product);
    while ($row_product = mysqli_fetch_array($run_products)) {
        $u_full_name = $row_product['u_full_name'];
        $image = $row_product['p_image'];
        $gender = $row_product['p_gender'];
        $phone = $row_product['p_phone'];
        $u_email = $row_product['u_email'];
        $apt_date = $row_product['apt_date'];
        $p_hms_id = $row_product['hms_id'];
        $apt_token = $row_product['apt_token'];

        echo "<tr>
                                           
        <td class='py-3'>
            <a href='#' class='text-dark'>
                <div class='d-flex align-items-center'>
                    <img src='../assets/images/patients_img/$image' class='avatar avatar-md-sm rounded-circle shadow' alt=''>
                    <span class='ms-2'>$u_full_name</span>
                </div>
            </a>
        </td>
        <td>$u_email</td>
        <td>25</td>
        <td>$gender</td>
        <td>$phone</td>
        <td>$apt_date</td>
        <td><center>$apt_token</center></td>
        <td>$p_hms_id</td>
        
    </tr>";
    }
}


/* STAFF GIG */
function staffGigDisplay()
{
    global $con;
    //For local
    $get_product = "SELECT * FROM user INNER JOIN staff ON user.u_id=staff.u_id ORDER BY staff.s_id DESC";
    $run_products = mysqli_query($con, $get_product);
    while ($row_product = mysqli_fetch_array($run_products)) {
        $u_full_name = $row_product['u_full_name'];
        $s_department = $row_product['s_department'];
        $s_image = $row_product['s_image'];

        echo "<div class='col-xl col-lg-4 col-md-6 mt-4'>
        <div class='card team border-0 rounded shadow overflow-hidden'>
            <div class='team-img position-relative'>
                <img src='../assets/images/staffs_img/$s_image' class='img-fluid' alt=''>
                
            </div>
            <div class='card-body content text-center'>
                <a href='dr-profile' class='title text-dark h5 d-block mb-0'>Dr. $u_full_name</a>
                <small class='text-muted speciality'>$s_department</small>
            </div>
        </div>
    </div>";
    }
}

/* DOCTOR GIG */
function doctorGigDisplay()
{
    global $con;
    //For local
    $get_product = "SELECT * FROM user INNER JOIN doctor ON user.u_id=doctor.u_id ORDER BY doctor.s_id DESC";
    $run_products = mysqli_query($con, $get_product);
    while ($row_product = mysqli_fetch_array($run_products)) {
        $u_full_name = $row_product['u_full_name'];
        $s_department = $row_product['s_department'];
        $s_address = $row_product['s_address'];
        $s_timings = $row_product['s_timings'];
        $s_price = $row_product['s_price'];
        $s_image = $row_product['s_image'];
        /* $s_address = $row_product['$s_address'];
         */

        echo "<div class='col-lg-6 col-md-12'>
        <div class='card team border-0 rounded shadow overflow-hidden'>
            <div class='row align-items-center'>
                <div class='col-md-6'>
                    <div class='team-person position-relative overflow-hidden'>
                        <img src='../assets/images/doctors_img/$s_image' class='img-fluid' alt=''>
                        
                    </div>
                </div>
                <div class='col-md-6'>
                    <div class='card-body'>
                        <a href='#' class='title text-dark h5 d-block mb-0'>Dr. $u_full_name</a>
                        <small class='text-muted speciality'>$s_department</small>
                        
                        <ul class='list-unstyled mt-2 mb-0'>
                            <li class='d-flex'>
                                <i class='ri-map-pin-line text-primary align-middle'></i>
                                <small class='text-muted ms-2'>$s_address</small>
                            </li>
                            <li class='d-flex mt-2'>
                                <i class='ri-time-line text-primary align-middle'></i>
                                <small class='text-muted ms-2'>$s_timings</small>
                            </li>
                            <li class='d-flex mt-2'>
                                <i class='ri-money-dollar-circle-line text-primary align-middle'></i>
                                <small class='text-muted ms-2'>$s_price</small>
                            </li>
                        </ul>
                        
                    </div>
                </div>
            </div>
        </div>
        </div>";
    }
}












/* LOGIN FUNCTION */
function logout()
{
    //  session_start();  //Already Started in dp.php
    session_unset();
    session_destroy();
    echo "<script> location.href='../' </script>";
}

function getOneData($table_name, $column_name, $where_condition, $match_this)
{
    global $con;
    $getData = "SELECT $column_name FROM $table_name WHERE $where_condition='$match_this'";
    $run = mysqli_query($con, $getData);
    $row = mysqli_fetch_array($run);
    return $row[$column_name];
}
/* Get all data for profile */

//SELECT * FROM user INNER JOIN staff ON user.u_id=staff.u_id ORDER BY staff.s_id DESC
function getAllData($table_name, $where_condition, $match_this)
{
    global $con;
    $getData = "SELECT * FROM user INNER JOIN $table_name ON user.u_id=$table_name.u_id WHERE $where_condition='$match_this'";
    //$getData = "SELECT $column_name FROM $table_name WHERE $where_condition='$match_this'";
    $run = mysqli_query($con, $getData);
    $row = mysqli_fetch_array($run);
    return $row;
}


/* PATIENT FUNCTIONS */
//CHOOSE FROM DROPDOWN
function getDropdownDoctor($data,$hms_doc_id="")
{
    global $con;
    $getData = "SELECT * FROM user INNER JOIN doctor ON user.u_id=doctor.u_id WHERE user.hms_id !='NULL' 
    GROUP BY doctor.d_department";

    $run_products = mysqli_query($con, $getData);
    while ($row_product = mysqli_fetch_array($run_products)) {
        $full_name = $row_product['u_full_name'];
        $hms_id = $row_product['hms_id'];
        $department = $row_product['d_department'];
        $fees = $row_product['d_fees'];
        if ($data == 'appointment') {
            echo "<option value='$hms_id'>$full_name ($department) -> Rs $fees/visit</option>";
        }else if ($data == 'admission') {
            if($hms_doc_id != "")
            {
                ($hms_doc_id==$hms_id)?$val="hidden":$val=""; 
                echo "<option value='$hms_id' $val>$full_name ($department)</option>";
            }
           
        }        
         else {
            echo "<option value='$hms_id'>$full_name ($department)</option>";
        }
      
    }
}
function getDropdownStaff($data,$hms_staff_id="")
{
    global $con;
    $getData = "SELECT * FROM user INNER JOIN staff ON user.u_id=staff.u_id WHERE user.hms_id !='NULL' 
    GROUP BY staff.s_department";
    $run_products = mysqli_query($con, $getData);
    while ($row_product = mysqli_fetch_array($run_products)) {
        $full_name = $row_product['u_full_name'];
        $hms_id = $row_product['hms_id'];
        $department = $row_product['s_department']; 
        if ($data == 'admission') {
            if($hms_staff_id != "")
            {
                ($hms_staff_id==$hms_id)?$val="hidden":$val=""; 
                echo "<option value='$hms_id' $val>$full_name ($department)</option>";
            }
           
        }else   
            echo "<option value='$hms_id'>$full_name ($department)</option>";
    }     
}

function admissionDisplay()
{
    global $con;
    $getData = "SELECT * FROM admission WHERE status='pending'";
    $run_products = mysqli_query($con, $getData);
    $count=1;    
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
        
        ?>      
        <form method="post">       
            <tr>
            <th><?php echo $count++ ?></th>
            <td><?php echo $pt_name ?></td>
            <td><?php echo $pt_email ?></td>                                                
            <td><?php echo $dept ?></td>
            <td><?php echo $date ?></td>                                                
            <td>
            <select class='form-control' name='assign_doc[]'>                                                
            <option value=<?php echo $assigned_to_hmsid_doc ?> ><?php echo getOneData('user','u_full_name','hms_id',$assigned_to_hmsid_doc) ?> ( <?php echo $dept ?>)</option>
            <?php getDropdownDoctor("admission", $assigned_to_hmsid_doc) ?>
            </select>
            </td>
            <td>
            <select class='form-control' name='assign_staff[]' >                                                
            <option value=<?php echo $assigned_to_hmsid_staff ?> ><?php echo  getOneData('user','u_full_name','hms_id',$assigned_to_hmsid_staff) ?> (<?php echo $dept ?>)</option>
            <?php getDropdownStaff("admission",$assigned_to_hmsid_staff) ?>
            </select>
            </td>
           <td><button type='submit' name="admitBtn" class='btn btn-primary'>Admit</button></td>
           <!-- <td> <a href='admit-page?id=<?php echo $id ?>&d=<?php echo $assigned_to_hmsid_doc ?>&s=<?php echo $assigned_to_hmsid_staff ?>' class='btn btn-primary'>Admit</a> </td> -->
            </tr>

            <input type="hidden" name='id[]' value='<?php echo $id ?>'>
            </form>  
        <?php      
    
    }
}

function fetchAllData($table_name,$col1_name,$col1_value,$where_arr="")
{
    global $con;
    $getData = "SELECT * FROM $table_name WHERE $col1_name ='$col1_value' ";
    if($where_arr != "")
    {
        foreach($where_arr as $key=>$value)
        { 
            $getData.="AND $key ='$value' ";
        } 
    }
    $run_products = mysqli_query($con, $getData);
    //$row_product = mysqli_fetch_all($run_products,MYSQLI_ASSOC);
   $row_product = mysqli_fetch_assoc($run_products);
    return $row_product;

}


 function contactFormDisplay()
{
    global $con;  
    $get_product = "SELECT * FROM contact ";
    $count=0;
    $run_products = mysqli_query($con, $get_product);
    while ($row_product = mysqli_fetch_array($run_products)) {
        $name = $row_product['name'];
        $email = $row_product['email'];
        $sub = $row_product['sub'];
        $comment = $row_product['comment'];
        $timestamp = $row_product['timestamp'];
$count++;
        echo "<tr>                            
                <th>$count</th>                              
                <td>$name</td>
                <td>$email</td>
                <td>$sub</td>
                <td>$comment</td>                               
                <td>$timestamp</td>                            
            </tr>";
    }
} 
 function doctorStaffDisplay()
{
    global $con;  
    $get_product = "SELECT * FROM user WHERE u_role='doctor' OR u_role='staff' ORDER BY u_id DESC";
    $count=0;
    $run_products = mysqli_query($con, $get_product);
    while ($row_product = mysqli_fetch_array($run_products)) {
        $hms_id = $row_product['hms_id'];
        $u_name = $row_product['u_name'];
        $u_full_name = $row_product['u_full_name'];
        $u_email = $row_product['u_email'];
        $u_role = $row_product['u_role'];
        $u_timestamp = $row_product['u_timestamp'];
        $count++;
        echo "<tr>                            
                <th>$count</th>                              
                <td>$u_name</td>
                <td>$u_email</td>
                <td>$u_role</td>
                <td>$hms_id</td>                               
                <td>$u_full_name</td>                            
                <td>$timestamp</td>                            
                <td>$timestamp</td>                            
                <td>$timestamp</td>                            
            </tr>";
    }
} 

