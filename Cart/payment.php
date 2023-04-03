<?php
	include('header1.php');
	if($_SERVER["REQUEST_METHOD"]=="POST"){
	session_start();
	$n=$_SESSION['username'];
	$_SESSION['sid'] = $row['log_id'];
	}
	$conn = mysqli_connect('localhost','root','','hotelsystem');
	
 
	
	?>

	<!DOCTYPE html>
	<html lang="en">
		<head>
		<script src="https://code.jquery.com/jquery-3.6.1.js"></script>
       <script src="https://checkout.razorpay.com/v1/checkout.js"></script>
			<meta charset="UTF-8">
			<meta http-equiv="X-UA-Compatible" content="IE=edge">
			<meta name="viewport" content="width=device-width, initial-scale=1.0">
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
		<!-- </head>

						<body>

							<div class="text-center border rounded bg-light my-5 m-5">
								<h1>MY ORDER</h1>
							</div>

							<div id="mycart_div" class="m-5">
								<table class="table" id="mycart-table">
								<thead class="	text-center">
										<tr>
											<th scope="col">Sr.No.</th>
											<th scope="col">Item Name</th>
											<th scope="col">Price</th>
											<th scope="col">Quantity</th>
											<th scope="col">Total</th>
											<th scope="col">Action</th>
										</tr>
									</thead> -->
                                  <center>
									<tbody class="text-center">
										<?php
											$all_total=0;
											$sr=0;
											include '../connect1.php';
											session_start();
											$login_id= $_SESSION['sid'];
											$n=$_SESSION['username'];
											$mycart_record_res= mysqli_query($conn,"SELECT * from tbl_cart WHERE log_id=$login_id");
											if(mysqli_num_rows($mycart_record_res) > 0)
											{
												foreach($mycart_record_res as $row){
													$sr++;
													$pid= $row['foodmenu_id'];
													$prod_sql= mysqli_query($conn,"SELECT * from tbl_foodmenu WHERE foodmenu_id=$pid");
													if(mysqli_num_rows($prod_sql) == 1){
														$pred_details_res= mysqli_fetch_array($prod_sql);
														$each_total= $row["quantity"]*$pred_details_res["price"];
													$all_total+=$each_total;
													
														echo"
															<tr>
																<td><br><br></td>
																
																
																
																

																
																
																
																<td>
																	
																
																</td>
															
															</tr>
														";
													}
													else{

													}
												}
												
											}
										?>
										
									</tbody>

								</table>
								<!-- <form action="deliveryform.php" method="POST"> -->

								<div class="col-lg-4" id="mycart-total">
									<div class="border bg-light rounded p-4">
										<h3>Total:</h3>
										<h5 class="text-right"><?php echo $all_total; ?></h5>
										<br>
										<form>
											<div class="form-check">
												<!-- <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1"> -->
												<label class="form-check-label" for="flexRadioDefault1">Make Payment</label>
												
											</div>
											<br>
											
											<br><br>
											<input type="hidden" id="login_id" name="login_id" value="<?php echo $login_id; ?>">

											<input type="hidden" id="name1" name="name1" value="<?php echo $n; ?>">
											<input type="button" id="rzp-button1"name="btn"value="pay now"class="btn btn-primary" onclick="pay_now()"/>
										</form>
									</div>
								</div>
								<!-- </form> -->
							</div>
										</center>
										<script>
//   console.log("hello");
// var amt ="100";
    function pay_now(){
		var name1 = jQuery('#name1').val();
		console.log(name1);
		var login_id = jQuery('#login_id').val();
		console.log(login_id);
        var amount=<?php echo $all_total ?>;
        var options =  {
            "key": "rzp_test_brxhNMuaPT71E4", // Enter the Key ID generated from the Dashboard
            "amount": amount*100, // Amount is in currency subunits. Default currency is INR. Hence, 50000 refers to 50000 paise
            "currency": "INR",
			"name1": name1,
			"login_id": login_id,
            "name": "CROWNE PLAZA",
            "description": "Test Transaction",
            "image": "https://example.com/your_logo",
            "handler":function(response){
              
               jQuery.ajax({
                   type:"POST",
                   url: "payment_process.php",
                   data:"payment_id="+response.razorpay_payment_id+"&amount="+amount+"&name1="+name1+"&login_id="+login_id,
                   success:function(result){
					console.log(result)
					if(result=="true"){
						alert("Payment Successfull and saved to account..");
						window,location.href="thankyou.php";
					}else{
						alert('Unable to save the payment details to database..\n'+result);
					}
                       
                   },
				   error: function(e) {
					alert("The error : "+ e);
				   }
               })
              
      }
        
    
};
var rzp1 = new Razorpay(options);

    rzp1.open();
    
    }
</script>
						</body>
					</html>