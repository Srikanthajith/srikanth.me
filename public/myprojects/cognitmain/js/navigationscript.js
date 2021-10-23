

var i = 0;
var div = [".mainpage", ".techmain", ".nonmain", ".onlinemain",".aboutpage",".techevent", ".nonevent",".onlineevent"];

function register()
{
  $(".register").css({"z-index": "10000"});
  $(".register").animate({"bottom": "0%"}, "slow")
};

function registerback()
{
  $(".register").css({"z-index": "100"});
  $(".register").animate({"bottom": "300%"}, "slow");
};

function mainleft()
{ 
            $(".mainpage").css({"z-index": "59"});
            $(div[i]).animate({"left": "-100%"}, "slow");
            i++;
            $(".techmain").css({"z-index": "54"});
            $(".techevent").css({"z-index": "53"});


        $(".linkrighttechmain").animate({"right": "10%"},0);
        $(".linklefttechmain").animate({"left": "10%"},0);
        $(" .linkdowntechmain").animate({"bottom": "10%"},0);


        $(".linkrightmainpage").animate({"right": "110%"},0);
       
        document.getElementById("mainlogo").src="images/topicons/logo-white.png";
        document.getElementById("registerbut").src="images/topicons/register-white.png";

};

function techmainleft()
{
            $(".techmain").css({"z-index": "55"});
            $(".nonmain").css({"z-index": "48"});
            $(div[i]).animate({"left": "-100%"}, "slow");
            i++;



        $(".linkrighttechmain").animate({"right": "110%"},0);
        $(".linklefttechmain").animate({"left": "110%"},0);
        $(".linkdowntechmain").animate({"bottom": "110%"},0);

        $(".linkrightnonmain").animate({"right": "10%"},0);
        $(".linkleftnonmain").animate({"left": "10%"},0);
        $(".linkdownnonmain").animate({"bottom": "10%"},0);

        document.getElementById("mainlogo").src="images/topicons/logo-color.png";
        document.getElementById("registerbut").src="images/topicons/register-black.png";

}
function techmainright()
{
                $(".techevent").css({"z-index": "53"});
                i--;
                $(div[i]).animate({"left": "0%"}, "slow");
                $(".mainpage").css({"z-index": "59"});


        $(".linkrighttechmain").animate({"right": "110%"},0);
        $(".linklefttechmain").animate({"left": "110%"},0);
        $(" .linkdowntechmain").animate({"bottom": "110%"},0);

        $(".linkrightmainpage").animate({"right": "10%"},0);


        document.getElementById("mainlogo").src="images/topicons/logo-color.png";
        document.getElementById("registerbut").src="images/topicons/register-white.png";
        
}
function techmaindown()
{ 
                $(".techevent").css({"z-index": "53"});
                i=i+4;
                $(div[i]).animate({"bottom": "0%"},0);
                $(".techmain").css({"z-index": "52"});

        $(".linkrighttechmain").animate({"right": "110%"},0);
        $(".linklefttechmain").animate({"left": "110%"},0);
        $(" .linkdowntechmain").animate({"bottom": "110%"},0);
        
        $(" .linkuptechevent").animate({"top": "10%"},0);

        document.getElementById("mainlogo").src="images/topicons/logo-blue.png";
        document.getElementById("registerbut").src="images/topicons/register-black.png";

                $("#teceve1").removeClass('animated slideOutLeft');
                $("#teceve2").removeClass('animated slideOutUp');
                $("#teceve3").removeClass('animated slideOutUp');
                $("#teceve4").removeClass('animated slideOutRight');
                $("#teceve5").removeClass('animated slideOutLeft');
                $("#teceve6").removeClass('animated slideOutLeft');
                $("#teceve7").removeClass('animated slideOutRight');
                $("#teceve8").removeClass('animated slideOutRight');


                $("#teceve1").addClass('animated slideInLeft');
                $("#teceve2").addClass('animated slideInUp');
                $("#teceve3").addClass('animated slideInUp');
                $("#teceve4").addClass('animated slideInRight');
                $("#teceve5").addClass('animated slideInLeft');
                $("#teceve6").addClass('animated slideInLeft');
                $("#teceve7").addClass('animated slideInRight');
                $("#teceve8").addClass('animated slideInRight');
                $("#techevent").addClass('animated slideInUp');

}
function techeventup()
{
                $(".techevent").css({"z-index": "55"});
                $(div[i]).animate({"bottom": "300%"},2000);
                i=i-4;
                $(div[i]).animate({"top": "0%"}, "slow");
                $(".techevent").css({"z-index": "55"});

                $(".linkrighttechmain").animate({"right": "10%"},0);
                $(".linklefttechmain").animate({"left": "10%"},0);
                $(" .linkdowntechmain").animate({"bottom": "10%"},0);

                $(" .linkuptechevent").animate({"top": "-210%"},0);

                document.getElementById("mainlogo").src="images/topicons/logo-white.png";
                document.getElementById("registerbut").src="images/topicons/register-white.png";

                $("#teceve1").removeClass('animated slideInLeft');
                $("#teceve2").removeClass('animated slideInUp');
                $("#teceve3").removeClass('animated slideInUp');
                $("#teceve4").removeClass('animated slideInRight');
                $("#teceve5").removeClass('animated slideInLeft');
                $("#teceve6").removeClass('animated slideInLeft');
                $("#teceve7").removeClass('animated slideInRight');
                $("#teceve8").removeClass('animated slideInRight');

                $("#techevent").removeClass('animated slideInUp');

                $("#teceve1").addClass('animated slideOutLeft');
                $("#teceve2").addClass('animated slideOutUp');
                $("#teceve3").addClass('animated slideOutUp');
                $("#teceve4").addClass('animated slideOutRight');
                $("#teceve5").addClass('animated slideOutLeft');
                $("#teceve6").addClass('animated slideOutLeft');
                $("#teceve7").addClass('animated slideOutRight');
                $("#teceve8").addClass('animated slideOutRight');
}
function techeventright()
{
                  $(".techevent").css({"z-index": "54"});
                i=i-5;
                $(div[i]).animate({"left": "0%"}, "slow");
                $(".mainpage").css({"z-index": "57"});
                $(".techevent").animate({"bottom": "300%"}, "slow");

                $(" .linkuptechevent").animate({"top": "-210%"},0);

                $(".linkrightmainpage").animate({"right": "10%"},0);

                document.getElementById("mainlogo").src="images/topicons/logo-color.png";
                document.getElementById("registerbut").src="images/topicons/register-white.png";

}
function nonmainleft()
{
            $(".nonmain").css({"z-index": "45"});
            $(".onlinemain").css({"z-index": "38"});
            $(div[i]).animate({"left": "-100%"}, "slow");
            i++;

        $(".linkrightnonmain").animate({"right": "110%"},0);
        $(".linkleftnonmain").animate({"left": "110%"},0);
        $(".linkdownnonmain").animate({"bottom": "110%"},0);

        $(".linkrightonlinemain").animate({"right": "10%"},0);
        $(".linkleftonlinemain").animate({"left": "10%"},0);
        $(".linkdownonlinemain").animate({"bottom": "10%"},0);

        document.getElementById("mainlogo").src="images/topicons/logo-white.png";
        document.getElementById("registerbut").src="images/topicons/register-white.png";

}
function nonmainright()
{
                $(".nonevent").css({"z-index": "47"});
                i--;
                $(div[i]).animate({"left": "0%"}, "slow");
                $(".techmain").css({"z-index": "51"});

        $(".linkrightnonmain").animate({"right": "110%"},0);
        $(".linkleftnonmain").animate({"left": "110%"},0);
        $(" .linkdownnonmain").animate({"bottom": "110%"},0);


        $(".linkrighttechmain").animate({"right": "10%"},0);
        $(".linklefttechmain").animate({"left": "10%"},0);
        $(" .linkdowntechmain").animate({"bottom": "10%"},0);

        document.getElementById("mainlogo").src="images/topicons/logo-white.png";
        document.getElementById("registerbut").src="images/topicons/register-white.png";

}
function nonmaindown()
{ 
                $(".nonevent").css({"z-index": "43"});
                i=i+4;
                $(div[i]).animate({"bottom": "0%"},0);
                $(".nonmain").css({"z-index": "42"});

        $(".linkrightnonmain").animate({"right": "110%"},0);
        $(".linkleftnonmain").animate({"left": "110%"},0);
        $(" .linkdownnonmain").animate({"bottom": "110%"},0);
        
        $(" .linkupnonevent").animate({"top": "10%"},0);

        document.getElementById("mainlogo").src="images/topicons/logo-black.png";
        document.getElementById("registerbut").src="images/topicons/register-black.png";

                $("#noneve1").removeClass('animated slideOutLeft');
                $("#noneve2").removeClass('animated slideOutLeft');
                $("#noneve3").removeClass('animated slideOutUp');
                $("#noneve4").removeClass('animated slideOutRight');
                $("#noneve5").removeClass('animated slideOutRight');
                $("#noneve6").removeClass('animated slideOutLeft');
                $("#noneve7").removeClass('animated slideOutLeft');
                $("#noneve8").removeClass('animated slideOutRight');
                $("#noneve9").removeClass('animated slideOutRight');


                $("#noneve1").addClass('animated slideInLeft');
                $("#noneve2").addClass('animated slideInLeft');
                $("#noneve3").addClass('animated slideInUp');
                $("#noneve4").addClass('animated slideInRight');
                $("#noneve5").addClass('animated slideInRight');
                $("#noneve6").addClass('animated slideInLeft');
                $("#noneve7").addClass('animated slideInLeft');
                $("#noneve8").addClass('animated slideInRight');
                $("#noneve9").addClass('animated slideInRight');

                $("#nonevent").addClass('animated slideInUp');
}
function noneventup()
{
                $(".nonevent").css({"z-index": "45"});
                $(div[i]).animate({"bottom": "500%"},2000);
                i=i-4;
                $(div[i]).animate({"top": "0%"}, "slow");
                $(".nonevent").css({"z-index": "45"});

                $(".linkrightnonmain").animate({"right": "10%"},0);
                $(".linkleftnonmain").animate({"left": "10%"},0);
                $(" .linkdownnonmain").animate({"bottom": "10%"},0);

                $(".linkupnonevent").animate({"top": "-210%"},0);

                document.getElementById("mainlogo").src="images/topicons/logo-color.png";
                document.getElementById("registerbut").src="images/topicons/register-black.png";


                $("#noneve1").removeClass('animated slideInLeft');
                $("#noneve2").removeClass('animated slideInLeft');
                $("#noneve3").removeClass('animated slideInUp');
                $("#noneve4").removeClass('animated slideInRight');
                $("#noneve5").removeClass('animated slideInRight');
                $("#noneve6").removeClass('animated slideInLeft');
                $("#noneve7").removeClass('animated slideInLeft');
                $("#noneve8").removeClass('animated slideInRight');
                $("#noneve9").removeClass('animated slideInRight');

                $("#nonevent").removeClass('animated slideInUp');

                $("#noneve1").addClass('animated slideOutLeft');
                $("#noneve2").addClass('animated slideOutLeft');
                $("#noneve3").addClass('animated slideOutUp');
                $("#noneve4").addClass('animated slideOutRight');
                $("#noneve5").addClass('animated slideOutRight');
                $("#noneve6").addClass('animated slideOutLeft');
                $("#noneve7").addClass('animated slideOutLeft');
                $("#noneve8").addClass('animated slideOutRight');
                $("#noneve9").addClass('animated slideOutRight');
}
function noneventright()
{
                $(".nonevent").css({"z-index": "44"});
                i=i-6;
                $(div[i]).animate({"left": "0%"}, "slow");
                $(".mainpage").css({"z-index": "57"});
                $(".nonevent").animate({"bottom": "500%"}, "slow");
                $(".techmain").animate({"left": "0%"}, "slow");


                $(" .linkupnonevent").animate({"top": "-210%"},0);

                $(".linkrightmainpage").animate({"right": "10%"},0);

                document.getElementById("mainlogo").src="images/topicons/logo-color.png";
                document.getElementById("registerbut").src="images/topicons/register-white.png";
}
function onlinemainleft()
{
            $(".onlinemain").css({"z-index": "35"});
            $(".aboutpage").css({"z-index": "28"});
            $(".aboutpage").animate({"bottom": "0%"},0)
            $(div[i]).animate({"left": "-100%"}, "slow");
                    i++;

        $(".linkrightonlinemain").animate({"right": "110%"},0);
        $(".linkleftonlinemain").animate({"left": "110%"},0);
        $(".linkdownonlinemain").animate({"bottom": "110%"},0);

        $(".linkleftaboutpage").animate({"left": "3%"},0);


        document.getElementById("mainlogo").src="images/topicons/logo-white.png";
        document.getElementById("registerbut").src="images/topicons/register-white.png";

}
function onlinemainright()
{
                $(".onlineevent").css({"z-index": "37"});
                i--;
                $(div[i]).animate({"left": "0%"}, "slow");
                $(".nonmain").css({"z-index": "41"});



        $(".linkrightonlinemain").animate({"right": "110%"},0);
        $(".linkleftonlinemain").animate({"left": "110%"},0);
        $(" .linkdownonlinemain").animate({"bottom": "110%"},0);


        $(".linkrightnonmain").animate({"right": "10%"},0);
        $(".linkleftnonmain").animate({"left": "10%"},0);
        $(" .linkdownnonmain").animate({"bottom": "10%"},0);


        document.getElementById("mainlogo").src="images/topicons/logo-color.png";
        document.getElementById("registerbut").src="images/topicons/register-black.png";
}
function onlinemaindown()
{
                $(".onlineevent").css({"z-index": "33"});
                i=i+4;
                $(div[i]).animate({"bottom": "0%"},0);
                $(".onlinemain").css({"z-index": "32"});

        $(".linkrightonlinemain").animate({"right": "110%"},0);
        $(".linkleftonlinemain").animate({"left": "110%"},0);
        $(" .linkdownonlinemain").animate({"bottom": "110%"},0);
        
        $(" .linkuponlineevent").animate({"top": "10%"},0);

        document.getElementById("mainlogo").src="images/topicons/logo-black.png";
        document.getElementById("registerbut").src="images/topicons/register-black.png";


                $("#onevent1").removeClass('animated slideOutLeft');
                $("#onevent2").removeClass('animated slideOutDown');
                $("#onevent3").removeClass('animated slideOutRight');
                
                $("#onevent1").addClass('animated slideInLeft');
                $("#onevent2").addClass('animated slideInDown');
                $("#onevent3").addClass('animated slideInRight');

                $("#onlineevent").addClass('animated slideInUp');



}
function onlineeventup()
{
                $(".onlineevent").css({"z-index": "35"});
                $(div[i]).animate({"bottom": "300%"},2000);
                i=i-4;
                $(div[i]).animate({"top": "0%"}, "slow");
                $(".onlineevent").css({"z-index": "35"});

                $(".linkrightonlinemain").animate({"right": "10%"},0);
                $(".linkleftonlinemain").animate({"left": "10%"},0);
                $(" .linkdownonlinemain").animate({"bottom": "10%"},0);

                $(" .linkuponlineevent").animate({"top": "-210%"},0);

                document.getElementById("mainlogo").src="images/topicons/logo-white.png";
                document.getElementById("registerbut").src="images/topicons/register-white.png";

                $("#onevent1").removeClass('animated slideInLeft');
                $("#onevent2").removeClass('animated slideInDown');
                $("#onevent3").removeClass('animated slideInRight');
                $("#onlineevent").removeClass('animated slideInUp');

                $("#onevent1").addClass('animated slideOutLeft');
                $("#onevent2").addClass('animated slideOutDown');
                $("#onevent3").addClass('animated slideOutRight');

}
function onlineeventright()
{
                $(".nonevent").css({"z-index": "44"});
                i=i-7;
                $(div[i]).animate({"left": "0%"}, "slow");
                $(".mainpage").css({"z-index": "57"});

                $(".techmain").animate({"left": "0%"}, "slow");
                $(".nonmain").animate({"left": "0%"}, "slow");
                $(".onlineevent").animate({"bottom": "300%"}, "slow");


                $(" .linkuponlineevent").animate({"top": "-210%"},0);

                $(".linkrightmainpage").animate({"right": "10%"},0);


                document.getElementById("mainlogo").src="images/topicons/logo-color.png";
                document.getElementById("registerbut").src="images/topicons/register-white.png";
}
function aboutpageright()
{
                $(".aboutpage").css({"z-index": "27"});
                $(".aboutpage").animate({"bottom": "300%"},0)
                i--;
                $(div[i]).animate({"left": "0%"}, "slow");
                $(".onlinemain").css({"z-index": "31"});


        $(".linkleftaboutpage").animate({"left": "110%"},0);


        $(".linkrightonlinemain").animate({"right": "10%"},0);
        $(".linkleftonlinemain").animate({"left": "10%"},0);
        $(" .linkdownonlinemain").animate({"bottom": "10%"},0);

        document.getElementById("mainlogo").src="images/topicons/logo-white.png";
        document.getElementById("registerbut").src="images/topicons/register-white.png";
}


	$(document).ready(function()
  {  




    	$(document).keyup(function (e) {
      var key = e.keyCode;
      arrow = {right: 37, down: 40, left: 39, up: 38 };


        if(div[i]==".mainpage")
        {


          if(arrow.left==key)
          {
            mainleft();       
            return;
          }
          return;
        };



        if(div[i]==".techmain")
        {




          if(arrow.left==key)
          {
                techmainleft();
                return;
          }


          else if(arrow.right==key)
          {
                techmainright();
                return;
          }

            else if(arrow.down==key)
          {
                techmaindown();
                return;

          }

          return;

        };


        if(div[i]==".techevent")
        {

            if(arrow.up==key)
          {
              techeventup();
              return;
          }


            if(arrow.right==key)
          {
                techeventright();
                return;
          }

          return;

        };




        if(div[i]==".nonmain")
        {
          if(arrow.left==key)
          {
            nonmainleft();
            return;
          }


          else if(arrow.right==key)
          {
                nonmainright();
                return;
          }

            else if(arrow.down==key)
          {
                nonmaindown();
                return;

          }

          return;

        };


        if(div[i]==".nonevent")
        {

            if(arrow.up==key)
          {
              noneventup();
                return;
          }
            if(arrow.right==key)
          {
                noneventright();
                return;
          }
          return;

        };



        if(div[i]==".onlinemain")
        {
          if(arrow.left==key)
          {
                onlinemainleft();
                return;
          }


          else if(arrow.right==key)
          {
                onlinemainright();
                return;
          }

            else if(arrow.down==key)
          {
                onlinemaindown();
                return;

          }

          return;

        };


        if(div[i]==".onlineevent")
        {

            if(arrow.up==key)
          {

                onlineeventup();
                return;
          }
            if(arrow.right==key)
          {
                onlineeventright();
                return;
          }
          return;

        };


        if(div[i]==".aboutpage")
        {
          if(arrow.right==key)
          {
                aboutpageright();
                return;
          }
          return;
        };



})
});


