<?php
	require_once("connexion.php");
	$req=$bdd->query("SELECT id,titre,contenu,date_format(date_creation,'le %d/%m/%Y à %Hh%imin%ss') as date_creation_fr  FROM billets ORDER BY id desc LIMIT 0,5");
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Mon Super Blog Commentaire</title>
	</head>
	<body>
		<h1>Mon super blog</h1>
		<?php while($donnees=$req->fetch()) { ?>
		<h3><?php echo nl2br(htmlspecialchars($donnees['titre']." ".$donnees['date_creation_fr'])); ?></h3>
		<p><?php echo nl2br(htmlspecialchars($donnees['contenu'])); ?></p>
		<span><a href="commentaire.php?id=<?php echo $donnees['id']; ?>">Commentaire</a></span>
		<?php } $req->closeCursor(); ?>
	</body>
</html>