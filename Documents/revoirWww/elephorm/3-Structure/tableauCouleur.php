<!DOCTYPE html>
<html>	
	<head>
		<meta charset="utf-8"/>
		<title></title>
	</head>
	<body>
		<?php 
			//structure de boucle for suite
			$couleur=array("00","33","66","99","CC","FF");
			for($rouge=0;$rouge<count($couleur);$rouge++)
			{
				?>
				<table border="1">
					<?php 
						for($vert=0;$vert<count($couleur);$vert++)
						{
							?>
							<tr>
								<?php 
									for ($blue=0; $blue <count($couleur) ; $blue++) {
										$couleurCellule=$couleur[$rouge]. $couleur[$vert].$couleur[$blue];
										?>
											<td width='100' bgcolor='#".$couleurCellule."'><?php echo $couleurCellule; ?></td>
										<?php
									}
								 ?>
							</tr>
							<?php
						}
					 ?>
				</table>
				<?php
			}
			



			echo "<pre>";
			print_r($couleur);
			echo "</pre>";
		?>
		</table>
	</body>
</html>