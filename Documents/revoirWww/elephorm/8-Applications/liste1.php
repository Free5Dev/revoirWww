<?php 
	require_once("connexionMysql.inc.php");
	$req=$bdd->query("SELECT reference,prix FROM articles");
?>
<!DOCTYPE html>
<html>
	<head>
		<title></title>
	</head>
	<body>
		<table border="1" cellpadding="1" cellspacing="0" width="600">
			<tr>
				<td>Reference</td>
				<td>Prix</td>
			</tr>
			<?php while($donnees=$req->fetch()) { ?>
			<tr>
				<td><?php echo $donnees['reference']; ?></td>
				<td><?php echo $donnees['prix']; ?></td>
			</tr>
			<?php } $req->closeCursor(); ?>
		</table>
	</body>
</html>