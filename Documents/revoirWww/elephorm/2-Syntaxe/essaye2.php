<?php 
	session_start();
	if((!isset($_SESSION['login'])) and (!isset($_SESSION['pass'])))
	{
		header("Location:essaye.php");
	}
?>
<!DOCTYPE html>
<html>	
	<head>
		<meta charset="utf-8"/>
		<title></title>
	</head>
	<body>
		<h1>Welcom</h1>
		
	</body>
</html>