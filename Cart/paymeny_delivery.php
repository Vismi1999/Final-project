<?php 
include '../connect1.php';
session_start();
$n=$_SESSION['username'];
$login_id= $_SESSION['sid'];
$cash_id=$_SESSION['delivery_id'];
if(isset($_POST['amount'])&&($_POST['payment_id'])&&($_POST['name1'])&&($_POST['login_id']) ){
    $amt=$_POST['amount'];
    $pymnt_id=$_POST['payment_id'];
     $nme=$_POST['name1'];
     $login_id=$_POST['login_id'];
    $payment_status="paid";
    
    // mysqli_query($conn,"DELETE FROM `tbl_cart` where username='$nme'");
    mysqli_query($conn,"INSERT INTO `tbl_payment`( `log_id`,`delivery_id`, `amount`, `payment_status`, `payment_id`, `name`) 
                 VALUES ('$login_id','$cash_id','$amt', '$payment_status', '$pymnt_id','$nme')");
    
}else
{
    echo "failed..\n".mysqli_error($conn);
}
?>