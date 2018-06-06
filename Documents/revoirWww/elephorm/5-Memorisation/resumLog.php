<?php 
	session_start();
	if (isset($_POST['btn'])) {
		if ($_POST['pseudo']=='1234') {
			$_SESSION['pseudo']='1234';
			header("Location:resumLog1.php");
		}
		else
		{
			$error="eroror hahah....";
		}
	}
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8"/>
		<title></title>
	</head>
	<body>
		<h2>identification</h2>
		<?php if(isset($error)) echo $error; ?>
		<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
			<label for="pseudo">Pseudo</label>
			<input type="text" name="pseudo" id="pseudo"/>
			<input type="submit" name="btn" value="valider"/>
		</form>
		<?php 
			echo "<pre>";
			print_r($_POST);
			echo "</pre>";
		?>
	</body>
</html>