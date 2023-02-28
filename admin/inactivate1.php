<?php
session_start();
// include('config.php');
$conn = mysqli_connect('localhost','root','','hotelsystem');
  
  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error."<br>");
  }
$roomtype_id=$_REQUEST['roomtype_id'];

$sql3="UPDATE tbl_roomtype set status='1' where roomtype_id='$roomtype_id'";
if(mysqli_query($conn,$sql3))
{
    $_SESSION['msg'] = " deactivated successfully";
}
header("Location: view roomtype.php");
?>