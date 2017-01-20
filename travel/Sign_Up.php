
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
function isPasswordCorrect($passLenght)
{
	return strlen($passLenght)>=6;
}
function isNumberCorrect($numberPhone)
{
	if(ereg("^[0-9]{1,12}$",$numberPhone) && strlen($numberPhone) > 5)
		return true;
	else 
		return false;
}

?>


      
</body>
</html>