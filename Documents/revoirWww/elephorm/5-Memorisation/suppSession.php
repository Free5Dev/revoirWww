<?php 
	session_start();
	if(isset($_SESSION['log']))
	{
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
			// echo "Hello ".$_SESSION['log'];
		?>
	</body>
</html>