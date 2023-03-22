<?php
session_start();
// include('../admin_coonect.php');

  $conn = mysqli_connect('localhost','root','','hotelsystem');
  
  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error."<br>");
  }

$booking_id=$_REQUEST['table_id'];

$sql4="UPDATE tbl_table set status='0' where table_id='$booking_id'";
if(mysqli_query($conn,$sql4))
{
    $_SESSION['msg2'] = " activated successfully";
}
header("Location:viewtable.php");
?>