<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8"/>
		<title></title>
	</head>
	<body>
		<table border="1">			
			<?php
				//tableau avec un boucle for
				for($ligne=1;$ligne<6;$ligne++)
				{
					echo "<tr>";
					for($col=1;$col<=5;$col++)
					{
						echo "<td>";
						echo $ligne."-".$col;
						echo "</td>";
					}
					echo "</tr>";
				}
			?>
		</table>
	</body>
</html>