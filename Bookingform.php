<?php
session_start();
$log_id=$_SESSION['sid'];
// echo "logid = ".$log_id;
?>

<html>
   
  <head>
        <link rel="stylesheet" href="Bookingform.css">
       
      </head>
      <body>
  <form action="#" method="post">
  
  <div class="elem-group inlined">
    <label for="checkin-date">Check-in Date</label>
    <input type="date" id="date" name="checkin" min="<?php echo date('Y-m-d');?>"  required>
   
  </div>
  
  <div class="elem-group inlined">
    <label for="checkout-date">Check-out Date</label>
    <input type="date" id="date" name="checkout" min="<?php echo date('Y-m-d'); ?>"  required>
  </div>
  <!-- <hr> -->
  <!-- <div class="elem-group inlined">
    <label for="adult">Number Of Room</label>
    <input type="number" id="adult" name="room" placeholder="rooms" min="1" required>
  </div> -->
  <div class="elem-group inlined">
    <label for="adult">Adults</label>
    <input type="number" id="adult" name="adult" placeholder="adults" min="1" required>
  </div>
  <div class="elem-group inlined">
    <label for="child">Children</label>
    <input type="number" id="child" name="children" placeholder="children" min="0" required>
  </div>
  <!-- <div class="elem-group inlined">
    <label for="child">Amount</label>
    <input type="number" id="amount" name="children" placeholder="amount">
  </div>
   
   <div class="elem-group">
    <!-- <label for="message">Anything Else?</label>
    <textarea id="message" name="visitor_message" placeholder="Tell us anything else that might be important." required></textarea> -->
<div>
<!-- <input type="submit" name="submit" id = "submit" value = "Book The Rooms" /> -->
<button type="submit" name="submit">Book The Rooms</button><br>
<p><p></p><h2><a href="index1.php">Back to Home</a>&nbsp;&nbsp;&nbsp;</h2></p></p>
  </div>
<div>
  
<!-- <a href="pay.php" class='btn btn-success'>Book Now</a> -->

</div>
 
</body>
</form>
</html>
<?php
    
 $conn = mysqli_connect('localhost','root','','hotelsystem');

 if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error."<br>");
}
else{
  // echo  "Success";
}

if(isset($_POST['submit'])){

    $checkin = $_POST['checkin'];
    $checkout = $_POST['checkout'];
    
   
    $adult=$_POST['adult'];
    $children=$_POST['children'];
  
   
    $sql="INSERT INTO tbl_booking(`checkin`,`checkout`,`adult`,`children`,`reg_id`,`status`) 
    VALUES('$checkin','$checkout','$adult','$children','$log_id','pending')";




    // $ree=mysqli_query($conn,"SELECT *FROM tbl_roomtype WHERE ");

    // $datas1=mysqli_fetch_array($ree)['roomtype_id'];
    
    // $sql="INSERT INTO tbl_booking(`checkin`,`checkout`,`room`,`adult`,`children`,`roomtype_id`) 
    // VALUES('$checkin','$checkout','$room','$adult','$children','$datas1')";
    

    
//   $sql="insert into tbl_roomtype(`roomtype`,`image`,`status`) 
//         VALUES('$room_type','$img','1')";
        
        $result=mysqli_query($conn,$sql);
       
          
        //echo $sql;
       if($result){
         echo "<script>alert('room booked successfully.')</script>";
       }else{
        //die(mysqli_error($conn));
        echo "<script>alert('room booking error.');</script>";
       }
      } 
    
    
?>