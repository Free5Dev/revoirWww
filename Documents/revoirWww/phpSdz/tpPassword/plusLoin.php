<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8"/>
		<title>Page Secret</title>
	</head>
	<body>
		<?php 
			if(!isset($_POST['btn']))
			{
				?>
				<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
					<label for="pass">Password</label>
					<input type="password" name="pass" id="pass"/>
					<input type="submit" name="btn" value="Valider"/>
				</form>
				<?php
			}
			else
			{
				if(!empty($_POST['pass']))
				{
					if($_POST['pass']=='Free5Dev@gmail.com')
					{
						?>
						<h1>Bienvenue sur ma page privée</h1>
						<p>voici le code secret:<strong>La base</strong></p>
						<?php
					}
					else
					{
						echo "Mots de passe inconnue";
					}
				}
				else
				{
					echo "champs vide";
				}
			}
		?>
	</body>
</html>