<?php
require 'db.php'; //Already Started in dp.php

//Common Functions

//$ip = getUserIP();
date_default_timezone_set('Asia/Kolkata');
$date = date('Y-m-d');
$year4 = date("Y");
$year2 = date("y"); //Get last two digits
$plusOneYear = date('Y-m-d', strtotime('+1 year'));
$time24h = date('H:i:s');
$time = date("g:iA", strtotime($time24h));
$timestamp = $date . ' ' . $time24h; //Date and Time


//for getting user ip
/* function getUserIp()
{
    switch (true) {
        case (!empty($_SERVER['HTTP_X_REAL_IP'])):
            return $_SERVER['HTTP_X_REAL_IP'];
        case (!empty($_SERVER['HTTP_CLIENT_IP'])):
            return $_SERVER['HTTP_CLIENT_IP'];
        case (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])):
            return $_SERVER['HTTP_X_FORWARDED_FOR'];
        default:
            return $_SERVER['REMOTE_ADDR'];
    }
} */

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
                <img src='../assets/images/staffs_img/$d_image' class='img-fluid' alt=''>
                
            </div>
            <div class='card-body content text-center'>
                <a href='dr-profile' class='title text-dark h5 d-block mb-0'>Dr. $u_full_name</a>
                <small class='text-muted speciality'>$d_department</small>
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
    $get_product = "SELECT * FROM user INNER JOIN doctor ON user.u_id=doctor.u_id ORDER BY doctor.d_id DESC";
    $run_products = mysqli_query($con, $get_product);
    while ($row_product = mysqli_fetch_array($run_products)) {
        $u_full_name = $row_product['u_full_name'];
        $d_department = $row_product['d_department'];
        $d_address = $row_product['d_address'];
        $d_timings = $row_product['d_timings'];
        $d_price = $row_product['d_price'];
        $d_image = $row_product['d_image'];
        /* $d_address = $row_product['$d_address'];
         */

        echo "<div class='col-lg-6 col-md-12'>
        <div class='card team border-0 rounded shadow overflow-hidden'>
            <div class='row align-items-center'>
                <div class='col-md-6'>
                    <div class='team-person position-relative overflow-hidden'>
                        <img src='../assets/images/doctors_img/$d_image' class='img-fluid' alt=''>
                        
                    </div>
                </div>
                <div class='col-md-6'>
                    <div class='card-body'>
                        <a href='#' class='title text-dark h5 d-block mb-0'>Dr. $u_full_name</a>
                        <small class='text-muted speciality'>$d_department</small>
                        
                        <ul class='list-unstyled mt-2 mb-0'>
                            <li class='d-flex'>
                                <i class='ri-map-pin-line text-primary align-middle'></i>
                                <small class='text-muted ms-2'>$d_address</small>
                            </li>
                            <li class='d-flex mt-2'>
                                <i class='ri-time-line text-primary align-middle'></i>
                                <small class='text-muted ms-2'>$d_timings</small>
                            </li>
                            <li class='d-flex mt-2'>
                                <i class='ri-money-dollar-circle-line text-primary align-middle'></i>
                                <small class='text-muted ms-2'>$d_price</small>
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
    $getData="SELECT * FROM user INNER JOIN $table_name ON user.u_id=$table_name.u_id WHERE $where_condition='$match_this'";
    //$getData = "SELECT $column_name FROM $table_name WHERE $where_condition='$match_this'";
    $run = mysqli_query($con, $getData);
    $row = mysqli_fetch_array($run);
    return $row;
}