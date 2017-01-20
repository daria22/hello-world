<?php

$connect = new PDO("mysql:host=localhost;dbname=stud0505_user",'localhost','9PN53ynR');
liste($connect);
function liste($connect) {
		
	$req = $connect->query('SELECT Title,ID FROM NEWS');
	echo "<table border = '1'> <caption>Liste of news</caption>";
	echo "<tr><th>News</th>";	
		foreach ($req as $donnees) {
		echo '<tr> <td>'.$donnees['Title'].'</td>
		
        
		<td><a href="'.$_SERVER["PHP_SELF"].'?action=delete&ID='.$donnees["ID"].'">Suppression</a></td></tr>';
				}
				
			echo "</table>";
			
			}
			
		
?>
<!DOCTYPE html>
<html>
<head>

  <meta charset="UTF-8">
  <title>Admin</title>
    <link rel="stylesheet" href="css/style.css" media="screen" type="text/css" />

</head>

<body>

  <form method = "POST" action = "NewsForm.html">
    <input type="submit" name="AddNews" class="login login-submit" value="AddNews">
  </form>


  

</body>


</html>