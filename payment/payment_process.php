<?php
//session_start(); //Already Started in dp.php
include_once('../include/function.php');

if(isset($_POST['amt']) && isset($_POST['hms_id'])){
    $amt=$_POST['amt'];
    $hms_id1=$_POST['hms_id'];
    $payment_status="pending";
    //$timestamp=$timestamp;
    mysqli_query($con,"insert into payment(hms_id,amount,payment_status,timestamp) values('$hms_id1','$amt','$payment_status','$timestamp')");
    $_SESSION['OID']=mysqli_insert_id($con);
      
}


if(isset($_POST['payment_id']) && isset($_SESSION['OID'])){
    $payment_id=$_POST['payment_id'];
    mysqli_query($con,"update payment set payment_status='complete',payment_id='$payment_id' where id='".$_SESSION['OID']."'");
}
?>