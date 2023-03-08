<?php

 include("admin_connect.php");
?>

<form action="" method="POST">

<div class="container" style="margin-left:250px;">
<?php
if(isset($_GET['id']))
{
 $id=$_GET['id'];
  $result=mysqli_query($conn,"UPDATE  tbl_booking SET status='reject' where booking_id=$id");
  
}
if($result)
{
echo "<script>alert('Are you sure to delete');window.location='viewbooking.php';</script>";
}
?>