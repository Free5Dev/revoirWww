<?php 
	session_start();
	if(isset($_GET['logout']))
	{
		unset($_SESSION['login']);
		unset($_SESSION['password']);
	}
	if(!isset($_SESSION['login']) and !isset($_SESSION['password']))
	{
		header("Location:login.php");
	}
	require_once("../connexion.inc.php");
	$req=$bdd->query("SELECT ID,titre, contenu FROM billets");

?>
<!DOCTYPE html>
<html>
	<head>
		<title></title>
	</head>
	<body>
		<h1>Gestion des billets</h1>
		<a href="ajout.php">Ajout de bulllet</a>
		<a href="gestionBillet.php?logout=ok">Deconnexion</a>
		<table border="1" cellpadding="0" cellspacing="1" width="600">
			<tr>
				<td>Titre</td>
				<td>Contenu</td>
				<td>Modif de billet</td>
				<td>Supprim billet</td>
			</tr>
			<?php while($donnees=$req->fetch()) { ?>
			<tr>
				<td><?php echo $donnees['titre']; ?></td>
				<td><?php echo $donnees['contenu']; ?></td>
				<td><a href="modif.php?ref=<?php echo $donnees['ID']; ?>">Modif</a></td>
				<td><a href="supprim.php?ref=<?php echo $donnees['ID']; ?>">Supprim</a></td>
			</tr>
			<?php } $req->closeCursor(); ?>
		</table>
	</body>
</html>