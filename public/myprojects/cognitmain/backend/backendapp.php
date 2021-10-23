<?php
$dbname = "mnmcoito_cognit2k16";
$dbuser = "mnmcoito_cogy";
$dbpassword = "cogy2k16";
$dbhost = "localhost";
$conn = new mysqli($dbhost, $dbuser, $dbpassword, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$method = $_POST["method"];
$tablename = "cognit";
if ($method == "insert") {
	$cid=$_POST["cid"];
	$name=$_POST["name"];
	$email=$_POST["email"];
	$number=$_POST["mobile"];
	$college=$_POST["college"];
	$gender=$_POST["gender"];
	$dept=$_POST["dept"];
	$sql =  "INSERT INTO ".$tablename." (cognitid, name, gender, email, password, mobnum, collegename, dept) VALUES ('".$cid."', '".$name."','".$gender."','".$email."','x','".$number."','".$college."','".$dept."')";
	if ($conn->query($sql) == FALSE) {
		echo "Error: " . $sql . "<br>" . $conn->error;
	}else{
		echo "success";
	}
} else if ($method == "search") {
	$searchBy = $_POST["searchby"];
	$data = $_POST["data"];
	$sql = "SELECT cognitid,name,mobnum,email,collegename FROM " . $tablename . " WHERE ".$searchBy."='" . $data."'";
	$result = $conn->query($sql);

	if ($result->num_rows > 0) {
	    $row = $result->fetch_assoc();
	    echo $row["cognitid"]. "," . $row["name"]. "," . $row["mobnum"]. "," . $row["email"]. "," . $row["collegename"];
	} else {
	    echo "empty";
	}
} elseif ($method == "update") {
	$cid=$_POST["cid"];
	$name=$_POST["name"];
	$email=$_POST["email"];
	$number=$_POST["mobile"];
	$college=$_POST["college"];
	$dept=$_POST["dept"];

	$sql = "UPDATE  ". $tablename ." SET  name =  '". $name ."',
		email =  '". $email ."',
		mobnum =  '". $number ."',
		collegename =  '". $college ."',
		dept =  '". $dept ."' WHERE cognitid =  '". $cid ."' LIMIT 1 ";

		if ($conn->query($sql) == FALSE) {
			echo "Error: " . $sql . "<br>" . $conn->error;
		}else{
			echo "success";
		}
}
$conn->close();
?>