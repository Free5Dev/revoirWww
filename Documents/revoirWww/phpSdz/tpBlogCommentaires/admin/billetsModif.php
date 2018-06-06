<?php 
	session_start();
	if(!isset($_SESSION['login']) and !isset($_SESSION['password']))
	{
		header("Location:index.php");
	}
	require_once("../connexion.php");
	if(isset($_GET['ref']))
	{
		$reqGet=$bdd->prepare("SELECT titre,contenu FROM billets WHERE id=?");
		$reqGet->execute(array($_GET['ref']));
		$donneesGet=$reqGet->fetch();
			$_SESSION['ref']=$_GET['ref'];
	}
	if(isset($_POST['btn']))
	{
		if(!empty($_POST['titre']) and !empty($_POST['contenu']))
		{
			$reqUpdate=$bdd->prepare("UPDATE  billets SET titre=?,contenu=?,date_creation=now() WHERE id=?");
			$reqUpdate->execute(array($_POST['titre'],$_POST['contenu'],$_SESSION['ref']));
			header("Location:gestionCommentaire.php");
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
			<input type="text" name="titre" id="titre" value="<?php if(isset($donneesGet['titre'])) echo $donneesGet['titre']; ?>" rows="5" cols="50"/><br/>
			<label for="contenu">Contenu</label><br/>
			<textarea name="contenu" id="contenu" rows="5" cols="50"><?php if(isset($donneesGet['contenu'])) echo $donneesGet['contenu']; ?></textarea><br/>
			<input type="submit" name="btn" value="Poster"/>
		</form>
	</body>
</html>