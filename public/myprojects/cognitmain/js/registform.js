
$(document).ready(function (){
        $("input[type=submit]").prop("disabled", true);
});

$(document).ready(function (){
    formValidation();
    $('input[name=username],select[name=gender],input[name=email],input[name=passid],input[name=rpassword],input[name=mobnum],input[name=collegename],select[name=country]').change(formValidation);
});


function formValidation()  
{  
    $("button[type=submit]").prop("disabled", true);

var passid = document.registration.passid;
var repassid=document.registration.rpassword;  
var uname = document.registration.username;  
var collegename = document.registration.collegename;  
var ugender = document.registration.gender;  
var country = document.registration.country;  
var uzip = document.registration.mobnum;  
var uemail = document.registration.email;  
if(allLetter(uname))  
{  
if(genderselect(ugender))
{
if(ValidateEmail(uemail))
{  
if(passid_validation(passid,7,30))  
{  
if(rpass_checking(passid,repassid))
{
if(allnumeric(uzip))  
{
if(alphanumeric(collegename))  
{   
if(countryselect(country))  
{  
}  
} 
}      
}
}  
}   
}  
}  
return false;  
} 

function allLetter(uname)  
{   
var letters = /^[A-Za-z ]+$/;  
if(uname.value.match(letters))  
{  
return true; 
uname.focus();   
}  
else  
{  
  document.getElementById("user").innerHTML = "Please enter your full name.(Use only alphabetic characters)";  
  document.getElementById("mail").innerHTML = ""; 
document.getElementById("mob").innerHTML = "";  
document.getElementById("colnam").innerHTML = "";  
document.getElementById("depnam").innerHTML = ""; 
document.getElementById("pass").innerHTML = "";
    document.getElementById("gend").innerHTML = "";    
            document.getElementById("rpass").innerHTML="";
return false;  
}  
}  


function genderselect(ugender)  
{  
if(ugender.value == "Default")  
{ 
ugender.focus();  
    document.getElementById("gend").innerHTML = "Select your gender";  
   document.getElementById("colnam").innerHTML = "";  
   document.getElementById("depnam").innerHTML = "";  
   document.getElementById("mail").innerHTML = ""; 
document.getElementById("mob").innerHTML = "";  
document.getElementById("pass").innerHTML = "";  
        document.getElementById("rpass").innerHTML="";
document.getElementById("user").innerHTML = "";  
ugender.focus();   
return false;  
}  
else  
{  
return true; 
}  
}  





function ValidateEmail(uemail)  
{  
var mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;  
if(uemail.value.match(mailformat))  
{  
return true;  
}  
else  
{  
document.getElementById("user").innerHTML = "";  
document.getElementById("mail").innerHTML = "Please enter your proper email-id.";  
document.getElementById("mob").innerHTML = "";  
document.getElementById("colnam").innerHTML = "";  
document.getElementById("depnam").innerHTML = ""; 
document.getElementById("pass").innerHTML = ""; 
    document.getElementById("gend").innerHTML = "";    
            document.getElementById("rpass").innerHTML="";
uemail.focus();  
return false;  
}  
} 



function passid_validation(passid,mx,my)  
{  
var passid_len = passid.value.length;  
if (passid_len == 0 ||passid_len >= my || passid_len < mx)  
{  
document.getElementById("mail").innerHTML = "";  
document.getElementById("pass").innerHTML = "Please enter your password (Minimum 7 characters)";
document.getElementById("mob").innerHTML = "";  
document.getElementById("colnam").innerHTML = "";  
document.getElementById("depnam").innerHTML = ""; 
document.getElementById("user").innerHTML = "";  
document.getElementById("gend").innerHTML = "";  
        document.getElementById("rpass").innerHTML="";
passid.focus();  
return false;  
}  
return true;  
}  

function rpass_checking(passid,repassid)
{
 var password = passid.value ;

if(repassid.value.match(password))
{
return true;
}
else
{
  document.getElementById("rpass").innerHTML="Please re-enter your password properly";  
  document.getElementById("mail").innerHTML = "";  
  document.getElementById("pass").innerHTML = "";
  document.getElementById("mob").innerHTML = "";  
  document.getElementById("colnam").innerHTML = "";  
  document.getElementById("depnam").innerHTML = ""; 
  document.getElementById("user").innerHTML = "";  
  document.getElementById("gend").innerHTML = "";  
  repassid.focus();
  return false;
}
}

function allnumeric(uzip)  
{   
var numbers = /^[0-9]+$/;  
if(uzip.value.match(numbers) && uzip.value.length == 10)  
{  
return true;  
}  
else  
{  
  document.getElementById("pass").innerHTML = "";  
   document.getElementById("mob").innerHTML = "Mobile number have 10 Numbers";  
   document.getElementById("mail").innerHTML = "";  
document.getElementById("colnam").innerHTML = "";  
document.getElementById("depnam").innerHTML = ""; 
document.getElementById("user").innerHTML = "";  
    document.getElementById("gend").innerHTML = "";  
    document.getElementById("rpass").innerHTML="";
uzip.focus();  
return false;  
}  
}  






function alphanumeric(collegename)  
{   
var letters = /^[0-9a-zA-Z. ]+$/;  
if(collegename.value.match(letters))  
{  
return true;  
}  
else  
{  
   document.getElementById("mob").innerHTML = "";  
   document.getElementById("colnam").innerHTML = "Collegename must have alphanumeric characters";  
   document.getElementById("mail").innerHTML = ""; 
document.getElementById("depnam").innerHTML = ""; 
document.getElementById("pass").innerHTML = "";  
document.getElementById("user").innerHTML = "";  
    document.getElementById("gend").innerHTML = "";  
        document.getElementById("rpass").innerHTML="";
collegename.focus();  
return false;  
}  
}  


function countryselect(country)  
{  
if(country.value == "Default")  
{  
    document.getElementById("colnam").innerHTML = "";  
    document.getElementById("depnam").innerHTML = "Select your Department from the list";  
    document.getElementById("mail").innerHTML = ""; 
    document.getElementById("mob").innerHTML = "";  
    document.getElementById("pass").innerHTML = "";  
    document.getElementById("user").innerHTML = "";  
    document.getElementById("gend").innerHTML = "";  
    document.getElementById("rpass").innerHTML="";
country.focus();   
return false;  
}  
else  
{  
$("button[type=submit]").prop("disabled", false);
  document.getElementById("pass").innerHTML = "";  
   document.getElementById("mob").innerHTML = "";  
   document.getElementById("mail").innerHTML = "";  
document.getElementById("colnam").innerHTML = "";  
document.getElementById("depnam").innerHTML = ""; 
document.getElementById("user").innerHTML = "";  
    document.getElementById("gend").innerHTML = "";  
    document.getElementById("rpass").innerHTML="";
document.getElementById("subtext").innerHTML = "Click to Submit";  
}  
}  
