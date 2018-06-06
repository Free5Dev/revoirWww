<?php 
	require_once("connexionMysql.inc.php");
	$req=$bdd->query("SELECT reference,prix FROM articles");
	if(isset($_GET['btn']))
	{
		$req=$bdd->prepare("SELECT reference,prix FROM articles WHERE famillesID=?");
		$req->execute(array($_GET['famille']));
	}
	//requete menu deroulant
	$reqMenu=$bdd->query("SELECT * FROM familles");
?>
<!DOCTYPE html>
<html>
	<head>
		<title></title>
	</head>
	<body>
		<form method="get" action="<?php echo $_SERVER['PHP_SELF']; ?>">
			<label>Sélectionner une famille</label>
			<select name="famille">
				<?php while($donneesMenu=$reqMenu->fetch()) { ?>
				<option <?php if(!isset($_GET['famille'])) $_GET['famille']=1; if($_GET['famille']==$donneesMenu['id'] ) echo "selected='selected'"; ?> value="<?php echo $donneesMenu['id']; ?>"><?php echo $donneesMenu['intitule']; ?></option>
				<?php } $reqMenu->closeCursor(); ?>
			</select>
			<input type="submit" name="btn" value="Validez"/> 
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
				<td><a href="fiche6.php?ref=<?php echo $donnees['reference']; ?>">voir fiche</a></td>
			</tr>
			<?php } $req->closeCursor(); ?>
		</table>
	</body>
</html>