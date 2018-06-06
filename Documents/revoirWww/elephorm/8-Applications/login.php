<?php 
	session_start();
	require_once("connexionMysql.inc.php");
	if(isset($_POST['btn']))
	{
		if(!empty($_POST['login']) and !empty($_POST['password']))
		{
			$req=$bdd->query("SELECT * FROM admin");
			$donnees=$req->fetch();
			if(($_POST['login']==$donnees['login']) and $_POST['password']==$donnees['password'])
			{
				$_SESSION['login']=$donnees['login'];
				$_SESSION['password']=$donnees['password'];
				header("Location:admin/articlesGestion.php");
			}
			else
			{
				echo "Error d'identification";
			}
		}
		else
		{
			echo "les champs sont vides";
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
			<label for="login">Login</label>
			<input type="text" name="login" id="login" placeholder="Ex:said"/>
			<label for="password">Password</label>
			<input type="password" name="password" id="password" placeholder="......."/>
			<input type="submit" name="btn" value="Connexion"/>
		</form>
	</body>
</html>