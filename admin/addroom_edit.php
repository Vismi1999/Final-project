<?php
// including the database connection file
// include "../admin_connect.php";
$conn = mysqli_connect('localhost','root','','hotelsystem');
  
  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error."<br>");
  }
if(isset($_POST['update']))
{   
    $addroom_id = $_POST['addroom_id'];
	// echo "$addroom_id";
    $room_block= $POST['room_block'];
    $room_number= $POST['room_number'];

	$services= $POST['data'];
	$price= $POST['price'];
    // $status=$_POST['status'];
	// $target_dir = $_POST["images/brand/"];
    // $age=$_POST['age'];
    // $email=$_POST['email'];     
        //updating the table
        $result = mysqli_query($conn, "UPDATE tbl_addrooms SET room_block='$room_block',room_number='$room_number',multipleData='$services',price='$price' WHERE addroom_id=$addroom_id");
        
        //redirectig to the display page. In our case, it is index.php
        header("Location: view addroom.php");
}
?>
<?php
//getting id from url
$addroom_id= $_GET['addroom_id'];
// $room_block= $GET['room_block'];
// $room_number= $GET['room_number'];
// $status=$_GET['status'];

//selecting data associated with this particular id
$result = mysqli_query($conn, "SELECT * FROM tbl_addrooms WHERE addroom_id=$addroom_id");

while($res = mysqli_fetch_array($result))
{
    $room_block= $res['room_block'];
    $room_number= $res['room_number'];
	$services= $res['multipleData'];
	$price= $res['price'];
    // $status = $res['status'];
	// $target_dir=$res['bimage_path'];
    // $email = $res['email'];
}
?>
<html>
	<head>  
    <title>Edit Data</title>
		<link rel="stylesheet" href="css/style.css" type="text/css"/>
		<link rel="stylesheet" href="css/side_nav.css" type="text/css"/>
    	<!-- <link rel="stylesheet" href="css/brand_style.css" type="text/css"/> -->

		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<script type="text/javascript" src="js/sidenav.js"></script>
		<style>
			td{
				color:rgb(43, 42, 54);
			}
		</style>
	</head>

	<body>	
	<!-- <div id="mySidenav" class="sidenav">
		<div class="logo">
			<img src="images/logo.png" alt="logo image" >
		</div>
		<a href="index.php" class="icon-a"><i class="fa fa-dashboard icons"></i>   Dashboard</a>
		<a href="#"class="icon-a"><i class="fa fa-users icons"></i>   Customers</a>
		<a href="#"class="icon-a"><i class="fa fa-list icons"></i>   Car List</a>
		<a href="#"class="icon-a"><i class="fa fa-shopping-bag icons"></i>   Enquiry</a>
		<a href="brand.php"class="icon-a"><i class=" fa fa-tasks icons"></i> Brands	</a>
		<button class="dropdown-btn fa fa-list-alt icons icon-a">  Service
		<i class="fa fa-caret-down"></i>
		</button>
		<div class="dropdown-container">
		<a href="#"> Add New Service</a>
		<a href="#"> View Service</a>
		</div> -->
		<!-- <a href="dealers_info.php"class="icon-a"><i class="fa fa-user icons"></i>   Dealers</a>
		<a href="dealers_info.php"class="icon-a"><i class="fa fa-user icons"></i>   Dealers</a> -->
		
		<!-- <button class="dropdown-btn fa fa-user icons icon-a"> Dealers
		<i class="fa fa-caret-down"></i>
		</button>
		<div class="dropdown-container">
			<a href="dealer_registration.php">Add New Dealer</a>
			<a href="dealers_info.php">View Dealer</a>
		</div>
		<a href="../logout.php">Logout</a>
	</div> -->

	<!-- <div class="head">
			<div class="col-div-6">
				<span style="font-size:30px;cursor:pointer; color: white;" class="nav"  >☰ Dashboard</span>
				<span style="font-size:30px;cursor:pointer; color: white;" class="nav2"  >☰ Dashboard</span>
			</div>
		
			<div class="col-div-6">
				<div class="profile">

					<img src="images/user.png" class="pro-img" />
					<p>Admin <span>admin@gmail.com</span></p>
				</div>
			</div>
			<!-- <div class="clearfix"></div> -->
		<!-- </div>  -->
	<div id="main">
		<!-- <a href="index.php">Home</a> -->
		<br/><br/>
		
		<form name="Addroom" method="post" action="addroom_edit.php">
			<table border="1">
				<tr> 
					<td>Room Block</td>
					<td><input type="text" name="room_block" value="<?php echo $room_block;?>"></td>
				</tr>
                <tr> 
					<td>Room Number</td>
					<td><input type="text" name="room_number" value="<?php echo $room_number;?>"></td>
				</tr>
				<tr> 
					<td>Services</td>
					<td><input type="text" name="data" value="<?php echo $services;?>"></td>
				</tr>
				<tr> 
				<td>Price</td>
					<td><input type="text" name="price" value="<?php echo $price;?>"></td>
				</tr>	
						
						<!-- <input type="text" name="bimage_path" value="<?php echo $target_dir;?>"> -->
					
				</tr>
				<tr>
					<td><input type="hidden" name="addroom_id" value=<?php echo $_GET['addroom_id'];?>></td>
					<td><input type="submit" name="update" value="Update"></td>
				</tr>
			</table>
		</form>

	</div> 


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
	var dropdown = document.getElementsByClassName("dropdown-btn");
		var i;

		for (i = 0; i < dropdown.length; i++) {
		dropdown[i].addEventListener("click", function() {
			this.classList.toggle("active");
			var dropdownContent = this.nextElementSibling;
			if (dropdownContent.style.display === "block") {
			dropdownContent.style.display = "none";
			} else {
			dropdownContent.style.display = "block";
			}
		});
		}

  $(".nav").click(function(){
	$("#mySidenav").css('width','70px');
	$("#main").css('margin-left','70px');
	$(".logo").css('visibility', 'hidden');
	$(".logo span").css('visibility', 'visible');
	 $(".logo span").css('margin-left', '-10px');
	 $(".icon-a").css('visibility', 'hidden');
	 $(".icons").css('visibility', 'visible');
	 $(".icons").css('margin-left', '-8px');
	  $(".nav").css('display','none');
	  $(".nav2").css('display','block');
  });

$(".nav2").click(function(){
	$("#mySidenav").css('width','300px');
	$("#main").css('margin-left','300px');
	$(".logo").css('visibility', 'visible');
	 $(".icon-a").css('visibility', 'visible');
	 $(".icons").css('visibility', 'visible');
	 $(".nav").css('display','block');
	  $(".nav2").css('display','none');
 });

</script>
	</body>
</html