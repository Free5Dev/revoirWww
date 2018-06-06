<?php 
	session_start();
	if(isset($_POST['btn']))
	{
		if($_POST['pass']=='1234')
		{
			$_SESSION['pass']='1234';
			header("Location:pagePrivee.php");
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
		
		<form method="post" action="pagePrivee.php">
			<label for="name">Nom</label>
			<input type="text" name="name" id="name"><br/>
			<label for="pass">Password</label>
			<input type="passord" name="pass" id="pass"><br/>
			<button type="submit" name="btn" >Validez</button>
		</form>
	</body>
</html>