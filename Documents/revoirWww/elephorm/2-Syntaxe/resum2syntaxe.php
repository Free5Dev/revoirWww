<!DOCTYPE html>
<html>
	<head>
		<title></title>
	</head>
	<body>
		<?php 
			//Bonjour.php
			
			/*les differents types de variables*/
			$nom="said";
			$age=22;
			$som=10.5;
			$bol=(4==4);
			$tab[0]=4;
			$retour="<br/>";
			echo "Bonjour Mr".$nom." vous avez ".$age." ans et votre compte en banque est ".$som." euros".$retour." votre nombre favorie est:".$tab[0]." ".gettype($bol).$bol." ".$retour;
			echo "Bonjour".$retour;
			/*les diffrents types de tableaux */
			//les tableaux indicés n°1
			// $notes[0]=10;
			// $notes[1]=11;
			// $notes[2]=13;

			//les tableaux indicés n°2
			$notes[]=18;
			$notes[]=19;
			$notes[]=123;

			//les tableaux indicés n°3
			//$notes=array(22,55,66);

			//les tableaux associatifs n°1
			// $notes['jean']=41;
			// $notes['alain']=65;
			// $notes['zizo']=69;


			//les tableaux associzatifs n°3
			$notes=array('ss'=>74,'th'=>96,'zth'=>58);

			//echo $notes[2];

			echo $notes['ss'];
			echo "<pre>";
			print_r($notes);
			echo "</pre>";

			//les tableaux matriciels
			$ligne1=array(10,11);
			$ligne2=array(14,15);
			$ligne3=array(211,21);
			echo "<pre>";
			print_r($ligne1);
			echo "</pre>";

			echo "<pre>";
			print_r($ligne2);
			echo "</pre>";

			$classe=array($ligne1,$ligne2);
			$classe[]=$ligne3;

			echo "<pre>";
			print_r($classe);
			echo "</pre>";
			echo $classe[0][0].$classe[1][1].$classe[2][0];
		?>
	</body>
</html>