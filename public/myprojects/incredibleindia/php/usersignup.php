<?php

include 'database.php';


$username=$_POST["username"];
$mailid=$_POST["mailid"];
$password=$_POST["password"];
$mobilenumber=$_POST["mobilenumber"];
$location=$_POST["location"];
$userid=$_POST["mobilenumber"];


$sql = "INSERT INTO user (userid,Name,Email,password,phoneno,location)
VALUES (NULL,'$username','$mailid','$password','$mobilenumber','$location')";

if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

?>