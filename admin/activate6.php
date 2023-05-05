<?php
session_start();
// include('../admin_coonect.php');

  $conn = mysqli_connect('localhost','root','','hotelsystem');
  
  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error."<br>");
  }

$foodmenu_id=$_REQUEST['foodmenu_id'];

$sql4="UPDATE tbl_foodmenu set status='1' where foodmenu_id='$foodmenu_id'";
if(mysqli_query($conn,$sql4))
{
    $_SESSION['msg2'] = " activated successfully";
}
header("Location:#");
?>