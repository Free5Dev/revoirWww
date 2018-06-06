<?php 
	require_once("connexion.inc.php");
	//nombre de message qu'on veux par page
	$nombreDeMessageParPage=5;
	//on récupere le nombre total de message
	$reqCount=$bdd->query("SELECT COUNT(*) as nb_message FROM billets");
	$donneesCount=$reqCount->fetch();
	echo $donneesCount['nb_message'];
	$totalDesMessage=$donneesCount['nb_message'];
	//on calcul le nombre de page à créer
	$nombreDePages=ceil($totalDesMessage/$nombreDeMessageParPage);
?>
<!DOCTYPE html>
<html>
	<head>
		<title></title>
	</head>
	<body>
		<h1>Mon super blog</h1>
		<?php
			//boucle pour faire les liens vers chaque page
			echo "Page:";
			for($i=1;$i<=$nombreDePages;$i++)
			{
				 echo '<a href="minichat.php?page=' . $i . '">' . $i . '</a> ';
			}
			//on va affiché les messages
			if(isset($_GET['page']))
			{
				$page=$_GET['page'];
			}
			else
			{
				$page=1;
			}
			//on calcul le numero du premier messagequ'on prend prend pour limit de mysql
			$premierMessageAafficher=($page-1)*$nombreDeMessageParPage;
			$reqSelect=$bdd->query("SELECT ID,titre, contenu, date_format(date_creation, 'le %d/%m/%Y à  %Hh%imin%ss') as date_fr FROM billets ORDER BY ID DESC  LIMIT ".$premierMessageAafficher.",".$nombreDeMessageParPage."");
			while($donneesSelect=$reqSelect->fetch())
			{
				?>	
				<h2><?php echo htmlspecialchars($donneesSelect['titre'])." ".htmlspecialchars($donneesSelect['date_fr']); ?></h2>
				<p><?php echo nl2br(htmlspecialchars($donneesSelect['contenu'])); ?></p>
				<a href="commentaires.php?ref=<?php echo $donneesSelect['ID']; ?>"><mark>Commentaires</mark></a>
				<?php
			}
			$reqSelect->closeCursor();
		?>
	</body>
</html>