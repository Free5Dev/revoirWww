<?php
	class Personnage
	{
		private $data;
		public $surround='p';
		public function __construct($data)
		{
			$this->data=$data;
		}
		public function surround($html)
		{
			return "<{$this->surround}>{html}</$this->surround}>";
		}
		public function input($name)
		{
			$this->surround("<input type='text' name='".$name."'>");
		}
		public function submit()
		{
			$this->surround("<button type='submit'>Envoyer</button>");
		}
	}