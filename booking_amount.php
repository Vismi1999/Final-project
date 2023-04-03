


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
  // echo "user ID: $log_id";
} else {
  // echo "Session ID not set";
}
// $query =mysqli_quvar_dump($log_id);
$query = mysqli_query($conn, "SELECT * FROM `tbl_booking` WHERE reg_id=$log_id ");

$row=mysqli_fetch_assoc($query);
$addroom_id=$row['addroom_id'];
// echo 'addroom_id'.$addroom_id;
$query1 =mysqli_query($conn, "SELECT * FROM `tbl_addrooms` WHERE addroom_id=$addroom_id ");
$row=mysqli_fetch_assoc($query1);
$days=$_SESSION['days'];
// echo $days;
// // echo "d_count: ".$_SESSION['days'];
$price=$row['price'];
$total=$price*$days;
// echo $price;
// echo "total_ruppee". $total;
// echo 'price'.$price;
$roomtype=$row['roomtype_id'];
// echo 'roomtype'.$roomtype;
?> 


<html>
  <head>
  <script type="text/javascript">
        function preventBack() {
            window.history.forward(); 
        }
          
        setTimeout("preventBack()", 0);
          
        window.onunload = function () { null };
    </script>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Crown Plaza Hotel</title>
    <!-- <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"> -->
    <!-- <meta name="description" content="" /> -->
    <!-- <meta name="keywords" content="" />
    <meta name="author" content="" /> -->
    

     <link rel="stylesheet" href="css/bootstrap.min.css">
   
    <!-- <link rel="stylesheet" href="css/owl.carousel.min.css"> --> 
    
    <link rel="stylesheet" href="css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="css/jquery.timepicker.css">
    <link rel="stylesheet" href="css/fancybox.min.css">
    
     <link rel="stylesheet" href="fonts/ionicons/css/ionicons.min.css"> 
     <link rel="stylesheet" href="fonts/fontawesome/css/font-awesome.min.css"> 

    <!-- Theme Style -->
   <!-- <link rel="stylesheet" href="css/style.css"> -->
  </head>
  <body>
    
  <head name="viewport" content="width=device-width, initial-scale=1">
<style> 
<!-- * {box-sizing: border-box;}

body { 
  margin: 0;
  font-family: Arial, Helvetica, sans-serif; 
}>
<meta

.header {
  overflow: hidden;
  background-color: #f1f1f1;
  padding: 30px 20px;


/* .header a {
  float: left;
  color: black;
  text-align: center;
  padding: 12px;
  text-decoration: none;
  font-size: 20px; 
  line-height: 30px;
  border-radius: 4px;
}

.header a.logo {
  font-size: 25px;
  font-weight: bold;
}

.header a:hover {
  background-color: #ddd;
  color: black;
}

.header a.active {
  background-color: dodgerblue;
  color: white;
} */

.header-right {
  float: right;
} 
/* 
@media screen and (max-width: 600px) { 
   .header a {
    float: none;
    display: block;
    text-align: left;
  }  */
    
 .header-right {
    float: none;
  }

 </style> 
</head>
<!-- <div class="container-fluid bg-light p-0 wow fadeIn" data-wow-delay="0.1s">
      <div class="row gx-0 d-none d-lg-flex">
        <div class="col-lg-7 px-5 text-start">
          <div class="h-100 d-inline-flex align-items-center py-3 me-4">
            <small class="fa fa-map-marker-alt text-primary me-2"></small>
            <small>123 Street, Ernakulam, KERALA</small>
          </div>
          <div class="h-100 d-inline-flex align-items-center py-3">
            <small class="far fa-clock text-primary me-2"></small>
            <small>Mon - Sun: 09.00 AM - 09.00 PM</small>
          </div>
        </div>
        <div class="col-lg-5 px-5 text-end">
          <div class="h-100 d-inline-flex align-items-center py-3 me-4">
            <small class="fa fa-phone-alt text-primary me-2"></small>
            <small>+012 345 6789</small>
          </div>
          <div class="h-100 d-inline-flex align-items-center">
            <a class="btn btn-sm-square bg-white text-primary me-1" href=""
              ><i class="fab fa-facebook-f"></i
            ></a>
            <a class="btn btn-sm-square bg-white text-primary me-1" href=""
              ><i class="fab fa-twitter"></i
            ></a>
            <a class="btn btn-sm-square bg-white text-primary me-1" href=""
              ><i class="fab fa-linkedin-in"></i
            ></a>
            <a class="btn btn-sm-square bg-white text-primary me-0" href=""
              ><i class="fab fa-instagram"></i
            ></a>
          </div>
        </div>
      </div>
    </div> -->
    <!-- Topbar End -->

    <!-- Navbar Start -->
    <nav
      class="navbar navbar-expand-lg bg-white navbar-light sticky-top py-lg-0 px-4 px-lg-5 wow fadeIn"
      data-wow-delay="0.1s"
    >
      <!-- <a href="index.html" class="navbar-brand p-0"> -->
        <!-- <img class="img-fluid me-3" src="img/icon/icon-10.png" alt="Icon" /> -->
        <!-- <h1 class="m-0 text-primary">SAYA</h1>
      </a> -->
      <button
        type="button"
        class="navbar-toggler"
        data-bs-toggle="collapse"
        data-bs-target="#navbarCollapse"
      >
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse py-4 py-lg-0" id="navbarCollapse">
        <div class="navbar-nav ms-auto">
        <div class="row align-items-center">
        
        <!-- <div class="col-6 col-lg-8"> -->
    
          <!-- <a href="index.php" class="nav-item nav-link active">Home</a>
          <a href="rooms.php" class="nav-item nav-link">Room</a>
          <a href="about.php" class="nav-item nav-link">About</a>
          <a href="contact.php" class="nav-item nav-link">Contact</a> -->
          <!-- <a href="service.html" class="nav-item nav-link">Services</a>
          <a href="Gallery.html" class="nav-item nav-link">Gallery</a>
          
          <a href="Vaccancy.html" class="nav-item nav-link">Vaccancies</a> -->
          <!-- <a href="Register.php" class="nav-item nav-link">Registration</a>
          <a href="login1.php" class="nav-item nav-link">Login</a> -->
          <!-- <a href="logout.php" class="nav-item nav-link">Logout</a> -->

          <!-- <div class="nav-item dropdown">
            <a
              href="#"
              class="nav-link dropdown-toggle"
              data-bs-toggle="dropdown"
              >Profile</a>
            
          
            <div class="dropdown-menu rounded-0 rounded-bottom m-0">
              <a href="change pass.php" class="dropdown-item">Change Password</a>
              <a href="logout1.php" class="dropdown-item">Logout</a>

</class> -->
 </div>
            <!-- </div>
          </div>

          < <a href="contact.html" class="nav-item nav-link">Contact</a>
        </div>
        <a href="" class="btn btn-primary"
          >Buy Ticket<i class="fa fa-arrow-right ms-3"></i
        ></a> --> 
      </div>
    </nav>


 <body>
 <link rel="stylesheet" href="css/style.css">
  </head>
  <body>
   <head name="viewport" content="width=device-width, initial-scale=1">
<style> -->
<!-- * {box-sizing: border-box;}

body { 
  margin: 0;
  font-family: Arial, Helvetica, sans-serif; 
}

.header {
  overflow: hidden;
  background-color: #f1f1f1;
  padding: 30px 20px;
}

.header a {
  float: left;
  color: black;
  text-align: center;
  padding: 12px;
  text-decoration: none;
  font-size: 20px; 
  line-height: 30px;
  border-radius: 4px;
}

.header a.logo {
  font-size: 25px;
  font-weight: bold;
}


.header a:hover {
  background-color: #ddd;
  color: black;
}

.header a.active {
  background-color: dodgerblue;
  color: white;
}

.header-right {
  float: right;
} 

@media screen and (max-width: 600px) { 
   .header a {
    float: none;
    display: block;
    text-align: left;
  } 
    
 .header-right {
    float: none;
  }
} 
 </style> 
<!-- </head><div class="container-fluid bg-light p-0 wow fadeIn" data-wow-delay="0.1s">
      <div class="row gx-0 d-none d-lg-flex">
        <div class="col-lg-7 px-5 text-start">
          <div class="h-100 d-inline-flex align-items-center py-3 me-4">
            <small class="fa fa-map-marker-alt text-primary me-2"></small>
            <small>123 Street, Ernakulam, KERALA</small>
          </div>
          <div class="h-100 d-inline-flex align-items-center py-3">
            <small class="far fa-clock text-primary me-2"></small>
            <small>Mon - Sun: 09.00 AM - 09.00 PM</small>
          </div>
        </div>
        
          </div>
        </div>
      </div>
    </div>  -->
    <!-- Topbar End -->

    <!-- Navbar Start -->
    <!-- <nav
      class="navbar navbar-expand-lg bg-white navbar-light sticky-top py-lg-0 px-4 px-lg-5 wow fadeIn"
      data-wow-delay="0.1s"
    >
      <a href="index.html" class="navbar-brand p-0">
        <!-- <img class="img-fluid me-3" src="img/icon/icon-10.png" alt="Icon" /> -->
        <!-- <h1 class="m-0 text-primary">SAYA</h1>
      </a>
      
      <div class="collapse navbar-collapse py-4 py-lg-0" id="navbarCollapse">
        <div class="navbar-nav ms-auto">
        <div class="row"> -->
        
          <!-- <div class="col-6 col-lg-8"> -->
          <!-- <!DOCTYPE html> -->
          <html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
}

.topnav {
  overflow: hidden;
  background-color: white;
}

.topnav a {
  float: right;
  color: black;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 18px;
}

.topnav a:hover {
  background-color: #ddd;
  color: black;
}
.navbar-light .navbar-nav .nav-link {
    color: rgb(0 0 0 / 97%);
}

.topnav a.active {
  background-color: #04AA6D;
  color: white;
  
.button {
 
  background-color:#42a5f5a1;
  border: none;
  color: white;
  padding: 10px 20px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 10px;
  margin: 3px 1px;
  cursor: pointer;
}

}
</style>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="#">
    
    <h3> Crowne Plaza Hotel</h3> 
  </a>
    <!-- <form class="form-inline  ">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">

    </form> -->
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <div class="mr-auto"></div>
      <ul class="navbar-nav my-2 my-lg-0">
      <li class="nav-item active">
  
  <a class="nav-link" href="index1.php">Home <span class="sr-only">(current)</span></a>
</li>
      <li class="nav-item active">
  
  <a class="nav-link" href="rooms.php">Room <span class="sr-only">(current)</span></a>
</li>
     
<li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-display="static" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Restuarant
        </a> 
        
        
          <div class="dropdown-menu dropdown-menu-lg-right" aria-labelledby="navbarDropdown">
             <!-- <h6 class="dropdown-header">Catagory</h6>  -->
             <a class="dropdown-item" href="menu1.php">Catagory</a>
             <a class="dropdown-item" href="fooditem.php">Food Items</a>
             <a class="dropdown-item" href="Cart\mycart.php">My cart</a>
            <a class="dropdown-item" href="#">Order</a>

        
            
          </div>  
</li>
      <li class="nav-item active">
  
  <a class="nav-link" href="about_index.php">About <span class="sr-only">(current)</span></a>
</li>
<li class="nav-item active">
  
        <a class="nav-link" href="contact_index.php">Contact <span class="sr-only">(current)</span></a>
      </li>
        <li class="nav-item dropdown">
          <a  href="index1.php" id="navbarDropdown" role="button" data-display="static" data-toggle="<?php echo $_SESSION['username']; ?>" aria-haspopup="true" aria-expanded="false">
         
           <!-- <a class="button" id="navbarDropdown"  href="index1.php"><?php echo $_SESSION['username']; ?></a>  -->
           <a class="nav-link" id="navbarDropdown"  href="index1.php"><?php echo $_SESSION['username']; ?></a> 
           
        </a>
        
        
          <div class="dropdown-menu dropdown-menu-lg-right" aria-labelledby="navbarDropdown">
            <!-- <h6 class="dropdown-header">Dropdown header</h6> -->
            
            <a class="dropdown-item" href="#">My Booking</a>
            <a class="dropdown-item" href="#">Profile </a>
            <a class="dropdown-item" href="#">Reset Password</a>

            
          </div>

        </li>
        <li class="nav-item active">
  
  <a class="nav-link" href="#">Logout <span class="sr-only">(current)</span></a>
</li>

      </ul>

      </div>
  </nav>
  <style>
.button {
  background-color: #4CAF50;
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
}
</style>
  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>


         

          
      </div>
    </nav>
    <br><br>
<html>
  <head>
  <title>cart</title>
  <!DOCTYPE html>
<html>
<head>
    <!-- <title>Razorpay Payment Form</title> -->
    <script src="https://checkout.razorpay.com/v1/checkout.js"></script>
    <script src="https://checkout.razorpay.com/v1/checkout.js"></script>
    <script>
      var amount = <?php echo $total ?> * 100; // Convert amount to paise
      var options = {
        "key": "rzp_test_brxhNMuaPT71E4",
        "amount": amount,
        "currency": "INR",
        "name": "CROWNE PLAZA",
        "description": "Room Booking",
        "image": "https://example.com/your_logo",
        "handler": function (response){
          // Send the payment details to your server for verification and to complete the payment process
          $.ajax({
            url: 'payment-success.php',
            type: 'post',
            data: {razorpay_payment_id: response.razorpay_payment_id, total_amount: <?php echo $total ?>},
            success: function(response) {
              // Handle the payment success response here
              console.log(response);
            }
          });
        }
      };
      var rzp1 = new Razorpay(options);
      function pay_now(){
        rzp1.open();
      }
    </script>
</head>
<!-- <body>
    <h1>Razorpay Payment Form</h1>
    <p>Total Amount: <?php echo $total ?></p>
    <button onclick="pay_now()">Pay Now</button>
</body> -->
</html>

			<style>
				#mycart_div{
					display: flex;
				}

				#mycart-table{
					flex: 3;
				}
				
				#mycart-total{
					flex: 1;
					margin-left: 30px;
				}

				#prod_name{
					overflow: hidden;
					width:90%;
					display: -webkit-box;
					-webkit-line-clamp: 1;
					-webkit-box-orient: vertical;
				}
				.form-check-label{
					margin-left: -25px;
					font-family: monospace;
					font-size: 20px;
				}
				#cartupdate{
					margin-top: -4px;
				}
				
				

			</style>
        </head>
    <body>
		
      <center>
    <div class="col-lg-4" id="mycart-total">
									<div class="border bg-light rounded p-4">
                    
										<h3>Total:</h3>
										<center><h5 class="text-right:center"><?php echo $total; ?></h5></center>
										<br>
										<form>
											<div class="form-check">
												<!-- <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1"> -->
												<label class="form-check-label" for="flexRadioDefault1">Make Payment</label>
												
											</div>
											<br>
											
											<br><br>
											<input type="hidden" id="name1" value="<?php echo $n; ?>">
											<input type="button" id="rzp-button1"name="btn"value="pay now"class="btn btn-primary" onclick="pay_now()"/>
											
										</form>
									</div>
								</div>
								<!-- </form> -->






								<style>
									#mycart_div {
  display: flex;
  justify-content: center;
  align-items: center;
  flex-wrap: wrap;
}

#mycart-table {
  flex: 3;
}

#mycart-total {
  flex: 1;
  margin-left: 30px;
}

.border {
  border: 1px solid #ccc;
}

.bg-light {
  background-color: #f8f9fa;
}

.rounded {
  border-radius: 0.25rem;
}

.p-4 {
  padding: 1.5rem;
}

h3 {
  font-size: 1.5rem;
  margin-bottom: 1rem;
}

h5 {
  font-size: 1.25rem;
  margin-bottom: 0.5rem;
}

.text-right {
    text-align: center;
}

.form-check-label {
  display: block;
  margin-left: -1.25rem;
  font-size: 1.25rem;
  font-weight: 400;
  font-family: monospace;
}

.btn-primary {
  color: #fff;
  background-color: #007bff;
  border-color: #007bff;
}

.btn-primary:hover {
  color: #fff;
  background-color: #0069d9;
  border-color: #0062cc;
}

.btn-primary:focus {
  box-shadow: 0 0 0 0.2rem rgba(38, 143, 255, 0.5);
  outline: none;
}

								</style>
							</div>
										</center>
										
								<script>
//   console.log("hello");
// var amt ="100";
    function pay_now(){
		var name = jQuery('#name1').val();
		console.log(name);
		
        var amount=<?php echo total ?>;
        var options =  {
            "key": "rzp_test_brxhNMuaPT71E4", // Enter the Key ID generated from the Dashboard
            "amount": amount*100, // Amount is in currency subunits. Default currency is INR. Hence, 50000 refers to 50000 paise
            "currency": "INR",
            "name": "CROWNE PLAZA",
            "description": "Test Transaction",
            "image": "https://example.com/your_logo",
            "handler":function(response){
              
               jQuery.ajax({
                   type:"POST",
                   url: "payment_process.php",
                   data:"payment_id="+response.razorpay_payment_id+"&amount="+amount+"&name="+name,
                   success:function(result){
                       window,location.href="thankyou.php";
                   }
               });
              
      }
        
    
};
var rzp1 = new Razorpay(options);

    rzp1.open();
    
    }
</script>
    </body>

</html>