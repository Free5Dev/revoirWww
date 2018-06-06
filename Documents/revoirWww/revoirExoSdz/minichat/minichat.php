<?php
	session_start();
	require_once("connexionMysql.inc.php");
	//nombre de message qu'on veux par page
	$nombreDeMessageParPage=10;
	//on récupere le nombre total de message
	$reqCount=$bdd->query("SELECT COUNT(*) as nb_message FROM minichat");
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
		<form method="post" action="minichat_post.php">
			<label for="pseudo">Pseudo</label>
			<input type="text" name="pseudo" value="<?php if(isset($_SESSION['pseudo'])) echo $_SESSION['pseudo'];  ?>" id="pseudo"/><br/>
			<label for="message">message</label>
			<textarea name="message"></textarea><br/>
			<input type="submit" name="btn" value="postulez" id=""/>
			<a href="minichat.php">Actualisez</a>
		</form>
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
			$req=$bdd->query("SELECT pseudo,message FROM minichat ORDER BY ID DESC LIMIT ".$premierMessageAafficher.",".$nombreDeMessageParPage);
		?>
		<?php while($donnees=$req->fetch()) { ?>
		<p><strong><?php echo htmlspecialchars($donnees['pseudo']); ?>: </strong><?php echo nl2br(htmlspecialchars($donnees['message']))  ; ?></p>
		<?php } $req->closeCursor(); ?>
	</body>
</html>