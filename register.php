



<html>
<head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Sign Up Form </title>
     
        
    </head>
    <body>
<?php
  $conn = mysqli_connect('localhost','root','','hotelsystem');
  
  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error."<br>");
    
  }
  else{
    echo "Success";
  }



    if(isset($_POST['submit'])){
      $firstname = $_POST['firstname'];
      $cust_emailid = $_POST['email'];
      $cust_pass = md5($_POST['password']);
      $lastname = $_POST['lastname'];
      $addr = $_POST['addr'];
      $phonenumber = $_POST['phonenumber'];
      $aadharnumber=$_POST['aadharnumber'];
      $gender=$_POST['gender'];
      $cstate=$_POST['cstate'];
      $city=$_POST['city'];
       
   
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


      $re = "INSERT INTO cust_login(`cust_emailid`,`cust_pass`,`role`,`status`)VALUES ('$cust_emailid','$cust_pass',0,'true')";
      $ra=$conn->query($re);

      if($ra){
            $log_id=$conn->insert_id;
           
          //   $result = mysqli_query($conn, "SELECT log_id FROM cust_login where cust_emailid='$cust_emailid'");
          //  $ins= mysqli_fetch_array($result);
          //   $log_id= $ins['log_id']; $sql = "INSERT INTO registration"
          
            //header("Location: index.html");
          $sql2 = "INSERT INTO registration(`firstname`,`lastname`,`addr`,`phonenumber`,`aadharnumber`,`gender`,`cstate`,`city`,`log_id`)
          VALUES('$firstname','$lastname','$addr','$phonenumber','$aadharnumber','$gender','$cstate','$city','$log_id')";
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
        <div class="main">

            <section class="signup">
                <!-- <img src="images/signup-bg.jpg" alt=""> -->
                <div class="container">
                    <div class="signup-content">
                        <form action="register.php" method="POST" id="signup-form" class="signup-form">
                     

                     <h2 class="form-title">Create account</h2>
                            
                            <div class="form-group">
                                <input type="text" class="form-input" name="firstname" id="fname" autocomplete="off"placeholder="firstname"  required onblur="return fnameValidate()"/>
                            </div>
                            <div><span id="fnameValidate" class="validate"></span></div>
                            <div class="form-group">
                                <input type="text" class="form-input" name="lastname" id="lname" autocomplete="off"placeholder="lastname" required onblur="return lnameValidate()" />
                            </div>
                            <div><span id="lnameValidate" class="validate"></span></div>
                                 <div class="form-group">
                              <input type="text" class="form-input" name="addr" id="address"autocomplete="off" placeholder="Permanent Address" required onblur="return addressValidate()"/>
                          </div>
                          <div><span id="addressValidate" class="validate"></span></div>
                          <div class="form-group">
                            <input type="text" class="form-input" name="phonenumber" id="contact" maxlength="10" autocomplete="off"placeholder="Phone number" required onblur="return cnoValidate()"/>
                        </div>
                        <div><span id="cnoValidate" class="validate"></span></div>
                        <div class="form-group">
                          
                         <input type="text" class="form-input" name="aadharnumber"autocomplete="off"  placeholder="Aadhar Number" required onblur="return aadharValidate()"/>
                        <!-- <input type="text" class="form-input"name="aadhharnumber" placeholder="Aadhar Number"onfocusout="validateAadhaar()"> -->

                      </div>
                      <div><span id="aadharno" class="validate"></span></div>
                     

                          
                          <div class="form-group">
                            Gender:<input type="radio" name="gender" value="male" required> Male
                             <input type="radio" name="gender" value="female"> Female
                               <input type="radio" name="gender" value="unknown"> Other
                               
                               </div>
                            
                     
                            <div class="form-group">
                                <input type="email" class="form-input" name="email"id="email" autocomplete="off" placeholder="Your Email" required onblur="return emailValidate ()"/>
                            </div>
                            <div><span id="emailValidate" class="validate"></span></div>
                              <!-- <p class="error-text">Please enter the valid emailid</p> -->
                            

                            <div class="form-group">
                                <input type="password" class="form-input" name="password" id="password" placeholder="Password" required onblur="return validatepwd()"/>
                                <span toggle="#password" class="zmdi zmdi-eye field-icon toggle-password"></span>
                            </div>
                            <div><span id="validatepwd" class="validate"></span></div>

                            <div class="form-group">
                              <input type="text" class="form-input" name="cstate" id="state"autocomplete="off" placeholder="State" required onblur="return validatestate()"/>
                          </div>
                          <div><span id="validatestate" class="validate"></span></div>

                          <div class="form-group">
                            <input type="text" class="form-input" name="city" autocomplete="off"  placeholder="City" id=city required onblur="return validatecity()"/>
                        </div>
                        <div><span id="validatecity" class="validate"></span></div>
                            
                            <div class="form-group">
                                <input type="checkbox" name="agree-term" id="agree-term" class="agree-term" required />
                                <label for="agree-term" class="label-agree-term"><span><span></span></span>I agree all the information </label>
                            </div>
                            <div >
                           <center><input type="submit" name ="submit" class="btn btn-warning" value="Register" onclick="return registerValid()"/></center>
                            
                            </div>
                            
                        </form>

                        <p class="loginhere">
                            
                          Have already an account ? <a href="login1.php" class="loginhere-link">Login here</a>  
                          <p><p></p><center><a href="index.php">Back to Home</a>&nbsp;&nbsp;&nbsp;</center>
                        
                        </p></p></div>

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

body {
  font-size: 14px;
  line-height: 1.8;
  color: #222;
  font-weight: 400;
  font-family: 'Montserrat';
  background-image: url("reg.jpg");
  background-repeat: no-repeat;
  background-size: cover;
  -moz-background-size: cover;
  -webkit-background-size: cover;
  -o-background-size: cover;
  -ms-background-size: cover;
  background-position: center center;
  padding: 115px 0; }
  
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
        <!-- JS -->
        <script src="reg/vendor/jquery/jquery.min.js"></script>
        <script src="reg/js/main.js"></script>
        <script src="script.js"></script>
    </body><!-- This templates was made by Colorlib (https://colorlib.com) -->

