function validate()
{ 
   if( document.registration.textnames.value == "" )
   {
     alert( "Please provide your Name!" );
     document.registration.textnames.focus() ;
     return false;
   }
   if( document.registration.fathername.value == "" )
   {
     alert( "Please provide your Father Name!" );
     document.registration.fathername.focus() ;
     return false;
   }
   
   if( document.StudentRegistration.paddress.value == "" )
   {
     alert( "Please provide your Postal Address!" );
     document.registration.paddress.focus() ;
     return false;
   }
   if( document.registration.personaladdress.value == "" )
   {
     alert( "Please provide your Personal Address!" );
     document.registration.personaladdress.focus() ;
     return false;
   }
   if ( ( registration.sex[0].checked == false ) && (registration.sex[1].checked == false ) )
   {
   alert ( "Please choose your Gender: Male or Female" );
   return false;
   }   
   if( document.registration.City.value == "-1" )
   {
    alert( "Please provide your City!" );
     document.registration.City.focus() ;
     return false;
   }   
   if( document.registration.Course.value == "-1" )
   {
     alert( "Please provide your Course!" );
    
     return false;
   }   
   if( document.registration.District.value == "-1" )
   {
     alert( "Please provide your Select District!" );
    
     return false;
   }   
   if( document.registration.State.value == "-1" )
   {
     alert( "Please provide your Select State!" );
     
     return false;
   }
   if( document.registration.pincode.value == "" ||
           isNaN( document.registration.pincode.value) ||
           document.registration.pincode.value.length != 6 )
   {
     alert( "Please provide a pincode in the format ######." );
     document.registration.pincode.focus() ;
     return false;
   }
 var email = document.registration.emailid.value;
  atpos = email.indexOf("@");
  dotpos = email.lastIndexOf(".");
 if (email == "" || atpos < 1 || ( dotpos - atpos < 2 )) 
 {
    alert("Please enter correct email ID")
     document.registration.emailid.focus() ;
     return false;
 }
  if( document.registration.dob.value == "" )
   {
     alert( "Please provide your DOB!" );
     document.registration.dob.focus() ;
     return false;
   }
  if( document.registration.mobileno.value == "" ||
           isNaN( document.registration.mobileno.value) ||
           document.registration.mobileno.value.length != 10 )
   {
     alert( "Please provide a Mobile No in the format 123." );
     document.registration.mobileno.focus() ;
     return false;
   }
   return( true );
}