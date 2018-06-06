<?php 
	session_start();
	if(isset($_POST['btn']))
	{
		if(!empty($_POST['pass']) and !empty($_POST['login']))
		{
			if($_POST['pass']=="saidsoumah" and $_POST['login']=="freezy")
			{
				$_SESSION['login']="freezy";  $_SESSION['pass']="saidsoumah";
				header("Location:essaye2.php");
			}
			else
			{
				$error="Erreur d'identification";
			}
		}
		else
		{
			$chps="vide";
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
		<!-- les tableau couleur en hexadecimal-->
		<?php 
			$couleur=array("00","33","66","99","CC","FF");
			for($rouge=0;$rouge<6;$rouge++)
			{
				echo "<table border='1'>";
					for($vert=0;$vert<6;$vert++)
					{
						echo "<tr>";
							for($blue=0;$blue<6;$blue++)
							{
								$couleurCellule=$couleur[$rouge].$couleur[$vert].$couleur[$blue];
								echo "<td bgcolor=#".$couleurCellule.">";
								echo $couleurCellule;
								echo "</tds>";
							}
						echo "</tr>";
					}
				echo "</table>";
			}
		?>
		<h1>Formulaire d'authentification</h1>
		<?php if(isset($chps)) echo $chps; if(isset($error)) echo $error; ?>
		<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
			<label for="login">Login</label>
			<input type="text" name="login" id="login"/><br/>

			<label for="pass">password</label>
			<input type="password" name="pass" id="pass"/><br/>

			<input type="submit" name="btn" id="validez"/><br/>
		</form>

		<?php 
			echo "<pre>";
			print_r($_POST);
			echo "</pre>";
		?>
	</body>
</html>