<?php

session_start();     

$con = mysqli_connect('localhost','thoutz_prakash','prakash','bukze') or die('Unable To connect');


if (isset($_GET['editconfirm']))
{
$sql = "

	UPDATE books SET
	category='{$_SESSION['editcategory']}',subcategory='{$_SESSION['editsubcategory']}',
	author='{$_SESSION['editauthor']}',publisher='{$_SESSION['editpublisher']}',
	language='{$_SESSION['editlanguage']}',booktype='{$_SESSION['editbooktype']}',
	name='{$_SESSION['editname']}',edition='{$_SESSION['editedition']}',
	pages='{$_SESSION['editpages']}',sellingprice='{$_SESSION['editsellingprice']}',
	mrp='{$_SESSION['editmrp']}',saved='{$_SESSION['editsaved']}',
	isbn='{$_SESSION['editisbn']}',date=CURDATE(),
	status='{$_SESSION['editstatus']}',inventory='{$_SESSION['editinventory']}',
	image='{$_SESSION['editimage']}',editedby='{$_SESSION['useremail']}' 
	WHERE isbn='{$_SESSION['editisbn']}'

";
$result = mysqli_query($con,$sql);
echo '<script language="javascript">';
echo 'alert("Book is Edited!!!")';
echo '</script>';
echo'<script>window.location="../adminpage.php";</script>';
}


?>

