<?php                                                                                                                                                                                                                  
session_start();

$category=$_POST["category"];
$subcategory=$_POST["subcategory"];
$author=$_POST["author"];
$publisher=$_POST["publisher"];
$language=$_POST["language"];
$booktype=$_POST["booktype"];
$name=$_POST["name"];
$edition=$_POST["edition"];
$pages=$_POST["pages"];
$sellingprice=$_POST["sellingprice"];
$mrp=$_POST["mrp"];
$saved = $mrp-$sellingprice;
$isbn=$_POST["isbn"];
$status=$_POST["status"];
$inventory=$_POST["inventory"];
$image = addslashes(file_get_contents($_FILES['image']['tmp_name']));
$editedby = $_SESSION['useremail'];

$_SESSION["editcategory"]=$category;
$_SESSION["editsubcategory"]=$subcategory;
$_SESSION["editauthor"]=$author;
$_SESSION["editpublisher"]=$publisher;
$_SESSION["editlanguage"]=$language;
$_SESSION["editbooktype"]=$booktype;
$_SESSION["editname"]=$name;
$_SESSION["editedition"]=$edition;
$_SESSION["editpages"]=$pages;
$_SESSION["editsellingprice"]=$sellingprice;
$_SESSION["editmrp"]=$mrp;
$_SESSION["editsaved"]=$saved;
$_SESSION["editstatus"]=$status;
$_SESSION["editinventory"]=$inventory;
$_SESSION["editimage"]=$image;
$_SESSION["editisbn"]=$isbn;


//$con = mysqli_connect('localhost','root','','bukze_books') or die('Unable To connect');
$con = mysqli_connect('localhost','thoutz_prakash','prakash','bukze') or die('Unable To connect');




$isbnsql = "SELECT * FROM books where isbn='$isbn'";

$isbncheck = mysqli_query($con,$isbnsql);

if (mysqli_num_rows($isbncheck) == 0) {

$sql = "INSERT INTO books (category,subcategory,author,publisher,language,booktype,name,edition,pages,sellingprice,mrp,saved,isbn,date,status,inventory,image,editedby) VALUES ('$category','$subcategory','$author','$publisher','$language','$booktype','$name','$edition','$pages','$sellingprice','$mrp','$saved','$isbn',CURDATE(),'$status','$inventory','$image','$editedby')";


$result = mysqli_query($con,$sql);

           echo '<script language="javascript">';
           echo 'alert("Book Name:'.$name.' has been added to the database")';
           echo '</script>';
           echo'<script>window.location="../adminpage.php";</script>';
}

else
{

	echo '<script language="javascript">';
	echo'var r = confirm("Book already exists do you want to edit the current book ISBN:'.$isbn.' ");';
	echo'if (r == true) {  window.location="./editbookconfirm.php?editconfirm=confirmed";  } ';
	echo'else {  window.location="../adminpage.php";  }';
	echo'</script>';
}
?>