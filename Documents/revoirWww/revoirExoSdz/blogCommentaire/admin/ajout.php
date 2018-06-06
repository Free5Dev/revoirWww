<?php 
	session_start();
	require_once("../connexion.inc.php");
	if(!isset($_SESSION['login']) and !isset($_SESSION['password']))
	{
		header("Location:login.php");
	}
	if(isset($_POST['btn']))
	{
		if(!empty($_POST['titre']) and !empty($_POST['contenu']))
		{
			$reqInsert=$bdd->prepare("INSERT INTO billets SET titre=?,contenu=?,date_creation=now()");
			$reqInsert->execute(array($_POST['titre'],$_POST['contenu']));
			header("Location:gestionBillet.php");
		}
		else
		{
			echo "Impossible de postez le message champs vide";
		}
	}
?>
<!DOCTYPE html>
<html>
	<head>
		<title></title>
	</head>
	<body>
		<h1>Ajout de billet</h1>
		<a href="gestionBillet.php?logout=ok">Deconnexion</a>
		<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
			<label for="titre">Titre</label><br/>
			<input type="text" name="titre" id="titre"/><br/>
			<label for="contenu">Contenu</label><br/>
			<textarea name="contenu"></textarea><br/>
			<input type="submit" name="btn" value="Validez"/>
		</form>
	</body>
</html>