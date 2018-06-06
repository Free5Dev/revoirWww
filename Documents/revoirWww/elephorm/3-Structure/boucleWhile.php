<!DOCTYPE html>
<html>	
	<head>
		<meta charset="utf-8"/>
		<title></title>
	</head>
	<body>
		<table border="1">
		<tr>
		<?php 
			//structure de boucle avec while
			$i=1;//declaration de la variable
			while($i<=5)//condition
			{
				echo "<td>".$i."</td>";
				$i++;//evolution de la boucle
			}
		?>
		</tr>
		</table>
	</body>
</html>