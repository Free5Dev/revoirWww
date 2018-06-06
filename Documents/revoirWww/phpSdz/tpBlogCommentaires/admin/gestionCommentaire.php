<?php 
	session_start();
	if(isset($_GET['logout']))
	{
		unset($_SESSION['login']);
		unset($_SESSION['password']);
	}
	if(!isset($_SESSION['login']) and !isset($_SESSION['password']))
	{
		header("Location:index.php");
	}
	require_once("../connexion.php");
	if(isset($_GET['ref']))
	{
		$reqSup=$bdd->prepare("DELETE FROM billets WHERE id=?");
		$reqSup->execute(array($_GET['ref']));
		echo "billets supprimé";
	}
	$req=$bdd->query("SELECT id,titre FROM billets");
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Gestion des billets du blog</title>
	</head>
	<body>
		<a href="gestionCommentaire.php?logout=ok">Deconnexion</a>
		<a href="billetsAjout.php">Ajout d'un billets</a>
		<table border="1" cellpadding="1" cellspacing="0" width="800">
			<tr>
				<th>ID</th>
				<th>Titre</th>
				<th>Modifier</th>
				<th>Supprimer</th>
			</tr>
			<?php while($donnees=$req->fetch()) { ?>
			<tr>
				<td><?php echo $donnees['id']; ?></td>
				<td><?php echo $donnees['titre']; ?></td>
				<td><a href="billetsModif.php?ref=<?php echo $donnees['id']; ?>">Modifié</a></td>
				<td><a href="gestionCommentaire.php?ref=<?php echo $donnees['id']; ?>">Supprimé</a></td>
			</tr>
			<?php } $req->closeCursor(); ?>
		</table>
	</body>
</html>