<?php
$host="localhost";
$user="mnmcoito_cogy";
$password="cogy2k16";
$db="mnmcoito_cognit2k16";
$conn=mysqli_connect($host,$user,$password,$db);
if(!$conn){
	die("connection failed ".mysqli_connect_error());
}else{
	echo "<br><h1>success</h2>";
}

?>