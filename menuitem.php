<?php
include "connect1.php";
$sql = "SELECT * FROM `tbl_foodmenu` WHERE STATUS = 1 ";
$result = mysqli_query($conn,$sql);
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
<style> -->
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
    .row1 {
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
    ?>
    <div class="row1">
        <?php 
			while($row = $result->fetch_assoc()) { 
				$catagory = $row['catagory_id'];
				if($typeid == $catagory){
					// $roomtype = $row['roomtype'];
					// $roomblock = $row['room_block'];
					$foodmenu = $row['foodmenu'];
					$discription = $row['discription'];
					$foodmenu_id= $row['foodmenu_id'];
					$image= $row['image'];
					$price = $row['price'];
					// $multipleData = $row['multipleData'];
					$image_src = "./admin/photos3/".$image;
					// $url= ($row['0'])
        ?>

		<div class="column">
			<center>
				<div class="card">
					<form action="Cart/manage_cart.php" method="POST">
						<img src="<?php echo $image_src; ?>" alt="brand" style="width:100%">
						<br><br>
						<input type="text" name="foodmenu_id" id="foodmenu_id" value="<?php echo $foodmenu_id;?>" hidden> 
						<h5><?php echo $foodmenu;?></h5> 
						<h7><?php echo $discription;?></h7>
						<h5> ₹ <?php echo $price;?></h5>
						<input type="number" id="quantity" name="quantity" value="1" min="1"z>
						
						<br><br>
						<button type="submit" name ="add_to_cart" class='btn btn-success'>Order Now</button>
					</form>
				</div>
			</center>
		</div>
		<!-- <a href="menuitem.php?id=<?php echo $row['catagory_id']; ?>"></a> -->
		
		<?php
				} 
			}
		?>
    </div>

            <!-- <p class="col-md-6 text-right social">
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
    <script src="js/main.js"></script> -->

  </body>
</html>

