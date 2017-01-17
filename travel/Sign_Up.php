
<?php

function isMailExist($connect,$requete,$mail)
	{
		$req = $connect->query($requete);
		foreach($req as $donnees)
		{
			if($mail == $donnees['Login'])
			{
				return false;
			}			
		}
		return true;
	}
function isPasswordCorrect()
{
	$passLenght = strlen($_POST[Password]);
if($passLenght < 6)
	return false;
else 
return true;	
}
?>


      
</body>
</html>