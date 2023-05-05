<?php
session_start();
// include('config.php');
$conn = mysqli_connect('localhost','root','','hotelsystem');
  
  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error."<br>");
  }
$foodmenu_id=$_REQUEST['foodmenu_id'];

$sql3="UPDATE tbl_foodmenu set status='0' where foodmenu_id='$foodmenu_id'";
if(mysqli_query($conn,$sql3))
{
    $_SESSION['msg'] = " deactivated successfully";
}
header("Location:viewfoodmenu.php");
?>