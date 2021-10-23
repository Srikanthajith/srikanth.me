<?php

session_start();     


$con = mysqli_connect('localhost','thoutz_prakash','prakash','bukze') or die('Unable To connect');


if (isset($_GET['deleteconfirm']))
{
$sql = "DELETE FROM books WHERE isbn='{$_SESSION['isbntodelete']}'";
$result = mysqli_query($con,$sql);
echo '<script language="javascript">';
echo 'alert("Book is deleted!!!")';
echo '</script>';
echo'<script>window.location="../adminpage.php";</script>';
$_SESSION["isbntodelete"]=NULL;
}


?>