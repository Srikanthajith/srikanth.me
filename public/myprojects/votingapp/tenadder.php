
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "vote";
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
$q = intval($_GET['p']);
$sql="INSERT INTO secretary (number, thamizh, karthick) 
VALUES ('1', '1', '0')";
$conn->query($sql);
?>