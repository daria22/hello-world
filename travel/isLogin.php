<?php 
session_start();
if(!empty($_SESSION['LogIn'])) { 

if($_SESSION['LogIn'] == "True")
{
 echo '
	<form method = "POST" action = "Controller.php?action=log_out">
	<input type="submit" value=" Bonjour '.$_SESSION['username'].'"> </form>';
	
}
else if ($_SESSION['LogIn'] = "False")
{
	echo '
<form method = "POST" action = "Controller.php?action=log_in_form">
<input type="submit" value="LogIn"> </form>';	
}
}
else 
{
	echo '
<form method = "POST" action = "Controller.php?action=log_in_form">
<input type="submit" value="LogIn"> </form>';	
}
	
?>
