<?php
	session_start();
	if (!isset($_SESSION['pseudo'])) {
		header("Location:resumLog.php");
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
		?>
	</body>
</html>