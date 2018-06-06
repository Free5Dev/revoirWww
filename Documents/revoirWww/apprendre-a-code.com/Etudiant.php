<?php 
	class Etudiant
	{
		public $etudie=true;
		public $nom;
		public $age;
		public $note;


		public function __construct($nom,$age,$note)
		{
			$this->nom=$nom;
			$this->age=$age;
			$this->note=$note;
		}
		public function sePresenter()
		{
			if($this->etudie)
			{
				echo "Je m'appelle ".$this->nom." et j'ai ".$this->age." ans <br/>";
				foreach ($this->note as $matiere =>$note) {
					echo "en ".$matiere." j'ai ".$note."/20<br/>";
				}
			}
			else
			{

			}
		}
	}
	$noteJoh=array("Maths"=>"19","Français"=>"20","Anglais"=>"18");
		$etudiant=new Etudiant("john","23",$noteJoh);

		$etudiant1=new Etudiant("john","23",$noteJoh);
		// $etudiant1->etudie=false;

		
		$etudiant1->sePresenter();
		$etudiant->sePresenter();
		var_dump($etudiant);
?>