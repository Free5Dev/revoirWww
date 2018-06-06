<?php
	session_start();
	require_once("connexion.inc.php");
	if(isset($_POST['btn']))
	{
		if(!empty($_POST['auteur']) and !empty($_POST['commentaire']))
		{
			$id=$_SESSION['id_billet'];
			$reqInsert=$bdd->prepare("INSERT INTO commentaires SET id_billet=?, auteur=?, commentaire=?, date_commentaire=NOW()");
			$reqInsert->execute(array($_SESSION['id_billet'],$_POST['auteur'],$_POST['commentaire']));
			header("Location:commentaires.php?ref=$id");
		}
		else
		{
			echo "Impossible de poster le message l'un des champs est vide";
		}
	}
	else
	{
		header("Location:commentaires.php");
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