<!DOCTYPE html>
<html>
<body>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "ipl";
$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT value FROM disp WHERE id=0";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
     while($row = $result->fetch_assoc()) {
        echo "Player Sold for  :  " . $row["value"]. "<br>";
     }
} else {
     echo "0 results";
}

$conn->close();
?>  
<!--truncate table disp-->
</body>
</html>
