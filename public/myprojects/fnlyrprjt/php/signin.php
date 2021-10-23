<?php

session_start();
include 'database.php';

    $name = $_POST['email'];
    $pass = $_POST['password'];

    $sql = "SELECT `Email`, `password` FROM `user` WHERE `Email`='$name' and `password`='$pass'";
    $result = mysqli_query($conn,$sql);
    $sql2 = "SELECT `email`, `password` FROM `guide` WHERE `email`='$name' and `password`='$pass'";
    $result2 = mysqli_query($conn,$sql2);

    if(!$result || mysqli_num_rows($result) <= 0)
    {
           echo "Error:no user is there";
    }

     else {
    
            $sql3 = "SELECT `userid` FROM `user` WHERE `email`='$name' and `password`='$pass'";
            $userid = mysqli_query($conn,$sql2);
            $_SESSION["id"]=$userid;
            header('Location: ../user.php');
          }

    if(!$result2 || mysqli_num_rows($result2) <= 0)
    {
            echo "Error:no guide is there";
    }

    else {
            $_SESSION["id"]=$name;
            header('Location: ../guide.php');
}

mysqli_close($conn);

?>