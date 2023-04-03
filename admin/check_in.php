<?php
session_start();
// include('config.php');
$conn = mysqli_connect('localhost','root','','hotelsystem');
  
  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error."<br>");
  }
$booking_id=$_REQUEST['booking_id'];

$sql3="UPDATE tbl_booking set status='1' where booking_id='$booking_id'";
if(mysqli_query($conn,$sql3))
{
    $_SESSION['msg'] = " deactivated successfully";
}
header("Location: viewbooking.php");
?>