<?php 
	//appel de la function de connexion à la bdd
	require_once("connexionMysql.inc.php");
	$req=$bdd->query("SELECT reference,prix FROM articles");
	if(isset($_GET['btn']))
	{
		if(!empty($_GET['search']))
		{
			$req=$bdd->prepare("SELECT reference,prix FROM articles WHERE description LIKE ?");
			$req->execute(array("%$_GET[search]%"));
		}
		else
		{
			echo "Saisir l'articles à rechercher";
		}
	}
	
?>
<!DOCTYPE html>
<html>
	<head>
		<title></title>
	</head>
	<body>
		<form method="get" action="<?php echo $_SERVER['PHP_SELF']; ?>">
			<label for="search">Recherche d'articles</label>
			<input type="text" name="search" value="<?php if(isset($_GET['search'])) echo $_GET['search']; ?>" id="search"/>
			<input type="submit" name="btn" value="Search"/>
		</form>
		<table border="1" cellspacing="0" cellpadding="1" width="600">
			<tr>
				<td>Reference</td>
				<td>Prix</td>
				<td>Détails</td>
			</tr>
			<?php while($donnees=$req->fetch()) { ?>
			<tr>
				<td><?php echo $donnees['reference']; ?></td>
				<td><?php echo $donnees['prix']; ?></td>
				<td><a href="fiche4.php?ref=<?php echo $donnees['reference']; ?>">Voir</a></td>
			</tr>
			<?php } $req->closeCursor(); ?>
		</table>
	</body>
</html>