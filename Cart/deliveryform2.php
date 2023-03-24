 
    <?php
        
        $conn = mysqli_connect('localhost','root','','hotelsystem');
       
        if ($conn->connect_error) {
         die("Connection failed: " . $conn->connect_error."<br>");
       }
       else{
       //echo  "Success";
       }
      //  $tablequery=mysqli_query($conn,"SELECT * FROM `tbl_table`");
      //  $row=mysqli_fetch_assoc($tablequery);
      //  echo $tableseat=$row['totaltable'];
       
       if(isset($_POST['continue'])){
           
           $name =  $_POST['name'];
           $table=$_POST['table'];
           $ordernow = $_POST['ordernow'];
      
           $time = $_POST['time'];
       
                  
    
   

       // or using prepared statements
   $sql =  mysqli_query($conn,"INSERT INTO tbl_delivery (`name`,`table`,`ordernow`,`time`,`status`) VALUES ('$name','$table','$ordernow','$time','0')");
              
                 
               //echo $sql;
              if($sql){
                echo "<script>alert(' successfully continue.')</script>";
                header("Location: payment.php");
              }else{
               die(mysqli_error($conn));
              // echo "<script>alert('not sucess.');</script>";
              }
             } 
           

       
       ?> 
    
    <!DOCTYPE html>
    <html>
    <head>
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
   
    
  
    <!-- <h2>Responsive Checkout Form</h2> -->
    <!-- <p>Resize the browser window to see the effect. When the screen is less than 800px wide, make the two columns stack on top of each other instead of next to each other.</p> -->
    <!-- <div class="row">
      <div class="col-75">
        <div class="container">
          <form action="#"method="post">
          
            <div class="row">
              <div class="col-50">
                <h3>Billing</h3>
                <label for="name"><i class=""></i> Full Name</label>
                <input type="text" id="name" name="name" placeholder="Enter Your Name">
                <label for="roomno"><i class=""></i> Room Number</label>
                <input type="text" id="roomno" name="roomno" placeholder="Room Number">
                 <label for="order"><i class=""></i>Order</label>
                  <select id="order" name="order" required>
                    <option value="">--- Select Option ---</option>
                    <option value="urgent">Order Now</option>
                    <option value="later">Later</option>
                   
                  </select> 
                  <br> <br>
               
                <label for="appt">Select a time:</label>
              <input type="time" id="time" name="time">
             
                               
                                 <br><br>
                                
                            <br><br>
                                        
                                 <a input type="submit" id="submit" name="submit" value="Continue" href="payment.php" class="btn">Continue</a>
                                
               </div>
             </div>
             
         
    </form>
        </div>
      </div>
    </div>
     -->
     <div class="row">
      <div class="col-75">
        <div class="container">`
        <form action="deliveryform2.php" method="POST">
    
            <div class="row">
              <div class="col-50">
                <h3>ORDER FORM</h3>
                <label for="name"><i class=""></i> Full Name</label>
                <input type="text" id="name" name="name" placeholder="Enter Your Name">
                <label for="table">Table Size</label>
                 <select id="table" name="table" required>
                  <option value="" selected disabled>--- Select Option ---</option>
              <?php
              // $tablequery=mysqli_query($conn,"SELECT * FROM `tbl_table`");
              // $row=mysqli_fetch_assoc($tablequery);
              // echo $tableseat=$row['totaltable'];
              //  $countseat=mysqli_query($conn,"SELECT COUNT(`table`) as seat_count FROM tbl_delivery WHERE `table` = 2");
                // $room_type_res= mysqli_query($conn,"SELECT * from tbl_table where status=0");
                // if($room_type_res && mysqli_num_rows($room_type_res) >0){
                //     while($row= mysqli_fetch_array($room_type_res)){
                //         echo "<option value='".$row['tableseat']."'>".$row['tableseat']."</option>";
                        

                //     } 
                //  }
                $table_res = mysqli_query($conn, "SELECT * FROM tbl_table WHERE status = 0");
                while ($row = mysqli_fetch_array($table_res)) {
                  $tableseat = $row['tableseat'];
                  $totaltable=$row['totaltable'];
                  $seat_count_res = mysqli_query($conn, "SELECT COUNT(`table`) as seat_count FROM tbl_delivery WHERE `table` =  $tableseat AND status=0");
                  $seat_count_row = mysqli_fetch_assoc($seat_count_res);
                  $seat_count = $seat_count_row['seat_count'];
                  if ($seat_count < $totaltable) {
                    echo "<option value='".$tableseat."'>".$tableseat."</option>";
                  } else {
                    echo "<option value='' disabled>".$tableseat." (Not Available)</option>";
                  }
                }
              ?>
            </select>
               <br><br>

                <label for="order"><i class=""></i>Order</label>
                <select id="order" name="ordernow" required>
                    <option value="">--- Select Option ---</option>
                    <option value="AC">AC</option>
                    <option value="NON AC">NON AC</option>
                   
                  </select> 
                  <br> <br>
               
             
               <label for="time">Select a time:</label> 
                  <input type="time" id="time" name="time" >
                        
         
             
                                 <br><br>
                                
                            <br><br>
                            
                           
                            <button type="submit" name="continue" value="continue" class="btn">Continue</button>
      
                                
                  </div>
                </div>
   
          </form>
        </div>
      </div>
      </div>
    
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
      