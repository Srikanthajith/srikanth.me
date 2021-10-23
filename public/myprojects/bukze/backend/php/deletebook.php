<?php                                                                                                                                                                                            
                      
session_start();                      
$isbntodelete=$_POST["isbntodelete"];
$_SESSION["isbntodelete"]=$isbntodelete;

//$con = mysqli_connect('localhost','root','','bukze_books') or die('Unable To connect');
$con = mysqli_connect('localhost','thoutz_prakash','prakash','bukze') or die('Unable To connect');

$isbnsql = "SELECT * FROM books where isbn='$isbntodelete'";

$isbncheck = mysqli_query($con,$isbnsql);

$row = $isbncheck->fetch_assoc();

if (mysqli_num_rows($isbncheck) > 0) {

	echo '<script language="javascript">';
	echo'var r = confirm("Book Name:'.$row["name"].'");';
	echo'if (r == true) {  window.location="./deletebookconfirm.php?deleteconfirm=confirmed";  } ';
	echo'else {  window.location="../adminpage.php";  }';
	echo'</script>';
}

else
{
echo '<script language="javascript">';
echo 'alert("No such book exists!!!")';
echo '</script>';
echo'<script>window.location="../adminpage.php";</script>';
}





?>