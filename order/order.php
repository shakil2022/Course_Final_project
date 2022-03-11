<?php
	$Order_No = $_POST['Order_No'];
	$Name = $_POST['Name'];
	$Email = $_POST['Email'];
	$Address = $_POST['Address'];
	$Phone = $_POST['Phone'];
	$Order_Date = $_POST['Order_Date'];
    $Order_Time = $_POST['Order_Time'];
    $Cake_Flavour = $_POST['Cake_Flavour'];
    $kg = $_POST['kg'];

	// Database connection
	$conn = new mysqli('localhost','root','','course_final_project');
	if($conn->connect_error){
		echo "$conn->connect_error";
		die("Connection Failed : ". $conn->connect_error);
	} else {
		$stmt = $conn->prepare("insert into cake_order(Order_No, Name, Email, Address, Phone, Order_Date,Order_Time,Cake_Flavour,kg) values(?, ?, ?, ?, ?, ?,?,?,?)");
		$stmt->bind_param("issssssss", $Order_No, $Name, $Email, $Address, $Phone, $Order_Date, $Order_Time, $Cake_Flavour, $kg);
		$execval = $stmt->execute();
		echo $execval;
	 //echo "Order completed..";
		// echo('DispStudent.php')
		include "order_completed.php";
		$stmt->close();
		$conn->close();
	}
?>