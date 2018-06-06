<?php 
	session_start();
	if(!isset($_SESSION['login']) and !isset($_SESSION['password']))
	{
		header("Location:index.php");
	}
	require_once("../connexion.php");
	if(isset($_POST['btn']))
	{
		if(!empty($_POST['titre']) and !empty($_POST['contenu']))
		{
			$reqInsert=$bdd->prepare("INSERT INTO billets SET titre=?,contenu=?,date_creation=now()");
			$reqInsert->execute(array($_POST['titre'],$_POST['contenu']));
			header("Location:gestionCommentaire.php");
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
		<title>Ajout d'un billets</title>
	</head>
	<body>
		<a href="gestionCommentaire.php?logout=ok">Deconnexion</a>	
		<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
			<label for="titre">Titre</label><br/>
			<input type="text" name="titre" id="titre"/><br/>
			<label for="contenu">Contenu</label><br/>
			<textarea name="contenu" id="contenu"></textarea><br/>
			<input type="submit" name="btn" value="Poster"/>
		</form>
	</body>
</html>