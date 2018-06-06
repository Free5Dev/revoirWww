<!DOCTYPE html>
<html>	
	<head>
		<meta charset="utf-8"/>
		<title></title>
	</head>
	<body>
		<?php 
			//structure de condition if else
			$age=70;
			if($age<18)
			{
				echo "mineur";
			}
			else
			{
				if ($age>60) {
					echo "vieux pêt à mourir";
				}
				else
				{
					echo "Majeur en plein forme";
				}
			}
		?>
	</body>
</html>