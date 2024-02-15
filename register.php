<?php include('server.php'); ?>

<!DOCTYPE html>
<html>

<header>
 <meta charset="UTF-8">
 <meta name="viewport" content="width=device-width initial-scale="1.0">
 <title>Register Page</title>

 <link type="text/css" rel="stylesheet" href="styles.css?v=<?php echo time(); ?>">
 <script defer src="login-page.js"></script>
</header>

<body>
 <img src="VJIT.png"/ id="head-holder">
 <main id="main-holder">
  <h1>Register</h1>

  
  <form method="post" action="register.php" id="login-form">
   <?php include('errors.php'); ?>
   <input type="text" id="username-field" class="login-form-field" name="username" placeholder="Username">
   <input type="text" id="username-field" class="login-form-field" name="rollnumber" placeholder="Rollnumber">
   <input type="password" id="password-field" class="login-form-field" name="password" placeholder="Password">
   <input type="password" id="password-field" class="login-form-field" name="password1" placeholder="Confirm Password">

   <button type="submit" name="register" id="login-form-submit">Register</button>
   <p>Already a member? <a href="login.php" class="reg">Login</a></p>
  </form>
  
 </main>
</body>

</html>