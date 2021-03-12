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
function generateHMSID($className)
{ //WARNING:: DO NOT MODIFY THIS FUNCTION
    global $year2;
    //RM21-S1-01
    $step1 = "HMS";
    $step2 = $year2;
    $step3 = $className;
    $step4 = countRows('student_detail', 's_class', $className) + 1;
    if ($step4 < 10) {
        $step4 = '0' . $step4;
    }
    $final = $step1 . $step2 . $step3 . $step4;
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


function doctorGigDisplay($match_this)
{
    global $con;
    //For local
    $get_product = "SELECT * FROM doctor WHERE c_category LIKE '$match_this' AND c_trash='0' ORDER BY c_pos ASC";
    $run_products = mysqli_query($con, $get_product);
    while ($row_product = mysqli_fetch_array($run_products)) {
        $c_id = $row_product['c_id'];
        $c_name = $row_product['c_name'];
        $c_subhead = $row_product['c_subhead'];
        $c_duration = $row_product['c_duration'];
        $c_image = $row_product['c_image'];
        $c_level = $row_product['c_level'];
        $c_category = $row_product['c_category'];
        $c_detail = $row_product['c_detail'];
        $removeTiltArrow1 = removeTiltArrowLocal($c_detail);
        $removeTiltArrow = removeTiltArrow($c_detail);
        $c_price = $row_product['c_price'];
        $c_dis_price = $row_product['c_dis_price'];
        $c_video = $row_product['c_video'];
        $s_link = $row_product['s_link'];
        $c_rating = $row_product['c_rating'];
        $rating = ($c_rating * 100.0) / 5.0;

        $forLocation = "Unknown variable ?";
        if ($forLocation != "admin") {
            echo "
   <div class='col-lg-4'>
    <div class='properties properties2 mb-30'>
        <div class='properties__card'>
            <div cla";
        }
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
