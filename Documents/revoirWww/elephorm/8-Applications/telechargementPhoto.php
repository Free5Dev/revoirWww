<?php
	require_once("connexionMysql.inc.php"); 
	echo "<pre>";
	print_r($_FILES);
	echo "</pre>";
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8"/>
		<title></title>
	</head>
	<body>
		<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>" enctype="multipart/form-data">
			<label for="photo">Téléchargez l'image</label>
			<input type="file" name="photo" id="photo"/>
			<input type="submit" name="btn" value="Envoyez"/>
		</form>
	</body>
</html>