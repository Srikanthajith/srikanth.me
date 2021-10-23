<?php
session_start();
if($_SESSION["username"]==null)
{
     header('Location: /treasurehunt/index.html');
}
else {
   $servername = "localhost";
$username = "mnmcoito_cogy";
$password = "cogy2k16";
$dbname = "mnmcoito_cognit2k16";
     $number = $_POST['no'];
 $name=$_SESSION["username"];

    $conn = new mysqli($servername, $username, $password, $dbname);
    if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
    } 

$sql="UPDATE `levels` SET `level`='$number',`date`=now() WHERE `email`='$name'";
  $result1 = mysqli_query($conn,$sql);

    mysqli_close($conn);
   

    }
?>