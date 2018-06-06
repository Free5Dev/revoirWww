<?php
	require_once("../connexionMysql.inc.php");
	if(isset($_GET['ajout']))
	{
		if(isset($_POST['btn']))
		{
			if(!empty($_POST['reference']) and !empty($_POST['prix']) and !empty($_POST['description']) and $_FILES['photo']['error']==0)
			{
				copy($_FILES['photo']['tmp_name'],"../images/".$_FILES['photo']['name']);
				$req=$bdd->prepare("INSERT INTO articles SET reference=?,prix=?,description=?,famillesID=?,photo=?");
				$req->execute(array($_POST['reference'],$_POST['prix'],$_POST['description'],$_POST['famille'],$_FILES['photo']['name']));
				header("Location:articlesGestion.php");
			}
			else
			{
				echo "Renseigner articles";
			}
		}
	}
	else
	{
		header("Location:articlesGestion.php");
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
			<input type="text" name="reference" id="reference" /><br/>
			<label for="prix">Prix</label>
			<input type="text" name="prix" id="prix" /><br/>
			<label for="description">Description</label>
			<input type="text" name="description" id="description" /><br/>
			<label for="famille">Famille</label>
			<select name="famille" id="famille">
				<?php while($donneesMenu=$reqMenu->fetch()) { ?>
				<option value="<?php echo $donneesMenu['id']; ?>"><?php echo $donneesMenu['intitule']; ?></option>
				<?php } $reqMenu->closeCursor(); ?>
			</select><br/>
			<label for="photo">Télécharger la photo</label>
			<input type="file" name="photo" id="photo" /><br/>
			<input type="submit" name="btn" value="Enresistrer"/>
		</form>
	</body>
</html>