<!DOCTYPE html>
<html lang="en">

<head>
<!-- <script>
function Validate(){
   var lastname = document.getElementById("lname").value;
   var pattern =  /^[a-zA-Z]+$/;
   isValid=true;
   if(lastname.match(pattern)){
      document.getElementById("lnameValidate").innerHTML="";
   }
   else if(!lastname){
      document.getElementById("lnameValidate").innerHTML="Last Name Required";
      isValid=false;
   }
   else{
      document.getElementById("lnameValidate").innerHTML="Only characters are acceptable";
      isValid=false;
   }
   return isValid;
}
</script> -->
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

    <title>SB Admin 2 - Blank</title>

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
                <div class="sidebar-brand-text mx-3">Admin <sup>2</sup></div>
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
                Interface
            </div>

            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
                    aria-expanded="true" aria-controls="collapseTwo">
                    <i class="fas fa-fw fa-cog"></i>
                    <span>Room Details</span>
                </a>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">ADMIN COMPONENT:</h6>
                        <a class="collapse-item" href="Add rooms.php">Add Room</a>
                        <a class="collapse-item" href="view addroom.php">View addroom Details</a>
                        <a class="collapse-item" href=" Roomtype.php">Add Room Type</a>
                        <a class="collapse-item" href="view Roomtype.php">Room Type</a>
                    </div>
                </div>
            </li>

            <!-- Nav Item - Utilities Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities"
                    aria-expanded="true" aria-controls="collapseUtilities">
                    <i class="fas fa-fw fa-wrench"></i>
                    <span>Booking Details</span>
                </a>
                <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities"
                    data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Custom Utilities:</h6>
                        <a class="collapse-item" href="Customer Details.php">Customer Details</a>
                        <a class="collapse-item" href="viewbooking.php">Booking Detais</a>
                        <a class="collapse-item" href="utilities-animation.html">Payment Details</a>
                        <a class="collapse-item" href="utilities-other.html">Other</a>
                    </div>
                </div>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">
            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages"
                    aria-expanded="true" aria-controls="collapsePages">
                    <i class="fas fa-fw fa-folder"></i>
                    <span>Food Configuration</span>
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
                        <a class="collapse-item" href="addfood.php">Menu</a>
                        <a class="collapse-item" href="viewfoodmenu.php">View items</a>
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
            </li>

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
            <hr class="sidebar-divider d-none d-md-block">

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
                    <!-- <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3"> -->
                        <!-- <i class="fa fa-bars"></i>
                    </button> -->

                    <!-- Topbar Search -->
                    <form
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
                    </form>

                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">

                        
                        <!-- Nav Item - Messages -->
                        <li class="nav-item dropdown no-arrow mx-1">
                            <!-- <a class="nav-link dropdown-toggle" href="#" id="messagesDropdown" role="button" -->
                                <!-- data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> -->
                                <!-- <i class="fas fa-envelope fa-fw"></i> -->
                                <!-- Counter - Messages -->
                                <!-- <span class="badge badge-danger badge-counter">7</span> -->
                            <!-- </a> -->
                            <!-- Dropdown - Messages -->
                            <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="messagesDropdown">
                                <h6 class="dropdown-header">
                            
                                </h6>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="dropdown-list-image mr-3">
                                        <img class="rounded-circle" src="img/undraw_profile_1.svg"
                                            alt="...">
                                        <div class="status-indicator bg-success"></div>
                                    <!-- </div>
                                    <div class="font-weight-bold">
                                        <div class="text-truncate">Hi there! I am wondering if you can help me with a
                                            problem I've been having.</div>
                                        <div class="small text-gray-500">Emily Fowler ?? 58m</div>
                                    </div>
                                </a>
                                <a class="dropdown-item d-flex align-items-center" href="#"> -->
                                    <!-- <div class="dropdown-list-image mr-3">
                                        <img class="rounded-circle" src="img/undraw_profile_2.svg"
                                            alt="...">
                                        <div class="status-indicator"></div>
                                    </div>  -->
                                    <!-- <div>
                                        <div class="text-truncate">I have the photos that you ordered last month, how
                                            would you like them sent to you?</div>
                                        <div class="small text-gray-500">Jae Chun ?? 1d</div>
                                    </div>
                                </a>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="dropdown-list-image mr-3">
                                        <img class="rounded-circle" src="img/undraw_profile_3.svg"
                                            alt="...">
                                        <div class="status-indicator bg-warning"></div>
                                    </div>
                                    <div>
                                        <div class="text-truncate">Last month's report looks great, I am very happy with
                                            the progress so far, keep up the good work!</div>
                                        <div class="small text-gray-500">Morgan Alvarez ?? 2d</div>
                                    </div>
                                </a>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="dropdown-list-image mr-3">
                                        <img class="rounded-circle" src="https://source.unsplash.com/Mv9hjnEUHR4/60x60"
                                            alt="...">
                                        <div class="status-indicator bg-success"></div>
                                    </div>
                                    <div>
                                        <div class="text-truncate">Am I a good boy? The reason I ask is because someone
                                            told me that people say this to all dogs, even if they aren't good...</div>
                                        <div class="small text-gray-500">Chicken the Dog ?? 2w</div>
                                    </div>
                                </a>
                                <a class="dropdown-item text-center small text-gray-500" href="#">Read More Messages</a>
                            </div>
                        </li>

                        <div class="topbar-divider d-none d-sm-block"></div> -->

                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small">Admin</span>
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
  <head>
    <meta charset="UTF-8">
    <title> Registration</title>
    <link  rel="stylesheet" href="Roomtype.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <!-- <script>
   function Register(){
      var isValid=true;
			var first_name = document.forms.RegForm.first_name.value;
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
      if (first_name == "" || nameCityPattern.test(first_name)) {
        window.alert("Please enter your First Name.");
      
        isValid=false;
        
      }
      
      
		} -->
    <!-- </script> -->
  </head>
  <body>
    <div id="main">
  
      <!-- <nav>
          <ul>
            <li><a href="index.php">Back to Home Page </a></li>
            <li><a href="../logout.php">Logout</a></li>
              
          </ul>
      </nav>
       -->
    </div>

     <div class="container">  
      <div class="row">
       <!-- <p class="elementToFadeInAndOut"><?php if(isset($_SESSION['msg'])) {echo $_SESSION['msg'];} ?></p> -->
        <div class="column"> 
    
           <form  method="post" action="Roomtype.php" name="roomtype" onsubmit="return Register()" enctype="multipart/form-data">
           <label for="last_name" >Room Type</label>
          
            <input type="text" id="status" name="roomtype"onclick="validate();" value="" autocomplete="off" placeholder="Enter Room Type" />
            <label for="last_name" >Total Room</label>
            <input type="text" id="status" name="adult"onclick="validate();" value="" autocomplete="off" placeholder="Enter Room Type" />
            <label for="last_name" >Maximum Adult</label>
            <input type="text" id="status" name="children"onclick="validate();" value="" autocomplete="off" placeholder="maximum adult" />
            <label for="last_name" >Maximum Children</label>
          
            <input type="text" id="status" name="number"onclick="validate();" value="" autocomplete="off" placeholder="maximum children" />
            <!-- <div><span id="lnameValidate" class="validate"></span></div> -->
            <!-- <p>Room Type: <input id="status" value=""></p>
<input type="button" onclick="validate();" value=""> -->

            <label for="name">Image Upload</label>
            <input type="file" id="image" name="image">
            <input type="submit" value="Submit" name="submit" onclick="upload()">    
          </form>
        </div>
      </div>
  </div>

  </body>
</html>

</body>
</html>

                </div>
              

            </div>
            

        </div>
        

    </div>
    

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
                        <span aria-hidden="true">??</span>
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
  $room_type = $_POST['roomtype'];
  $number = $_POST['number'];
  $adult = $_POST['adult'];
  $children = $_POST['children'];
  //$image= $_POST['image'];
  $img=$_FILES["image"]["name"];



move_uploaded_file($_FILES["image"]["tmp_name"],"photos/".$img);
	//$result=mysqli_query($con,"INSERT INTO `tbl_details`(`name`, `address`, `phone`, `photo`) VALUES ('$name','$address','$phone','$img')");

    // $sql="SELECT * from tbl_roomtype where (roomtype_id='$roomtype');";
    // $result=mysqli_query($conn,$sql);
    // if (mysqli_num_rows($result)>0){
    //   $row = mysqli_fetch_assoc($result);
    //   if(($roomtype==isset($row['roomtype_id'])))
    //   {
    //     $_SESSION['status']="you already exit";
    //   }
    // }
    $query = "SELECT * FROM `tbl_roomtype` Where roomtype='$room_type'";
$result = mysqli_query($conn,$query);

 if(mysqli_num_rows($result)>0)
 {
    // echo "item exits";
    echo "<script>alert('Roomtype Already Exist.');window.location.href='Add rooms.php'</script>";

 }
else{
  $sql="insert into tbl_roomtype(`roomtype`,`image`,`number`,`adult`,`children`,`status`) 
        VALUES('$room_type','$img','$number','$adult','$children','1')";
        
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
        echo "<script>alert('A new room type added successfully.');window.location.href='Add rooms.php'</script>";
       }else{
        echo "<script>alert('A new room type not added.');window.location.href='Add rooms.php'</script>";
        die(mysqli_error($conn));
       }
    }
}
    
?>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

</body>

</html>