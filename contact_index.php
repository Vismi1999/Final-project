<?php
include "connect1.php";
$sql = "SELECT * FROM `tbl_contact` WHERE STATUS = 1";
$result = mysqli_query($conn,$sql);

?>


<?php session_start(); ?>
<!DOCTYPE HTML>
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
    <title>Contact</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <meta name="author" content="" />
    <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=|Roboto+Sans:400,700|Playfair+Display:400,700">

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/aos.css">
    <link rel="stylesheet" href="css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="css/jquery.timepicker.css">
    <link rel="stylesheet" href="css/fancybox.min.css">
    
    <link rel="stylesheet" href="fonts/ionicons/css/ionicons.min.css">
    <link rel="stylesheet" href="fonts/fontawesome/css/font-awesome.min.css">

    <!-- Theme Style -->
    <link rel="stylesheet" href="css/style.css">
  </head>
  <body>
   <head name="viewport" content="width=device-width, initial-scale=1">
<style> 
 * {box-sizing: border-box;}

body { 
  margin: 0;
  font-family: Arial, Helvetica, sans-serif; 
}
meta

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
</head>

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
         <img class="img-fluid me-3" src="img/icon/icon-10.png" alt="Icon" /> -->
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
.navbar-light .navbar-nav .nav-link {
    color: rgb(0 0 0 / 97%);
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
        </a> 
        
        
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
    <!-- END head -->

    <section class="site-hero inner-page overlay" style="background-image: url(images/hero_4.jpg)" data-stellar-background-ratio="0.5">
      <div class="container">
        <div class="row site-hero-inner justify-content-center align-items-center">
          <div class="col-md-10 text-center" data-aos="fade">
            <h1 class="heading mb-3">Contact</h1>
            <ul class="custom-breadcrumbs mb-4">
              <li><a href="index.php">Home</a></li>
              <li>&bullet;</li>
              <li>Contact</li>
            </ul>
          </div>
        </div>
      </div>

      <a class="mouse smoothscroll" href="index.php">
        <div class="mouse-icon">
          <span class="mouse-wheel"></span>
        </div>
      </a>
    </section>
    <!-- END section -->

    <section class="section contact-section" id="next">
      <div class="container">
        <div class="row">
          <div class="col-md-7" data-aos="fade-up" data-aos-delay="100">
            
            <form action="contact_index.php" method="post" name="Name" class="bg-white p-md-5 p-4 mb-5 border">
              <div class="row">
                <div class="col-md-6 form-group">
                  <label for="name">Name</label>
                  <input type="text" id="name" name="Name" class="form-control ">
                </div>
                <div class="col-md-6 form-group">
                  <label for="Phone">Phone</label>
                  <input type="text" id="phone" name ="Phone" class="form-control ">
                </div>
              </div>
          
              <div class="row">
                <div class="col-md-12 form-group">
                  <label for="email">Email</label>
                  <input type="Email" id="email"name="Email" class="form-control ">
                </div>
              </div>
              <div class="row mb-4">
                <div class="col-md-12 form-group">
                  <label for="message">Write Message</label>
                  <textarea name="discription" id="discription" class="form-control" name="discription" cols="30" rows="8"></textarea>
                </div>
              </div>
              <div class="row">
                <div class="col-md-6 form-group">
                  <input type="submit" value="Send Message" name="submit" class="btn btn-primary text-white font-weight-bold">
                </div>
              </div>
            </form>

          </div>
          <div class="col-md-5" data-aos="fade-up" data-aos-delay="200">
            <div class="row">
              <div class="col-md-10 ml-auto contact-info">
                <p><span class="d-block">Address:</span> <span> 98 West 21th Street, Suite 721 Ernakulam.</span></p>
                <p><span class="d-block">Phone:</span> <span> (+1) 234 4567 8910</span></p>
                <p><span class="d-block">Email:</span> <span> info@domain.com</span></p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    
    <footer class="section footer-section">
      <div class="container">
        <div class="row mb-4">
          <div class="col-md-3 mb-5">
            <ul class="list-unstyled link">
              <li><a href="#">About Us</a></li>
              <li><a href="#">Terms &amp; Conditions</a></li>
              <li><a href="#">Privacy Policy</a></li>
             <li><a href="#">Rooms</a></li>
            </ul>
          </div>
          <div class="col-md-3 mb-5">
            <ul class="list-unstyled link">
              <li><a href="#">The Rooms &amp; Suites</a></li>
              <li><a href="#">About Us</a></li>
              <li><a href="#">Contact Us</a></li>
              <li><a href="#">Restaurant</a></li>
            </ul>
          </div>
          <div class="col-md-3 mb-5 pr-md-5 contact-info">
            <!-- <li>198 West 21th Street, <br> Suite 721 New York NY 10016</li> -->
            <p><span class="d-block"><span class="ion-ios-location h5 mr-3 text-primary"></span>Address:</span> <span> 198 West 21th Street, <br> Suite 721 New York NY 10016</span></p>
            <p><span class="d-block"><span class="ion-ios-telephone h5 mr-3 text-primary"></span>Phone:</span> <span> (+1) 435 3533</span></p>
            <p><span class="d-block"><span class="ion-ios-email h5 mr-3 text-primary"></span>Email:</span> <span> info@domain.com</span></p>
          </div>
          <div class="col-md-3 mb-5">
            <p>Sign up for our newsletter</p>
            <form action="#" class="footer-newsletter">
              <div class="form-group">
                <input type="email" class="form-control" placeholder="Email...">
                <button type="submit" class="btn"><span class="fa fa-paper-plane"></span></button>
              </div>
            </form>
          </div>
        </div>
        <div class="row pt-5">
          <p class="col-md-6 text-left">
            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
            Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="icon-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank" >Colorlib</a>
            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
          </p>
            
          <p class="col-md-6 text-right social">
            <a href="#"><span class="fa fa-tripadvisor"></span></a>
            <a href="#"><span class="fa fa-facebook"></span></a>
            <a href="#"><span class="fa fa-twitter"></span></a>
            <a href="#"><span class="fa fa-linkedin"></span></a>
            <a href="#"><span class="fa fa-vimeo"></span></a>
          </p>
        </div>
      </div>
      <?php
$conn = mysqli_connect('localhost','root','','hotelsystem');

 if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error."<br>");
}
else{
  //echo  "Success";
}

if(isset($_POST['submit'])){
  $Name = $_POST['Name'];
  $Phone = $_POST['Phone'];
  $Email= $_POST['Email'];
  $discription= $_POST['discription'];
 




   
  $sql="insert into tbl_contact(`Name`,`phone`,`Email`,`discription`,`status`) 
        VALUES('$Name','$Phone','$Email','$discription',1)";
        
        $result=mysqli_query($conn,$sql);
        //echo $sql;
    //    if($result){
    //     echo "<br>item sucess</br>";
    //     // header('location:Roomtype.php');
    //    }else{
    //     echo "<br>ERROR:item unable</br>";
    //     // die(mysqli_error($conn));
    //    }
    //   }
    // }
    if($result){
        echo "<script>alert('Message Send Succesfully.');window.location.href='contact_index.php'</script>";
       }else{
        echo "<script>alert('Message Not Send Succesfully.');window.location.href='contact_index.php'</script>";
        die(mysqli_error($conn));
       }
    }

    
?>
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