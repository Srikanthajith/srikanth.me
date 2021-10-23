<?php
include 'database.php';
$id = $_POST['id'];
echo $id;

$sql = "UPDATE `confirmation` SET `category`=0 WHERE `category`=$id "   ;
$result = mysqli_query($conn,$sql);



?>
