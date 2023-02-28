<?php
  include 'admin_connect.php';
if(isset($_GET["id"]))
 {

    $addroom=$_GET['id'];
    // $select="DELETE FROM tbl_roomtype SET status=0 where roomtype_id='$roomtype'";
   $select="UPDATE tbl_addrooms SET status=0 where addroom_id='$addroom'";
    $result=mysqli_query($conn,$select);
    
    //  echo '<script type=>"text/javascript">alert("room deleted successfully.")</script>';
     echo "<script>alert('room deleted successfully.');</script>";
    header('location: view roomtype.php');
    
 }

?>