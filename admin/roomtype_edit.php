<?php
session_start();
include ('admin_connect.php');

if(isset($_POST['submit']))
{
   $roomtype_id=$_POST['roomtype_id'];
     $roomtype= $_POST['roomtype'];
    // $img=$_FILES["image"]["name"];
    
    
  //  move_uploaded_file($_FILES["image"]["tmp_name"],"photos/".$img);
$query="UPDATE tbl_roomtype SET roomtype='$roomtype', where roomtype_id='$roomtype_id'";
$query_run=mysqli_query($conn,$query);
if($query_run)
{
    $_SESSION['status'] = "Category updated successfully";
    header('location:view roomtype.php');
}
else
{
    echo "no";
}
}

?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="Roomtype.css">
  </head>
  <body>
    <form method="POST" action="#">
    <?php
     if(isset($_GET['roomtype_id']))
     {
$roomtype_id=$_GET['roomtype_id'];
$query=mysqli_query($conn,"select * from tbl_roomtype where roomtype_id='$roomtype_id'");
while($row=mysqli_fetch_array($query))
{
?>

<div class="wrapper">
    <div class="title">
      UPDATE 
    </div>
   
    <div class="form">
    <input type="hidden"name="roomtype_id"value="<?= $row['roomtype_id'] ?>">
       <div class="inputfield">
          <label>Room Type</label>
          <input type="text" class="input" name="roomtype" placeholder="Name" value="<?= $row['roomtype'] ?>" required>
       </div>  
       <label for="name">Image Upload</label>
            <input type="file" id="image" name="image">
            <input type="submit" value="Upload" name="submit" onclick="upload()">     
       
    
    <?php }
               } ?> 
</div>
</form>
</body>
</html>
