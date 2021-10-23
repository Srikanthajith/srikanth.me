<?php 
session_start();
  if (!isset($_SESSION["useremail"]))
   {       
            echo '<script language="javascript">';
           echo 'alert("Please login first")';
           echo '</script>';
           echo'<script>window.location="./loginpage.php";</script>';
      //header("location: ./loginpage.php");
   }
?>


<!DOCTYPE html>
<html>
<head>
	<title>Accordion</title>
	<link rel="stylesheet" type="text/css" href="./css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="./css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="./css/style.css">
	<script type="text/javascript" src="./js/jquery-3.2.1.min.js"></script>


<style type="text/css">
.admintable
{
    color: black;
}

th
{
    padding: 5px 10px;
}
td
{
    padding: 5px 10px; 
}

</style>
</head>
<body>
	
<nav class="navbar navbar-default">
  <div class="container-fluid">
    <ul class="nav navbar-nav">
      <li id="insertnavbutton"><a href="#">Insert and Edit</a></li>
      <li id="deletenavbutton"><a href="#">Delete</a></li>
    </ul>
    <ul class="nav navbar-nav navbar-right">
      <li id="databasebutton"><a href="#">Database</a></li>
    </ul>
  </div>
</nav>

<div class="container-fluid" id="insertcontents">

  <h3 class="text-center"> Insert Into Table </h3><br>
<form action="php/insertbook.php" method="post" enctype="multipart/form-data">
<!-- for category -->
                <div class="col-md-6">
                  <label for="category">Category:</label>
                  <select class="form-control" id="category" name="category" required>
                    <option value="notselected">Select categrory</option>
                    <option value="education">Education</option>
                    <option value="fiction">Fiction</option>
                    <option value="non-fiction">Non-Fiction</option>
                    <option value="health">Health</option>
                    <option value="kids-zone">Kid’s Zone</option>
                    <option value="general">General</option>
                  </select>
                </div>

<!-- for  sub category -->
                <div class="col-md-6">
                  <label for="subcategory">Subcategory:</label>
                  <select class="form-control" id="subcategory" name="subcategory" required=>
                    <option value="notselected">Select the category</option>
                  </select>
                </div>

                <div class="col-md-6">
                      <label for="author">Author</label>
                      <input type="text" class="form-control" name="author" required>
                </div>

                <div class="col-md-6">
                      <label for="publisher">Publisher</label>
                      <input type="text" class="form-control" name="publisher" required>
                </div>

<!-- for category -->
                <div class="col-md-6">
                  <label for="language">Language:</label>
                  <select class="form-control" id="cateogory" name="language" required>
                    <option value="notselected">Select categrory</option>
                    <option value="english">English</option>
                    <option value="tamil">Tamil</option>
                    <option value="hindi">Hindi</option>
                    <option value="malayalam">Malayalam</option>
                    <option value="telugu">Telugu</option>
                    <option value="kannada">Kannada</option>
                    <option value="bengali">Bengali</option>
                    <option value="gujarati">Gujarati</option>
                    <option value="assamese">Assamese</option>
                    <option value="oriya">Oriya</option>
                  </select>
                </div>
<!-- for  sub category -->
                <div class="col-md-6">
                  <label for="booktype">Booktype:</label>
                  <select class="form-control" name="booktype" required=>
                    <option value="notselected">Select Subcategory</option>
                    <option value="hardback">Hardback</option>
                    <option value="paperback">Paperback</option>
                  </select>
                </div>

                <div class="col-md-6">
                      <label for="name">Name:</label>
                      <input type="text" class="form-control" name="name" required>
                </div>

                <div class="col-md-6">
                      <label for="edition">Edition:</label>
                      <input type="text" class="form-control" name="edition" required>
                </div>

                <div class="col-md-6">
                      <label for="pages">Pages:</label>
                      <input type="text" class="form-control" name="pages" required>
                </div>

                <div class="col-md-6">
                      <label for="sellingprice">Selling Price:</label>
                      <input type="text" class="form-control" name="sellingprice" required>
                </div>

                <div class="col-md-6">
                      <label for="mrp">MRP:</label>
                      <input type="text" class="form-control" name="mrp" required>
                </div>

                <div class="col-md-6">
                      <label for="isbn">ISBN:</label>
                      <input type="text" class="form-control" name="isbn" required>
                </div>

                <div class="col-md-6">
                  <label for="status">Status:</label>
                  <select class="form-control" name="status" required=>
                    <option value="notselected">Select Subcategory</option>
                    <option value="eighth">Instock</option>
                    <option value="out_of_stock">Out of stock</option>
                    <option value="forthcoming">Forthcoming</option>
                  </select>
                </div>

                <div class="col-md-6">
                      <label for="inventory">Inventory:</label>
                      <input type="text" class="form-control" name="inventory" required>
                </div>

                <div class="col-md-6">
                     <label for="image">Image:</label>
    				<input type="file" class="form-control" name="image"><br><br>
                </div>

                <center>
                <button type="submit" class="btn  btn-lg btn-primary" id="studentsubmit">Submit</button>
                </center>
              </form>
<br><br><br><br><br><br>
</div>
<div class="container-fluid" id="deletecontents">
<form action="php/deletebook.php" method="post">

                <div class="col-md-offset-3 col-md-6 col-md-offset-3">
                      <label for="isbnfordelete">ISBN:</label>
                      <input type="text" class="form-control" name="isbntodelete" required>
                </div>

                <center>
                <button type="submit" class="btn  btn-lg btn-primary">Submit</button>
                </center>
</form>
<br><br><br><br><br><br>
</div>



<div class="container-fluid" class="admintable" id="admintablecontent">

<?php


// Create connection
$con = mysqli_connect('localhost','thoutz_prakash','prakash','bukze') or die('Unable To connect');

// Check connection

$sql = "SELECT * FROM books where 1";
$result = $con->query($sql);

if ($result->num_rows > 0) {
     echo "<div class='admintable'><table><tr>
     <th>category</th><th>subcategory</th><th>author</th><th>publisher</th>
     <th>language</th><th>booktype</th><th>name</th><th>edition</th>
     <th>pages</th><th>sellingprice</th><th>mrp</th><th>saved</th>
     <th>isbn</th><th>date</th><th>status</th><th>inventory</th>
     <th>editedby</th>
     </tr>";

     // output data of each row
     while($row = $result->fetch_assoc()) {

         echo "
         <tr>
         <td>" . $row["category"]. "</td><td>" . $row["subcategory"]. " </td><td>" . $row["author"]. "</td><td> " . $row["publisher"]. "   </td>
         <td>" . $row["language"]. "</td><td>" . $row["booktype"]. " </td><td>" . $row["name"]. "</td><td> " . $row["edition"]. "   </td>
         <td>" . $row["pages"]. "</td><td>" . $row["sellingprice"]. " </td><td>" . $row["mrp"]. "</td><td> " . $row["saved"]. "   </td>
         <td>" . $row["isbn"]. "</td><td>" . $row["date"]. " </td><td>" . $row["status"]. "</td><td> " . $row["inventory"]. "   </td>
         <td> " . $row["editedby"]. "   </td>
         </tr> ";

     }
     echo "</table></div>";
} else {
     echo "0 results";
}

$con->close();
?>  
</div>


</body>

<script src="js/jquery-3.2.1.min.js"></script>
<script src="js/bootstrap.js"></script>
<script type="text/javascript">
  
$( document ).ready(function() {
  $('#insertcontents').show();
  $('#deletecontents').hide();
  $('#admintablecontent').hide();

});

    $("#insertnavbutton").click(function(){
  $('#insertcontents').show();
  $('#deletecontents').hide();
    $('#admintablecontent').hide();
    });


    $("#deletenavbutton").click(function(){
  $('#deletecontents').show();
  $('#insertcontents').hide();
    $('#admintablecontent').hide();
    });

    $("#databasebutton").click(function(){
  $('#deletecontents').hide();
  $('#insertcontents').hide();
  $('#admintablecontent').show();
    });




$('#category').on('change', function(){
    $('#subcategory').html('');
    if($('#category').val()=='education'){
        $('#subcategory').append('<option value="allgenre">All Genre</option>');
        $('#subcategory').append('<option value="commercemanagement">Commerce & Management</option>');
        $('#subcategory').append('<option value="computerscienceit">Computer Science & IT</option>');
        $('#subcategory').append('<option value="engineering">Engineering</option>');
        $('#subcategory').append('<option value="humanitiessocialscience">Humanities & Social Science</option>');
        $('#subcategory').append('<option value="science">Science</option>');
        $('#subcategory').append('<option value="literature">Literature</option>');      
    }else if ($('#category').val()=='fiction'){
        $('#subcategory').append('<option value="allgenre">All Genre</option>');
        $('#subcategory').append('<option value="classicstories">Classic Stories</option>');
        $('#subcategory').append('<option value="drama">Drama</option>');
        $('#subcategory').append('<option value="fantasymythology">Fantasy & Mythology</option>');
        $('#subcategory').append('<option value="novel">Novel</option>');
        $('#subcategory').append('<option value="thriller">Thriller</option>');
    }
    else if ($('#category').val()=='non-fiction'){
        $('#subcategory').append('<option value="allgenre">All Genre</option>');
        $('#subcategory').append('<option value="business">Business</option>');
        $('#subcategory').append('<option value="historybiography">History & Biography</option>');
        $('#subcategory').append('<option value="popularscience">Popular Science</option>');
        $('#subcategory').append('<option value="relationship">Relationship</option>');
        $('#subcategory').append('<option value="religionphilosophy">Religion & Philosophy</option>');
        $('#subcategory').append('<option value="selfhelp">Self-Help</option>')
    }
    else if ($('#category').val()=='health'){
        $('#subcategory').append('<option value="allgenre">All Genre</option>');
        $('#subcategory').append('<option value="nutrition">Nutrition</option>');
        $('#subcategory').append('<option value="mindbody">Mind & Body</option>');
    }
    else if ($('#category').val()=='kids-zone'){
        $('#subcategory').append('<option value="allgenre">All Genre</option>');
        $('#subcategory').append('<option value="animalseries">Animal Series</option>');
        $('#subcategory').append('<option value="companiesseries">Companies Series</option>');
        $('#subcategory').append('<option value="packetbooks">Packet Books</option>');
        $('#subcategory').append('<option value="adventure">Adventure</option>');
    }
    else if ($('#category').val()=='general'){
        $('#subcategory').append('<option value="allgenre">All Genre</option>');
        $('#subcategory').append('<option value="competitiveexam">Competitive Exam</option>');
        $('#subcategory').append('<option value="entranceexam">Entrance Exam</option>');
        $('#subcategory').append('<option value="stateboardexam">State Board Exam</option>');
    }
});
</script>
