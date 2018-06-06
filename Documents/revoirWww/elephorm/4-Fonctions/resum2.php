<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8"/>
		<title></title>
	</head>
	<body>
		<?php
			//page php
			function moyenne($x,$y,$unit="euro")
			{
				$res=($x+$y)/2;
				$res.=$unit;
				return $res;	
			}
		?>
	</body>
</html>