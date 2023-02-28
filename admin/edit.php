<?php
session_start();
include ('admin_connect.php');

if(isset($_POST['submit']))
{
   $addroom_id=$_POST['addroom_id'];
     $room_block= $_POST['room_block'];
    // $img=$_FILES["image"]["name"];
    
    
  //  move_uploaded_file($_FILES["image"]["tmp_name"],"photos/".$img);
$query="UPDATE tbl_addrooms SET room_block='$room_block', where addroom_id='$addroom_id'";
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
     if(isset($_GET['addroom_id']))
     {
$addroom_id=$_GET['addroom_id'];
$query=mysqli_query($conn,"select * from tbl_addrooms where addroom_id='$addroom_id'");
while($row=mysqli_fetch_array($query))
{
?>

<div class="wrapper">
    <div class="title">
      UPDATE 
    </div>
   
    <div class="form">
    <input type="hidden"name="addroom_id"value="<?= $row['addroom_id'] ?>">
       <div class="inputfield">
          <label>Room Block</label>
          <input type="text" class="input" name="room_block" placeholder="Name" value="<?= $row['room_block'] ?>" required>
       </div>  
       <!-- <label for="name">Image Upload</label>
            <input type="file" id="image" name="image"> -->
            <input type="submit" value="Upload" name="submit" onclick="upload()">    
       
    
    <?php }
               } ?> 
</div>
</form>
</body>
</html>
