<?php
	session_start();
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
			echo "Votre log en cookie est:".$_COOKIE['log'];
			echo "Votre log en session est:".$_SESSION['log'];
		?>
	</body>
</html>