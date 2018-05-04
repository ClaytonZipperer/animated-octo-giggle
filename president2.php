<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
<?php
$servername = "localhost";
$username = "web";
$password = "temp";
$dbname = "usadb";

$conn = new mysqli($servername, $username, $password, $dbname);
// check connection
if($conn->connect_error){
	die("connection failed: " . $conn->connect_error);
}
	
	

$PName = $_POST["PName"];
$Years = $_POST["Years"];
$Born_In = $_POST["Born_In"];
$Death_Age = $_POST["Death_Age"];
$Party = $_POST["Party"];
$Birth_Year = $_POST["Birth_Year"];
echo ($PName.$Years);

$sql = "INSERT INTO President (PName, Birth_Year, Years, Death_Age, Party, Born_In) VALUES('$PName', $Birth_Year, $Years, $Death_Age, '$Party', '$Born_In');";
	
if ($conn->query($sql) === TRUE) {
	echo "New record created successfully";
} else {
	echo "error:" . $sql . "<br>" . $conn->error;
}
$conn->close();
?>
</body>
</html>