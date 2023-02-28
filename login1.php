<!DOCTYPE html
<html lang="en">
<head>
<!-- <script type="text/javascript">
        function preventBack() {
            window.history.forward(); 
        }
          
        setTimeout("preventBack()", 0);
          
        window.onunload = function () { null };
    </script> -->

  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login Form validation </title>
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
</head>
<body>
  
  <div class="wrapper">
  
    <header>Login Form</header>
    <form action="login1.php" method="POST">
      <div class="field email">
        <div class="input-area">
          <input type="email" name="email" placeholder="admin@gmail.com" required>
          <i class="icon fas fa-envelope"></i>
          <i class="error error-icon fas fa-exclamation-circle"></i>
        </div>
        <div class="error error-txt">Email can't be blank</div>
      </div>
      <div class="field password">
        <div class="input-area">
          <input type="password" name="password" placeholder="Password" required>
          <i class="icon fas fa-lock"></i>
          <i class="error error-icon fas fa-exclamation-circle"></i>
        </div>
        <div class="error error-txt">Password can't be blank</div>
      </div>
     
    <div class="g-recaptcha" data-sitekey="Your_reCAPTCHA_Site_Key"></div>
      
      
      <div class="pass-txt"><a href="recover_psw.php">Forgot password?</a></div>
      <input type="submit" name="submit" value="Login">
    </form>
    
    <div class="sign-txt">Not yet member? <a href="register.php">sign up</a></div>
    <p><p></p><a href="index.php">Back to Home</a>&nbsp;&nbsp;&nbsp;</p></p>
  </div>


  <script src="script.js"></script>
</body>
</html>
<?php
	session_start();
	include 'connect1.php';
	if(isset($_POST['submit']))
	{
      $cus_email= $_POST['email'];
      $cus_pass= $_POST['password'];
      $pass=md5($cus_pass);
      // echo $pass;
			$sql = "SELECT * from cust_login where cust_emailid='$cus_email' AND cust_pass= '$pass'";
      $result = mysqli_query($conn,$sql);
      if(mysqli_num_rows($result)==1){
          $row=mysqli_fetch_array($result);
          $id=$row['log_id'];
          $role= $row['role'];
          if($role==0){
              $user_details_res= mysqli_query($conn,"SELECT * from registration WHERE log_id=$id");

              if($user_details_res && mysqli_num_rows($user_details_res)==1){
    
                  $user_data= mysqli_fetch_array($user_details_res);
                  $email=$row['cust_emailid'];
                  $password=$row['cust_pass'];
                  $role=$row['role'];
                  $_SESSION['sid'] = $row['log_id'];
                  $_SESSION['username']=$user_data['firstname'];
                  echo "<script>window.location.href='index1.php';</script>";
              }
              else{
                echo "<script>alert('Unable to read your data !! Please try to login again !!');</script>";
              }
          }
          else{
              $_SESSION['sid'] = $row['log_id'];
              header("location:admin/index.php");
          }
       }
      else{
        echo "<script>alert('Login Failed !! Invalid Email or Password.');</script>";
      }
	}
?>