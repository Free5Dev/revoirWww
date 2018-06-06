<?php
	if(!isset($_SESSION['pass']))
	{
		header("Location:login.php");
	}
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8"/>
		<title></title>
	</head>
	<body>
		<h1>Welcom to my private page</h1>
	</body>
</html>