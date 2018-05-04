<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
<?php
	$name = ($_POST['PName']);
	$birthyear = ($_POST['birthyear']);
	$years = ($_POST['presyears']);
	$death = ($_POST['deathage']);
	$party = ($_POST['party']);
	$state = ($_POST['bornstate']);
	
	$servername = "localhost";
	$username = "web";
	$password = "temp";
	$dbname = "usadb";
	
	echo $name;
	echo $birthyear;
	echo $years;
	echo $death;
	echo $party;
	echo $state;
	// Create connection
	$conn = new mysqli($servername, $username, $password, $dbname);
	// Check connection
	if ($conn->connect_error)	{
		die("Connection failed: " . $conn->connect_error);
	}
	else {
		echo "Connection successful.";
	}
	$sql = "insert into president (PName,  Birth_Year, Years, Death_Age, Party, Born_In) VALUES ('$name', '$birthyear', '$years', '$death', '$party', '$state');";
	if ($conn->query($sql) === TRUE)	{
		echo "New record created successfully.";
	}
	else {
		echo "Eroor: " . $sql . "<br>" . $conn->error;
	}
	$conn->close();
	?>
</body>
</html>