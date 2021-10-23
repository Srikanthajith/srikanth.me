<?php
session_start();
$servername = "localhost";
$username = "mnmcoito_cogy";
$password = "cogy2k16";
$dbname = "mnmcoito_cognit2k16";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 


$number = $_POST['no'];
$sql = "SELECT `question` FROM `question` WHERE `level`='$number'";
$result = mysqli_query($conn,$sql);
$row = mysqli_fetch_array($result); 
echo $row["question"];

?>