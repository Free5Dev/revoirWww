<?php 
	require_once("connexionMysql.inc.php");
	if(isset($_GET['ref']))
	{
		$req=$bdd->prepare("SELECT a.reference,a.prix,a.description,a.photo,f.intitule FROM articles as a,familles as f WHERE a.famillesID=f.ID and a.reference=?");
		$req->execute(array($_GET['ref']));
		$donnees=$req->fetch();
	}
	else
	{
		header("Location:liste6.php");
	}
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
				<td><?php echo $donnees['reference']; ?></td>
			</tr>
			<tr>
				<td>Prix</td>
				<td><?php echo $donnees['prix']; ?></td>
			</tr>
			<tr>
				<td>Description</td>
				<td><?php echo $donnees['description']; ?></td>
			</tr>
			<tr>
				<td>Famille</td>
				<td><?php echo $donnees['intitule']; ?></td>
			</tr>
			<tr>
				<td>Photo</td>
				<td><img src="images/<?php echo $donnees['photo']; ?>"/></td>
			</tr>
		</table>
	</body>
</html>