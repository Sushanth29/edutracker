<?php include('server.php'); 
 
 if(empty($_SESSION['username'])){
 	header('location:login.php');
 }

 $rollno= mysqli_real_escape_string($db,$_SESSION['rollnumber']);
 $query="SELECT * FROM students WHERE rollnumber='$rollno'";
 $result=mysqli_query($db,$query);

?>
<!DOCTYPE html>
<html>

<header>
 <meta charset="UTF-8">
 <meta name="viewport" content="width=device-width initial-scale="1.0">
 <title>Home Page</title>
 <link href="styles.css?v=<?php echo time(); ?>" rel="stylesheet" type="text/css" />
</header>

<body>
	<img src="VJIT.png"/ id="head-holder">
 <main id="main-holder">
  <h1>Home page</h1>
  <div>

  	 <?php if (isset($_SESSION["username"])): ?>
 
  	 	 <button id="btn"><a href="index.php?logout='1'" id="log">Logout</a></button>
      <p align="center">Welcome <strong><?php echo $_SESSION['username']; ?></strong></p>
    <?php endif ?>


  	<?php if (isset($_SESSION['success'])): ?>
  	   <div> 
  	   	<h3>
  	   		<?php
  	   		  echo $_SESSION['success'];
  	   		  unset($_SESSION['success']);
  	   		?>
  	   	</h3>
  	   </div>

    <?php endif ?>

   

  </div>

  <table border="1px" align="center" id="tabb">
 	<tr>
 		<th colspan="11" style="color: red">Marks Details</th>
 	</tr>
 	<tr style="color :#531CEE">
 		<th>Roll Number</th>
 		<th>Name</th>
 		<th>DAA</th>
 		<th>JAVA</th>
 		<th>CO</th>
 		<th>DBMS</th>
 		<th>SE</th>
 		<th>ES</th>
 		<th>PC</th>
 		<th>Total</th>
 		<th>Percentage</th>
 	</tr>

 	<?php 
       while($rows=mysqli_fetch_assoc($result))
       {

 	 ?>
 	<tr align="center">
 		
			<td> <?php echo $rows["rollnumber"];  ?></td>
			<td> <?php echo $rows["username"];  ?></td>
			<td> <?php echo $rows["DAA"];  ?></td>
			<td> <?php echo $rows["JAVA"];  ?></td>
			<td> <?php echo $rows["CO"];  ?></td>
			<td> <?php echo $rows["DBMS"];  ?></td>
			<td> <?php echo $rows["SE"];  ?></td>
			<td> <?php echo $rows["ES"];  ?></td>
			<td> <?php echo $rows["PC"];  ?></td>
			<td> <?php echo $rows["Total"];  ?></td>
			<td> <?php echo $rows["percentage"];  ?>%</td>

 	</tr>
  <?php
   }
   ?>

 </table>

 </main>





</body>

</html>