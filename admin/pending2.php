<?php
session_start();
include('../connect1.php');
$email = $_GET['email'];
$password= $_GET['password'];


use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;
require 'vendor/autoload.php';
$mail = new PHPMailer(true);   

echo "<script> alert ('Approved and Email send successfully'); window.location='addreception.php'</script>";

 $mail = new PHPMailer(true);     
 $mail->isSMTP();
 $mail->Host = 'smtp.gmail.com';
 $mail->Port = 465;
 $mail->SMTPAuth = true;
 $mail->SMTPSecure = 'ssl';

 // h-hotel account
 $mail->Username = 'vismayamohan2023b.ajce.in';
 $mail->Password = 'Vismaya@1';

 // send by h-hotel email
 $mail->setFrom('vismayamohan2023b@mca.ajce.in', 'Account activated');
 // get email from input
 $mail->addAddress($email);
 //$mail->addReplyTo('lamkaizhe16@gmail.com');

 // HTML body
 $mail->isHTML(true);
 $mail->Subject = "Account activated";
 $mail->Body = "
       <h3>Your login password for the crowme plaza 
       Password: $password;
       <p>With regrads,</p>
       <b>Admin , Crowne Plaza</b>";
 if (!$mail->send()) {
    
   echo "<script> alert ('Email Send UnSuccessfull !!! '); window.location='#'</script>";

 } 
?> 