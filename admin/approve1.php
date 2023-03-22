<?php
session_start();
include('admin_connect.php');
$id=$_GET['id'];

$sql4="UPDATE tbl_delivery set status='1' where delivery_id='$id'";
if(mysqli_query($conn,$sql4))
{
    $_SESSION['msg2'] = "ygyyygugyu";
}
header("Location:viewdeliveyform2.php");
?>