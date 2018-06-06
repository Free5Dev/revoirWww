<?php  
	session_start();
	unset($_SESSION[pseudo]);
?>
<!DOCTYPE html>
<html>
	<head>
		<title></title>
	</head>
	<body>
	<?php 
		try
		{
			$bdd=new PDO('mysql:host=localhost;dbname=test;charset=utf8','root','',array(PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION));
			
		}
		catch(Exception $e)
		{
			die('Erreur:'.$e->getMessage());
		}
		$req=$bdd->prepare('INSERT INTO minichat(pseudo,message,date_ajout) values(?,?,now())') ;
		$req->execute(array($_POST['pseudo'], $_POST['message']));;
		$_SESSION['pseudo']=$_POST['pseudo'];
		header("Location:minichat.php");
	?>
	</body>
</html>