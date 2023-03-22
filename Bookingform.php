<?php
session_start();
// // $log_id=$_SESSION['sid'];
// $n= $_SESSION['sid'];
// echo $n;
include 'connect1.php';
// session_start();
// $login_id= $_SESSION['sid'];

// access the 'sid' session variable
if (isset($_SESSION['sid'])) {
  $log_id = $_SESSION['sid'];
  echo "user id: $log_id";
} else {
  echo "Session ID not set";
}
$addroom_id = $_GET['addroom_id'];
echo 'addroom_id'.$addroom_id;
$adult=$_SESSION['adult'];
$children=$_SESSION['children'];
?>





<html>
   
  <head>
        <link rel="stylesheet" href="Bookingform.css">
       
      </head>
      <script src="script37.js"></script>
      <script>
               function check(){
               var pdate=document.getElementById("date").value;
               var ddate=document.getElementById("date1").value;
           if(ddate < pdate){
            document.getElementById('date_error').style.display="block";
            document.getElementById('date_error').innerHTML="**Enter correct checkout date *";
            document.getElementById('sub').disabled=true;

           }
           else{
            document.getElementById('date_error').style.display="none";
            document.getElementById('sub').disabled=false;
           }
               }
        </script>
      <body>
  <form action="#" method="post">
  
  <div class="elem-group inlined">
    <label for="checkin-date">Check-in Date</label>
    <input type="date" id="date" name="checkin" min="<?php echo date('Y-m-d');?>">
   
  </div>
 
  <div class="elem-group inlined">
    <label for="checkout-date">Check-out Date</label>
    <input type="date" id="date1" name="checkout" onchange="return check()">
   <span id="date_error"></span>
    
  </div>
  <!-- <hr> -->
  <!-- <div class="elem-group inlined">
    <label for="adult">Number Of Room</label>
    <input type="number" id="adult" name="room" placeholder="rooms" min="1" required>
  </div> -->
  <div class="elem-group inlined">
    <label for="adult">Adults</label>
    <input type="number" id="adult" name="adult" placeholder="adults" min="1"onclick="return validate()" max="<?php echo $adult; ?>">
  </div>
  <div class="elem-group inlined">
    <label for="child">Children</label>
    <input type="number" id="child" name="children" placeholder="children" min="0"onclick="return validate()" max="<?php echo $children; ?>" >
  </div>
  <!-- <div class="elem-group inlined">
    <label for="child">Amount</label>
    <input type="number" id="amount" name="children" placeholder="amount">
  </div>
   
   <div class="elem-group">
    <!-- <label for="message">Anything Else?</label>
    <textarea id="message" name="visitor_message" placeholder="Tell us anything else that might be important." required></textarea> -->
<div>
<input type="submit" name="submit" id = "sub" value = "Book The Rooms"onclick="return validate()" />
<!-- <button type="submit" name="submit" id="sub">Book The Rooms</button><br> -->
<input type="hidden" name="addroom_id" id="addroom_id" value="<?php echo $addroom_id;?>">
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
  
    $sql="SELECT *FROM tbl_addrooms WHERE addroom_id='$addromm_id' AND addroom_id NOT IN (SELECT addroom_id FROM tbl_booking JOIN tbl_addrooms ON tbl_booking.addroom_id=tbl_addrooms.addroom_id WHERE tbl_booking.checkin BETWEEN '$checkin' AND '$checkout')";
   
    $adult=$_POST['adult'];
    $children=$_POST['children'];
  
   
    $sql="INSERT INTO tbl_booking(`checkin`,`checkout`,`adult`,`children`,`reg_id`,`addroom_id`,`status`) 
    VALUES('$checkin','$checkout','$adult','$children','$log_id','$addroom_id','pending')";


     $date1 = Date($_POST['checkin']);
     $date2 = Date($_POST['checkout']);

     $date1 = new DateTime($date1);
     $date2 = new DateTime($date2);
     
     $interval = $date1->diff($date2);
     $days = $interval->format('%a');
     
     $_SESSION['days']=$days;
     

     $interval = $date1->diff($date2);


    // $ree=mysqli_query($conn,"SELECT *FROM tbl_roomtype WHERE ");

    // $datas1=mysqli_fetch_array($ree)['roomtype_id'];
    
    // $sql="INSERT INTO tbl_booking(`checkin`,`checkout`,`room`,`adult`,`children`,`roomtype_id`) 
    // VALUES('$checkin','$checkout','$room','$adult','$children','$datas1')";
    

    
//   $sql="insert into tbl_roomtype(`roomtype`,`image`,`status`) 
//         VALUES('$room_type','$img','1')";
        
        $result=mysqli_query($conn,$sql);
       
          
        //echo $sql;
       if($result){
        // echo" <script>alert('$date1')</script>";
         echo "<script>alert('room booked successfully.')</script>";
        header('Location: booking_amount.php');
       }else{
        //die(mysqli_error($conn));
        echo "<script>alert('room booking error.');</script>";
       }
      } 
    
    
?>