<?php
session_start();
include ('connect1.php');


if(isset($_POST['update']))
{
    $roomtype_id=$_POST['reg_id'];
    $firstname=$_POST['firstname'];
    // $description=$_POST['description'];
    
    // $number=$_POST['number'];
    // $adult=$_POST['adult'];
    // $children=$_POST['children'];
    
$query="UPDATE tbl_roomtype SET roomtype='$roomtype',number='$number',adult='$adult',children='$children' where roomtype_id='$roomtype_id'";
$query_run=mysqli_query($conn,$query);
if($query_run)
{
    $_SESSION['status'] = "Category updated successfully";
    // header('location:viewcata.php');
    echo "<script>window.location.href='view roomtype.php';</script>";
}
else
{
    echo "no";
}
}

?>






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
       
        <div class="column"> 
        <?php
       
$roomtype_id=$_GET['reg_id'];
$query=mysqli_query($conn,"select * from registration where reg_id='$roomtype_id'and status=1");
$num2=mysqli_num_rows($query);
  if($num2>0)
  {
   while($row=mysqli_fetch_array($query))
{
?>
           
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
                            <!-- <div >
                           <center><input type="submit" name ="submit" class="btn btn-warning" value="Register" onclick="return registerValid()"/></center>
                            
                            </div> -->
                            
                        <!-- </form> -->
<input type="hidden"name="reg_id" id="reg_id" value="<?= $roomtype_id ?>">
           
<input type="submit" value="Update" name="update"> 
          </form>
          <?php 
            }
            }
          ?>
          
        </div>
      </div>
      
  </div>
 

                </div>
              

            </div>
            

        </div>
        

    </div>
    
</body>

</html>