<?php
//Session Checking
if (!isset($_SESSION['email'])) {
   
     if (!isset($_GET['id'])) {
               echo "<script>alert('HMS-Id is missing')</script>";
               echo "<script> location.href='../'; </script>";   
           }
           if (!isset($_GET['amt'])) {
        echo "<script>alert('Amount is missing')</script>";
        echo "<script> location.href='../'; </script>";    
  }
       
       
} else {
  echo "<script>alert('Please login as a patient')</script>";
   echo "<script>alert('Alert!! HEoo else')</script>";
}


 

include_once('../include/function.php');

$hms_id = cleanInput($_GET['id']);
$amt = cleanInput($_GET['amt']);


 
?>


<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://checkout.razorpay.com/v1/checkout.js"></script>
<form>
    <input type="textbox" name="hms_id" id="hms_id" placeholder="Enter your HMS-ID"/><br/><br/>
    <input type="textbox" name="amt" id="amt" placeholder="Enter amt"/><br/><br/>
    <input type="button" name="btn" id="btn" value="Pay Now" onclick="pay_now()"/>
</form>


<body onload="pay_now()">

<button onclick="pay_now()"> Continue </button>

</body>



<script>
    function pay_now(){       
 /*       var hms_id=jQuery('#hms_id').val();
       var amt=jQuery('#amt').val();  */
        
        var hms_id = "<?php echo "$hms_id" ?>";    
        var amt = "<?php echo "$amt" ?>";      


         jQuery.ajax({
               type:'post',
               url:'payment_process.php',
               data:"amt="+amt+"&hms_id="+hms_id,
               success:function(result){
                   var options = {
                        "key": "rzp_test_pR7jTONv04Fa0d", 
                        "amount": amt*100, 
                        "currency": "INR",
                        "name": "HMS",
                        "description": "Demo Payment",
                        "image": "https://image.freepik.com/free-vector/logo-sample-text_355-558.jpg",
                        "handler": function (response){
                           jQuery.ajax({
                               type:'post',
                               url:'payment_process.php',
                               data:"payment_id="+response.razorpay_payment_id,
                               success:function(result){
                                   window.location.href="thank_you.php";
                               }
                           });
                        }
                    };
                    var rzp1 = new Razorpay(options);
                    rzp1.open();
               }
           });
        
        
    }
</script>