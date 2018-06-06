<?php 
	class Membre
	{
		//les attributs d'une class permettent de rendre l'objet unique
		private $pseudo;
		private $email;
		private $signature;
		private $actif;
		//les fonction pour pour recuperer le contenu d'une variable gettteur ou de modifier setteur
		public function getPseudo()
		{
			return $this->pseudo;
		}
		public function setPseudo($nouveauPseudo)
		{
			//on verifi si le nouveau pseudo n'est ni vide ni long
			if(!empty($nouveauPseudo) and strlen($nouveauPseudo)<15)
			{
				//ok on peut changer son pseudo
				$this->pseudo=$nouveauPseudo;
			}
		}
		//on envoi un email au membre
		public function envoyerEmail($titre,$message)
		{
			//mail($this->email,$titre,$message);
		}
		//on banni le memebre du site
		public function bannir()
		{
			$this->actif=false;
			$this->envoyerEmail("vous avez été banni","Ne revenez plus");
		}
		public function __construct($idmembre)
		{
			//recuperation des donnees da la bdd
			//definition des resultats avec les variables de la bdd
			$this->pseudo=$donnees['pseudo'];
			$this->email=$donnees['email'];
		}
		public function __destruct()
		{
			echo "cet objet va être detruit";
		}

	}