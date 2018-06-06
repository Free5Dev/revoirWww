<?php
	if(isset($_POST['btn']))
	{
		if ($_POST['pseudo']=='1234') {
			header("Location:resum2.php");
		}
	}
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8"/>
		<title></title>
	</head>
	<body>
		<?php
			//page php
			$age=18;
			if($age<18)
			{
				echo "mineur";
			}
			else
			{
				if($age>65)
				{
					echo "vieux";
				}
				else
				{
					echo "majeur";
				}
			}
		?>
		<h2>Switch case</h2>

		<?php  
			$lg="en";
			switch($lg)
			{
				case 'ens':
					echo "hello";
					break;
				case 'fr':
					echo "Bonjour";
					break;
				case 'es':
					echo "Holla";
					break;
				case 'dg':
					echo "tag";
					break;
				default:echo "inconnue";
			}

		?>
		<h2>Les boucle avec while</h2>

		<?php
			$i=1;
			while($i<=5)
			{
				echo "string".$i."<br/>";
				$i++;
			}
		?>
		<h2>Les boucles avec for de façon impriquéé</h2>
		<table border="1">
			<?php 
				for($i=1;$i<=5;$i++)
				{
					echo "<tr>";
						for($j=1;$j<=5;$j++)
						{
							echo "<td>";
							echo $i."-".$j;
							echo "</td>";
						}
					echo "</tr>";
				}

			?>
		</table>
		<h2>Application de couleurs très pratiques</h2>
		<?php
			$couleur=array("00","33","66","99","CC","FF");
			for($rouge=0;$rouge<6;$rouge++)
			{
				echo "<table border='1'>";
					for($vert=0;$vert<6;$vert++)
					{
						echo "<tr>";
							for($blue=0;$blue<6;$blue++)
							{
								$couleurCellule=$couleur[$rouge].$couleur[$vert].$couleur[$blue];
								echo "<td bgcolor='#".$couleurCellule."'>";
								echo $couleurCellule;
								echo "</td>";
							}
						echo "</tr>";
					}
				echo "<table border='1'>";
			}

			echo "<pre>";
			print_r($couleur);
			echo "</pre>";
		?>
		<h2>Boucle foreach</h2>
		<?php
			//avec les tableaux indices
			// $agence=array("Paris","Lyon","Marseille");
			// les tableeaux associatifs
			$agence=array("centre"=>"Paris","Sud"=>"Lyon","ouest"=>"Marseille");
			// foreach($agence as $ville)
			foreach($agence as $key=>$ville)
			{
				echo "l'agence du :".$key." se trouve à ".$ville."<br/>";
			}
			echo "<pre>";
			print_r($agence);
			echo "</pre>";	
		?>
		<h2>Instruction de controle avec break</h2>
		<?php
			$tour=array(1,1,1,0,1,1,1);
			for ($i=0; $i < 7; $i++) { 
				if($tour[$i]==0) break;
				echo "tour ".$i."=".$tour[$i]."<br/>";
			}
		?>

		<h2>Instruction de controle avec continue</h2>
		<?php
			$tour=array(1,1,1,0,1,1,1);
			for ($i=0; $i < 7; $i++) { 
				if($tour[$i]==0) continue;
				echo "tour ".$i."=".$tour[$i]."<br/>";
			}
		?>
		<h2>Inclusion de fragment de texte</h2>
		<?php include("resum2.php"); ?>

		<h2>Redirectionnement en php</h2>
		<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
			<label for="pseudo">Pseudo</label>
			<input type="text" name="pseudo" id="pseudo"/>
			<input type="submit" name="btn" value="valider"/>
		</form>

		<?php
			echo "<pre>";
			print_r($_POST);
			echo "</pre>";
		?>
	</body>
</html>