
var imgc=1;

function countdown() 
{
     var seconds = 30;
     var counter = document.getElementById("timer");
function tick() 
    {
        seconds--;
        counter.innerHTML =(seconds < 10 ? "0" : "") + String(seconds);
        if( seconds > 0 ) 
        {
            showUser();
          time=setTimeout(tick, 1000); 

        }
        if(seconds==0)
        {
        imgc++;
        next_image(imgc); 
        showUser();
        countdown();   
        playername(imgc);    
        }     
    }
    
    tick();   
}

countdown();


function next_image(str)
    {
        var j = str;
        var img= 'images/image'+j+'.png';
        document.getElementById('image').src=img;
        finishbid();
        alert("Player is sold!");
        showUser();
    }

 function bid()
    {
          clearTimeout(time);
          seconds=5;
          document.getElementById("timer").innerHTML = seconds;
          countdown();     
    } 


function showUser() 
{
    var str=1;

    if (str == "")
    {
        document.getElementById("bid").innerHTML = "";
        return;
    } else 
    { 
        if (window.XMLHttpRequest)
         {
            xmlhttp = new XMLHttpRequest();
        } 
        else 
        {
  
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }
        xmlhttp.onreadystatechange = function() 
        {
            if (xmlhttp.readyState == 4 && xmlhttp.status == 200) 
            {
                document.getElementById("bid").innerHTML = xmlhttp.responseText;
            }
        };
        xmlhttp.open("GET","sample.php?p="+str,true);
        xmlhttp.send();
         
    }
}

function tenadder()
    {
   var str=1;
    if (str == "")
    {
        document.getElementById("bid").innerHTML = "";
        return;
    } else 
    { 
        if (window.XMLHttpRequest)
         {
            xmlhttp = new XMLHttpRequest();
        } 
        else 
        {
  
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }
        xmlhttp.onreadystatechange = function() 
        {
            if (xmlhttp.readyState == 4 && xmlhttp.status == 200) 
            {
                document.getElementById("bid").innerHTML = xmlhttp.responseText;
            }
        };
        xmlhttp.open("GET","tenadder.php?p="+str,true);
        xmlhttp.send();

    }
}
function fiftyadder()
    {
    var str=1;
    if (str == "")
    {
        document.getElementById("bid").innerHTML = "";
        return;
    } else 
    { 
        if (window.XMLHttpRequest)
         {
            xmlhttp = new XMLHttpRequest();
        } 
        else 
        {
  
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }
        xmlhttp.onreadystatechange = function() 
        {
            if (xmlhttp.readyState == 4 && xmlhttp.status == 200) 
            {
                document.getElementById("bid").innerHTML = xmlhttp.responseText;
            }
        };
        xmlhttp.open("GET","fiftyadder.php?p="+str,true);
        xmlhttp.send();
    }
}
function hundredadder()
        {
             var str=1;
    if (str == "")
    {
        document.getElementById("bid").innerHTML = "";
        return;
    } else 
    { 
        if (window.XMLHttpRequest)
         {
            xmlhttp = new XMLHttpRequest();
        } 
        else 
        {
  
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }
        xmlhttp.onreadystatechange = function() 
        {
            if (xmlhttp.readyState == 4 && xmlhttp.status == 200) 
            {
                document.getElementById("bid").innerHTML = xmlhttp.responseText;
            }
        };
        xmlhttp.open("GET","hundredadder.php?p="+str,true);
        xmlhttp.send();
    }
}


function finishbid()
    {
    var str=1;
    if (str == "")
    {
        document.getElementById("bid").innerHTML = "";
        return;
    } else 
    { 
        if (window.XMLHttpRequest)
         {
            xmlhttp = new XMLHttpRequest();
        } 
        else 
        {
  
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }
        xmlhttp.onreadystatechange = function() 
        {
            if (xmlhttp.readyState == 4 && xmlhttp.status == 200) 
            {
                document.getElementById("bid").innerHTML = xmlhttp.responseText;
            }
        };
        xmlhttp.open("GET","finishbid.php?q="+str,true);
        xmlhttp.send();
    }
}

function teamname(str) 

{

    if (str == "")
    {
        document.getElementById("name").innerHTML = "";
        return;
    } else 
    { 
        if (window.XMLHttpRequest)
         {
            xmlhttp = new XMLHttpRequest();
        } 
        else 
        {
  
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }
        xmlhttp.onreadystatechange = function() 
        {
            if (xmlhttp.readyState == 4 && xmlhttp.status == 200) 
            {
                document.getElementById("name").innerHTML = xmlhttp.responseText;
            }
        };
        xmlhttp.open("GET","teamname.php?q="+str,true);
        xmlhttp.send();
         
    }
}

function playername(str) 

{
    if (str == "")
    {
        document.getElementById("planame").innerHTML = "";
        return;
    } else 
    { 
        if (window.XMLHttpRequest)
         {
            xmlhttp = new XMLHttpRequest();
        } 
        else 
        {
  
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }
        xmlhttp.onreadystatechange = function() 
        {
            if (xmlhttp.readyState == 4 && xmlhttp.status == 200) 
            {
                document.getElementById("planame").innerHTML = xmlhttp.responseText;
            }
        };
        xmlhttp.open("GET","playername.php?q="+str,true);
        xmlhttp.send();
         
    }
}


