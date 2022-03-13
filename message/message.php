<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
         .button {
  background-color: #4CAF50; /* Green */
  border: none;
  color: white;
  padding: 10px 25px;
  text-align: center;
  margin-top: 60px;
  border-radius: 5px;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
}
    </style>
</head>
<body>
<?php
	$Stu_ID = $_POST['Order_No'];
	$Name = $_POST['Name'];
	$Room_Num = $_POST['Phone'];
	$Messages = $_POST['Messages'];

	// Database connection
	$conn = new mysqli('localhost','root','','course_final_project');
	if($conn->connect_error){
		echo "$conn->connect_error";
		die("Connection Failed : ". $conn->connect_error);
	} else {
		$stmt = $conn->prepare("insert into message(Order_No, Name, Phone, Messages) values(?, ?, ?, ?)");
		$stmt->bind_param("ssss",$Order_No, $Name, $Phone, $Messages);
		$execval = $stmt->execute();
		echo $execval;
		// echo "Inserted successfully...";
		// echo('DispStudent.php')
        echo "Your Problem has been recorder.....";
		// include "../home.php";
        // echo('/home.php');
        // include '../home.php';
		$stmt->close();
		$conn->close();
	}
?>
<center>
 <button class="button" > <a href="../index.php" style="text-decoration: none;">Home Page</a> </button> 
              </center>
</body>
</html>
