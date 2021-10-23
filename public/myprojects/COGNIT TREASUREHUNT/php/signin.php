<?php
session_start();
$servername = "localhost";
$username = "mnmcoito_cogy";
$password = "cogy2k16";
$dbname = "mnmcoito_cognit2k16";


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // collect value of input field
    $name = $_POST['email'];
    $pass = $_POST['password'];

}

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "SELECT `email`, `password` FROM `cognit` WHERE `email`='$name' and `password`='$pass'";

 $result = mysqli_query($conn,$sql);

     
    if(!$result || mysqli_num_rows($result) <= 0)
    {
         echo "Error:no user is there";
    }
     else {
echo "string2";
    
        $sql1 = "SELECT `level` FROM `levels` WHERE `email`='$name'";
        $result1 = mysqli_query($conn,$sql1);
         if(!$result1 || mysqli_num_rows($result1) <= 0)
    {
        echo "string";
        
         $sql2 = "INSERT INTO levels(`email`, `date`) VALUES ('".$name."',now())";
         $result = mysqli_query($conn,$sql2);
         $result1 = mysqli_query($conn,$sql1);

         
    }






    
    $_SESSION["username"]=$name;
  
    header('Location: /treasurehunt/main.php');

}

mysqli_close($conn);
?>