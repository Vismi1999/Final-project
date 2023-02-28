<?php
session_start();
// include('config.php');
$conn = mysqli_connect('localhost','root','','hotelsystem');
  
  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error."<br>");
  }
$addroom_id=$_REQUEST['addroom_id'];

$sql3="UPDATE tbl_addrooms set status='1' where addroom_id='$addroom_id'";
if(mysqli_query($conn,$sql3))
{
    $_SESSION['msg'] = " deactivated successfully";
}
header("Location: view addroom.php");
?>