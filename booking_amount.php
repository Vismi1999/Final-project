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
  echo "user ID: $log_id";
} else {
  echo "Session ID not set";
}
$query =mysqli_query($conn, "SELECT * FROM `tbl_booking` WHERE reg_id=$log_id ");
$row=mysqli_fetch_assoc($query);
$addroom_id=$row['addroom_id'];
echo 'addroom_id'.$addroom_id;
$query1 =mysqli_query($conn, "SELECT * FROM `tbl_addrooms` WHERE addroom_id=$addroom_id ");
$row=mysqli_fetch_assoc($query1);
$days=$_SESSION['days'];
echo $days;
echo "d_count: ".$_SESSION['days'];
$price=$row['price'];
$total=$price*$days;
echo $price;
echo "total_ruppee". $total;
echo 'price'.$price;
$roomtype=$row['roomtype_id'];
echo 'roomtype'.$roomtype;
?>

<html>
  <head>
  <title>cart</title>
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
										<h5 class="text-right"><?php echo $total; ?></h5>
										<br>
										<form>
											<div class="form-check">
												<!-- <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1"> -->
												<label class="form-check-label" for="flexRadioDefault1">Make Payment</label>
												
											</div>
											<br>
											
											<br><br>
										
											<input type="button" id="rzp-button1"name="btn"value="pay now"class="btn btn-primary" onclick="pay_now()"/>
										</form>
									</div>
								</div>
								<!-- </form> -->
							</div>
										</center>
    </body>

</html>