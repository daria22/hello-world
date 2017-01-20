<?php
include('AdminSingleton.php');
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
	function isAdmin($login,$password)
	{
		$object = AdminSingleton::getInstance();
		if($login == $object->login && $password == $object->password)
			return true;
		else 
			return false;
	}


?>