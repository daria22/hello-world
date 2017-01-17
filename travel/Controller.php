<!DOCTYPE  html>
<html>
<head>
	<meta charset="utf-8">
	<title>Regestration</title>
	<link rel="stylesheet" href="css/style.css">
	</head>
	<body>
	
<?php


include("connect_inc.php");
include("Sign_Up.php");
include("Log_In.php");
try 
{


$connect = new PDO("mysql:host=localhost;dbname=stud0505_user",'localhost','9PN53ynR');

	function m_page()
	{
		include("index.php");
	}
	
		
				
		function maj($connect, $requete){
				$connect->exec($requete);
			
			}
		function getData($connect,$requete,$data)
		{
		$req = $connect->query($requete);
		foreach($req as $donnees)
		{
				$d = $donnees[$data];
				return $d;
		}
		return "false";
		}
				
	if (isset($_GET["action"])) {
	
			switch ($_GET["action"]) {
				case "form_ajoutReg":
				formulaireReg("ajout");
					break;
				case "log_in_form":
				$_SESSION['tryLog'] = "TRUE";
				header('Location: LogIn.php');
				break;
				case "log_in":
					$checkEmail = " SELECT Login From User";
					$rqtPass = "SELECT Password, Login from User WHERE Login = '".$_POST[Login]."'";
					/*$ajout = "INSERT INTO USER(Login,Password,Name,Post,Country,City)
					VALUES('".$_GET["Login"]."','".$_GET["Password"]."','".$_GET["Name"]."'
					,'".$_GET["Post"]."','".$_GET["Country"]."','".$_GET["City"]."')";	*/
					/*$ajout = "INSERT INTO USER(Login,Password)
					VALUES('".$_POST[Login]."','".$_POST[Password]."')";*/
					
					if(isInputCorrect($connect,$rqtPass,$_POST['Password']))
					{
							session_start();
							$rqt = "SELECT Name from User WHERE Login = '".$_POST[Login]."'";
							$_SESSION['username'] = getData($connect,$rqt,'Name');
							$_SESSION['LogIn'] = "True";
							header('Location: index.php');
					}
					else
					{
							session_start();
							$_SESSION['LogIn'] = "False";
							$_SESSION['tryLog'] = "False";
							header('Location: LogIn.php');
					}
						
					break;
					case "sign_up_form":
					session_start();
					
					header('Location: SignUp.html');
					break;
					case "sign_up":
					$checkEmail = " SELECT Login From User";
					$ajout = "INSERT INTO USER(Login,Password,Name)
					VALUES('".$_POST[Login]."','".$_POST[Password]."','".$_POST[Name]."')";
					
					if(isMailExist($connect,$checkEmail,$_POST[Login]))
					{
							session_start();
							maj($connect,$ajout);
							$rqt = "SELECT Name from User WHERE Login = '".$_POST[Login]."'";
							$_SESSION['LogIn'] = "True";
							$_SESSION['username'] = getData($connect,$rqt,'Name');
							header('Location: index.php');
					
					}
					else
					{
							session_start();
							
							header('Location: LogIn.php');
					}
					break;
				case "log_out":
					session_start();
					$_SESSION['LogIn'] = "False";
					$_SESSION['tryLog'] = "True";
					session_destroy();
					header('Location:index.php');
					break;
				default:
					m_page();
					break;
				}
			} else
				m_page();
}	
			catch (PDOException $erruer)
		{
			echo "<p>Erreur".$erruer->getMessage()."<p>";
		}

		
		
?>


      
</body>
</html>