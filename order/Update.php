<?php
include_once 'connection.php';
if(count($_POST)>0) {
mysqli_query($conn,"UPDATE cake_order set Order_No='" . $_POST['Order_No'] . "', Name='" . $_POST['Name'] . "', Email='" . $_POST['Email'] . "', Address='" . $_POST['Address'] . "' ,Phone='" . $_POST['Phone'] . "' ,Order_Date='" . $_POST['Order_Date'] . "',Order_Time='" . $_POST['Order_Time'] . "',Cake_Flavour='" . $_POST['Cake_Flavour'] . "',kg='" . $_POST['kg'] . "' WHERE Order_No='" . $_POST['Order_No'] . "'");
//  $message = "Record Modified Successfully";
include "disp.php";
//require "DispStudent.php";
// Order_No, Name, Email, Address, Phone, Order_Date,Order_Time,Cake_Flavour,kg

}
$result = mysqli_query($conn,"SELECT * FROM cake_order WHERE Order_No='" . $_GET['Order_No'] . "'");
$row= mysqli_fetch_array($result);
?>
<html>
<head>
<title>Update Order Data</title>
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
 // Order_No, Name, Email, Address, Phone, Order_Date,Order_Time,Cake_Flavour,kg
</div> -->
<section class="sec">
Order ID: <br>
<input style="width: 50%; height:30px; " type="hidden" name="Order_No" class="txtField" value="<?php echo $row['Order_No']; ?>">
<input style="width: 50%; height:30x; " type="text" name="Name"  value="<?php echo $row['Order_No']; ?>">
<br>
Name: <br>
<input style="width: 50%; height:30px; " type="text" name="Name" class="txtField" value="<?php echo $row['Name']; ?>">
<br>
Email:<br>
<input style="width: 50%; height:30px; " type="text" name="Email" class="txtField" value="<?php echo $row['Email']; ?>">
<br>
Address:<br>
<input style="width: 50%; height:30px; " type="text" name="Address" class="txtField" value="<?php echo $row['Address']; ?>">
<br>
Phone:<br>
<input style="width: 50%; height:30px; " type="text" name="Phone" class="txtField" value="<?php echo $row['Phone']; ?>">
<br>
Order Date:<br>
<input style="width: 50%; height:30px; " type="date" name="Order_Date" class="txtField" value="<?php echo $row['Order_Date']; ?>">
<br>
Order Time:<br>
<input style="width: 50%; height:30px; " type="time" name="Order_Time" class="txtField" value="<?php echo $row['Order_Time']; ?>">
<br>
 Cake Flavour:<br>
<input style="width: 50%; height:30px; " type="text" name="Cake_Flavour" class="txtField" value="<?php echo $row['Cake_Flavour']; ?>">
<br>
KG:<br>
<input style="width: 50%; height:30px; " type="text" name="kg" class="txtField" value="<?php echo $row['kg']; ?>">
<br>

<!-- <button>submit</button> -->
<input style="width: 50%; height:30px; margin-top:30px " type="submit" name="submit" value="Submit" class="buttom">
</section>

</form>
</body>
</html>