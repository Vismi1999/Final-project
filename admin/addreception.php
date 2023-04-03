<?php
    include('../connect1.php');            
?>
<!DOCTYPE html>
<html lang="en">

<head>
   

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Admin</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
                <div class="sidebar-brand-icon rotate-n-15">
                    <i class="fas fa-laugh-wink"></i>
                </div>
                <div class="sidebar-brand-text mx-3">Admin <sup></sup></div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item">
                <a class="nav-link" href="index.php">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

<!-- Heading -->
<div class="sidebar-heading">
    Hotel Configuration
</div>

<!-- Nav Item - Pages Collapse Menu -->
<li class="nav-item">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
        aria-expanded="true" aria-controls="collapseTwo">
        <i class="fas fa-fw fa-cog"></i>
        <span>Room Catagory</span>
    </a>
    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Admin Components:</h6>
            <!-- <a class="collapse-item" href="Add rooms.php">Add rooms</a>
            <a class="collapse-item" href="view addroom.php">View Room Details</a> -->
            <a class="collapse-item" href="Roomtype.php">Add Room Type</a>
            <a class="collapse-item" href="view roomtype.php">View Room Type</a>
           

            <!-- <a class="collapse-item" href="cards.html">Cards</a> -->
        </div>
    </div>
</li>
<li class="nav-item">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo5"
        aria-expanded="true" aria-controls="collapseTwo5">
        <i class="fas fa-fw fa-cog"></i>
        <span>Add Rooms</span>
    </a>
    <div id="collapseTwo5" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Admin Components:</h6>
            <a class="collapse-item" href="Add rooms.php">Add rooms</a>
            <a class="collapse-item" href="view addroom.php">View Room Details</a>
            <!-- <a class="collapse-item" href="Roomtype.php">Add Room Type</a>
            <a class="collapse-item" href="view roomtype.php">View Room Type</a>
            -->

            <!-- <a class="collapse-item" href="cards.html">Cards</a> -->
        </div>
    </div>
</li>


<!-- <li class="nav-item"> -->
<!--             
<i class="fas fa-fw fa-cog"></i> -->
        <!-- <span>Hotel Configuration</span> -->
    <!-- </a> -->
    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar"> 
        <!-- <div class="bg-white py-2 collapse-inner rounded"> -->
            <!-- <h6 class="collapse-header">Admin Components:</h6>
            <a class="collapse-item" href="foodcata.php">Food catagory</a>
            <a class="collapse-item" href="Add rooms.php">Food Menu</a>
            
            
             -->

            <!-- <a class="collapse-item" href="cards.html">Cards</a> -->
        <!-- </div> -->
    </div>
</li>

<!-- Nav Item - Utilities Collapse Menu -->
<li class="nav-item">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities"
        aria-expanded="true" aria-controls="collapseUtilities">
        <i class="fas fa-fw fa-wrench"></i>
        <span>Booking </span>
    </a>
    <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities"
        data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Custom Utilities:</h6>
           
           
            <a class="collapse-item" href="viewbooking.php">Booking Details</a>
            <!-- <a class="collapse-item" href="viewbooking.php">View Booking status</a> -->
            <a class="collapse-item" href="utilities-color.html">Payment Details</a>
            <a class="collapse-item" href="utilities-color.html">Customer Enquery</a>
            
        </div>
    </div>
</li>

<!-- Divider -->
<hr class="sidebar-divider">
<div class="sidebar-heading">
    Restuarant Configuration
</div>
<!-- Heading -->
<!-- <div class="sidebar-heading">
    Addons
</div> -->

<!-- Nav Item - Pages Collapse Menu -->
<li class="nav-item">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages"
        aria-expanded="true" aria-controls="collapsePages">
        <i class="fas fa-fw fa-folder"></i>
        <span>Food Catagory</span>
    </a>
    <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
            <!-- <h6 class="collapse-header">Admin Components:</h6>
            <a class="collapse-item" href="register.html"></a>
            <a class="collapse-item" href="forgot-password.html"></a> -->
            <div class="collapse-divider"></div> 
            <h6 class="collapse-header">Food Configuration:</h6>
            <a class="collapse-item" href="foodcata.php">Food Catagory</a>
            <a class="collapse-item" href="viewcata.php">View Catagory</a>
            <!-- <a class="collapse-item" href="addfood.php">Menu</a>
            <a class="collapse-item" href="viewfoodmenu.php">View items</a>
            <a class="collapse-item" href="Addtable.php">Add Table Size</a>
            <a class="collapse-item" href="foodcata.php">View Table Size</a> -->
        </div>
    </div> 
</li> 
<li class="nav-item">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages1"
        aria-expanded="true" aria-controls="collapsePages">
        <i class="fas fa-fw fa-folder"></i>
        <span>Food Items</span>
    </a>
    <div id="collapsePages1" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
            <!-- <h6 class="collapse-header">Admin Components:</h6>
            <a class="collapse-item" href="register.html"></a>
            <a class="collapse-item" href="forgot-password.html"></a> -->
            <div class="collapse-divider"></div> 
            <!-- <h6 class="collapse-header">Food Configuration:</h6>
            <a class="collapse-item" href="foodcata.php">Food Catagory</a>
            <a class="collapse-item" href="viewcata.php">View Catagory</a> -->
            <a class="collapse-item" href="addfood.php">Add Food item</a>
            <a class="collapse-item" href="viewfoodmenu.php">View Food items</a>
            <!-- <a class="collapse-item" href="Addtable.php">Add Table Size</a>
            <a class="collapse-item" href="foodcata.php">View Table Size</a> -->
        </div>
    </div> 
</li> 
<li class="nav-item">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages10"
        aria-expanded="true" aria-controls="collapsePages10">
        <i class="fas fa-fw fa-folder"></i>
        <span>Add Table</span>
    </a>
    <div id="collapsePages10" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
           
            <div class="collapse-divider"></div> 
            
             <a class="collapse-item" href="Addtable.php">Add Table Size</a>
            <a class="collapse-item" href="foodcata.php">View Table Size</a> 
        </div>
    </div> 
</li> 


            
            
            <!-- Heading -->
            <!-- <div class="sidebar-heading">
                Addons
            </div> -->

           <!-- Nav Item - Pages Collapse Menu -->
             <!-- <li class="nav-item active">
                <a class="nav-link" href="#" data-toggle="collapse" data-target="#collapsePages" aria-expanded="true"
                    aria-controls="collapsePages">
                    <i class="fas fa-fw fa-folder"></i>
                    <span>Pages</span> -->
                <!-- </a>
                <div id="collapsePages" class="collapse show" aria-labelledby="headingPages"
                    data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Login Screens:</h6>
                        <a class="collapse-item" href="login.html">Login</a>
                        <a class="collapse-item" href="register.html">Register</a>
                        <a class="collapse-item" href="forgot-password.html">Forgot Password</a>
                        <div class="collapse-divider"></div>
                        <h6 class="collapse-header">Other Pages:</h6>
                        <a class="collapse-item" href="404.html">404 Page</a>
                        <a class="collapse-item active" href="Blank.php">Blank Page</a>
                    </div>
                </div> -->
            <!-- </li> -->

            <!-- Nav Item - Charts -->
            <!-- <li class="nav-item">
                <a class="nav-link" href="charts.html">
                    <i class="fas fa-fw fa-chart-area"></i>
                    <span>Charts</span></a>
            </li> --> 

            <!-- Nav Item - Tables -->
            <!-- <li class="nav-item">
                <a class="nav-link" href="tables.html">
                    <i class="fas fa-fw fa-table"></i>
                    <span>Tables</span></a>
            </li> -->

            <!-- Divider -->
            <!-- <hr class="sidebar-divider d-none d-md-block"> -->

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>

                    <!-- Topbar Search -->
                  

                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">

                        <!-- Nav Item - Search Dropdown (Visible Only XS) -->
                        <li class="nav-item dropdown no-arrow d-sm-none">
                            <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-search fa-fw"></i>
                            </a>
                            <!-- Dropdown - Messages -->
                            <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in"
                                aria-labelledby="searchDropdown">
                                <form class="form-inline mr-auto w-100 navbar-search">
                                    <div class="input-group">
                                        <input type="text" class="form-control bg-light border-0 small"
                                            placeholder="Search for..." aria-label="Search"
                                            aria-describedby="basic-addon2">
                                        <div class="input-group-append">
                                            <button class="btn btn-primary" type="button">
                                                <i class="fas fa-search fa-sm"></i>
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </li>

                        <?php
        include('admin_connect.php');
       $query1 = "SELECT * FROM `cust_login`where role=1";
       $result = mysqli_query($conn,$query1);
       $rows=mysqli_fetch_array($result);
       
       ?>

                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 medium"> <?php echo $rows['cust_emailid']; ?></span>
                                <img class="img-profile rounded-circle"
                                    src="img/undraw_profile.svg">
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="userDropdown">
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Profile
                                </a>
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Settings
                                </a>
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Activity Log
                                </a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Logout
                                </a>
                            </div>
                        </li>

                    </ul>

                </nav>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                
                <html lang="en">
    
    <html lang="en">
 
    <div class="main">

<section class="signup">
    <!-- <img src="images/signup-bg.jpg" alt=""> -->
    <div class="container">
        <div class="signup-content">
            <form action="addreception.php" method="POST" id="signup-form" class="signup-form">
         

         <h2 class="form-title">ADD RECEPTIONLIST</h2>
                
                <!-- <div class="form-group">
                    <input type="text" class="form-input" name="firstname" id="fname" autocomplete="off"placeholder="firstname"  required onblur="return fnameValidate()"/>
                </div> -->
                <!-- <div class="form-group">
    <input type="text" class="form-input" name="firstname" id="fname" autocomplete="off" placeholder="firstname" required onblur="return fnameValidate()" />
    <span id="fname-error" class="error-message"></span>
</div>
 -->
 <div class="form-group">
  <input type="text" class="form-input" name="firstname" id="fname" autocomplete="off" placeholder="firstname" required onblur="fnameValidate()" />
  <span id="fname-error" class="error-message"></span>
</div>

<script>
  function fnameValidate() {
    var fname = document.getElementById("fname");
    var fnameError = document.getElementById("fname-error");
    if (fname.value.length > 1) {
      fnameError.innerHTML = "";
      return true;
    } else {
      fnameError.innerHTML = "Please enter a valid first name.";
      return false;
    }
  }

  document.getElementById("fname").addEventListener("input", function() {
    fnameValidate();
  });
</script>



               
                <div><span id="fnameValidate" class="validate"></span></div>
                <div class="form-group">
                    <input type="text" class="form-input" name="lastname" id="lname" autocomplete="off"placeholder="lastname" required onblur="return lnameValidate()" />
                </div>
                <div><span id="lnameValidate" class="validate"></span></div>
                   
                
<!--          
                <div class="form-group">
  <input type="email" class="form-input" name="email" id="email" autocomplete="off" placeholder="Your Email" required onblur="return emailValidate()"/>
</div>
<div><span id="emailValidate" class="validate"></span></div>

<script>
  function emailValidate() {
    var email = document.getElementById("email").value;
    var emailValidate = document.getElementById("emailValidate");
    var emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    if (emailRegex.test(email)) {
      emailValidate.innerHTML = "";
      emailValidate.style.color = "green";
      return true;
    } else {
      emailValidate.innerHTML = "Invalid email address";
      emailValidate.style.color = "red";
      return false;
    }
  }
</script> -->
<div class="form-group">
  <input type="email" class="form-input" name="email" id="email" autocomplete="off" placeholder="Your Email" required onkeyup="emailLiveValidation()"/>
  <span id="emailValidation" class="validate"></span>
</div>

<script>
  function emailLiveValidation() {
    var emailInput = document.getElementById("email");
    var emailValidation = document.getElementById("emailValidation");
    var emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    if (emailInput.value === "") {
      emailValidation.innerHTML = "";
      emailInput.classList.remove("invalid");
    } else if (!emailRegex.test(emailInput.value)) {
      emailValidation.innerHTML = "Please include an  @ in email address";
      emailValidation.style.color = "red";
      emailInput.classList.add("invalid");
    } else {
      emailValidation.innerHTML = "";
      emailInput.classList.remove("invalid");
    }
  }
</script>

<style>
  .invalid {
    border-color: red;
  }
</style>


                

                <!-- <div class="form-group">
                    <input type="password" class="form-input" name="password" id="password" placeholder="Password" required onblur="return validatepwd()"/>
                    <span toggle="#password" class="zmdi zmdi-eye field-icon toggle-password"></span>
                </div>
                <div><span id="validatepwd" class="validate"></span></div> -->
                <div class="form-group">
    <input type="password" class="form-input" name="password" id="password" placeholder="Password" required onblur="return validatepwd()"/>
    <span toggle="#password" class="zmdi zmdi-eye field-icon toggle-password"></span>
</div>
<div><span id="validatepwd" class="validate"></span></div>

<script>
    function validatepwd() {
        var password = document.getElementById("password").value;
        var validatepwd = document.getElementById("validatepwd");
        var pattern = /^(?=.*[0-9])(?=.*[a-z])(?=.*[A-Z])(?=.*[!@#$%^&*])(?=.{8,})/;
        if (password.match(pattern)) {
            validatepwd.innerHTML = "";
            return true;
        } else {
            validatepwd.innerHTML = "Password must be at least 8 characters long, and include at least one lowercase letter, one uppercase letter, one numeric digit, and one special character";
            return false;
        }
    }
</script>

      
                <div >
               <center><input type="submit" name ="submit" class="btn btn-warning" value="ADD" onclick="return registerValid()"/></center>
                
                </div>
                
            </form>

            

        </div>
    </div>
</section>

</div>
<style>
    

   /* @extend display-flex; */
display-flex, .display-flex, .display-flex-center {
  display: flex;
  display: -webkit-flex; }

/* @extend list-type-ulli; */
list-type-ulli {
  list-style-type: none;
  margin: 0;
  padding: 0; }

/* Montserrat-300 - latin */
@font-face {
  font-family: 'Montserrat';
  font-style: normal;
  font-weight: 300;
  src: url("../fonts/montserrat/Montserrat-Light.ttf");
  /* IE9 Compat Modes */ }
@font-face {
  font-family: 'Montserrat';
  font-style: normal;
  font-weight: 400;
  src: url("../fonts/montserrat/Montserrat-Regular.ttf");
  /* IE9 Compat Modes */ }
@font-face {
  font-family: 'Montserrat';
  font-style: italic;
  font-weight: 400;
  src: url("../fonts/montserrat/Montserrat-Italic.ttf");
  /* IE9 Compat Modes */ }
@font-face {
  font-family: 'Montserrat';
  font-style: normal;
  font-weight: 500;
  src: url("../fonts/montserrat/Montserrat-Medium.ttf");
  /* IE9 Compat Modes */ }
@font-face {
  font-family: 'Montserrat';
  font-style: normal;
  font-weight: 600;
  src: url("../fonts/montserrat/Montserrat-SemiBold.ttf");
  /* IE9 Compat Modes */ }
@font-face {
  font-family: 'Montserrat';
  font-style: normal;
  font-weight: 700;
  src: url("../fonts/montserrat/Montserrat-Bold.ttf");
  /* IE9 Compat Modes */ }
@font-face {
  font-family: 'Montserrat';
  font-style: italic;
  font-weight: 700;
  src: url("../fonts/montserrat/Montserrat-BoldItalic.ttf");
  /* IE9 Compat Modes */ }
@font-face {
  font-family: 'Montserrat';
  font-style: italic;
  font-weight: 900;
  src: url("../fonts/montserrat/montserrat-v12-latin-900.ttf"), url("../fonts/montserrat/montserrat-v12-latin-900.eot") format("embedded-opentype"), url("../fonts/montserrat/montserrat-v12-latin-900.svg") format("woff2"), url("../fonts/montserrat/montserrat-v12-latin-900.woff") format("woff"), url("../fonts/montserrat/montserrat-v12-latin-900.woff2") format("truetype"); }
a:focus, a:active {
  text-decoration: none;
  outline: none;
  transition: all 300ms ease 0s;
  -moz-transition: all 300ms ease 0s;
  -webkit-transition: all 300ms ease 0s;
  -o-transition: all 300ms ease 0s;
  -ms-transition: all 300ms ease 0s; }

input, select, textarea {
  outline: none;
  appearance: unset !important;
  -moz-appearance: unset !important;
  -webkit-appearance: unset !important;
  -o-appearance: unset !important;
  -ms-appearance: unset !important; }

input::-webkit-outer-spin-button, input::-webkit-inner-spin-button {
  appearance: none !important;
  -moz-appearance: none !important;
  -webkit-appearance: none !important;
  -o-appearance: none !important;
  -ms-appearance: none !important;
  margin: 0; }

input:focus, select:focus, textarea:focus {
  outline: none;
  box-shadow: none !important;
  -moz-box-shadow: none !important;
  -webkit-box-shadow: none !important;
  -o-box-shadow: none !important;
  -ms-box-shadow: none !important; }

input[type=checkbox] {
  appearance: checkbox !important;
  -moz-appearance: checkbox !important;
  -webkit-appearance: checkbox !important;
  -o-appearance: checkbox !important;
  -ms-appearance: checkbox !important; }

input[type=radio] {
  appearance: radio !important;
  -moz-appearance: radio !important;
  -webkit-appearance: radio !important;
  -o-appearance: radio !important;
  -ms-appearance: radio !important; }

img {
  max-width: 100%;
  height: auto; }

figure {
  margin: 0; }

p {
  margin-bottom: 0px;
  font-size: 15px;
  color: #777; }

h2 {
  line-height: 1.66;
  margin: 0;
  padding: 0;
  font-weight: 900;
  color: #222;
  font-family: 'Montserrat';
  font-size: 24px;
  text-transform: uppercase;
  text-align: center;
  margin-bottom: 40px; }

.clear {
  clear: both; }

  
.container {
  width: 660px;
  position: relative;
  margin: 0 auto; }

.display-flex {
  justify-content: space-between;
  -moz-justify-content: space-between;
  -webkit-justify-content: space-between;
  -o-justify-content: space-between;
  -ms-justify-content: space-between;
  align-items: center;
  -moz-align-items: center;
  -webkit-align-items: center;
  -o-align-items: center;
  -ms-align-items: center; }

.display-flex-center {
  justify-content: center;
  -moz-justify-content: center;
  -webkit-justify-content: center;
  -o-justify-content: center;
  -ms-justify-content: center;
  align-items: center;
  -moz-align-items: center;
  -webkit-align-items: center;
  -o-align-items: center;
  -ms-align-items: center; }

.position-center {
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  -moz-transform: translate(-50%, -50%);
  -webkit-transform: translate(-50%, -50%);
  -o-transform: translate(-50%, -50%);
  -ms-transform: translate(-50%, -50%); }

.signup-content {
  background: rgba(253, 253, 253);
  border-radius: 10px;
  -moz-border-radius: 10px;
  -webkit-border-radius: 10px;
  -o-border-radius: 10px;
  -ms-border-radius: 10px;
  padding: 50px 85px; }

.form-group {
  overflow: hidden;
  margin-bottom: 20px; }

.form-input {
  width: 100%;
  border: 2px solid #222;
  border-radius: 5px;
  -moz-border-radius: 5px;
  -webkit-border-radius: 5px;
  -o-border-radius: 5px;
  -ms-border-radius: 5px;
  padding: 17px 20px;
  box-sizing: border-box;
  font-size: 14px;
  font-weight: 500;
  color: #222; }
  .form-input::-webkit-input-placeholder {
    color: #999; }
  .form-input::-moz-placeholder {
    color: #999; }
  .form-input:-ms-input-placeholder {
    color: #999; }
  .form-input:-moz-placeholder {
    color: #999; }
  .form-input::-webkit-input-placeholder {
    font-weight: 500; }
  .form-input::-moz-placeholder {
    font-weight: 500; }
  .form-input:-ms-input-placeholder {
    font-weight: 500; }
  .form-input:-moz-placeholder {
    font-weight: 500; }
  .form-input:focus {
    border: 1px solid transparent;
    -webkit-border-image-source: -webkit-linear-gradient(to right, #9face6, #74ebd5);
    -moz-border-image-source: -moz-linear-gradient(to right, #9face6, #74ebd5);
    -o-border-image-source: -o-linear-gradient(to right, #9face6, #74ebd5);
    border-image-source: linear-gradient(to right, #9face6, #74ebd5);
    -webkit-border-image-slice: 1;
    border-image-slice: 1;
    border-radius: 5px;
    -moz-border-radius: 5px;
    -webkit-border-radius: 5px;
    -o-border-radius: 5px;
    -ms-border-radius: 5px;
    background-origin: border-box;
    background-clip: content-box, border-box; }
    .form-input:focus::-webkit-input-placeholder {
      color: #222; }
    .form-input:focus::-moz-placeholder {
      color: #222; }
    .form-input:focus:-ms-input-placeholder {
      color: #222; }
    .form-input:focus:-moz-placeholder {
      color: #222; }

.form-submit {
  width: 100%;
  border-radius: 5px;
  -moz-border-radius: 5px;
  -webkit-border-radius: 5px;
  -o-border-radius: 5px;
  -ms-border-radius: 5px;
  padding: 17px 20px;
  box-sizing: border-box;
  font-size: 14px;
  font-weight: 700;
  color: #fff;
  text-transform: uppercase;
  border: none;
  background-image: -moz-linear-gradient(to left, #74ebd5, #9face6);
  background-image: -ms-linear-gradient(to left, #74ebd5, #9face6);
  background-image: -o-linear-gradient(to left, #74ebd5, #9face6);
  background-image: -webkit-linear-gradient(to left, #74ebd5, #9face6);
  background-image: linear-gradient(to left, #74ebd5, #9face6); }

input[type=checkbox]:not(old) {
  width: 2em;
  margin: 0;
  padding: 0;
  font-size: 1em;
  display: none; }

input[type=checkbox]:not(old) + label {
  display: inline-block;
  margin-top: 7px;
  margin-bottom: 25px; }

input[type=checkbox]:not(old) + label > span {
  display: inline-block;
  width: 13px;
  height: 13px;
  margin-right: 15px;
  margin-bottom: 3px;
  border: 1px solid black;
  border-radius: 2px;
  -moz-border-radius: 2px;
  -webkit-border-radius: 2px;
  -o-border-radius: 2px;
  -ms-border-radius: 2px;
  background: black;
  background-image: -moz-linear-gradient(white, white);
  background-image: -ms-linear-gradient(white, white);
  background-image: -o-linear-gradient(white, white);
  background-image: -webkit-linear-gradient(white, white);
  background-image: linear-gradient(white, white);
  vertical-align: bottom; }

input[type=checkbox]:not(old):checked + label > span {
  background-image: -moz-linear-gradient(white, white);
  background-image: -ms-linear-gradient(white, white);
  background-image: -o-linear-gradient(white, white);
  background-image: -webkit-linear-gradient(white, white);
  background-image: linear-gradient(white, white); }

input[type=checkbox]:not(old):checked + label > span:before {
  content: '\f26b';
  display: block;
  color: #000;
  font-size: 11px;
  line-height: 1.2;
  text-align: center;
  font-family: 'Material-Design-Iconic-Font';
  font-weight: bold; }

.label-agree-term {
  font-size: 15px;
  font-weight: 600;
  color: #555; }

.term-service {
  color: #555; }

.loginhere {
  color: #555;
  font-weight: 500;
  text-align: center;
  margin-top: 91px;
  margin-bottom: 5px; }

.loginhere-link {
  font-weight: 700;
  color: #222; }

.field-icon {
  float: right;
  margin-right: 17px;
  margin-top: -32px;
  position: relative;
  z-index: 2;
  color: #555; }

@media screen and (max-width: 768px) {
  .container {
    width: calc(100% - 40px);
    max-width: 100%; } }
@media screen and (max-width: 480px) {
  .signup-content {
    padding: 50px 25px; } }
.validate{
  color:red;
}
/*# sourceMappingURL=style.css.map */

</style>
  </html>

    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="login.html">Logout</a>
                </div>
            </div>
        </div>
    </div>
    <?php
  $conn = mysqli_connect('localhost','root','','hotelsystem');
  
  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error."<br>");
    
  }
  else{
    //echo "Success";
  }



    if(isset($_POST['submit'])){
      $firstname = $_POST['firstname'];
      $cust_emailid = $_POST['email'];
      $cust_pass = md5($_POST['password']);
      $lastname = $_POST['lastname'];
     
   
//    $checkuser= "select * from cust_login where cust_emailid = '$cust_emailid'";
//    $result = mysqli_query($conn,$checkuser);
//    $count = mysqli_num_rows($result);
//    if($count>0){
//     echo "user already signed";
//    }
  

   $result =  "SELECT * FROM cust_login where cust_emailid='$cust_emailid'";
  $res= mysqli_query($conn,$result);
  $count = mysqli_num_rows($res);
  if($count>0){
    $row = mysqli_fetch_assoc($res);
    if($cust_emailid==isset($row['email'])){
    // {
    //   echo"<script>alert('account already exist');window.location='index.php';</script>";
    // }
    
    echo"<script>
    alert('account already exist');
    window.href=location='index.php';
    </script>";
    }
  }

  // $ins= mysqli_fetch_array($result);
  // $log_id= $ins['log_id'];
  // $sql="SELECT * from cust_login where (cust_emailid='$cust_emailid');";
  // $result=mysqli_query($conn,$sql);
  // if (mysqli_num_rows($result)>0){
  //   $row = mysqli_fetch_assoc($result);
  //   if(($cust_emailid==isset($row['cust_emailid'])))
  //   {
  //     $_SESSION['status']="you already exit";
  //   }
  // }
   else{


      $re = "INSERT INTO cust_login(`cust_emailid`,`cust_pass`,`role`,`status`)VALUES ('$cust_emailid','$cust_pass','2','true')";
      $ra=$conn->query($re);

      if($ra){
            $log_id=$conn->insert_id;
           
          //   $result = mysqli_query($conn, "SELECT log_id FROM cust_login where cust_emailid='$cust_emailid'");
          //  $ins= mysqli_fetch_array($result);
          //   $log_id= $ins['log_id']; $sql = "INSERT INTO registration"
          
            //header("Location: index.html");
          $sql2 = "INSERT INTO tbl_reception(`firstname`,`lastname`,`status`,`log_id`)
          VALUES('$firstname','$lastname','2','$log_id')";
          $resu=$conn->query($sql2);
          //echo $sql;
          echo"<script>alert('Sucessfully Registered');window.location='index.php';</script>";
        }
          //if(mysqli_query($conn, $sql)){
            
            //  header("Location: index.php");
            //echo"<script>alert('successfully Registered');window.location='index.php';</script>";

          }
          //mysqli_close($conn);
      
    
  
      // else{
      //   echo " failed !!";
        
      // }
      
      }
   // }
    
?>
    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>
    <script src="script1.js"></script>
    <script src="script.js"></script>
</body>

</html>





