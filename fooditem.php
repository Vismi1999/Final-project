<?php
include "connect1.php";
$sql = "SELECT * FROM `tbl_foodmenu` WHERE STATUS = 1";
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
.navbar-light .navbar-nav .nav-link {
    color: rgb(0 0 0 / 97%);
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



</style>
</head>
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
             <a class="dropdown-item" href="#">Food Items</a>
             <a class="dropdown-item" href="Cart\mycart.php">My cart</a>
            <a class="dropdown-item" href=" http://127.0.0.1:5000">Recommend</a>
            
          </div>  
</li>
      <li class="nav-item active">
  
  <a class="nav-link" href="#">About <span class="sr-only">(current)</span></a>
</li>
<li class="nav-item active">
  
        <a class="nav-link" href="#">Contact <span class="sr-only">(current)</span></a>
      </li>
        <li class="nav-item dropdown">
          <a  href="index1.php" id="navbarDropdown" role="button" data-display="static" data-toggle="<?php echo $_SESSION['username']; ?>" aria-haspopup="true" aria-expanded="false">
         
           <a class=nav-link id="navbarDropdown"  href="index1.php"><?php echo $_SESSION['username']; ?></a> 
          
           
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
<div class="content">
  <h2> <center> welcome ! Our Restuarant</center></h2>
  <!-- <img src="reg.jpg"> -->
  <body>
  <?php 
    if(isset($_GET['id'])){
      $typeid = $_GET['id'];
    }
    else{
      $typeid = "ALL";
    }
    ?>
    <div class="row1" >
                    <?php while($row = $result->fetch_assoc()) { 
                        $foodmenu = $row['foodmenu'];
                        $discription = $row['discription'];
                        $image = $row['image'];
                        $image_src = "./admin/photos3/".$image;
                        $price= $row['price'];
                        // $url= ($row['0'])
                    ?>
                    <div class="column"><center>
                    <form action="Cart/manage_cart.php" method="POST">
                    <div class="card ">
                        
                            <img src="<?php echo $image_src; ?>" alt="brand" style="width:100%">
                            <div class="container"style="width:80%">
                               <h2><?php echo $foodmenu;?></h2>
                               <h7><?php echo $discription;?></h7> 
                               <!-- <h2><?php echo $image;?></h2> -->
                              
                          
                               <h3>₹ <?php echo $price;?></h3>
                               <input type="number" id="quantity" name="quantity" value="1" min="1"z>
						
						<br><br>
						<button  name ="add_to_cart" class='btn btn-success'>Order Now</button>
					</form>
				</div>
                        </center>
                    </div>
                    </a>
                     <?php } ?>
                </div>
    
                    </body>
</div>




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
                    </html>
    
