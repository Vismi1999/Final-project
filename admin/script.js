//  function registerValid(){
//   var isValid=true;
//    var nameCityPattern =  /^[a-zA-Z]+$/;
// //    // var pwdPattern=/^(?=.*\d)(?=.*[A-Z]).{6,}/;
// //    // var contactPattern = /^(\+91[\-\s]?)?[0]?(91)?[789]\d{9}$/;
//    var validFirstname = document.getElementById("fname").value;
   // var validLastname = document.getElementById("lname").value;
   // var validAddress = document.getElementById("address").value;
   // var validCity = document.getElementById("city").value;
   // var validState = document.getElementById("state").value;
   // var validContact = document.getElementById("contact").value;
   // var validPassword1 = document.getElementById("password").value;
   
   //firstname validation on buttonclick

   // if(validFirstname==null || validFirstname==""){
   //     document.getElementById("fnameValidate").innerHTML="First Name Required";
   //     isValid=false;
   // }
   // else if(!validFirstname.match(nameCityPattern)){
   //     document.getElementById("fnameValidate").innerHTML="Only characters are acceptable";
   //     isValid=false;
   // }
   // secondname validation on button click

//    if(validLastname==null || validLastname==""){
//       document.getElementById("lnameValidate").innerHTML="Last Name Required";
//       isValid=false;
//   }
//   else if(!validLastname.match(nameCityPattern)){
//       document.getElementById("lnameValidate").innerHTML="Only characters are acceptable";
//       isValid=false;
//   }

   
   //  //address validation on buttonclick

   // if(validAddress==null || validAddress==""){
   //     document.getElementById("addressValidate").innerHTML="Address Required";
   //     isValid=false;
   // }
   // else if(!validAddress.match(nameCityPattern)){
   //     document.getElementById("addressValidate").innerHTML="Only characters are acceptable";
   //     isValid=false;
   //    //city validation on buttonClick
   // if(validCity==null || validCity==""){
   //     document.getElementById("cityValidate").innerHTML="City Required";
   //     isValid=false;
   // }
   // else if(!validCity.match(nameCityPattern)){
   //     document.getElementById("cityValidate").innerHTML="Invalid City";
   //     isValid=false;
   // }
//   ///state validation on button click
//    if(validCity==null || validCity==""){
//       document.getElementById("stateValidate").innerHTML="State Required";
//       isValid=false;
//   }
//   else if(!validCity.match(nameCityPattern)){
//       document.getElementById("stateValidate").innerHTML="Invalid State";
//       isValid=false;
//   }

//    //contact validation on buttonClick
//    if(validContact==null || validContact==""){
//        document.getElementById("contactValidate").innerHTML="Contact Required";
//        isValid=false;
//    }
//    else if(!validContact.match(contactPattern)){
//        document.getElementById("contactValidate").innerHTML="Invalid contact number";
//        isValid=false;
//    }
/*
   //email validation on buttonClick
   if(validEmail==null || validEmail==""){
       document.getElementById("emailValidate").innerHTML="Email Required";
       isValid=false;
   }
   else if(!validEmail.match(emailPattern)){
       document.getElementById("emailValidate").innerHTML="Invalid email";
       isValid=false;
   }*/

   //password validation on buttonClick
//    if(validPassword1==null || validPassword1==""){
//        document.getElementById("passwordValidate").innerHTML="Password Required";
//        isValid=false;
//    }
//    else if(!validPassword1.match(pwdPattern)){
//        alert("Password should have atleast 8 characters with one alphaneumeric, one uppercase and one lowercase");
//        isValid=false;
//    }
//    return isValid;
// }

function fnameValidate(){
    var firstname = document.getElementById("fname").value;
    var pattern =  /^[a-zA-Z]+$/;
    isValid=true;
    if(firstname.match(pattern)){
       document.getElementById("fnameValidate").innerHTML="";
    }
    else if(!firstname){
       document.getElementById("fnameValidate").innerHTML="First Name Required";
       isValid=false;
    }
    else{
       document.getElementById("fnameValidate").innerHTML="Only characters are acceptable";
       isValid=false;
    }
    return isValid;
 }
 
 
 function lnameValidate(){
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
 
//  function addressValidate(){
//     var Address = document.getElementById("address").value;
//     var pattern =  /^[a-zA-Z]+$/;
//     isValid=true;
//     if(Address.match(pattern)){
//        document.getElementById("addressValidate").innerHTML="";
//     }
//     else if(!Address){
//        document.getElementById("addressValidate").innerHTML="Address Required";
//        isValid=false;
//     }
//     else{
//        document.getElementById("addressValidate").innerHTML="Only characters are acceptable";
//        isValid=false;
//     }
//     return isValid;
//  }
 
//  function cnoValidate(){
//     var cno = document.getElementById("contact").value;
//     var pattern = /^(\+91[\-\s]?)?[0]?(91)?[789]\d{9}$/;
//     isValid=true;
//     if(cno.match(pattern)){
//        document.getElementById("cnoValidate").innerHTML="";
//     }
//     else if(!cno){
//        document.getElementById("cnoValidate").innerHTML="Number required";
//        isValid=false;
//     }
//     else{
//        document.getElementById("cnoValidate").innerHTML="Invalid Contact Number";
//        isValid=false;
//     }
//     return isValid;
    
//  }
 
 
 
//  function validatepwd(){
//     var password = document.getElementById("password").value;
//     var pattern=/^(?=.*\d)(?=.*[A-Z]).{6,}/;
//     isValid=true;
//     if(password.match(pattern)){
//        document.getElementById("validatepwd").innerHTML="";  
//     }
//     else if(!password){
//        document.getElementById("validatepwd").innerHTML="Password Required";
//        isValid=false;
//     }
//     else{
//        document.getElementById("validatepwd").innerHTML="Your password must be at least 8 characters long, contain at least one number and have a mixture of uppercase and lowercase letters.";
//        isValid=false;
//     }
//     return isValid;
    
//  }
 
//  function validatecity(){
//     var city = document.getElementById("city").value;
//     var pattern =  /^[a-zA-Z]+$/;
//     isValid=true;
//     if(city.match(pattern)){
//        document.getElementById("validatecity").innerHTML="";
//     }
//     else if(!city){
//        document.getElementById("validatecity").innerHTML="City Required";
//        isValid=false;
//     }
//     else{
//        document.getElementById("validatecity").innerHTML="Invalid city";
//        isValid=false;
//     }
//     return isValid;
//  }
//  function validatestate(){
//     var city = document.getElementById("state").value;
//     var pattern =  /^[a-zA-Z]+$/;
//     isValid=true;
//     if(city.match(pattern)){
//        document.getElementById("validatestate").innerHTML="";
//     }
//     else if(!city){
//        document.getElementById("validatestate").innerHTML="state Required";
//        isValid=false;
//     }
//     else{
//        document.getElementById("validatestate").innerHTML="Invalid state";
//        isValid=false;
//     }
//     return isValid;
//  }
 
 
 //  //function loginPasswordValidate(){
 //      var loginPassword = document.getElementById("loginPassword").value;
 //       var loginPasswordPattern=/^(?=.*\d)(?=.*[A-Z]).{6,}/;
 //         isValid=true;
 //       if(loginPassword.match(loginPasswordPattern)){
 //           document.getElementById("validatePassword").innerHTML="";
 //       }
 //       else if(!loginPassword){
 //           document.getElementById("validatePassword").innerHTML="Password Required";
 //           isValid=false;
 //       }
 //       else{
 //           isValid=false;
 //      }
 //      return isValid;
 // }*/
 
 