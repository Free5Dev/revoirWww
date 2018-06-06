<?php 
	session_start();
	require_once("../connexion.php");
	if(isset($_POST['btn']))
	{
		if(!empty($_POST['login']) and !empty($_POST['password']))
		{
			$req=$bdd->prepare("SELECT login,password FROM identif WHERE login=? and password=?");
			$req->execute(array($_POST['login'],$_POST['password']));
			$donnees=$req->fetch();
			$_SESSION['login']=$donnees['login'];
			$_SESSION['password']=$donnees['password'];
			if($_POST['login']==$donnees['login'] and $_POST['password']==$donnees['password'])
			{
				header("Location:gestionCommentaire.php");
			}
			else
			{
				echo "Login ou mots de passe incorrecte";
			}
		}
		else
		{
			echo "Champs vide";
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
			<input type="submit" name="btn" value="Valider"/>
		</form>
	</body> 
</html>