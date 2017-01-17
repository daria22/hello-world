<?php

function isInputCorrect($connect,$requete,$password)
	{
		$req = $connect->query($requete);
		foreach($req as $donnees)
		{
			if($password == $donnees['Password'])
			{
				return true;
			}			
		}
		return false;
	}


?>