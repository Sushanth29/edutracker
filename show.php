<?php include('server.php'); 

$query="SELECT * FROM students WHERE rollnumber=$_SESSION['rollnumber']";
$result=mysqli_query($db,$query);

?>

<!DOCTYPE html>
<html>
<head>
	<title>Details</title>
	
</head>
<body>

 <table border="1px" align="center" style="width: 600px;
	align-items: center;
	line-height: 40px;">
 	<tr>
 		<th colspan="4">Details</th>
 	</tr>
 	<tr>
 		<th>Id</th>
 		<th>Roll Number</th>
 		<th>Name</th>
 		<th>Marks</th>
 	</tr>

 	<?php 
       while($rows=mysqli_fetch_assoc($result))
       {

 	 ?>
 	<tr>
 		
			<td> <?php echo $rows["id"];  ?></td>
			<td> <?php echo $rows["rollnumber"];  ?></td>
			<td> <?php echo $rows["username"];  ?></td>
			<td> <?php echo $rows["marks"];  ?></td>

 	</tr>
  <?php
   }
   ?>

 </table>

 


</body>
</html>