<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "ipl";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
$q = intval($_GET['q']);
$sql="SELECT teamname FROM teamname WHERE id = '".$q."'";
$result = $conn->query($sql);
$row = mysqli_fetch_array($result); 
echo "" . $row["teamname"]. "<br>";
?>