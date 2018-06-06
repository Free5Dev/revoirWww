<?php
	require_once("../connexionMysql.inc.php");
	if(isset($_GET['ref']))
	{
		$reqGet=$bdd->prepare("SELECT a.reference,a.prix,a.description,a.photo,a.famillesID,f.intitule FROM articles as a,familles as f WHERE a.famillesID=f.ID and a.reference=?");
		$reqGet->execute(array($_GET['ref']));
		$donneesGet=$reqGet->fetch();
	}
	else
	{
		header("Location:articlesGestion.php");
	}
	if(isset($_POST['btnModif']))
	{
		if(!empty($_POST['reference']) and !empty($_POST['prix']) and !empty($_POST['description']) and $_FILES['photo']['error']==0)
		{
			copy($_FILES['photo']['tmp_name'],"../images/".$_FILES['photo']['name']);
			$reqModif=$bdd->prepare("UPDATE  articles SET prix=?,description=?,famillesID=?,photo=? WHERE reference=?");
			$reqModif->execute(array($_POST['prix'],$_POST['description'],$_POST['famille'],$_FILES['photo']['name'],$_POST['reference']));
			header("Location:articlesGestion.php");
		}
		else
		{
			echo "Renseigner articles";
		}
	}
	//requete menu deroulant dynamique;
	$reqMenu=$bdd->query("SELECT * FROM familles");
?>
<!DOCTYPE html>
<html>
	<head>
		<title></title>
	</head>
	<body>
		<a href="articlesGestion.php?logout=deconnection">Déconnexion</a>
		<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>" enctype="multipart/form-data"/>
			<label for="reference">Reference</label>
			<input type="hidden" name="reference" id="reference" value="<?php echo $donneesGet['reference']; ?>" /><?php echo $donneesGet['reference']; ?><br/>
			<label for="prix">Prix</label>
			<input type="text" name="prix" id="prix" value="<?php echo $donneesGet['prix']; ?>" /><br/>
			<label for="description">Description</label>
			<input type="text" name="description" id="description" value="<?php echo $donneesGet['description']; ?>" /><br/>
			<label for="famille">Famille</label>
			<select name="famille" id="famille">
				<?php while($donneesMenu=$reqMenu->fetch()) { ?>
				<option <?php if($donneesGet['famillesID']==$donneesMenu['id']) echo "selected='selected'"; ?>value="<?php echo $donneesMenu['id']; ?>"><?php echo $donneesMenu['intitule']; ?></option>
				<?php } $reqMenu->closeCursor(); ?>
			</select><br/>
			<img src="../images/<?php echo $donneesGet['photo']; ?>"/>
			<label for="photo">Télécharger la photo</label>
			<input type="file" name="photo" id="photo" /><br/>
			<input type="submit" name="btnModif" value="Modification"/>
		</form>
	</body>
</html>