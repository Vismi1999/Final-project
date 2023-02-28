<?php
include "connect1.php";
$sql = "SELECT * FROM `tbl_foodmenu` WHERE STATUS = 1 ";
$result = mysqli_query($conn,$sql);
?>

<?php include("header.php"); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index</title>
</head>
<body>

    <div class="container">
        <div class="row">
            <div class="col-lg-3">
            <?php while($row = $result->fetch_assoc()) { 
                  
                  $foodmenu = $row['foodmenu_id'];
                //   if($typeid == $foodmenu)
                  {
                  // $roomtype = $row['roomtype'];
                  // $roomblock = $row['room_block'];
                //    $foodmenu = $row['foodmenu'];
              $discription = $row['discription'];
                $foodmenu_id= $row['foodmenu_id'];
                $image= $row['image'];
                  $price = $row['price'];
                  // $multipleData = $row['multipleData'];
                  $image_src = "./admin/photos3/".$image;
                  // $url= ($row['0'])
              ?>
            
           
            <div class="card ">
                    
            <img src="<?php echo $image_src; ?>" alt="brand" style="width:100%">
                        <div class="container">
                       
                          <h5><?php echo $foodmenu;?></h5> 
                        
                          <h7><?php echo $discription;?></h7>
                          <h5> ₹ <?php echo $price;?></h5> 
                          <!-- <div class="elem-group inlined"> -->
        
                           
                          
                    
                             
                                   <button type="submit" name ="add_to_cart" class='btn btn-success'>Order Now</a>
  </div>
</div>
</div>
</div>
</div>
<?php } 
                 }
                 ?>
</body>
</html>