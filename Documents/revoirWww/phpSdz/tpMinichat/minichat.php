<?php 
	session_start();
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8"/>
		<title></title>
	</head>
	<body>
		<!-- formulaire de post sur le minichat -->
		<form method="post" action="minichat_post.php">
			<p><label for="pseudo">Pseudo</label><br/>
			<input type="text" name="pseudo" id="pseudo" value="<?php if(isset($_SESSION['pseudo'])) echo $_SESSION['pseudo']; ?>" /></p>
			<p><label for="message">Message</label><br/>
			<textarea name="message" id="message" rows="5"></textarea></p>
			<input type="submit" name="btn" value="Postuler"/>
		</form>
		<!-- Partie php affichage du pseudo et du message -->
		<?php
			try
			{
				//pour ce connecter à la bdd
				$bdd=new PDO('mysql:host=localhost;dbname=test;charset=utf8','root','',array(PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION));



			}
			catch(Exception $e)
			{
				//en cas d'erreur renvoi l'erreur et arrête tout l'excussion du block
				die('Erreur:'.$e->getMessage());
			}
			$req=$bdd->query("SELECT pseudo,message,date_format(date_ajout,'%d/%m/%Y %Hh%imin%ss') as date_ajout FROM minichat order by  id desc limit 0,10");
			while($donnees=$req->fetch())
				{
					?>
					<p><mark><?php echo htmlspecialchars("[".$donnees['date_ajout']."] ".$donnees['pseudo']); ?></mark>: <?php echo htmlspecialchars($donnees['message']); ?></p>
					<?php
				}
				$req->closeCursor();
		?>
	</body>
</html>