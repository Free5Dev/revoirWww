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
			echo "Hello ".$_SESSION['log'];
		?>
	</body>
</html>