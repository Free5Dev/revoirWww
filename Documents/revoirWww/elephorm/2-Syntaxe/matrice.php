<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8"/>
		<title></title>
	</head>
	<body>
		<?php
			//les variables en tableaux à deux dimensions
			$ligne1=array(10,12);
			$ligne2=array(14,16);
			$ligne3=array(18,20);

			$classe=array($ligne1,$ligne2);
			$classe[]=$ligne3;

			echo $classe[2][1];

			echo "<pre>";
			print_r($ligne1);
			print_r($ligne2);
			print_r($classe);
			echo "</pre>";
			echo "</pre>";
		?>
	</body>
</html>