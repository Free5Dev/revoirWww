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
				$res=($x+$y)/2;
				return $res;
			}
			$cal=moyenne(2,4);
			echo "Debut du programme";
			echo "la moyenne générale est:".$cal;
			$cal2=moyenne(6,8);
			echo "<br/>Suite du programme";
			echo "la moyenne générale est:".$cal2;
		?>
	</body>
</html>