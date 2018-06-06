<?php
	session_start();
	$_SESSION['log']="said";
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8"/>
		<title></title>
	</head>
	<body>
		<a href="session2.php">Lien de creation de session</a>
		<a href="suppSession.php">Lien de suppression de session</a>
	</body>
</html>