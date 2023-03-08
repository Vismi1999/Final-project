<?php
  include '../connect1.php';
?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body {
  font-family: Arial;
  font-size: 17px;
  padding:20px 400px ;
}

* {
  box-sizing: border-box;
}

.row {
  display: -ms-flexbox; /* IE10 */
  display: flex;
  -ms-flex-wrap: wrap; /* IE10 */
  flex-wrap: wrap;
  margin: 0 -16px;
}

.col-25 {
  -ms-flex: 25%; /* IE10 */
  flex: 25%;
}

.col-50 {
  -ms-flex: 50%; /* IE10 */
  flex: 50%;
}

.col-75 {
  -ms-flex: 75%; /* IE10 */
  flex: 75%;
}

.col-25,
.col-50,
.col-75 {
  padding: 0 16px;
}

.container {
  background-color: #f2f2f2;
  padding: 5px 20px 15px 20px;
  border: 1px solid lightgrey;
  border-radius: 3px;
}

input[type=text],input[type=number] {
  width: 100%;
  margin-bottom: 20px;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 3px;
}

label {
  margin-bottom: 10px;
  display: block;
}

.icon-container {
  margin-bottom: 20px;
  padding: 7px 0;
  font-size: 24px;
}

.btn {
  background-color: #04AA6D;
  color: white;
  padding: 12px;
  margin: 10px 0;
  border: none;
  width: 100%;
  border-radius: 3px;
  cursor: pointer;
  font-size: 17px;
}

.btn:hover {
  background-color: #45a049;
}

a {
  color: #2196F3;
}

hr {
  border: 1px solid lightgrey;
}

span.price {
  float: right;
  color: grey;
}

/* Responsive layout - when the screen is less than 800px wide, make the two columns stack on top of each other instead of next to each other (also change the direction - make the "cart" column go on top) */
@media (max-width: 800px) {
  .row {
    flex-direction: column-reverse;
  }
  .col-25 {
    margin-bottom: 20px;
  }
}
</style>
</head>
<body>

<!-- <h2>Responsive Checkout Form</h2> -->
<!-- <p>Resize the browser window to see the effect. When the screen is less than 800px wide, make the two columns stack on top of each other instead of next to each other.</p> -->
<div class="row">
  <div class="col-75">
    <div class="container">
      <form action="/.php">
      
        <div class="row">
          <div class="col-50">
            <h3>Billing</h3>
            <label for="fname"><i class=""></i> Full Name</label>
            <input type="text" id="fname" name="firstname" placeholder="Enter Your Name">
            <label for="email"><i class=""></i> Room Number</label>
            <input type="text" id="email" name="email" placeholder="Room Number">
             <label for="fname"><i class=""></i>Order</label>
              <select id="room_block" name="room_number" required>
                <option value="">--- Select Option ---</option>
                <option value="100">Urgent</option>
                <option value="101">Later</option>
               
              </select> 
              <br> <br>
           
            <label for="appt">Select a time:</label>
          <input type="time" id="appt" name="appt">
          <input type="radio" name="time" value="slot" required> AM
                             <input type="radio" name="" value="slot"> PM
                             <br><br>
           
</div>
        <a input type="submit" value="pay Now" class="btn"><center>Order Now</center></a>
      </form>
    </div>
  </div>
</body>
</html>
<?php
    
    $conn = mysqli_connect('localhost','root','','hotelsystem');
   
    if ($conn->connect_error) {
     die("Connection failed: " . $conn->connect_error."<br>");
   }
   else{
     //echo  "Success";
   }
   
   if(isset($_POST['submit'])){
       $name = $_POST['name'];
       $roomno = $_POST['roomno'];
       $ordernow = $_POST['ordernow'];
     
       $time=$_POST['time'];
       
   
    
   
       // $sql="insert into tbl_addrooms(`roomtype`,`room_block`,`room_number`,`choose_room`,`price`,`multipleData`,`status`) 
       // VALUES('$room_type',$room_block','$room_number','$choose_room','$price','$allData','1')";
       $sql="insert into tbl_delivery(`name`,`roomno`,`time`,`status`) 
       VALUES($name,'$roomno','$ordernow','$time','$status','1')";
       
   //   $sql="insert into tbl_roomtype(`roomtype`,`image`,`status`) 
   //         VALUES('$room_type','$img','1')";
           
           $result=mysqli_query($conn,$sql);
          
             
           //echo $sql;
          if($result){
           echo "<script>alert('food Item added Successfully.');window.location.href='addfood.php'</script>";
          }else{
           die(mysqli_error($conn));
          }
         } 
       
       
   ?>