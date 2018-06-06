<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8"/>
		<title></title>
	</head>
	<body>
		<?php
			$tab=array(10,11,12,13,14);
			$nb=count($tab);
			echo "".$nb;
			$dateJour=getdate();

			echo "<pre>";
			print_r($dateJour);
			echo "</pre>";
			echo "string".$dateJour['seconds'];
		?>
	</body>
</html>