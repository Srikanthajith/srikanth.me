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
     $name=$_SESSION["username"];
    

    $conn = new mysqli($servername, $username, $password, $dbname);
    if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
    } 


    $sql = "SELECT `level` FROM `levels` WHERE `email`='$name'";
    $result = mysqli_query($conn,$sql);
    $row = mysqli_fetch_array($result); 

    if(mysqli_num_rows($result) > 0)
    {
      

        echo $row['level'];
    }

    else {
    echo 'false';
    }
    

    mysqli_close($conn);
   

    }
?>