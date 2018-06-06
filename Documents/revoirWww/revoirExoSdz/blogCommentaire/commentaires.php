<?php
	session_start();
	require_once("connexion.inc.php");
?>
<!DOCTYPE html>
<html>
	<head>
		<title></title>
	</head>
	<body>
		<h1>Mon super blog!</h1>
		<form method="post" action="commentaire_post.php">
			<label for="auteur">Auteur</label><br/>
			<input type="text" name="auteur" id="auteur"/><br/>
			<label for="commentaire">Commentaire</label><br/>
			<textarea name="commentaire"></textarea><br/>
			<input type="submit" name="btn" value="Postez"/>
		</form>
		<?php 
			if(isset($_GET['ref']))
			{
				$reqGet=$bdd->prepare("SELECT ID,titre,contenu,date_format(date_creation,' Le %d/%m/%Y à %Hh%imin%ss') as date_fr FROM billets WHERE id=?");
				$reqGet->execute(array($_GET['ref']));
				$donneesGet=$reqGet->fetch();
				?>
				<a href="index.php">Retour sur la liste des billets</a>
				<h2><?php echo htmlspecialchars($donneesGet['titre'])." ".htmlspecialchars($donneesGet['date_fr']); ?></h2>
				<p><?php echo nl2br(htmlspecialchars($donneesGet['contenu'])); ?></p>
				<h3><em>Commentaires</em></h3>
				<?php
				$req=$bdd->prepare("SELECT id_billet,auteur, commentaire,date_format(date_commentaire,' le %d/%m/%Y à %Hh%imin%ss') as date_comment FROM commentaires WHERE id_billet=? ORDER BY date_commentaire DESC LIMIT 0,5");
				$_SESSION['id_billet']=$_GET['ref'];
				$req->execute(array($_GET['ref']));
				while($donnees=$req->fetch())
				{
					?>
					<h4><?php echo $donnees['auteur'].": ".$donnees['date_comment']; ?></h4>
					<p><?php echo $donnees['commentaire']; ?></p>
					<?php
				}
				$req->closeCursor();
			}
			else
			{
				header("Location:index.php");
			}
		?>
	</body>
</html>