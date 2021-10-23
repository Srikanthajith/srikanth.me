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
$sql="INSERT INTO disp (value) SELECT value FROM player where id=1";
$result = $conn->query($sql);
$sql="UPDATE player SET value=10000 WHERE id = '".$q."'";
$result = $conn->query($sql);
$row = mysqli_fetch_array($result); 
echo "" . $row["value"]. "<br>";
?>
