<?php
session_start();
// include('../admin_coonect.php');

  $conn = mysqli_connect('localhost','root','','hotelsystem');
  
  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error."<br>");
  }

$addroom_id=$_REQUEST['addroom_id'];

$sql4="UPDATE tbl_addrooms set status='0' where addroom_id='$addroom_id'";
if(mysqli_query($conn,$sql4))
{
    $_SESSION['msg2'] = " activated successfully";
}
header("Location:view addroom.php");
?>