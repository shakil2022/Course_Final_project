<?php
	$Chef_ID = $_POST['Chef_ID'];
	$Chef_Name = $_POST['Chef_Name'];
	$Chef_Address = $_POST['Chef_Address'];
	$Chef_Phone = $_POST['Chef_Phone'];
	

	// Database connection
	$conn = new mysqli('localhost','root','','course_final_project');
	if($conn->connect_error){
		echo "$conn->connect_error";
		die("Connection Failed : ". $conn->connect_error);
	} else {
		$stmt = $conn->prepare("insert into chef(Chef_ID, Chef_Name, Chef_Address, Chef_Phone) values(?, ?, ?, ?)");
		$stmt->bind_param("isss", $Chef_ID, $Chef_Name, $Chef_Address, $Chef_Phone);
		$execval = $stmt->execute();
		echo $execval;
	 //echo "Order completed..";
		// echo('DispStudent.php')
		// include "order_completed.php";
		include "disp.php";
		$stmt->close();
		$conn->close();
	}
?>