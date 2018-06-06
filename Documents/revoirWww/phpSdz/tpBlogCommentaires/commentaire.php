<?php 
	session_start();
	require_once("connexion.php");
	if(isset($_GET['id']))
	{
		$_SESSION['billet']=$_GET['id'];
		$reqBillet=$bdd->prepare("SELECT id,titre,contenu,date_format(date_creation,'%d/%m/%Y %Hh%imin%ss') as date_creation_fr FROM billets WHERE id=?");
		$reqBillet->execute(array($_SESSION['billet']));
		$donneesBillets=$reqBillet->fetch();
		$reqComment=$bdd->prepare("SELECT id,id_billet,auteur,commentaire,date_format(date_commentaire,'le %d/%m/%Y à %Hh%imin%ss') as date_commentaire_fr FROM commentaires WHERE id_billet=? order by date_commentaire_fr DESC");
		$reqComment->execute(array($_SESSION['billet']));

	}
	else
	{
		header("Location:index.php");
	}
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Page commentaire</title>
	</head>
	<body>
		<h1>Mon super blog</h1>
		<form method="post" action="commentaire_post.php">
			<label for="auteur">Auteur</label><br/>
			<input type="text" name="auteur" id="auteur" value="<?php if(isset($_SESSION['auteur'])) echo $_SESSION['auteur']; ?>" /><br/>
			<label for="commentaire">Commentaire</label><br/>
			<input type="text" name="commentaire" id="commentaire"/><br/>
			<input type="submit" name="btn" value="Postulez"/>
		</form>
		<span><a href="index.php">Retour aux billets</a></span>
		<h3><?php echo nl2br(htmlspecialchars($donneesBillets['titre']." ".$donneesBillets['date_creation_fr'])); ?></h3>
		<p><?php echo nl2br(htmlspecialchars($donneesBillets['contenu'])); ?></p>
		<h4>Commentaire</h4>
		<?php while($donnesComment=$reqComment->fetch()) { ?>
		<h5><?php echo  nl2br(htmlspecialchars($donnesComment['auteur']."".$donnesComment['date_commentaire_fr'])) ?></h5>
		<p><?php echo  nl2br(htmlspecialchars($donnesComment['commentaire'])); ?></p>
		<?php } $reqComment->CloseCursor(); ?>
	</body>
</html>