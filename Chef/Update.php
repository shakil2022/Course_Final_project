<?php
include_once 'connection.php';
if(count($_POST)>0) {
mysqli_query($conn,"UPDATE chef set Chef_ID='" . $_POST['Chef_ID'] . "', Chef_Name='" . $_POST['Chef_Name'] . "', Chef_Address='" . $_POST['Chef_Address'] . "', Chef_Phone='" . $_POST['Chef_Phone'] . "' WHERE Chef_ID='" . $_POST['Chef_ID'] . "'");
//  $message = "Record Modified Successfully";
include "disp.php";


}
$result = mysqli_query($conn,"SELECT * FROM chef WHERE Chef_ID='" . $_GET['Chef_ID'] . "'");
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
// <!-- Chef_ID, Chef_Name, Chef_Address, Chef_Phone -->
<section class="sec">
Chef ID: <br>
<input style="width: 50%; height:30px; " type="hidden" name="Chef_ID" class="txtField" value="<?php echo $row['Chef_ID']; ?>">
<input style="width: 50%; height:30x; " type="text" name="Name"  value="<?php echo $row['Chef_ID']; ?>">
<br>
Chef Name: <br>
<input style="width: 50%; height:30px; " type="text" name="Chef_Name" class="txtField" value="<?php echo $row['Chef_Name']; ?>">
<br>
Chef Address:<br>
<input style="width: 50%; height:30px; " type="text" name="Chef_Address" class="txtField" value="<?php echo $row['Chef_Address']; ?>">
<br>
Chef Phone:<br>
<input style="width: 50%; height:30px; " type="text" name="Chef_Phone" class="txtField" value="<?php echo $row['Chef_Phone']; ?>">
<br>

<!-- <button>submit</button> -->
<input style="width: 50%; height:30px; margin-top:30px " type="submit" name="submit" value="Submit" class="buttom">
</section>

</form>
</body>
</html>