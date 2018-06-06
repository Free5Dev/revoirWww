<!DOCTYPE html>
<html>	
	<head>
		<meta charset="utf-8"/>
		<title></title>
	</head>
	<body>
		<table border="1">
			<?php 
				//structure de boucle avec for
				for($ligne=1;$ligne<=5;$ligne++)
				{
					?>
					<tr>
						<?php for ($col=1; $col <=5; $col++) { 
							?>
							<td><?php echo $ligne."-".$col ?></td>
							<?php
						} ?>
					</tr>
					<?php
				}
			?>
		</table>
	</body>
</html>