<?php
session_start();
include "connect1.php";
$sql = "SELECT * FROM `tbl_addrooms` WHERE STATUS = 1 ";
$result = mysqli_query($conn,$sql);

if(isset($_GET['booking_filter_btn'])){
	$option= $_GET['option_filter'];
	$sql = "SELECT * FROM `tbl_addrooms` WHERE STATUS = 1 AND multipleData LIKE '%$option%'";
	$result = mysqli_query($conn,$sql);
}

?>



<!DOCTYPE HTML>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- <title>Sogo Hotel by Colorlib.com</title> -->
    <!-- <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <meta name="author" content="" />
    <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=|Roboto+Sans:400,700|Playfair+Display:400,700"> -->

    <link rel="stylesheet" href="css/bootstrap.min.css">
   
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    
    <link rel="stylesheet" href="css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="css/jquery.timepicker.css">
    <link rel="stylesheet" href="css/fancybox.min.css">
    
     <link rel="stylesheet" href="fonts/ionicons/css/ionicons.min.css"> 
     <link rel="stylesheet" href="fonts/fontawesome/css/font-awesome.min.css"> 

    <!-- Theme Style -->
   <link rel="stylesheet" href="css/style.css">
  </head>
  <body>
    
    <!-- <header class="site-header js-site-header"> -->
      <!-- <div class="container-fluid">
        <div class="row align-items-center"></div>
          <div class="col-6 col-lg-4 site-logo" data-aos="fade"><a href="index.html">Sogo Hotel</a></div>
          <div class="col-6 col-lg-8">  -->

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
  } -->
    
 .header-right {
    float: none;
  }
} 
 </style> 
</head>

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
  <form class="form-inline  ">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">

    </form>
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
        
          <div class="dropdown-menu dropdown-menu-lg-right" aria-labelledby="navbarDropdown">
             <!-- <h6 class="dropdown-header">Catagory</h6>  -->
             <a class="dropdown-item" href="menu1.php">Catagory</a>
             <a class="dropdown-item" href="fooditem.php">Food Items</a>
            <a class="dropdown-item" href="#">Order</a>

            <a class="dropdown-item" href="Cart\mycart.php">My cart</a>
            
            
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
  
  <a class="nav-link" href="login1.php">Logout <span class="sr-only">(current)</span></a>
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

 
    <!-- END head -->

    <section class="site-hero inner-page overlay" style="background-image: url(images/img_5.jpg)" data-stellar-background-ratio="0.5"> 
      <div class="container">
        <div class="row site-hero-inner justify-content-center align-items-center">
          <div class="col-md-10 text-center" data-aos="fade">
            <h1 class="heading mb-3">Rooms Booking</h1>
            <ul class="custom-breadcrumbs mb-4">
              <li><a href="index1.php">Home</a></li>
              <li>&bullet;</li>
              <li><a href="rooms.php">Room</a></li>
              <form action="booking.php" method="GET">
			  		<input type="text" name="id" value="<?php echo $_GET['id'] ?>" hidden>
                	<select id="order" name="option_filter" required>
                    	<option value="">--- Select Option ---</option>
                    	<option value="ac">AC</option>
                    	<option value="nonac">NON AC</option>
                      <!-- <option value="balcony">BALCONY</option>
                      <option value="wifi">WIFI</option> -->
                  	</select> 
                  	<input type="submit" name="booking_filter_btn" id="booking_filter_btn" class="btn btn-primary">
              </form>
            <!-- <li>&bullet;</li>
              <li>Rooms</li> -->
            </ul>
          </div>
        </div>
      </div>
<br><br>
      <a class="mouse smoothscroll" href="#next">
        <div class="mouse-icon">
          <span class="mouse-wheel"></span>
        </div>
      </a>
    </section> 
    

    

<!DOCTYPE html>
<html lang="en">
<head>

    <link href="styles.css" rel="stylesheet">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
        integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

<style>
    
/* .hsptl{
    width: 98%;
    height:auto;
    background-color:#320d3e;
    border-radius:20px;
    display:flex;
    flex-direction:row;
    justify-content:space-around;
    align-items:center;
    margin-top:20px;
    margin-bottom:30px;
    color:white;
    padding: 20px;

}
.hsptl img{
    width:90%;
    height:auto;
    margin:10px;
    border-radius:10px;
}
.hsptl h3{
    margin:10px;
}
.hsptl p{
    margin:15px;
} */

.row1 {
    display: -ms-flexbox;
    display: flex;
    align-items: center;
    -ms-flex-wrap: wrap;
    flex-wrap: wrap;
    margin-right: -7.5px;
    margin-left: -7.5px;
}
  .column {
    float: left;
    width: 24.3%;
    height: auto;
    margin-bottom: 16px;
    padding: 0 8px;
  }
  .card {
    box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
    margin: 8px;
  }
  .container {
    padding: 0 16px;
    min-height: 150px;
  
  }
  .price,.qty {
    /* min-height: 200px; */
    margin-bottom: 10px;
  }
  .card button{margin-bottom: 20px;}
  .card h2{margin-top:10px;margin-bottom: 10px;text-align: center;}
  
  .container::after, .row::after {
    content: "";
    clear: both;
    display: table;
  }
  
  
  .button {
    border: none;
    outline: 0;
    display: inline-block;
    padding: 8px;
    color: white;
    background-color: #497df7;
    text-align: center;
    cursor: pointer;
    width: 100%;
    margin-bottom: 20px;
  }
  
  .button:hover {
    background-color: #555;
  }

  .card img {
    max-height: 250px;
  }


</style>

</head>



<body>
<?php 
if(isset($_GET['id'])){
  $typeid = $_GET['id'];
}
else{
  $typeid = "ALL";

}
 $stu="SELECT * FROM tbl_roomtype WHERE roomtype_id='$typeid'";
 $ex_stu=mysqli_query($conn,$stu);
 if($ex_stu)
 {
  if(mysqli_num_rows($ex_stu)>0)
  {
    $row_ans=mysqli_fetch_array($ex_stu);
    $adult=$row_ans['adult'];
    $children=$row_ans['children'];
    $_SESSION['adult']=$adult;
    $_SESSION['children']=$children;
    //echo "<script> alert('$adult'); </script>";
  }
 }
 else
 echo "error";
?>
 
<div class="row1" >
                <?php while($row = $result->fetch_assoc()) { 
                  
                    $roomtype = $row['roomtype_id'];
                    if($typeid == $roomtype)
                    {
                    $addroom_id = $row['addroom_id'];
                    // $roomblock = $row['room_block'];
                    // $roomnumber = $row['room_number'];
                    // $Description = $row['Description'];
                    $choose_room = $row['choose_room'];
                    $price = $row['price'];
                    $multipleData = $row['multipleData'];
                    $image_src = "./admin/photos1/".$choose_room;
                    // $url= ($row['0'])
                ?>
                <div class="column"><center>
                    <a href="">
                <div class="card ">
                    
                        <img src="<?php echo $image_src; ?>" alt="brand" style="width:100%">
                        <div class="container">
                          <!-- <h5><?php echo $roomtype;?></h5> -->
                          <!-- <h5>Room Block :<?php echo $roomblock;?></h5>
                          <h5>Room Number:<?php echo $roomnumber;?></h5> -->
                        
                          <h5>Services:<?php echo $multipleData;?></h5>
                          <!-- <h5>Price  :<?php echo $price;?></h5> -->
                          <h4>₹ <?php echo $price;?></h4>
                          <!-- <?php echo "<td><button type='button' class='btn btn-success'>Book Now</button></td>";?></h2> -->
                          
                          <a href="Bookingform.php?addroom_id=<?php echo $addroom_id; ?>" class='btn btn-success'>Reserve</a>  
                            
                          

                         
                        </div>
                    
                    </div>
                    </center>
                </div>
                </a>
                 <?php } 
                 }
                 ?>
            </div>
                </div>
                <p class="col-md-6 text-right social">
            <a href="#"><span class="fa fa-tripadvisor"></span></a>
            <a href="#"><span class="fa fa-facebook"></span></a>
            <a href="#"><span class="fa fa-twitter"></span></a>
            <a href="#"><span class="fa fa-linkedin"></span></a>
            <a href="#"><span class="fa fa-vimeo"></span></a>
          </p>
        </div>
      </div>
    </footer> 
    
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/jquery-migrate-3.0.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/jquery.stellar.min.js"></script>
    <script src="js/jquery.fancybox.min.js"></script>
    
    
    <script src="js/aos.js"></script>
    
    <script src="js/bootstrap-datepicker.js"></script> 
    <script src="js/jquery.timepicker.min.js"></script> 

    

    <script src="js/main.js"></script>
  </body>
</html>

