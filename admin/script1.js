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
    else if(firstname.length > 2){
       document.getElementById("fnameValidate").innerHTML="First Name Required more than one character";
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
 
 function addressValidate(){
    var Address = document.getElementById("address").value;
    var pattern =  /^[a-zA-Z]+$/;
    isValid=true;
    if(Address.match(pattern)){
       document.getElementById("addressValidate").innerHTML="";
    }
    else if(!Address){
       document.getElementById("addressValidate").innerHTML="Address Required";
       isValid=false;
    }
    else{
       document.getElementById("addressValidate").innerHTML="Only characters are acceptable";
       isValid=false;
    }
    return isValid;
 }
 
 // function cnoValidate(){
 //    var cno = document.getElementById("contact").value;
 //    var pattern = /^(\+91[\-\s]?)?[0]?(91)?[789]\d{9}$/;
 //    isValid=true;
 //    if(cno.match(pattern)){
 //       document.getElementById("cnoValidate").innerHTML="";
 //    }
 //    else if(!cno){
 //       document.getElementById("cnoValidate").innerHTML="Number required";
 //       isValid=false;
 //    }
 //    else{
 //       document.getElementById("cnoValidate").innerHTML="Invalid Contact Number";
 //       isValid=false;
 //    }
 //    return isValid;
    
 // }
 