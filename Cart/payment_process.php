<?php 
include '../connect1.php';
session_start();
$n=$_SESSION['username'];
$login_id= $_SESSION['sid'];
$cash_id=$_SESSION['cash_id'];
if(isset($_POST['amount'])&&($_POST['payment_id'])&&($_POST['name1'])&&($_POST['login_id']) ){
    $amt=$_POST['amount'];
    $pymnt_id=$_POST['payment_id'];
     $nme=$_POST['name1'];
     $login_id=$_POST['login_id'];
    $payment_status="paid";
    
    // mysqli_query($conn,"DELETE FROM `tbl_cart` where username='$nme'");
   // Insert data into tbl_payment
$sql1 = mysqli_query($conn, "INSERT INTO `tbl_payment`(`log_id`, `cash_id`, `amount`, `payment_status`, `payment_id`, `name`) 
VALUES ('$login_id', '$cash_id', '$amt', '$payment_status', '$pymnt_id', '$nme')");

// Retrieve the auto-generated pay_id value
$pay_id = mysqli_insert_id($conn);

// Update the corresponding row in tbl_cashroom
$sql2 = mysqli_query($conn, "UPDATE `tbl_cashroom` SET `payid`='$pay_id' WHERE `cash_id`='$cash_id'");

if ($sql1 && $sql2) {
echo "<script>alert('Payment successful.')</script>";
header("Location: payment_success.php");
} else {
echo "<script>alert('Payment failed. Please try again.')</script>";
}
    
}else
{
    echo "failed..\n".mysqli_error($conn);
}
?>