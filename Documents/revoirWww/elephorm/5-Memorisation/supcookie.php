<?php
	if(isset($_COOKIE['log']))
	{
		setcookie("log");
		unset($_COOKIE['log']);
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
			// echo "<pre>";
			// print_r($_COOKIE['log']);
			// echo "</pre>";
		?>
	</body>
</html>