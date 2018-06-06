<?php 
	require_once("connexionMysql.inc.php");
	//------------------------------------------------------------------------------------------------------------------------------
	$req=$bdd->prepare("SELECT a.reference,a.prix,a.description,f.intitule FROM articles as a, familles as f WHERE a.famillesID=f.ID and a.reference=?");
	$req->execute(array($_GET['ref']));
	$donnees=$req->fetch();
?>
<!DOCTYPE html>
<html>
	<head>
		<title></title>
	</head>
	<body>
		<table border="1" cellpadding="1" cellspacing="0" width="600px">
			<tr>
				<td>Reference</td>
				<td><?php echo $donnees['reference']; ?></td>
			</tr>
			<tr>
				<td>prix</td>
				<td><?php echo $donnees['prix']; ?></td>
			</tr>
			<tr>
				<td>Description</td>
				<td><?php echo $donnees['description']; ?></td>
			</tr>
			<tr>
				<td>Intitule</td>
				<td><?php echo $donnees['intitule']; ?></td>
			</tr>
		</table>
	</body>
</html>