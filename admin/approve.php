<?php
session_start();
include('admin_connect.php');
$id=$_GET['id'];

$sql4="UPDATE tbl_cashroom set status='1' where cash_id='$id'";
if(mysqli_query($conn,$sql4))
{
    $_SESSION['msg2'] = "Category activated successfully";
}
header("Location: viewdeliveryform1.php");
?>