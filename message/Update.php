<?php
include_once 'connection.php';
if(count($_POST)>0) {
mysqli_query($conn,"UPDATE message set Order_No='" . $_POST['Order_No'] . "', Name='" . $_POST['Name'] . "', Phone='" . $_POST['Phone'] . "', Messages='" . $_POST['Messages'] . "' WHERE Order_No='" . $_POST['Order_No'] . "'");
//  $message = "Record Modified Successfully";
// Stu_ID, Name, Room_Num, Messages
include "disp.php";
//require "DispStudent.php";
// Order_No, Name, Phone, Messages
}
$result = mysqli_query($conn,"SELECT * FROM message WHERE Order_No='" . $_GET['Order_No'] . "'");
$row= mysqli_fetch_array($result);
?>
<html>
<head>
<title>Update Message Record</title>
<style>
  body{
    background-image: url(../images/sea2.jpg);
    background-repeat: no-repeat;
    background-size: cover;
  }
  .sec{
    margin: 50px 500px;
   align-items: center;
   line-height: 30px;
  }
</style>
</head>
<body>
<form name="frmUser" method="post" action="">
<div><?php if(isset($message)) { echo $message; } ?>
</div>
<!-- <div style="padding-bottom:5px;">
 <a href="retrieve.php">Employee List</a> 
</div> -->
<section class="sec">
Order No: <br>
<input style="width: 50%; height:30px; " type="hidden" name="Order_No" class="txtField" value="<?php echo $row['Order_No']; ?>">
<input style="width: 50%; height:30x; " type="text" name="Name"  value="<?php echo $row['Order_No']; ?>">
<br>
Name: <br>
<input style="width: 50%; height:30px; " type="text" name="Name" class="txtField" value="<?php echo $row['Name']; ?>">
<br>
Phone Number:<br>
<input style="width: 50%; height:30px; " type="text" name="Phone" class="txtField" value="<?php echo $row['Phone']; ?>">
<br>
Messages:<br>
<input style="width: 50%; height:30px; " type="text" name="Messages" class="txtField" value="<?php echo $row['Messages']; ?>">
<br>
<input style="width: 50%; height:30px; margin-top:30px " type="submit" name="submit" value="Submit" class="buttom">
</section>

</form>
</body>
</html>