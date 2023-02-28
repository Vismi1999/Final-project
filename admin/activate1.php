<?php
session_start();
// include('../admin_coonect.php');

  $conn = mysqli_connect('localhost','root','','hotelsystem');
  
  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error."<br>");
  }

$roomtype_id=$_REQUEST['roomtype_id'];

$sql4="UPDATE tbl_roomtype set status='0' where roomtype_id='$roomtype_id'";
if(mysqli_query($conn,$sql4))
{
    $_SESSION['msg2'] = " activated successfully";
}
header("Location:view roomtype.php");
?>