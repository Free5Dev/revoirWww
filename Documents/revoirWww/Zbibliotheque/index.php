<?php 
	require_once("connexionMysql.inc.php");
	if(isset($_POST['btnConnexion']))
	{
		if(!empty($_POST['login']) and !empty($_POST['password']))
		{	
			$req=$bdd->query("SELECT u.login,u.password,u.idGroupe,g.groupe FROM user as u,groupe as g WHERE u.idGroupe=g.id ");
			$donnees=$req->fetch();
			if(($_POST['login']==$donnees['login']) and ($_POST['password']==$donnees['password']) and ($_POST['groupe']==$donnees['groupe']))
			{
				echo "vous êtes administrateur";
			} j
			else
			{
				echo "Idenfiant inconnue";
			}
		}
		else
		{
			echo "Veillez rensigner vos identifiant de connexion";
		}
	}
	//requete du menu deroulant
	$reqMenu=$bdd->query("SELECT * FROM groupe");
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8"/>
		<title>Identification</title>
		<link rel="stylesheet" type="text/css" href="style.css"/>
	</head>
	<body>
		<h1>Page d'authentification</h1>
		<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
			<label for="login">Login</label>
			<input type="text" name="login" id="login" placeholder="Ex:said" />
			<label for="password">Password</label>
			<input type="password" name="password" id="password" placeholder="Ex:....."/>
			<label for="groupe">Groupe</label>
			<select name="groupe">
				<?php while($donneesMenu=$reqMenu->fetch()) { ?>
				<option value="<?php echo $donneesMenu['id']; ?>"><?php echo $donneesMenu['groupe']; ?></option>
				<?php } $reqMenu->closeCursor(); ?>
			</select>
			<input type="submit" name="btnConnexion" value="Connexion"/>
		</form>
	</body>
</html>