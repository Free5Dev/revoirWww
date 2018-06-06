<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8"/>
		<title></title>
	</head>
	<body>
		<?php 
			//structure de CONTROLE AVEC BREAK
		$tab=array(10,12,13,14,15,16);
		for ($i=0; $i < count($tab); $i++) { 
			if($tab[$i]==13) break;
			{
				echo "Tour".$tab[$i]."<br/>";
			}
		}
		?>
	</body>
</html>