<?php
include_once 'connection.php';
if(count($_POST)>0) {
mysqli_query($conn,"UPDATE available_cakes set Cake_Type='" . $_POST['Cake_Type'] . "', availabe_piece='" . $_POST['availabe_piece'] . "' WHERE Cake_Type='" . $_POST['Cake_Type'] . "'");
//  $message = "Record Modified Successfully";
include "disp.php";

}
$result = mysqli_query($conn,"SELECT * FROM available_cakes WHERE Cake_Type='" . $_GET['Cake_Type'] . "'");
$row= mysqli_fetch_array($result);
?>
<html>
<head>
<title>Update Data</title>
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
Cake Type: <br>
<input style="width: 50%; height:30px; " type="hidden" name="Cake_Type" class="txtField" value="<?php echo $row['Cake_Type']; ?>">
<input style="width: 50%; height:30x; " type="text" name="name"  value="<?php echo $row['Cake_Type']; ?>">
<br>
Available Piece: <br>
<input style="width: 50%; height:30px; " type="number" name="availabe_piece" class="txtField" value="<?php echo $row['availabe_piece']; ?>">
<br>

<!-- <button>submit</button> -->
<input style="width: 50%; height:30px; margin-top:30px " type="submit" name="submit" value="Submit" class="buttom">
</section>

</form>
</body>
</html>