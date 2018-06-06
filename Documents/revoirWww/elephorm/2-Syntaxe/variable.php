<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8"/>
		<title></title>
	</head>
	<body>
		<?php
			//les variables et leurs types
			$nom="said";
			$age=22;
			$som=10.2;
			$char='S';
			$bol=(1==1);
			$tab[3]=3;
			$retour="<br/>";
			echo $nom." est un variable de types:".gettype($nom)."".$retour;
			echo $age." est un variable de types:".gettype($age)."".$retour;
			echo $som." est un variable de types:".gettype($som)."".$retour;
			echo $bol." est un variable de types:".gettype($bol)."".$retour;
			echo $tab[3]." est un variable de types:".gettype($tab)."".$retour;
		?>
	</body>
</html>