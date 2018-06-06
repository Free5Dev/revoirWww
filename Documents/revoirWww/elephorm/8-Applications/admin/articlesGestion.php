<?php 
	session_start();
	require_once("../connexionMysql.inc.php");
	if(isset($_GET['logout']))
	{
		unset($_SESSION['login']);
		unset($_SESSION['password']);
	}
	if(!isset($_SESSION['login']) and !isset($_SESSION['password']))
	{
		header("Location:../login.php");	
	}
	if(isset($_GET['Supp']))
	{
		$reqSupp=$bdd->prepare("DELETE FROM articles WHERE reference=?");
		$reqSupp->execute(array($_GET['ref']));
	}
	$req=$bdd->query("SELECT reference,prix,photo FROM articles");
?>
<!DOCTYPE html>
<html>
	<head>
		<title></title>
	</head>
	<body>
		<h1>Gestion des articles</h1>
		<a href="articlesAjout.php?ajout=ok">Ajout  d'articles</a><br/>
		<a href="articlesGestion.php?logout=deconnection">Déconnexion</a>
		<table border="1" cellspacing="0" cellpadding="1" width="600">
			<tr>
				<td>Reference</td>
				<td>Prix</td>
				<td>photo</td>
				<td>Modifier</td>
				<td>Supprimer</td>
			</tr>
			<?php while($donnees=$req->fetch()) { ?>
			<tr>
				<td><?php echo $donnees['reference']; ?></td>
				<td><?php echo $donnees['prix']; ?></td>
				<td><img src="../images/<?php echo $donnees['photo']; ?>"></td>
				<td><a href="articlesModif.php?ref=<?php echo $donnees['reference']; ?>">Modif</td>
				<td><a href="articlesGestion.php?ref=<?php echo $donnees['reference']; ?>&Supp=ok">Supprimer</a></td>
			</tr>
			<?php } $req->closeCursor(); ?>
		</table>
	</body>
</html>