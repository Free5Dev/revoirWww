<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8"/>
		<title></title>
	</head>
	<body>
		<?php 
			if(!isset($_POST['btn']))
			{
				?>
				<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
					<label for="password">Password:</label>
					<input type="password" name="password" id="password"/>
					<input type="submit" name="btn" value="Connexion"/>
				</form>
				<?php
			}
			else
			{
				if(!empty($_POST['password']))
				{
					if($_POST['password']=='1234')
					{
						?>
						<h1>Welcom to my private website</h1>
						<?php
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