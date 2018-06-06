<?php 
	if(isset($_POST['btn']))
	{
		if(!empty($_POST['password']))
		{
			if($_POST['password']=='1234')
			{
				?>
				<h1>Welcom</h1>
				<?php
			}
			else
			{
				echo "error d'identification";
			}
		}
		else
		{
			echo "champs vide";
		}
	}
	else
	{
		header("Location:tppassword.php");
	}
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8"/>
		<title></title>
	</head>
	<body>
	</body>
</html>