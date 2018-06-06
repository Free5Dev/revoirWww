<?php 
	session_start();
	if (isset($_COOKIE['log'])) {
		setcookie("log");
	}
	if (isset($_SESSION['log'])) {
		unset($_SESSION['log']);
	}
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8"/>
		<title></title>
	</head>
	<body>
		<?php
			//page php
			if(isset($_COOKIE['log']))
			{

			  echo "Votre log en cookie est:".$_COOKIE['log'];
			}
		?>
	</body>
</html>