<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8"/>
		<title></title>
	</head>
	<body>
		<?php
			$source="bonjour";
			$search="o";
			$remplace="x";
			 $res=str_replace($search, $remplace, $source);
			 echo $res;
		?>
	</body>
</html>