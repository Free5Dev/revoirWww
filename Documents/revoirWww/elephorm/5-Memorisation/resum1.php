<?php 
	$unan=365*24*60*60;
	setcookie("log","saids",time()+$unan);
	session_start();

?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8"/>
		<title></title>
	</head>
	<body>
		<a href="resum2.php">Lien de creation de cookie et session</a>
		<a href="resum3.php">Lien de suppression de cookie et session</a>
		<?php
			//page php
			$_SESSION['log']='fzd';
		?>
		
	</body>
</html>