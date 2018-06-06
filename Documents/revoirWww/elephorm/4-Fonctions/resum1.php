<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8"/>
		<title></title>
	</head>
	<body>
		<?php
			//page php
			// require_once("resum2.php");
			// require_once("resum2.php");
			require("resum2.php");
			echo "Debut du programme";
			$cal1=moyenne(2,4,"dollard");
			echo "la moyenne est:".$cal1;
			echo "<br/>Suite du programme";
			$cal2=moyenne(6,8);
			echo "La moyenne 2 est:".$cal2;
		?>
		<h2>les fonctions intégrés</h2>
		<?php 
			$date=getdate();

			echo $date['seconds'];
			echo "<pre>";
			print_r($date);
			echo "</pre>";


			$source="bonjour";
			$search="o";
			$remplace="x";
			// $res=str_replace($search, $remplace, $source);
			echo str_replace($search, $remplace, $source);
			echo $source;

			$i=array(1,2,3,5);
			$n=count($i);
			echo $n;
			
		?>
	</body>
</html>