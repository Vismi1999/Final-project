<?php

 include("admin_connect.php");
?>

<form action="" method="POST">

<div class="container" style="margin-left:250px;">
<?php
if(isset($_GET['id']))
{
 $id=$_GET['id'];
  $result=mysqli_query($conn,"UPDATE  tbl_booking SET status='checkout' where booking_id=$id");
  
}
if($result)
{
echo "<script>alert('Room Checked-out');window.location='viewbooking.php';</script>";
}
?>