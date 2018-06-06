<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8"/>
		<title></title>
	</head>
	<body>
		<?php
			//page php
			$source="bonjour";
			$recherche="o";
			$remplace="x";
			echo $source;
			echo "<br/>";
			//echo str_replace($recherche,$remplace,$source);
			$rest=str_replace($recherche,$remplace,$source);
			echo $rest;
		?>
	</body>
</html>