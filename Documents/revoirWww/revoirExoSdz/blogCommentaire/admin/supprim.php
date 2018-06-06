<?php 
	session_start();
	require_once("../connexion.inc.php");
	if(!isset($_SESSION['login']) and !isset($_SESSION['password']))
	{
		header("Location:login.php");
	}
	if(isset($_GET['ref']))
	{
		$reqSelect=$bdd->prepare("SELECT ID,titre, contenu FROM billets WHERE id=?");
		$reqSelect->execute(array($_GET['ref']));
		$donneesSelect=$reqSelect->fetch();
	}
	if(isset($_POST['btn']))
	{
		if(!empty($_POST['titre']) and !empty($_POST['contenu']))
		{
			$reqDelete=$bdd->prepare("DELETE FROM billets WHERE ID=?");
			$reqDelete->execute(array($_POST['ID']));
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
		<a href="gestionBillet.php?logout=ok">Deconnexion</a>
		<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
			<label for="ID">ID:</label><br/>
			<input type="hidden" name="ID" id="ID" value="<?php if(isset($_GET['ref'])) echo $donneesSelect['ID']; ?>" /><?php if(isset($_GET['ref'])) echo $donneesSelect['ID']; ?><br/>
			<label for="titre">Titre</label><br/>
			<input type="text" name="titre" id="titre" value="<?php if(isset($_GET['ref'])) echo $donneesSelect['titre']; ?>" /><br/>
			<label for="contenu">Contenu</label><br/>
			<textarea name="contenu" ><?php if(isset($_GET['ref'])) echo $donneesSelect['contenu']; ?></textarea><br/>
			<input type="submit" name="btn" value="Validez"/>
		</form>
	</body>
</html>