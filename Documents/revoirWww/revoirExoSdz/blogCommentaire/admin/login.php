<?php 
	session_start();
	require_once("../connexion.inc.php");
	$req=$bdd->query("SELECT * FROM user");
	$donnees=$req->fetch();
	if(isset($_POST['btn']))
	{
		if(!empty($_POST['login']) and !empty($_POST['password']))
		{
			if($_POST['login']==$donnees['login'] and $_POST['password']==$donnees['password'])
			{
				$_SESSION['login']=$_POST['login'];
				$_SESSION['password']=$_POST['password'];
				header("Location:gestionBillet.php");
			}
			else
			{
				echo "Error d'identification";
			}
		}
		else
		{
			echo "champs vide";
		}
	}
?>
<!DOCTYPE html>
<html>
	<head>
		<title></title>
	</head>
	<body>
		<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
			<label for="login">Login</label><br/>
			<input type="text" name="login" id="login"><br/>
			<label for="password">Password</label><br/>
			<input type="password" name="password" id="password"><br/>
			<input type="submit" name="btn" value="connexion"/>
	</body>
</html>