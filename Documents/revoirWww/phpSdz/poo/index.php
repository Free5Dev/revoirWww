<?php 
	include_once("Membre.class.php");
	$membre=new Membre();
	$membre1=new Membre(32);
	$maitreDesLieux=new Admin(2);
	$membre->setPseudo('Free5Dev');
	$membre->setCouleur('Free5Dev');//impossible
	$maitreDesLieux->setCouleur('mrd');
	$maitreDesLieux->setPseudo('mrd');
	echo $membre->getPseudo()." je vais te bannir,".$membre->bannir();
	$membre->bannir();
?>