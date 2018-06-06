<?php 
	session_start();
	require_once("connexion.php");
	if(isset($_POST['btn']))
	{
		if(!empty($_POST['auteur']) and !empty($_POST['commentaire']) )
		{
			$id_billet=$_SESSION['billet'];
			$_SESSION['auteur']=$_POST['auteur'];
			$reqInsert=$bdd->prepare("INSERT INTO commentaires(id_billet,auteur,commentaire,date_commentaire) VALUES(?,?,?,NOW())");
			$reqInsert->execute(array($_SESSION['billet'],$_POST['auteur'],$_POST['commentaire']));
			header("Location:commentaire.php?id=$id_billet");
		}
		else
		{
			echo "Impossible de postuler le message champs vide";
		}
	}
	else
	{
		header("Location:commentaire.php");
	}
?>
<!DOCTYPE html>
	<html>
	<head>
		<title></title>
	</head>
	<body>

	</body>
</html>