<?php
	if(isset($_POST['btn']))
	{
		if(!empty($_POST['pass']))
		{
			if($_POST['pass']=='Free5Dev@gmail.com')
			{
				?>
				<h1>Welcom to my private website</h1>
				<p>Le mots de passe secret est:<strong>La base</strong></p>
				<?php
			}
			else
			{
				echo "Mots de passe inconnue....";
			}
		}
		else
		{
			echo "vide";
		}
	}
	else
	{
		header("Location:formulaire.php");
	}
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8"/>
		<title>Page Secret</title>
	</head>
	<body>
		
	</body>
</html>