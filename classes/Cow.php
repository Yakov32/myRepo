<?php
	class Cow extends Animal{
		protected $id;
		public $regInStable;

		public function __construct($animalId){
			$this->id = $animalId;
			$this->regInStable = true;
		}
	}

?>