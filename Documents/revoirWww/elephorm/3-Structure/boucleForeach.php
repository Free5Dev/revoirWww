<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8"/>
		<title></title>
	</head>
	<body>
		<?php 
			//structure de boucle avec foreach
			$agence=array("Paris"=>'centre',"Nantes"=>'Nord',"Toulouse"=>'Sud');
			foreach($agence as $cle=>$ville)
			{
				echo "l'agence de:".$cle." se trouve au:".$ville."<br/>";
			}
			echo "<pre>";
			print_r($agence);
			echo "</pre>";
		?>
	</body>
</html>