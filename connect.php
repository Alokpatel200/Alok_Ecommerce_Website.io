<?php
	$firstName = $_POST['username'];
	$lastName = $_POST['passward'];
	

	// Database connection
	$conn = new mysqli('localhost','root','','test');
	if($conn->connect_error){
		echo "$conn->connect_error";
		die("Connection Failed : ". $conn->connect_error);
	} else {
		$stmt = $conn->prepare("insert into registration(username,passward) values(?, ?)");
		$stmt->bind_param("ss", $username,$passward);
		$execval = $stmt->execute();
		echo $execval;
		echo "Registration successfully...";
		$stmt->close();
		$conn->close();
	}
?>