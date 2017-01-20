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
include("News.php");

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
					$checkEmail = " SELECT Login From USER";
					$rqtPass = "SELECT Password, Login from USER WHERE Login = '".$_POST[Login]."'";
					
					
					if(isInputCorrect($connect,$rqtPass,$_POST['Password']) && !isAdmin($_POST[Login],$_POST[Password]))
					{
							session_start();
							$rqt = "SELECT Name from USER WHERE Login = '".$_POST[Login]."'";
							$_SESSION['username'] = getData($connect,$rqt,'Name');
							$_SESSION['LogIn'] = "True";
							header('Location: index.php');
					}
					else if(isAdmin($_POST[Login],$_POST[Password]))
					{
						session_start();
						header('Location: AdminPage.php');
						
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
					
					header('Location: SignUp.php');
					break;
					case "sign_up":
					
					$ajout = "INSERT INTO USER(Login,Password,Name,Number)
					VALUES('".$_POST[Login]."','".$_POST[Password]."','".$_POST[Name]."','".$_POST[Number]."')";
					
					if(isPasswordCorrect($_POST[Password])
						&&isNumberCorrect($_POST[Number]))
					{
							session_start();
							maj($connect,$ajout);
							$rqt = "SELECT Name from USER WHERE Login = '".$_POST[Login]."'";
							$_SESSION['LogIn'] = "True";
							$_SESSION['username'] = getData($connect,$rqt,'Name');
							header('Location: index.php');
					
					}
					else if(!isPasswordCorrect($_POST[Password]))
					{
						session_start();
						$_SESSION['Password'] = "False";
						header('Location: SignUp.php');
					}
					else if(!isNumberCorrect($_POST[Number]))
					{
						session_start();
						$_SESSION['Number'] = "False";
						header('Location: SignUp.php');
					}
					else if(!isMailExist($connect,$checkEmail,$_POST[Login]))
					{
							session_start();
							header('Location: LogIn.php');
					}
					else
					{
						session_start();
						header('Location: SignUp.php');
					}
						
					break;
				case "log_out":
					session_start();
					$_SESSION['LogIn'] = "False";
					$_SESSION['tryLog'] = "True";
					session_destroy();
					header('Location:index.php');
					break;
				case "news_add_form":
				header('Location:NewsForm.html');
				case "news_add":
				$news = new News($_POST[Title],$_POST[Info]);
				$ajout = "INSERT INTO NEWS(Title,Info)
					VALUES('".$_POST[Title]."','".$_POST[Info]."')";
					maj($connect,$ajout);
				header('Location:AdminPage.php');
				case "delete":
				$suppr = "DELETE FROM NEWS WHERE ID = '". $_GET["ID"]."'";
				
				maj($connect,$suppr);
				header('Location:AdminPage.php');
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