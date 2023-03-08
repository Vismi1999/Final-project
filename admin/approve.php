<?php

include("admin_connect.php");
?>

<form action="" method="POST">

<div class="container" style="margin-left:250px;">
<?php
if(isset($_GET['id']))
{
 $lId=$_GET['id'];
  $result=mysqli_query($conn,"UPDATE tbl_booking SET status='accepted' where booking_id=$lId");
  
}
if($result)
{
echo "<script>alert(' accepted successfully. Thank you');window.location='viewbooking.php';</script>";
}
?>