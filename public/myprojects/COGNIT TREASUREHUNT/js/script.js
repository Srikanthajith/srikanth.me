var i,j;
updatequestion();
   
function check() {
  
  var answer = $("#answer").val().toLowerCase().replace(/ /g,'');
    $.ajax({
  				url: "./php/nextpage.php",
  				type:"post",
  				data: {"answer":answer,"level":i},
  				success: function(data) {
  				 if(data=='true'){	   
                $("#answer").val(" ");
                i++;                
  				 		 	updatedatabase();		 
  				 	}
  	       
            $.ajax({
          url: "./php/next.php",
          type:"post",
          data: {"no":i},
          success: function(data) {
              $('#question').html(data);
              $('#levelno').html(i);
              next_image(i);                
            }
          })

          }
				})
        return false;
    		
    	}


function updatequestion() {
        
        	$.ajax({
      				url: "./php/updatequestion.php",
  	       		type:"post",
              cache: false,processData: false,
              contentType: false,
  				    success: function(data) {
                    i= data;
                    next_image(i);
              $.ajax({
              url: "./php/next.php",
              type:"post",
              data: {"no":i},
              success: function(data) {
                $('#question').html(data);
                $('#levelno').html(i);                
            }
        })
        }
				})
}

function updatedatabase(){
  $.ajax({
          url: "./php/updatedatabase.php",
          type:"post",
          data: {"no":i},
          success: function(data) {}
        })
}

function next_image(j)
    {
        var img= './clues/'+j+'.jpg';
        $('#image').css('background-image','url(./clues/'+j+'.jpg)');      
    }


function logout(){
  $.ajax({
          url: "./php/logout.php",
          type:"post",
          success: function(data) {
            location.reload();   
            }
        })

    }