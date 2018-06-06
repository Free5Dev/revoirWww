<?php
	//appelle de la fonction connection
	require_once("connexionMysql.inc.php");
	//requete de selection à la bdd
	$req=$bdd->query("SELECT * FROM articles WHERE reference='GIB78'");
	$donnees=$req->fetch();
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Test Connection</title>
	</head>
	<body>
	<?php
		echo "L'article ".$donnees['description']." est de :".$donnees['prix']; 
		echo "<pre>";
		print_r($donnees);
		echo "</pre>";
	?>
	</body>
</html>