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


$answer = $_POST['answer'];
$level = $_POST['level'];
$sql = "SELECT `question`, `answer` FROM `question` WHERE `level`='$level'and answer='$answer'";
$result = mysqli_query($conn,$sql);

 if(mysqli_num_rows($result) > 0)
    {
       echo 'true';
    }

 else {
 	echo 'false';
 }
    

mysqli_close($conn);

?>