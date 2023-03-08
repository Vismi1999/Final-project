<?php
session_start();
// include('../admin_coonect.php');

  $conn = mysqli_connect('localhost','root','','hotelsystem');
  
  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error."<br>");
  }

$catagory_id=$_REQUEST['catagory_id'];

$sql4="UPDATE tbl_catagory set status='0' where catagory_id='$catagory_id'";
if(mysqli_query($conn,$sql4))
{
    $_SESSION['sid'] = " activated successfully";
}
header("Location:viewcata.php");
?>