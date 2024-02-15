<?php
   session_start(); 
   $username="";
   $rollnumber="";
   $errors=array();

   $db=mysqli_connect('localhost', 'root', '', 'registration');

   if(isset($_POST['register'])){
   	$rollnumber=mysqli_real_escape_string($db, $_POST['rollnumber']);
   	$username=mysqli_real_escape_string($db, $_POST['username']);
   	$password=mysqli_real_escape_string($db, $_POST['password']);
   	$password1=mysqli_real_escape_string($db, $_POST['password1']);

   	if(empty($username)){
       array_push($errors, "Username is required");
   	}
   	if(empty($rollnumber)){
       array_push($errors, "Rollnumber is required");
   	}
   	if(empty($password)){
   		array_push($errors, "Password is required");
   	}
   	if($password != $password1){
   		array_push($errors, "The passwords are not matching");
   	}

   	if(count($errors)==0) {
   		$password = md5($password);
   		$sql = "INSERT INTO users (rollnumber,username,password) VALUES ('$rollnumber','$username','$password')";
   		mysqli_query($db, $sql);
   		$_SESSION['username']=$username;
   		$_SESSION['success']= "You are now logged in";
   		header('location: index.php');
   	}
   }

   if(isset($_POST['login'])) {
   		$username=mysqli_real_escape_string($db, $_POST['username']);
   	    $password=mysqli_real_escape_string($db, $_POST['password']);
   	    $rollnumber=mysqli_real_escape_string($db, $_POST['rollnumber']);


   	    if(empty($username)){
           array_push($errors, "Username is required");
   	    }
      	if(empty($password)){
   		   array_push($errors, "Password is required");
       	}

  	    if(empty($rollnumber)){
          array_push($errors, "Rollnumber is required");
      	}

       	if(count($errors) == 0) {
       		$password=md5($password);
       		$query="SELECT * FROM users WHERE username='$username' AND password='$password'";
       		$result=mysqli_query($db, $query);
       		if(mysqli_num_rows($result) == 1){

   		        $_SESSION['rollnumber']=$rollnumber;
       			$_SESSION['username']=$username;
       			$_SESSION['success']="You are now logged in";
       			header('location:index.php');
       		}
       		else{
       			array_push($errors, "Wrong username/password");
       		}
       	}
   }

   if(isset($_GET['logout'])){
   	session_destroy();
   	unset($_SESSION['username']);
   	header('location: login.php');
   }

   

 ?>