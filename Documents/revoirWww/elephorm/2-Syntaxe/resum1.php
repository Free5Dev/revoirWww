<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8"/>
		<title></title>
	</head>
	<body>
		<!--debut des scripts php-->
		<?php
			//video:1-2
			/*video :2*/
			echo "Bonjour";
			//video:3->les types de variables
			$nom="free5dev";
			$age=24;
			$som=10.5;
			$tab[]=10;
			$bol=(5==5);
			$retour="<br/>";
			echo $retour."Bonjour ".$nom." vous avez ".$age." de ".$som." ".$tab[0]."".gettype($bol)."==>".$bol."";
			//video:3
			//les tableaux indices n°1:
			// $note[]=10;
			// $note[]=12;
			// $note[]=13;
			// $note[]=14;
			// $note[]=15;

			//les tableaux indices n°3
			// $note[0]=10;
			// $note[1]=12;
			// $note[2]=13;
			// $note[3]=24;
			// $note[4]=15;

			//les tableaux indices n°3
			// $note=array(22,23,24,25);

			//les tableaux associatifs n°1
			// $note['alain']=10;
			// $note['bernard']=12;
			// $note['adrien']=13;
			// $note['maltete']=24;
			// $note['free5dev']=15;

			//les tableaux associatifs n°2
			$note=array('free'=>'said','maltete'=>'adrieen');

			echo $retour."bonjour ".$note['free'];
			//echo $note[2];
			echo "<pre>";
			print_r($note);
			echo "</pre>";
		?>
		<h2>les tableaux à deux dimensions</h2>
		<?php 
			$ligne1=array(11,12);
			$ligne2=array(21,32);
			$ligne3=array(51,52);

			echo "<pre>";
			print_r($ligne1);
			echo "</pre>";


			echo "<pre>";
			print_r($ligne2);
			echo "</pre>";

			$classe=array($ligne1,$ligne2);
			$classe[]=$ligne3;

			echo "tableaux matrice".$classe[2][1];
			echo "<pre>";
			print_r($classe);
			echo "</pre>";
		?>

		<h2>les variables formulaire</h2>
		<form method="post" action="resum2.php">
			<label for="pseudo">Pseudo</label>
			<input type="text" name="pseudo" id="pseudo"/>
			<input type="submit" name="btn" value="valider"/>
		</form>
		<h2>les variables d'url</h2>
		<p><a href="resum2.php?name=fz&prm=5dev">lien</a></p>
		<h2>Les variables serveur</h2>
		<?php
			echo "<pre>";
			print_r($_SERVER);
			echo "</pre>";
		?>
		<h2>Le reste</h2>
		<?php
			//les choix ternaire
			$lg="fr";
			$pass='1234';
			echo (	($lg=="fr") && ($pass=='1234')?	"success":	"error");
		?>
	</body>
</html>