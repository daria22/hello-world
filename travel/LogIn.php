<?php 
session_start();
	
	if($_SESSION['tryLog'] == "False")
	{
 echo 
 '
 <div class = "login-card">
 <p>Incorrect username or password</><p> Please try again.</p></div>';
	}
	
?> 
<!DOCTYPE html>
<html>



<head>

  <meta charset="UTF-8">
	
  <title>CodePen - Log-in</title>
   <link rel="stylesheet" href="css/style.css" media="screen" type="text/css" />

</head>

<body>

  <div class="login-card">
    <h1>Log-in</h1><br>
  <form method = "POST" action = "Controller.php?action=log_in">
    <input type="text" name="Login" placeholder="Username">
	 <input type="password" name="Password" placeholder="Password">
    <input type="submit" name="login" class="login login-submit" value="Login">
  </form>
	
  <div class="login-help">
    <a href="Controller.php?action=sign_up_form">Inscription</a>
  </div>
</div>
</body>

</html>