<?php

	session_start();
	include 'connect1.php';
  


  if(isset($_POST['submit'])){
    $checkin = $_POST['checkin'];
    $checkout = $_POST['checkout'];
	  $rooms_id= $_POST['addroom_id'];
  
    // $sql="SELECT *FROM tbl_addrooms WHERE addroom_id='$room_id' AND addroom_id NOT IN (SELECT addroom_id FROM tbl_booking JOIN tbl_addrooms ON tbl_booking.addroom_id=tbl_addrooms.addroom_id WHERE tbl_booking.checkin BETWEEN '$checkin' AND '$checkout')";
    $adult=$_POST['adult'];
    $children=$_POST['children'];
    $log_id = $_SESSION['sid'];
    // $room_id = $_POST['room_id']; 
    $room_id = $_POST['roomtype_id']; 
    // $room_type=$_POST['roomtype_id'];
    
    // echo "<script> alert('Hi'.$room_type); </script>";
    // $sql="INSERT INTO tbl_booking(`checkin`,`checkout`,`adult`,`children`,`reg_id`,`addroom_id`,`roomtype_id`,`status`) 
    // VALUES('$checkin','$checkout','$adult','$children','$log_id','$room_id','$room_type','booked')";
   echo  $sql = "INSERT INTO tbl_booking(`checkin`, `checkout`,`room`, `adult`, `children`, `reg_id`, `addroom_id`, `status`,`roomtype_id`) 
        VALUES ('$checkin','$checkout','0','$adult','$children','$log_id','$rooms_id','booked','$room_id')";


     $date1 = Date($_POST['checkin']);
     $date2 = Date($_POST['checkout']);

     $date1 = new DateTime($date1);
     $date2 = new DateTime($date2); 
     
     $interval = $date1->diff($date2);
     $days = $interval->format('%a');
     
     $_SESSION['days']=$days;

     $interval = $date1->diff($date2);


        
        $result=mysqli_query($conn,$sql);
       if($result){
			// echo "<script>alert('room booked successfully.'.$room_type);window.location.href='booking_amount.php'</script>";
      echo "<script>alert('room booked successfully.');window.location.href='#'</script>";

       }else{
        echo "<script>alert('room booking error.');</script>";
       }
      } 

  $addroom_id = isset($_GET['addroom_id']) ? $_GET['addroom_id'] : -1;
	if (isset($_SESSION['sid'])) {
		$log_id = $_SESSION['sid'];
	}
  //global $data;
	
  $sql_1="SELECT *FROM tbl_addrooms WHERE addroom_id='$addroom_id'";
  $res_sql=mysqli_query($conn,$sql_1);
  if($res_sql)
  $data=mysqli_fetch_assoc($res_sql);
  else 
  echo "error";
	$adult=$_SESSION['adult'];
	$children=$_SESSION['children'];
  $roomtype_id=$data['roomtype_id'];
  
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
				document.getElementById('date1_error').style.display="block";
				document.getElementById('date1_error').innerHTML="**Enter correct checkout date *";
				document.getElementById('sub').disabled=true;
			}
			else{
				document.getElementById('date1_error').style.display="none";
				document.getElementById('sub').disabled=false;
			}
		}
	</script>
    
	<body>
        
  <form action="Bookingform.php" method="post">
  
  <div class="elem-group inlined">
    <label for="checkin-date">Check-in Date</label>
    <input type="date" id="date" name="checkin" onchange="setCheckOutMinDate();" min="<?php echo date('Y-m-d');?>">
    <span id="date_error"></span>
  </div>
 
  <div class="elem-group inlined">
    <label for="checkout-date">Check-out Date</label>
    <input type="date" id="date1" name="checkout" onchange="validateCheckOut();" onchange="return check()">
   <span id="date1_error"></span>
    
  </div>
 
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
  <label for="message">Anything Else?</label>
    <textarea id="message" name="visitor_message" placeholder="Tell us anything else that might be important." required></textarea> -->
<div>
<input type="hidden"   name="addroom_id" id="addroom_id" value="<?php echo $addroom_id ; ?>">
<input type="hidden"   name="roomtype_id" id="roomtype_id" value="<?php echo $roomtype_id ; ?>">

<input type="submit" name="submit" id = "sub" value = "Book The Rooms"onclick="return validate()" />

<p><p></p><h2><a href="index1.php">Back to Home</a>&nbsp;&nbsp;&nbsp;</h2></p></p>
  </div>
<div>
  
<!-- <a href="pay.php" class='btn btn-success'>Book Now</a> -->

</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.4/jquery.min.js" integrity="sha512-pumBsjNRGGqkPzKHndZMaAG+bir374sORyzM3uulLV14lN5LyykqNk8eEeUlUkB3U0M4FApyaHraT65ihJhDpQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.4/jquery.js" integrity="sha512-6DC1eE3AWg1bgitkoaRM1lhY98PxbMIbhgYCGV107aZlyzzvaWCW1nJW2vDuYQm06hXrW0As6OGKcIaAVWnHJw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<script>
    function setCheckOutMinDate(){
        var check_in_date= $("#date");
        var check_out_date= $("#date1");
        
        var curr_date= new Date(check_in_date.val());
        var nextDate= new Date(curr_date.getTime() + 24 * 60 * 60 * 1000);
        var maxDate= new Date(curr_date.getTime() + 30 * 24 * 60 * 60 * 1000);

        check_out_date.attr("min", nextDate.toISOString().split('T')[0]);
        check_out_date.val(nextDate.toISOString().split('T')[0]);
        check_out_date.attr("max", maxDate.toISOString().split('T')[0]);

        $.ajax({
          	url: 'checkExistingBookedDates.php',
          	type: "POST",
          	data: {'checkin_check': true,'check_in_date': check_in_date.val()},
          	success: function(data){
				if(data=="exists"){
					check_in_date.val(null);
					document.getElementById('date_error').style.display="block";
					document.getElementById('date_error').innerHTML="**This date is already booked as check in date !! Please select another date *";
					document.getElementById('sub').disabled=true;	
              	}
				else{
					document.getElementById('date_error').style.display="none";
					document.getElementById('sub').disabled=false;
				}
          	},
			error: function(e){
				alert("The error is : "+e);
			}
        });
    }

	function validateCheckOut(checkout){
		var check_in_date= $("#date");
		var check_out_date= $("#date1");

		$.ajax({
          	url: 'checkExistingBookedDates.php',
          	type: "POST",
          	data: {'checkout_check': true,'check_in_date': check_in_date.val(), 'check_out_date': check_out_date.val()},
          	success: function(data){
				if(data=="exists"){
					check_out_date.val(null);
					document.getElementById('date1_error').style.display="block";
					document.getElementById('date1_error').innerHTML="**This date is already booked as check out date !! Please select another date *";
					document.getElementById('sub').disabled=true;	
              	}
				else{
					document.getElementById('date1_error').style.display="none";
					document.getElementById('sub').disabled=false;
				}
          	},
			error: function(e){
				alert("The error is : "+e);
			}
        });

	}
</script>

</body>
</form>
</html>