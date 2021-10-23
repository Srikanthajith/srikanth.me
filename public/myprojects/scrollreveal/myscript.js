
$(document).ready(function() {
$('.land').hide();
  $('.mailed').hide();
});



function validateEmail(email) {   
var re = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
return re.test(email);
}


function validate(){
  $("#result").text("");
  var email = $("#email").val();
  if (validateEmail(email)) {
    $("#result").text(email + " is valid :)");
    $("#result").css("color", "green");
  } else {
    $("#result").text(email + "is not valid :(");
    $("#result").css("color", "red");
  }
  return false;
}

$("form").bind("submit", validate);







function addboard()
{

var ext=$("#ext option:selected").text();
var domain= document.getElementById("domainname").value;
document.getElementById("domainnamede").innerHTML = (domain +"."+ ext);
document.getElementById("emailnamede").innerHTML = ("user@"+domain +"."+ ext);

}

function thankyou()
{
 document.getElementById("thanknamede").innerHTML = ("Thank you for your details"); 
}





function firsthouse()
{
document.getElementById("house").src = "images/1st.png";
}
function secondhouse()
{
document.getElementById("house").src = "images/2nd.png";
}
function thirdhouse()
{
document.getElementById("house").src = "images/3rd.png";
}


function mailyes()
{
document.getElementById("mail").src = "images/mail.png";
}
function mailno()
{
document.getElementById("mail").src="images/blank.png";
}


$(window).scroll(function(){
var wScroll = $(this).scrollTop();



if(wScroll > $('#domain').offset().top - $(window).height()/2 )
{

$('.land').show();
$('.land').each(function(){
$('.land').addClass(' is-showing');
});
}

if(wScroll < $('#domain').offset().top - $(window).height()/2 )
{
$('.land').hide();
$('.land').each(function(){
$('.land').removeClass(' is-showing');
});
}

if(wScroll > $('#hosting').offset().top - $(window).height()/2 )
{
$('.addressboard').each(function(){
$('.addressboard').addClass(' is-showing');
});
}

if(wScroll < $('#hosting').offset().top - $(window).height()/2 )
{
$('.addressboard').each(function(){
$('.addressboard').removeClass(' is-showing');
});
}


if(wScroll > $('#hosting').offset().top - $(window).height()/2 )
{
$('.addressboardtext').each(function(){
$('.addressboardtext').addClass(' is-showing');
});
}


if(wScroll < $('#hosting').offset().top - $(window).height()/2 )
{
$('.addressboardtext').each(function(){
$('.addressboardtext').removeClass(' is-showing');
});
}


if(wScroll > $('#hosting').offset().top - $(window).height()/2 )
{
$('.housed').each(function(){
$('.housed').addClass(' is-showing');
});
}

if(wScroll < $('#hosting').offset().top - $(window).height()/2 )
{
$('.housed').each(function(){
$('.housed').removeClass(' is-showing');
});
}

if(wScroll > $('#mailbox').offset().top - $(window).height()/2 )
{
  $('.mailed').show();
$('.mailed').each(function(){
$('.mailed').addClass(' is-showing');
});
}

if(wScroll < $('#mailbox').offset().top - $(window).height()/2 )
{
$('.mailed').each(function(){
$('.mailed').removeClass(' is-showing');
  $('.mailed').hide();
});
}

});




$("#submit1").click(function() {
    $('html, body').animate({
        scrollTop: $("#hosting").offset().top
    }, 1000);
});

$("#submit2").click(function() {
    $('html, body').animate({
        scrollTop: $("#mailbox").offset().top
    }, 1000);
});

$("#submit3").click(function() {
    $('html, body').animate({
        scrollTop: $("#confirm").offset().top
    }, 1000);
});

$("#submit4").click(function() {
    $('html, body').animate({
        scrollTop: $("#confirm").offset().top
    }, 1000);
});
