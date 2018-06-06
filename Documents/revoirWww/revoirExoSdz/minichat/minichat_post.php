<?php
	session_start();
	require_once("connexionMysql.inc.php");
	if(isset($_POST['btn']))
	{
		if(!empty($_POST['pseudo']) and !empty($_POST['message']))
		{
			$_SESSION['pseudo']=$_POST['pseudo'];
			$reqInsert=$bdd->prepare("INSERT INTO minichat SET pseudo=?, message=?");
			$reqInsert->execute(array($_POST['pseudo'],$_POST['message']));
			header("Location:minichat.php");
		}
		else
		{
			echo "Impossible de postulez votre message l'un des champs est vide";
		}
	}
	else
	{
		header("Location:minichat.php");
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