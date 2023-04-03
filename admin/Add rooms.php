<?php
    include('../connect1.php');            
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <style>
        
.container {
  display: flex;
  justify-content: center;
  align-items: center;
  flex-direction: column;
  height: 100vh;
  font-size: 15px;
  background-color:#2573c731;

}
.registartion-form {
  display: flex;
  justify-content: center;
  align-items: center;
  width: 595px;
  color: rgb(113, 20, 20);
  font-size: 18px;
  font-family: sans-serif;
   background-color:rgba(19, 173, 65, 0.107);
   padding:100px;
}

.registartion-form input, 
.registartion-form select,
.registartion-form textarea {
border: none;
padding: 5px;
margin-top: 10px;
font-family: sans-serif;
}

.registartion-form input:focus,
.registartion-form textarea:focus {
box-shadow: 3px 3px 10px rgb(228, 228, 228), -3px -3px 10px rgb(224, 224, 224);
}

.registartion-form .submit {
width: 100%;
padding: 8px 0;
font-size: 20px;
color: rgb(44, 44, 44);
background-color: #0e6a89;
border-radius: 5px;
}
.registartion-form .submit:hover {
  box-shadow: 3px 3px 6px rgb(255, 214, 176);
}
    </style>

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
                        <a class="collapse-item" href="viewcheckout.php">Check Out Details</a>
                       
                        
                    </div>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages41"
                    aria-expanded="true" aria-controls="collapsePages41">
                    <i class="fas fa-fw fa-folder"></i>
                    <span>Add Reception</span>
                </a>
                <div id="collapsePages41" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <!-- <h6 class="collapse-header">Admin Components:</h6>
                        <a class="collapse-item" href="register.html"></a>
                        <a class="collapse-item" href="forgot-password.html"></a> -->
                        <div class="collapse-divider"></div> 
                        <h6 class="collapse-header">Order:</h6>
                        <a class="collapse-item" href="addreception.php">Add Reception</a>
                        <a class="collapse-item" href="viewrece.php">View Reception</a>
                        <!-- <a class="collapse-item" href="addfood.php">Menu</a>
                        <a class="collapse-item" href="viewfoodmenu.php">View items</a> -->
                        <!-- <a class="collapse-item" href="Addtable.php">Add Table Size</a>
                        <a class="collapse-item" href="foodcata.php">View Table Size</a>  -->
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
                    <!-- <form
                        class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
                        <div class="input-group">
                            <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..."
                                aria-label="Search" aria-describedby="basic-addon2">
                            <div class="input-group-append">
                                <button class="btn btn-primary" type="button">
                                    <i class="fas fa-search fa-sm"></i>
                                </button>
                            </div>
                        </div>
                    </form> -->

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
  <head>
    <meta charset="UTF-8">
    <title>Dealer Registration</title>
    <link  rel="stylesheet" href="form.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <script>
   function Register(){
      var isValid=true;
			var room block = document.forms.room_type.room block.value;
      var last_name = document.forms.RegForm.last_name.value;
      // var regadrex=/d{1,5}\s\w.\s(\b\w*\b\s){1,2}\w*/.;
      var email = document.forms.RegForm.email.value;
      var phone = document.forms.RegForm.phone.value;
			var password = document.forms.RegForm.password.value;
      var cpassword = document.forms.RegForm.cpassword.value;
      var district = document.forms.RegForm.district.value;
      var state = document.forms.RegForm.state.value;
      // var cpassword = document.forms.RegForm.cpassword.value;
			var regemail=/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/g;  //Javascript reGex for Email Validation.
      var regphone=/^\d{10}$/;
      var pwdPattern=/^(?=.*\d)(?=.*[A-Z]).{3,}/;
      var nameCityPattern =  /\d+$/g;

      
    //   $('#password, #cpassword').on('keyup', function () {
    //     if ($('#password').val() == $('#cpassword').val()) {
    //       $('#message').html('Matching').css('color', 'green');
    //     } else 
    //       $('#message').html('Not Matching').css('color', 'red');
    // });
    //   if (room block == "" || nameCityPattern.test(roomblock)) {
    //     window.alert("Please enter your First Name.");
      
    //     isValid=false;
        
    //   }
    //   if (last_name == "" || nameCityPattern.test(last_name)) {
    //     window.alert("Please enter your Last Name.");
      
    //     isValid=false;
    //   }
    //   if (address == "") {
    //     window.alert("Please enter your address.");
      
    //     isValid=false;
    //   }
    //   if (phone == "" || !regphone.test(phone)) {
    //     alert("Please enter valid phone number.");
        
    //     isValid=false;
    //   }
    //   if (email == "" || !regemail.test(email)) {
    //     window.alert("Please enter a valid e-mail address.");
       
    //     isValid=false;
    //   }
    //   if (password == "" || cpassword=="") {
    //     alert("Please enter password.");
      
    //     isValid=false;
    //   }
    //   else if(password!=cpassword){
    //     alert("Please enter same password.");
       
    //     isValid=false;
    //   }
    //   else{
    //     return isValid;
    //   }
    //   if(district== "" || nameCityPattern.test(district)){
    //     alert("Please enter district.");
       
    //     isValid=false;
    //   }
    //   if(state== "" || nameCityPattern.test(state)){
    //     alert("Please enter Your state.");
       
    //     isValid=false;
    //   }

    //   return isValid;
      
                  
	// 	}
    // </script>
  </head>
     <meta charset="UTF-8">
      <title> </title>
      <link  rel="stylesheet" href="Add rooms.css">
      <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
      <script>
     
        
       </script>  -->
    </head>
    <body>
      <div id="main">
    
        
        
      </div>
   
      <div class="container">  
        <div class="row">
         <p class="elementToFadeInAndOut"><?php if(isset($_SESSION['msg'])) {echo $_SESSION['msg'];} ?></p>
          <div class="column">
      
            <form  method="post" action="Add rooms.php" name="room_type"  onsubmit="return Register()" enctype="multipart/form-data">
            <label for="room_block">Room Type</label>
<select id="room_block" name="room_type" required onblur="validateRoomType()">
    <option value="" selected disabled>--- Select Option ---</option>
    <?php
    $room_type_res = mysqli_query($conn,"SELECT * from tbl_roomtype where status=1");
    if ($room_type_res && mysqli_num_rows($room_type_res) > 0) {
        while ($row = mysqli_fetch_array($room_type_res)) {
            echo "<option value='".$row['roomtype_id']."'>".$row['roomtype']."</option>";
        } 
    }
    ?>
</select>

<div id="room_type_error"></div>         
             
<label for="room_block">Room Block</label>
<input type="text" id="order" name="order" placeholder="Enter the Room Block" required onblur="validateOrder()"/>
<span id="orderError"></span>
<br>

<label for="room_number">Room Number</label>
<input type="text" id="room_number" name="room_number" placeholder="Enter the Room Number"required onblur="validateRoomNumber()" />
<span id="room_number_error" style="color: red;"></span>

 <br>
              <input type="checkbox" name="data[]"value="wifi">wifi
          <input type="checkbox" name="data[]"value="balcony">balcony
          <input type="checkbox" name="data[]"value="ac">ac
          <input type="checkbox" name="data[]"value="nonac">nonac  <br><br>
          
          <div class="elem-group inlined">
  <label for="roomtype">Price</label>
  <input type="text" id="price" name="price" placeholder="price" onblur="validatePrice(this)">
  <span class="error-message" style="display:none;"></span>
</div>
              <label for="name">Image Upload</label>
            <input type="file" id="image" name="choose_room">
            <input type="submit" value="ADD ROOMS" name="submit" onclick="upload()">  
           

            </form>
          </div>
        </div>
    </div>
</div>

  
    </body>
    
    <script>
function validateRoomType() {
    const roomType = document.getElementById("room_block").value;
    const roomTypeError = document.getElementById("room_type_error");
    if (roomType === "") {
        roomTypeError.innerHTML = "<span style='color: red;'>*Choose a room type.</span>";
       
    } else {
        roomTypeError.innerHTML = "";
    }
}



</script>

<script>
function validateRoomNumberDigits() {
    var room_number_input = document.getElementById("room_number");
    var room_number = room_number_input.value.trim();
    var room_number_regex = /^[0-9]+$/;
    if (room_number === "") {
        document.getElementById("room_number_empty_error").innerHTML = "Please enter a room number.";
        return false;
    } else if (!room_number_regex.test(room_number)) {
        document.getElementById("room_number_digits_error").innerHTML = "Please enter only digits.";
        return false;
    } else if (parseInt(room_number) <= 0) {
        document.getElementById("room_number_digits_error").innerHTML = "Please enter a number greater than 0.";
        return false;
    } else {
        return true;
    }
}
<script>
function validateRoomBlock() {
  var roomBlockInput = document.getElementById("room_block");
  var roomBlockValue = roomBlockInput.value;
  var roomBlockError = document.getElementById("room_block_error");

  // perform validation logic here
  // room block must be a string of 3 uppercase letters followed by a number
  var regex = /^[A-Z]{3}\d$/;
  if (!regex.test(roomBlockValue)) {
    roomBlockError.innerHTML = "Room block must be a string of 3 uppercase letters followed by a number.";
    roomBlockInput.value = "";
  } else {
    roomBlockError.innerHTML = "";
  }
}
</script>


<script>
  function validateOrder() {
  var orderInput = document.getElementById("order");
  var orderError = document.getElementById("orderError");
  
  if (orderInput.value === "") {
    orderError.innerHTML = "Please enter room block.";
    orderError.style.color = "red";
    return false;
  }
  
  orderError.innerHTML = "";
  return true;
}

</script>
<script>
function validatePrice(input) {
  var price = parseFloat(input.value);
  if (isNaN(price)) {
    showError(input, "Please enter a valid price");
    
  } else if (price < 0) {
    showError(input, "Price cannot be negative");
    showElement.style.color = "red";
  } else {
    hideError(input);
  }
}

function showError(input, message) {
  var errorElement = input.parentNode.querySelector(".error-message");
  errorElement.innerText = message;
  errorElement.style.display = "block";
}

function hideError(input) {
  var errorElement = input.parentNode.querySelector(".error-message");
  errorElement.innerText = "";
  errorElement.style.display = "none";
}
</script>
<script>
function validateRoomNumber() {
  const roomNumberInput = document.getElementById("room_number");
  const roomNumber = roomNumberInput.value;
  const roomNumberError = document.getElementById("room_number_error");

  // Check if the room number only contains numbers
  const isValidRoomNumber = /^[0-9]+$/.test(roomNumber);

  if (!isValidRoomNumber) {
    roomNumberError.textContent = "Please enter a valid room number (numbers only).";
    roomNumberInput.focus();
  } else {
    roomNumberError.textContent = "";
  }
}
</script>
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
  //echo  "Success";
}

if(isset($_POST['submit'])){
    $room_type = $_POST['room_type'];
    $room_block = $_POST['order'];
    $room_number= $_POST['room_number'];
  
    $price=$_POST['price'];
    $datas=$_POST['data'];
    $allData=implode(",",$datas);
  //$image= $_POST['image'];
  $choose_room=$_FILES["choose_room"]["name"];
	//echo $img;
// $price=$_POST['price'];
// Attempt insert query execution
$query="SELECT number FROM tbl_roomtype WHERE roomtype_id='$room_type'";
$res_q1=mysqli_query($conn,$query);
if($res_q1)

{

    $max=mysqli_fetch_assoc($res_q1)['number'];
    $q2="SELECT COUNT(*) AS rm_count FROM tbl_addrooms WHERE roomtype_id='$room_type'";
    $r2=mysqli_query($conn,$q2);
    $count=mysqli_fetch_array($r2)['rm_count'];
    if($count>=$max)
    echo "<script> alert('Already exceeded maximum limit of Rooms'); </script>";
    else
    {
        move_uploaded_file($_FILES["choose_room"]["tmp_name"],"photos1/".$choose_room);
	//$result=mysqli_query($con,"INSERT INTO `tbl_details`(`name`, `address`, `phone`, `photo`) VALUES ('$name','$address','$phone','$img')");

 

    // $sql="insert into tbl_addrooms(`roomtype`,`room_block`,`room_number`,`choose_room`,`price`,`multipleData`,`status`) 
    // VALUES('$room_type',$room_block','$room_number','$choose_room','$price','$allData','1')";
    $sql="insert into tbl_addrooms(`roomtype_id`,`room_block`,`room_number`,`choose_room`,`price`,`multipleData`,`status`) 
    VALUES('$room_type','$room_block','$room_number','$choose_room','$price','$allData','1')";
    
//   $sql="insert into tbl_roomtype(`roomtype`,`image`,`status`) 
//         VALUES('$room_type','$img','1')";
        
        $result=mysqli_query($conn,$sql);
       
          
        //echo $sql;
       if($result){
        echo "<script>alert('A new room added successfully.');window.location.href='Add rooms.php'</script>";
       }else{
        die(mysqli_error($conn));

    }
}

}
else echo "error";
} 
    
    
?>
    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>
    <script src="script1.js"></script>

</body>

</html>





