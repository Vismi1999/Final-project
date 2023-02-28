<!DOCTYPE html
<html lang="en">
<head>
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
   
    
    <div class="sign-txt">Not yet member? <a href="register.php">sign up</a></div>
    <p><p></p><a href="index.php">Back to Home</a>&nbsp;&nbsp;&nbsp;</p></p>
  </div>

  </form>
  <!-- <script src="script.js"></script> -->
</body>
</html>
