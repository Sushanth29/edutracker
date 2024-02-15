<?php include('server.php'); ?>

<!DOCTYPE html>
<html>

<header>
 <meta charset="UTF-8">
 <meta name="viewport" content="width=device-width initial-scale="1.0">
 <title>Login Page</title>

 <link type="text/css" rel="stylesheet" href="styles.css?v=<?php echo time(); ?>">
 <script defer src="login-page.js"></script>
</header>

<body>
 <img src="VJIT.png"/ id="head-holder">
 <main id="main-holder">
  <h1>Login</h1>

  
  <form action="login.php" method="post" id="login-form">
  	<?php include('errors.php'); ?>
   <input type="text" id="username-field" class="login-form-field" name="username" placeholder="Username">
   <input type="text" id="username-field" class="login-form-field" name="rollnumber" placeholder="Rollnumber">
   <input type="password" id="password-field" class="login-form-field" name="password" placeholder="Password">

   <button type="submit" name="login" id="login-form-submit">Login</button>
   
  </form>
  
 </main>
</body>

</html>