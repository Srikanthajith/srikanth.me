
$(window).scroll(function(){
var wScroll = $(this).scrollTop();
var image = document.getElementById("center");



//for cloud to scroll at different phase

$('.cloud1').css({
'transform':'translate(0px,'+ wScroll/2 +'%)'
});

$('.cloud2').css({
'transform':'translate(0px,'+ wScroll/4 +'%)'
});

$('.cloud3').css({
'transform':'translate(0px,'+ wScroll/1.5 +'%)'
});






//for changing the movements for hanuman

if(wScroll > $('.premed1').offset().top - $(window).height() & wScroll < $('.premed2').offset().top - $(window).height())
{
console.log("1")
document.getElementById("center").src="images/hanuman.png";
}


if(wScroll > $('.premed2').offset().top - $(window).height() & wScroll < $('.premed3').offset().top - $(window).height())
{
console.log("2")
document.getElementById("center").src="images/hanuman.png";
}


if(wScroll > $('.premed3').offset().top - $(window).height() & wScroll < $('.premed4').offset().top - $(window).height())
{
console.log("3")
document.getElementById("center").src="images/hanuman.png";
}






//for changing the movements for shakthiman

if(wScroll > $('.premed4').offset().top - $(window).height() & wScroll < $('.med1').offset().top - $(window).height())
{
console.log("4")
document.getElementById("center").src="images/hanuman.png";
}


if(wScroll > $('.med1').offset().top - $(window).height() & wScroll < $('.med2').offset().top - $(window).height())
{
console.log("5")
document.getElementById("center").src="images/hanuman.png";
}

//



if(wScroll > $('.med2').offset().top - $(window).height() & wScroll < $('.med3').offset().top - $(window).height())
{
console.log("6")
document.getElementById("center").src="images/ironleft.png";
}


if(wScroll > $('.med3').offset().top - $(window).height() & wScroll < $('.med4').offset().top - $(window).height())
{
console.log("7")
document.getElementById("center").src="images/ironman.png";
}






//for changing the movements for ironman

if(wScroll > $('.med4').offset().top - $(window).height() & wScroll < $('.modern1').offset().top - $(window).height())
{
console.log("8")
document.getElementById("center").src="images/ironright.png";
}

if(wScroll > $('.modern1').offset().top - $(window).height() & wScroll < $('.modern2').offset().top - $(window).height())
{
console.log("9")
document.getElementById("center").src="images/ironman.png";
}


//

if(wScroll > $('.modern2').offset().top - $(window).height() & wScroll < $('.modern3').offset().top - $(window).height())
{
console.log("10")
document.getElementById("center").src="images/ironleft.png";
}


if(wScroll > $('.modern3').offset().top - $(window).height() & wScroll < $('.modern4').offset().top - $(window).height())
{
console.log("11")
document.getElementById("center").src="images/ironman.png";
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