<!DOCTYPE html> 
<html> 
	<head> 
    
		<title> Fetch Data From Database </title> 
    
    <style>
       body{
        background-image: url(../images/sea2.jpg);
      background-repeat: no-repeat;
      background-size: cover;
      }
      .tdr{
        text-align:center;
      }
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
.table2{
  margin-top: 70px;

}

      </style>
	</head> 
  
	<body bgcolor="lightblue"> 
	<table align="center" class="table2" border="3px solid black" style="width:1100px; line-height:40px;"> 
	<tr> 
		<th colspan="10"><h2>Cake Order List</h2></th> 
		</tr>
   
			  <th> Order No </th> 
			  <th> Name </th> 
			  <th> Email </th> 
			  <th> Address </th> 
        <th> Phone </th> 
        <th> Order Date </th>
        <th>Order Time</th>
        <th>Cake Flavour</th>
        <th>KG</th>
        <th>Operations</th>
			  
		</tr> 
		<?php 
    include 'connection.php';
    $sql = "select * from cake_order ";
    $query = mysqli_query($conn, $sql);
     while($row1=mysqli_fetch_array($query)) 
		{ 
		?> 
		<tr> <td class="tdr"><?php echo $row1['Order_No']; ?></td> 
		<td class="tdr"><?php echo $row1['Name']; ?></td> 
		<td class="tdr"><?php echo $row1['Email']; ?></td> 
		<td class="tdr"><?php echo $row1['Address']; ?></td> 
    <td class="tdr"><?php echo $row1['Phone']; ?></td>
    <td class="tdr"><?php echo $row1['Order_Date']; ?></td>
    <td class="tdr"><?php echo $row1['Order_Time']; ?></td>
    <td class="tdr"><?php echo $row1['Cake_Flavour']; ?></td>
    <td class="tdr"><?php echo $row1['kg']; ?></td>
    <td style="width: 140px;">
                                <button><a href="Delete.php?Order_No=<?php echo $row1["Order_No"]; ?>">Delete</a></button>
                                <button>
                                <a href="Update.php?Order_No=<?php echo $row1["Order_No"]; ?>">Update</a>
                                </button>
                               

                            </td>
		</tr> 
	<?php 
               } 
          ?> 

	</table>
   <!-- <a  href="#"><h3 btn style="font-family: sans-serif;  text-align:center; font-size:30px; font-color:green;" >Insert</h3> -->
<!-- <button class="btn btn-primary btn-lg center"> <a href="#"></a> INSERT</button> -->

  <center>
 <!-- <button class="button" > <a href="student.html" style="text-decoration: none;">INSERT</a> </button> 
 <button class="button" > <a href="index.html" style="text-decoration: none;">Search</a> </button> -->
 <button class="button" > <a href="../index.php" style="text-decoration: none;">Home Page</a> </button>
              </center>
</body> 
	</html>