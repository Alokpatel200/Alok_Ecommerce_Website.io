<?php
	$firstName = $_POST['firstName'];
	$lastName = $_POST['lastName'];
	
	$email = $_POST['country'];
	$password = $_POST['subject'];
	

	// Database connection
	$conn = new mysqli('localhost','root','','test');
	if($conn->connect_error){
		echo "$conn->connect_error";
		die("Connection Failed : ". $conn->connect_error);
	} else {
		$stmt = $conn->prepare("insert into registration(firstName, lastName, country,subject) values(?, ?, ?, ?)");
		$stmt->bind_param("ssss", $firstName, $lastName, $country, $subject);
		$execval = $stmt->execute();
		echo $execval;
		echo "Registration successfully...";
		$stmt->close();
		$conn->close();
	}
?>