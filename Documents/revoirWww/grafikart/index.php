<?php
	require("Personnage.class.php");
	$form=new Personnage(array('username'=>'Roger'));

	var_dump($form);
	die();
	echo $form->input('username');
	echo $form->input('password');
	echo $form->submit();


	$form= new Personnage();
	echo $form->input('aze');
	echo $form->input('aze');
	echo $form->input('aze');
	echo $form->input('aze');
	echo $form->input('aze');
	echo $form->submit();
?>