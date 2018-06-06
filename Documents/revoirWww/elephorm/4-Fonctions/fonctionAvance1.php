<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8"/>
		<title></title>
	</head>
	<body>
		<?php 
			function moyenne($x,$y)
			{
				$som=($x+$y);
				$moy=$som/2;
				$res=array($som,$moy);
				return $res;
			}
			$cal=moyenne(2,4);
			echo "som".$cal[0]." moyenne".$cal[1];
			
		
		?>
	</body>
</html>