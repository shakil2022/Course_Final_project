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
		<th colspan="5"><h2>Cake Order List</h2></th> 
		</tr>
   
			  <th> Chef ID </th> 
			  <th> Chef Name </th> 
			  <th> Chef Address </th> 
			  <th>Chef Phone </th> 
        <th>Operations</th>
			  
		</tr> 
		<?php 
    include 'connection.php';
    $sql = "select * from chef ";
    $query = mysqli_query($conn, $sql);
     while($row1=mysqli_fetch_array($query)) 
		{ 
		?> 
		<tr> <td class="tdr"><?php echo $row1['Chef_ID']; ?></td>
		<td class="tdr"><?php echo $row1['Chef_Name']; ?></td> 
		<td class="tdr"><?php echo $row1['Chef_Address']; ?></td> 
		<td class="tdr"><?php echo $row1['Chef_Phone']; ?></td> 
    <!-- Chef_ID, Chef_Name, Chef_Address, Chef_Phone -->
    <td style="width: 140px;">
                                <button><a href="Delete.php?Chef_ID=<?php echo $row1["Chef_ID"]; ?>">Delete</a></button>
                                <button>
                                <a href="Update.php?Chef_ID=<?php echo $row1["Chef_ID"]; ?>">Update</a>
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
 <button class="button" > <a href="../dashboard/home.php" style="text-decoration: none;">Home Page</a> </button>
              </center>
</body> 
	</html>