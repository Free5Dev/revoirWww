<?php 
	//appel de la function de connexion à la bdd
	require_once("connexionMysql.inc.php");
	$req=$bdd->query("SELECT reference,prix FROM articles");
?>
<!DOCTYPE html>
<html>
	<head>
		<title></title>
	</head>
	<body>
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
				<td><a href="fiche3.php?ref=<?php echo $donnees['reference']; ?>">Voir</a></td>
			</tr>
			<?php } $req->closeCursor(); ?>
		</table>
	</body>
</html>