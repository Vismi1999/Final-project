<?php
	include('header1.php');
  ?>
  
  <br><br>
<?php
    
    $conn = mysqli_connect('localhost','root','','hotelsystem');
   
    if ($conn->connect_error) {
     die("Connection failed: " . $conn->connect_error."<br>");
   }
   else{
   // echo  "Success";
   }
   
   if(isset($_POST['continue'])){
       // $name = $_POST['name'];
       // $roomno = $_POST['roomno'];
       // $order = $_POST['order'];
      
       
      
       // //$sql= "INSERT INTO tbl_cashroom (`name`,`roomno`,`order`,`time`,`status`) VALUES('$name','$roomno','$order','$time','1')";
       // $sql=  "INSERT INTO `tbl_cashroom`(`name`,`roomno`,`order`,`status`) VALUES ('$name','$roomno','$order','1')";
      
   
      
       //     $result=mysqli_query($conn,$sql);
    $name =  $_POST['name'];
   $roomno = $_POST['roomno'];
   $order = $_POST['order'];
   $time = $_POST['time'];
   
   
   // or using prepared statements
   $sql =  mysqli_query($conn,"INSERT INTO tbl_cashroom (`name`,`roomno`,`order`,`time`,`status`) VALUES ('$name','$roomno','$order','$time','0')");
          
             
           //echo $sql;
          if($sql){
            echo "<script>alert(' successfully continue.')</script>";
            header("Location: payment.php");
          }else{
           //die(mysqli_error($conn));
           echo "<script>alert('not sucess.');</script>";
          }
         } 
       
       
   ?> 
   

<!DOCTYPE html>
<html>
<head>
<script src="del1validate.js"></script>
<script src="https://code.jquery.com/jquery-3.6.1.js"></script>
<script src="https://checkout.razorpay.com/v1/checkout.js"></script>
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
  <div class="row">
    <div class="col-75">
      <div class="container">
        <form action="deliveryform1.php" method="POST" onsubmit="return validateForm()">
          <div class="row">
            <div class="col-50">
              <h3>ORDER FORM</h3>
              <label for="name"><i class=""></i> Full Name</label>
              <input type="text" id="name" name="name" placeholder="Enter Your Name" onblur="validateName()">
              <!-- <span id="name-error"></span> -->
              <span id="name-error" style="color: red; font-size: 12px;"></span>
              <label for="roomno"><i class=""></i> Room Number</label>
              <input type="text" id="roomno" name="roomno" placeholder="Room Number" onblur="validateRoomNo()">
             <span id="roomno-error" style="color: red; font-size: 12px;"></span>
             <label for="order"><i class=""></i>Order</label>
                   <select id="order" name="order" required onblur="validateOrder()">
                    <option value="">--- Select Option ---</option>
                   <option value="Order Now">Order Now</option>
                  <option value="Later">Later</option>
                </select>
               <span id="orderError"style="color: red; font-size: 12px;"></span>
              <br> <br>

              <label for="time">Select a time:</label> 
               <!-- <input type="time" id="time" name="time" required>  -->
               <input type="time" id="time" name="time" placeholder="time" required onblur="validatedate()">
             <span id="time-error" style="color: red; font-size: 12px;"></span>
              <br><br>

              <button type="submit" name="continue" value="continue" class="btn">Continue</button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>

  <script>
    function validateForm() {
      var name = validateName();
      var roomno = validateRoomNo();

      return name && roomno;
    }

    function validateName() {
      var nameInput = document.getElementById("name");
      var nameError = document.getElementById("name-error");
      var letters = /^[A-Za-z ]+$/;

      if (nameInput.value.trim() === "") {
        nameError.innerHTML =  "<span style='color: red;'>*Please enter your name.</span>";
        return false;
      } else if (!nameInput.value.match(letters)) {
        nameError.innerHTML = "<span style='color: red;'>*Only alphabetic characters are allowed.</span>";
        return false;
      } else if (nameInput.value.trim(' ').length < 3) {
        nameError.innerHTML = "<span style='color: green;'>*Please enter your full name.</span>";
        return false;
      } else {
        nameError.innerHTML = "";
        return true;
      }
    }
   
    function validateRoomNo() {
      var roomnoInput = document.getElementById("roomno");
      var roomnoError = document.getElementById("roomno-error");

      if (roomnoInput.value.trim() === "") {
        roomnoError.innerHTML = "<span style='color: red;'>*Please enter your room number.</span>";
        return false;
      } else {
        roomnoError.innerHTML = "";
        return true;
      }
      function validateOrder() {
  var orderInput = document.getElementById("order");
  var orderError = document.getElementById("orderError");
  
  if (orderInput.value === "") {
    orderError.innerHTML = "Please select an option.";
    orderError.style.color = "red";
    return false;
  }
  
  orderError.innerHTML = "";
  return true;
}

    

    }
  </script>
  <script>
  function validateOrder() {
  var orderInput = document.getElementById("order");
  var orderError = document.getElementById("orderError");
  
  if (orderInput.value === "") {
    orderError.innerHTML = "Please select an option.";
    orderError.style.color = "red";
    return false;
  }
  
  orderError.innerHTML = "";
  return true;
}
function validateOrder() {
  var orderInput = document.getElementById("order");
  var orderError = document.getElementById("orderError");
  
  if (orderInput.value === "") {
    orderError.innerHTML = "Please select an option.";
    orderError.style.color = "red";
    return false;
  }
  
  orderError.innerHTML = "";
  return true;
}
</script>
<script>
  function validatedate() {
  const timeInput = document.getElementById("time");
const timeError = document.getElementById("time-error");

timeInput.addEventListener("blur", function() {
  const timeValue = timeInput.value;

  if (timeValue === "") {
    timeError.innerHTML = "Please select a time.";
  } else {
    timeError.innerHTML = "";
  }

});
  }
</script>
</body>


  
   
   

    
</body>


<!-- <script>
    // Add AM and PM options to the time input field
    var timeInput = document.getElementById("time");
    var optionAM = document.createElement("option");
    optionAM.text = "AM";
    optionAM.value = "am";
    var optionPM = document.createElement("option");
    optionPM.text = "PM";
    optionPM.value = "pm";
    var inputTime = timeInput.value;
    if(inputTime !== ""){
        var inputHour = parseInt(inputTime.split(":")[0]);
        if(inputHour >= 12){
            optionPM.selected = true;
        }else{
            optionAM.selected = true;
        }
    }
    timeInput.appendChild(optionAM);
    timeInput.appendChild(optionPM);
  </script> -->
  <script>
        // Add AM and PM options to the time input field
        var timeInput = document.getElementById("time");
        var optionAM = document.createElement("option");
        optionAM.text = "AM";
        optionAM.value = "am";
        var optionPM = document.createElement("option");
        optionPM.text = "PM";
        optionPM.value = "pm";
        var inputTime = timeInput.value;
        if(inputTime !== ""){
            var inputHour = parseInt(inputTime.split(":")[0]);
            if(inputHour >= 12){
                optionPM.selected = true;
            }else{
                optionAM.selected = true;
            }
        }
        timeInput.appendChild(optionAM);
        timeInput.appendChild(optionPM);
        </script>
        
  </html>
  