<?php
require 'db.php';

/**********************COMMON FUNCTIONS*******************************/

$ip = getUserIP();
date_default_timezone_set('Asia/Kolkata');
$date = date('Y-m-d');
$year4 = date("Y");
$year2 = date("y"); //Get last two digits
$plusOneYear = date('Y-m-d', strtotime('+1 year'));
$time24h = date('H:i:s');
$time = date("g:iA", strtotime($time24h));
$timestamp = $date . ' ' . $time24h; //Date and Time

//for getting user ip
function getUserIp()
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
}

//Generating RoboManthan ID
function generateRMID($className)
{ //WARNING:: DO NOT MODIFY THIS FUNCTION
    global $year2;
    //RM21-S1-01
    $step1 = "RM";
    $step2 = $year2;
    $step3 = $className;
    $step4 = countRows('student_detail', 's_class', $className) + 1;
    if ($step4 < 10) {
        $step4 = '0' . $step4;
    }
    $final = $step1 . $step2 . $step3 . $step4;
    return strtoupper($final);
}


function getClassName($u_email)
{
    global $con;
    $getData = "SELECT s_class FROM student_detail WHERE u_email='$u_email'";
    $run = mysqli_query($con, $getData);
    $row = mysqli_fetch_array($run);
    $s_class = $row['s_class'];
    if ($s_class == 'A')
        $gotClassName = "1-5";
    else if ($s_class == 'B')
        $gotClassName = "6-8";
    else if ($s_class == 'C')
        $gotClassName = "9-12";
    else if ($s_class == 'C1')
        $gotClassName = "1st Year";
    else if ($s_class == 'C2')
        $gotClassName = "2nd Year";
    else if ($s_class == 'C3')
        $gotClassName = "3rd Year";
    else if ($s_class == 'C4')
        $gotClassName = "4th Year";
    else if ($s_class == 'OT')
        $gotClassName = "Other";

    return $gotClassName;
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


function getOneData($table_name, $column_name, $where_condition, $match_this)
{
    global $con;
    $getData = "SELECT $column_name FROM $table_name WHERE $where_condition='$match_this'";
    $run = mysqli_query($con, $getData);
    $row = mysqli_fetch_array($run);
    return $row[$column_name];
}

function moveToTrash($table_name, $trashColumnName, $where_condition, $match_this)
{
    global $con, $timestamp;
    $getData = "UPDATE $table_name SET $trashColumnName='1',trash_timestamp='$timestamp' WHERE $where_condition='$match_this'";
    return mysqli_query($con, $getData);
}

function restoreFromTrash($table_name, $trashColumnName, $where_condition, $match_this)
{
    global $con;
    $getData = "UPDATE $table_name SET $trashColumnName='0',trash_timestamp=NULL WHERE $where_condition='$match_this'";
    return mysqli_query($con, $getData);
}

//Used in payment page
// Update Data, Where clause is left optional
// Calling Example: updateData('Chandan', $data, "WHERE p_id = '$p_id'");
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

function updateOneData($table_name, $columnName, $updatingData, $where_condition, $match_this)
{
    global $con;
    $getData = "UPDATE $table_name SET $columnName='$updatingData' WHERE $where_condition='$match_this'";
    return mysqli_query($con, $getData);
}

function logout()
{
    session_start();
    session_unset();
    session_destroy();
    // header('location: login-user.php');
}

function timestampToDate($timestamp)
{   //Must be timestamp in database in this format 2021-02-05 01:13:31
    return substr($timestamp, 0, 10);
}



/* #Admin Login
function adminUser($username, $password)
{
    global $mysqli;

    $sql = "SELECT id,username FROM tbl_admin where username = '" . $username . "' and password = '" . md5($password) . "'";
    $result = mysqli_query($mysqli, $sql);
    $num_rows = mysqli_num_rows($result);

    if ($num_rows > 0) {
        while ($row = mysqli_fetch_array($result)) {
            echo $_SESSION['ADMIN_ID'] = $row['id'];
            echo $_SESSION['ADMIN_USERNAME'] = $row['username'];

            return true;
        }
    }
} */

// get image from url
function getImageFromURL($file_url, $save_to)
{

    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $file_url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
    curl_setopt($ch, CURLOPT_TIMEOUT, 140);
    curl_setopt($ch, CURLOPT_USERAGENT, "Mozilla/5.0 (Windows; U; Windows NT 6.1; en-US; rv:1.9.2.16) Gecko/20110319 Firefox/3.6.16");
    curl_setopt($ch, CURLOPT_HEADER, 0);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
    curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 2);
    curl_setopt($ch, CURLOPT_HTTPAUTH, CURLAUTH_ANY);
    $output = curl_exec($ch);
    $file = fopen($save_to, "w+");
    fputs($file, $output);
    fclose($file);
}


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

function getLastIdValue($table_name, $nameOfAIColumn)
{
    global $con;
    $get = "SELECT * FROM $table_name";
    $run = mysqli_query($con, $get);
    while ($row = mysqli_fetch_array($run)) {
        $gotIt = $row[$nameOfAIColumn];
    }
    return ($gotIt + 1);
}

//For Previewing the Gig
function removeTiltArrow($giveMeTiltContainingTexts)
{
    $remove_this = '/~>/i';
    $insert_this_tickMark = "<br><br>
   <img src='https://robomanthan.com/assets/img/icon/right-icon.svg' alt='tickMark'>
   &nbsp;&nbsp;";
    $final_text = preg_replace($remove_this, $insert_this_tickMark, $giveMeTiltContainingTexts);
    return $final_text;
}

function removeTiltArrowLocal($giveMeTiltContainingTexts)
{
    $remove_this = '/~>/i';
    $insert_this_tickMark = "</p>
    </div>
</div>
<div class='single-features'>
    <div class='features-icon'>
        <img src='assets/img/icon/right-icon.svg' alt=''>
    </div>
    <div class='features-caption'>
        <p>";
    $final_text = preg_replace($remove_this, $insert_this_tickMark, $giveMeTiltContainingTexts);
    return $final_text;
}


function addTiltArrow($dataArray)
{
    $insert = "~>";
    $sum = $dataArray[0];
    for ($i = 1; $i < 7; $i++) {
        if ($dataArray[$i] != null)
            $sum = $sum . $insert . $dataArray[$i];
    }
    return $sum;
}

//Pass $linkType 1 to get Embedded URL OR Pass 0 to get Normal Url
function getYoutubeEmbedUrl($url, $linkType)
{
    $shortUrlRegex = '/youtu.be\/([a-zA-Z0-9_-]+)\??/i';
    $longUrlRegex = '/youtube.com\/((?:embed)|(?:watch))((?:\?v\=)|(?:\/))([a-zA-Z0-9_-]+)/i';

    if (preg_match($longUrlRegex, $url, $matches)) {
        $youtube_id = $matches[count($matches) - 1];
    }

    if (preg_match($shortUrlRegex, $url, $matches)) {
        $youtube_id = $matches[count($matches) - 1];
    }

    if ($linkType)
        return 'https://www.youtube.com/embed/' . $youtube_id;
    else
        return 'https://www.youtube.com/watch?v=' . $youtube_id;
}

/**********************GIG LOADING FUNCTIONS*******************************/

//Parameter: For admin or local gig
function courseGigDisplay($forLocation, $match_this)
{
    global $con;
    //For local
    $get_product = "SELECT * FROM course WHERE c_category LIKE '$match_this' AND c_trash='0' ORDER BY c_pos ASC";
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

        if ($forLocation != "admin") {
            echo "
   <div class='col-lg-4'>
    <div class='properties properties2 mb-30'>
        <div class='properties__card'>
            <div class='properties__img overlay1'>
                <div class='blog_item_img'>
                    <a href='course.php'>
                        <img class='card-img' src='admin/images/course_img/$c_image' alt='' height='220px'>
                        <div class='blog_item_date' style='background-color:#6610f2;'>
                            <p>$c_level</p>
                        </div>
                    </a>                    
                </div>                
            </div>
            <div class='properties__caption'>
                <div id='gigsize'>                    
                    <h3><a href='course.php'>$c_name</a>
                       <p id='pTag'>$c_subhead</p></h3>
                    <p>$c_duration
                    </p>
                    <h4>What Your Kid Will Learn:
                    </h4>
                    <div class='single-features'>
                        <div class='features-icon'>
                            <img src='assets/img/icon/right-icon.svg' alt=''>
                        </div>
                        <div class='features-caption'>
                            <p>
                              $removeTiltArrow1
                            </p>
                        </div>
                    </div>

                </div>
                <div class='properties__footer d-flex justify-content-between align-items-center'>
                    <div class='restaurant-name'>
                    <div class='progress' style='margin-top:15px; margin-bottom:6px; height:16px;'>
                    <div class='progress-bar progress-bar-striped progress-bar-animated' role='progressbar' aria-valuenow='75' aria-valuemin='0' aria-valuemax='100' style='width: $rating%;background-color:#FF7B2E;transform: rotate(180deg);'></div>
                    </div>
                        <p><span>($c_rating)</span> based on 1000</p>
                    </div>
                    <div class='price'>
                        <span style='float:right; color:#1f2b7b;'><del style='font-size: 18px;'>₹$c_price</del >  ₹$c_dis_price</span><p style='font-size: 20px; color:#4255A4;'><strong>ID:</strong> <span style='font-size: 18px;'>$c_id</span></p>
                    </div>
                </div>
                
                <a href='#' class='border-btn border-btn2' data-toggle='modal' data-target='#$c_id' style='margin-bottom:8px;'>View Syllabus</a>
                <a href='payment.php?cid=$c_id' onclink='data()' class='border-btn border-btn2'>Buy Now</a>
            </div>
        </div>
    </div>
</div>


<div class='modal fade' id='$c_id'>
<div class='modal-dialog modal-md'>
    <div class='modal-content'>
        
        
        <div class='modal-header'>
            <h2 class='modal-title'>
                <center>Please enter your details to get syllabus</center>
            </h2>
            <button type='button' class='close' data-dismiss='modal'>×</button>
        </div>
        
        <div class='modal-body'>
            
            <iframe width='467' height='300' src='$c_video' frameborder='0' allow='accelerometer; autoplay; 
            clipboard-write; encrypted-media; gyroscope; picture-in-picture' allowfullscreen></iframe>
            
            <div class='form-group'>
            <form method='post' action='syllabus.php' name='syllabus' enctype='multipart/form-data'  >
                <input type='text' name='cname' value='$c_name' hidden disabled>
                <input type='text' name='cid' value='$c_id' hidden disabled>
                <input type='text' name='category' value='$c_category' hidden disabled>
                <input type='text' name='slink' value='$s_link' hidden disabled>
                <br>
                <h2><label for='mail'>Email Id:</label>
                    <input type='email' class='form-control' name='email' placeholder='Enter email id' required style='height: 50px; font-size: 18px;'>
                </h2>
                <br>
                <h2><label for='mail'>Full Name:</label>
                    <input type='text' class='form-control' name='name' placeholder='Enter full name' required style='height: 50px; font-size: 18px;'>
                </h2>
                <br>
                <h2><label for='mail'>Phone No. (Optional):</label>
                    <input type='number' class='form-control' name='phone' placeholder='Enter phone number'  style='height: 50px; font-size: 18px;'>
                </h2><br><center>
                <button type='submit' class='btn'  name='viewSyllabus'>Get Syllabus</button>
                </center>
            </div>
            </div>

        
        </form>
    </div>
</div>
</div>

";
        } else {
            echo "<div id='DIV_1'>
            <div id='DIV_2'>
                <div id='DIV_3'>
                    <div id='DIV_4'>
                        <div id='DIV_5'>
                             <a id='A_6'><img src='images/course_img/$c_image' alt='' height='220px' id='IMG_7' /></a>
                            <div id='DIV_8'>
                                <p id='' style='text-align:center; font-size: 18px;' >
                                $c_level
                                </p>
                            </div>
                        </div>                       
            
                    </div>
                    <div id='DIV_10'>
                        <div id='DIV_11'>
                            
            
                            <h3 id='H3_12'>
                                <a  id='A_13'>$c_name</a>
                                <div style='color:#fd7e14;'>
                                $c_subhead
                                </div>
                            </h3>
                            <p id=''>
                            <div style='color:#6E7697'>$c_duration</div>
                            </p>
                            <h4 id='H4_16'>
                                What You Will Learn:
                            </h4>                           
                            
                            <div class='single-features'>
                        <div class='features-icon' style='color:#6E7697'>
                        <br>                        
                        <img src='https://robomanthan.com/assets/img/icon/right-icon.svg' alt='tick_symbol'>
                                         $removeTiltArrow
                                    </p>
                                </div>
                            </div>
                        </div>
                        
                        
            
                  		<div id='DIV_37'>
					<div id='DIV_38'>
						<div id='DIV_39' class='progress' style='margin-top:25px;  height:16px;'>
                        <div class='progress-bar progress-bar-striped progress-bar-animated' role='progressbar' aria-valuenow='75' aria-valuemin='0' aria-valuemax='100' style='width: $rating%;background-color:#FF7B2E;transform: rotate(180deg);'></div>
                        </div>                                 
            
						
							<span id='SPAN_42'>($c_rating)</span> <!-- based on 1000  -->
						
					</div>
					<div id='DIV_43' style='padding-left:10px;'>
						 <span id='SPAN_44' style='padding-left:10px;'><del id='DEL_45'>₹$c_price</del> ₹$c_dis_price</span>
						<p id='P_46'>
							<strong id='STRONG_47'>ID:</strong> <span id='SPAN_48'>SPE196AD</span>
						</p>
					</div>
				</div> 
                <a href='edit-course?cid=$c_id' id='A_50' style='margin-bottom:8px;'>Edit Course</a>
                <a href='delete-course?cid=$c_id' id='A_49'>Delete Course</a>                
                      
                    </div>
                </div>
            </div>
            </div>";
        }
    }

    /*  $adminData = "hello";







    if ($forLocation == "admin")
        return $adminData;
    else
        return $allDataForLocal; */
}

//Used in Admin Dashboard
function getAllDataOfCourse()
{
    global $con;
    $count = 0;
    $getData = "SELECT * FROM course WHERE c_trash='0' ORDER BY c_pos ASC LIMIT 0,7";
    $run = mysqli_query($con, $getData);
    while ($row = mysqli_fetch_array($run)) {
        $c_id = $row['c_id'];
        $c_name = $row['c_name'];
        $c_dis_price = $row['c_dis_price'];
        $c_rating = $row['c_rating'];
        $rating = ($c_rating * 100.0) / 5.0;
        $count++;


        echo "<th>$count</th>
           <td>$c_id</td>
            <td>$c_name</td>
             <td><span class='badge badge-rounded badge-warning'> ₹$c_dis_price</span></td>
             <td>
             <div class='progress'>
              <div class='progress-bar bg-warning' style='width: $rating%;' role='progressbar'>
               <span class='sr-only'>70% Complete</span>
                </div>
                                            </div>
                                        </td>
                                        </tr>
                                        <tr>";
    }
}

function quickEditDisplay()
{

    global $con;
    $getData = "SELECT * FROM course WHERE c_trash='0' ORDER BY c_pos ASC";
    $run = mysqli_query($con, $getData);
    while ($row = mysqli_fetch_array($run)) {
        $c_id = $row['c_id'];
        $c_name = $row['c_name'];
        $c_image = $row['c_image'];
        $c_level = $row['c_level'];
        $c_category = $row['c_category'];
        $c_dis_price = $row['c_dis_price'];
        $c_video = $row['c_video'];
        $s_link = $row['s_link'];

        if ($c_video) {
            $getNormalURL = getYoutubeEmbedUrl($c_video, '0');
            $c_video_final = "<a href='$getNormalURL' target='_blank'><strong>Watch Now</strong></a>";
        } else {
            $c_video_final = "<p class='text-danger'><strong>Not Added</strong></p>";
        }

        if ($s_link) {
            $s_link_final = "<a href='$s_link' target='_blank'><strong>View Here</strong></a>";
        } else {
            $s_link_final = "<p class='text-danger'><strong>Not Added</strong></p>";
        }


        echo "<tr>
              <td><img class='rounded-circle' width='35' src='images/course_img/$c_image' alt=''></td>
            <td>$c_id</td>
            <td>$c_name</td>
            <td>$c_level</td>
            <td>$c_category</td>
            <td>₹$c_dis_price</td>
            <td>$c_video_final</td>
            <td>$s_link_final</td>
            <td>
                <a href='edit-course?cid=$c_id' class='btn btn-sm btn-primary'><i class='la la-pencil'></i> Edit</a>
                <a href='delete-course?cid=$c_id' class='btn btn-sm btn-danger'><i class='la la-trash-o'></i> Trash</a>
            </td>
        </tr>";
    }
}

function trashCourseDisplay()
{
    global $con;
    $getData = "SELECT * FROM course WHERE c_trash='1' ORDER BY c_pos DESC ";
    $run = mysqli_query($con, $getData);
    while ($row = mysqli_fetch_array($run)) {
        $c_id = $row['c_id'];
        $c_name = $row['c_name'];
        $c_image = $row['c_image'];
        $c_level = $row['c_level'];
        $c_category = $row['c_category'];
        $c_dis_price = $row['c_dis_price'];
        $creates_on =  timestampToDate($row['c_timestamp']);
        $deletes_on = timestampToDate($row['trash_timestamp']);

        echo "<tr>
              <td><img class='rounded-circle' width='35' src='images/course_img/$c_image' alt=''></td>
            <td>$c_id</td>
            <td>$c_name</td>
            <td>$c_level</td>
            <td>$c_category</td>
            <td>₹$c_dis_price</td>
            <td>$creates_on</td>
            <td>$deletes_on</td>
            <td>
                <a href='restore-course?cid=$c_id' class='btn btn-sm btn-primary'><i class='la la-undo'></i> Restore</a>
               <!--  <a href='#' class='btn btn-sm btn-danger'><i class='la la-remove'></i></a> -->
            </td>
        </tr>";
    }
}


///////////---------------Student Dashboard Functions------------------------/////

function onGoingCoursesGig($stu_email)
{
    global $con;
    $rm_id = getOneData("user", "rm_id", "u_email", $stu_email);
    $getData = "SELECT * FROM course INNER JOIN payment ON course.c_id=payment.c_id WHERE payment.rm_id='$rm_id' AND p_status='completed'";
    $run = mysqli_query($con, $getData);
    while ($row = mysqli_fetch_array($run)) {
        $c_id = $row['c_id'];
        $c_name = $row['c_name'];
        $c_image = $row['c_image'];
        $c_level = $row['c_level'];

        echo "<div class='col-xl-3 col-xxl-4 col-lg-4 col-md-6 col-sm-6'>
                            <div class='card'>
                                <img src='../admin/images/course_img/$c_image' alt='' height='250px'>
                                <div class='card-body'>
                                    <h4>$c_name</h4>
                                    <ul class='list-group mb-3 list-group-flush'>
                                        <li class='list-group-item px-0 d-flex justify-content-between'>
                                            <span class='mb-0'>Duration :</span><strong>2 months</strong>
                                        </li>
                                        <li class='list-group-item px-0 d-flex justify-content-between'>
                                            <span class='mb-0'>Course Level :</span><strong>$c_level</strong>
                                        </li>
                                        <li class='list-group-item px-0 d-flex justify-content-between'>
                                            <span class='mb-0'>Course Id :</span><strong>$c_id</strong>
                                        </li>
                                        <li class='list-group-item px-0 border-top-0 d-flex justify-content-between'><span class='mb-0 text-muted'>Your Rating</span>
                                            <a href='javascript:void(0);'><i class='la la-heart-o mr-1'></i><strong>0.0</strong></a>
                                        </li>
                                    </ul>
                                  <!-- <a href='about-courses.html' class='btn btn-primary'>Read More</a> -->
                                    </li>
                                </div>
                            </div>
                        </div>";
    }
}
