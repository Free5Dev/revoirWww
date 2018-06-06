<!DOCTYPE html>
<html>	
	<head>
		<meta charset="utf-8"/>
		<title></title>
	</head>
	<body>
		<?php 
			//structure de condition switch case
			$lg="en";
			switch($lg)
			{
				case"fr":
					echo "Bonjour";break;
								case"en":
					echo "Hello";break;
								case"es":
					echo "Holla";break;
								case"de":
					echo "Geuten tag";break;
					default:echo "Inconnue";
			}
		?>
	</body>
</html>