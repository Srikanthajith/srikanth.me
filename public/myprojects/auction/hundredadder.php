
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "ipl";
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
$q = intval($_GET['p']);
$sql="UPDATE player SET value=value+10000 WHERE id='".$q."'";
$conn->query($sql);
require 'sample.php';
?>
