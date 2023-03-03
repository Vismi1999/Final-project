<?php
session_start();
// include('config.php');
$conn = mysqli_connect('localhost','root','','hotelsystem');
  
  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error."<br>");
  }
$catagory_id=$_REQUEST['catagory_id'];

$sql3="UPDATE tbl_catagory set status='1' where catagory_id='$catagory'";
if(mysqli_query($conn,$sql3))
{
    $_SESSION['msg'] = " deactivated successfully";
}
header("Location: viewcata.php");
?>
