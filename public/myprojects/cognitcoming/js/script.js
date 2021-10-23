
$(window).scroll(function(){
var wScroll = $(this).scrollTop();


//for changing the movements for hanuman

if(wScroll > $('.premed1').offset().top - $(window).height() & wScroll < $('.premed2').offset().top - $(window).height())
{
document.getElementById("center").src="images/premed/caveman.png";
}


if(wScroll > $('.premed2').offset().top - $(window).height() & wScroll < $('.premed3').offset().top - $(window).height())
{
document.getElementById("center").src="images/premed/cavemanleft.png";
}


if(wScroll > $('.premed3').offset().top - $(window).height() & wScroll < $('.premed4').offset().top - $(window).height())
{
document.getElementById("center").src="images/premed/caveman.png";
}



if(wScroll > $('.premed4').offset().top - $(window).height() & wScroll < $('.med1').offset().top - $(window).height())
{
$('#center').removeClass('animated fadeIn');
document.getElementById("center").src="images/premed/cavemanright.png";
}







//for changing the movements for shakthiman


if(wScroll > $('.med1').offset().top - $(window).height() & wScroll < $('.med2').offset().top - $(window).height())
{ 
$('#center').addClass('animated fadeIn');
document.getElementById("center").src="images/med/shakthimanleft.png";
}



if(wScroll > $('.med2').offset().top - $(window).height() & wScroll < $('.med3').offset().top - $(window).height())
{
$('#center').removeClass('animated fadeIn');
document.getElementById("center").src="images/med/shakthiman.png";
}


if(wScroll > $('.med3').offset().top - $(window).height() & wScroll < $('.med4').offset().top - $(window).height())
{
document.getElementById("center").src="images/med/shakthimanright.png";
}



if(wScroll > $('.med4').offset().top - $(window).height() & wScroll < $('.modern1').offset().top - $(window).height())
{
$('#center').removeClass('animated fadeIn');
document.getElementById("center").src="images/med/shakthiman.png";
}








//for changing the movements for ironman


if(wScroll > $('.modern1').offset().top - $(window).height() & wScroll < $('.modern2').offset().top - $(window).height())
{
$('#center').addClass('animated fadeIn');
document.getElementById("center").src="images/modern/ironman.png";
}


if(wScroll > $('.modern2').offset().top - $(window).height() & wScroll < $('.modern3').offset().top - $(window).height())
{
$('#center').removeClass('animated fadeIn');
document.getElementById("center").src="images/modern/ironmanleft.png";
}


if(wScroll > $('.modern3').offset().top - $(window).height() & wScroll < $('.modern4').offset().top - $(window).height())
{
document.getElementById("center").src="images/modern/ironman.png";
}


if(wScroll > $('.modern4').offset().top - $(window).height() & wScroll < $('.finalbuild').offset().top - $(window).height())
{
document.getElementById("center").src="images/modern/ironmanright.png";
}

if(wScroll > $('.finalbuild').offset().top - $(window).height())
{
document.getElementById("center").src="images/modern/ironman.png";
}







//to make the photo to travel from left to right

if(wScroll > $('.premed1').offset().top - $(window).height())
{
var offset = wScroll - $('.premed1').offset().top +$(window).height();
$('.premed1').css({'transform': 'translate('+offset+'px,0px)'});
}

//to make the photo to travel from right to left

if(wScroll > $('.premed2').offset().top - $(window).height())
{
var offset = wScroll - $('.premed2').offset().top +$(window).height();
$('.premed2').css({'transform': 'translate(-'+offset+'px,0px)'});
}


//to make the photo to travel from left to right

if(wScroll > $('.premed3').offset().top - $(window).height())
{
var offset = wScroll - $('.premed3').offset().top +$(window).height();
$('.premed3').css({'transform': 'translate('+offset+'px,0px)'});
}

//to make the photo to travel from right to left

if(wScroll > $('.premed4').offset().top - $(window).height())
{
var offset = wScroll - $('.premed4').offset().top +$(window).height();
$('.premed4').css({'transform': 'translate(-'+offset+'px,0px)'});
}







//to make the photo to travel from left to right

if(wScroll > $('.med1').offset().top - $(window).height())
{
var offset = wScroll - $('.med1').offset().top +$(window).height();
$('.med1').css({'transform': 'translate('+offset+'px,0px)'});
}


//to make the photo to travel from right to left

if(wScroll > $('.med2').offset().top - $(window).height())
{
var offset = wScroll - $('.med2').offset().top +$(window).height();
$('.med2').css({'transform': 'translate(-'+offset+'px,0px)'});
}

//to make the photo to travel from left to right

if(wScroll > $('.med3').offset().top - $(window).height())
{
var offset = wScroll - $('.med3').offset().top +$(window).height();
$('.med3').css({'transform': 'translate('+offset+'px,0px)'});
}


//to make the photo to travel from right to left

if(wScroll > $('.med4').offset().top - $(window).height())
{
var offset = wScroll - $('.med4').offset().top +$(window).height();
$('.med4').css({'transform': 'translate(-'+offset+'px,0px)'});
}









//to make the photo to travel from left to right

if(wScroll > $('.modern1').offset().top - $(window).height())
{
var offset = wScroll - $('.modern1').offset().top +$(window).height();
$('.modern1').css({'transform': 'translate('+offset+'px,0px)'});
}


//to make the photo to travel from right to left

if(wScroll > $('.modern2').offset().top - $(window).height())
{
var offset = wScroll - $('.modern2').offset().top +$(window).height();
$('.modern2').css({'transform': 'translate(-'+offset+'px,0px)'});
}

//to make the photo to travel from left to right

if(wScroll > $('.modern3').offset().top - $(window).height())
{
var offset = wScroll - $('.modern3').offset().top +$(window).height();
$('.modern3').css({'transform': 'translate('+offset+'px,0px)'});
}


//to make the photo to travel from right to left

if(wScroll > $('.modern4').offset().top - $(window).height())
{
var offset = wScroll - $('.modern4').offset().top +$(window).height();
$('.modern4').css({'transform': 'translate(-'+offset+'px,0px)'});
}




});