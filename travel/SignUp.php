<?php 
session_start();
	
	if($_SESSION['Password'] == "False" || $_SESSION['Number'] == "False")
	{
	
	
 if($_SESSION['Password'] == "False")
 {	
echo'<div class = "login-card">
 <p>Password must be longer than 6 symbols </><p> Please try again.</p>	</div>';
 }
  else if( $_SESSION['Number'] == "False")
	echo'<div class = "login-card">
	<p>Number must be longer than 10 symbols</><p> Please try again.</p>	</div>';
	
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
    <h1>Sign-Up</h1><br>
  <form method = "POST" action = "Controller.php?action=sign_up">
    <input type="text" name="Name" placeholder="Name">
	<input type="text" name="Number" placeholder="Number(+380661488306)">
    <input type="text" name="Login" placeholder="Email">
	<input type="password" name="Password" placeholder="Password">
    <input type="submit" name="Done" class="login login-submit" value="Sign-Up">
  </form>
	
</div>

  

</body>

</html>