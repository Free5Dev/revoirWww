<?php 
	require_once("connexion.inc.php");
	$reqSelect=$bdd->query("SELECT ID,titre, contenu, date_format(date_creation, 'le %d/%m/%Y à  %Hh%imin%ss') as date_fr FROM billets ORDER BY ID DESC  LIMIT 0,5");
?>
<!DOCTYPE html>
<html>
	<head>
		<title></title>
	</head>
	<body>
		<h1>Mon super blog</h1>
		<?php
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