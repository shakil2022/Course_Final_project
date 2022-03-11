<?php
	$Cake_Type = $_POST['Cake_Type'];
	//$Available_piece = $_POST['Available_piece'];
	$available_piece = $_POST['available_piece'];

	// Database connection
	$conn = new mysqli('localhost','root','','course_final_project');
	if($conn->connect_error){
		echo "$conn->connect_error";
		die("Connection Failed : ". $conn->connect_error);
	} else {
		$stmt = $conn->prepare("insert into available_cakes(Cake_Type, available_pices) values(?, ?)");
		$stmt->bind_param("ss", $Cake_Type, $available_piece);
		$execval = $stmt->execute();
		echo $execval;
		include "disp.php";
		$stmt->close();
		$conn->close();
	}
?>