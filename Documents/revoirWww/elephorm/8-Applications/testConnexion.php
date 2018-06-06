<?php 
	require_once("connexionMysql.inc.php");
	//rquete de selection
	$req=$bdd->query("SELECT * FROM articles WHERE reference='ART56'");
	$donnees=$req->fetch();
?>
<!DOCTYPE html>
<html>
	<head>
		<title></title>
	</head>
	<body>
		<?php
			echo "<pre>";
			print_r($donnees);
			echo "</pre>";
		?>
	</body>
</html>