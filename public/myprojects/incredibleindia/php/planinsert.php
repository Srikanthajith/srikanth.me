<?php
include 'database.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $guideid = $_POST['guideid'];
    $hotelid = $_POST['hotelid'];
    $travelid = $_POST['travelid'];
}


$sql = "INSERT INTO `plantour`(`guideid`, `travelid`, `hotelid`, `guideconfirmation`) VALUES ('$guideid','$travelid','$hotelid',0);";
$result = mysqli_query($conn,$sql);
header('Location: ../places.html');
mysqli_close($conn);

?>