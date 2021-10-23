<!DOCTYPE html>
<html>
<head>
<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1,maximum-scale=1">
        <link href="css/bootstrap.css" rel="stylesheet" type="text/css">
        <link href="style.css" rel="stylesheet" type="text/css">   
        <link href="css/font-awesome.css" rel="stylesheet" type="text/css">
    <title></title>

</head>

<style type="text/css">
body
{
    text-align: center;
}
.admintable
{
    margin-top: 5%;
    margin-left: 20%;
    color: white;
}

</style>
</head>
<body>


<div class="container-fluid">
    <div class="row">
        <div class="col-xs-12 brandname">
            Brand Name
        </div>
        <div class="col-xs-12 pageheading">
            Admin/Backend UI
        </div>
        


        <div class="col-xs-12 col-sm-12">
                    <p><br></p>
            <input type="text" id="imageid" />
            <button id="viewbutton">View Image</button>
            <image id="img"/>
        </div>

<div class="col-xs-12" class="admintable">

<?php


// Create connection
    $conn = mysqli_connect('localhost', 'root', '', 'urbanrider') or die('Unable To connect');
// Check connection
if ($conn->connect_error) {
     die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT * FROM details";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
     echo "<div class='admintable'><table><tr><th>Username</th><th>Fullname</th><th>Facebookurl</th><th>motivatationquote</th><th>image</th><th>publish</th></tr>";





     // output data of each row
     while($row = $result->fetch_assoc()) {


         echo "<tr><td>" . $row["username"]. "</td><td>" . $row["fullname"]. " </td><td>" . $row["facebookurl"]. "</td><td> " . $row["motivequote"]. "   </td><td> 
         </td><td> <input type='checkbox' /></td></tr> ";

     }
     echo "</table></div>";
} else {
     echo "0 results";
}

$conn->close();
?>  
</div>
</body>
</html>
        </div>

    </div>
</div>





<script src="js/jquery-2.0.2.js"></script>
<script src="js/bootstrap.js"></script>
<script>
    
    $('#img').hide();
    $('#viewbutton').click(function(){
        $('#img').attr("src","php/getImage.php?id="+$('#imageid').val());
        console.log($('#imageid').val());
        $('#img').show();
    });

</script>



</body>
</html>