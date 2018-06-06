<?php 
	echo "<pre>";
	print_r($_FILES);
	echo "</pre>";
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form method="post" enctype="multipart/form-data">
		<input type="file" name="photo" id="photo">
		<input type="submit" name="btn" value="Validez"/>
	</form>
</body>
</html>