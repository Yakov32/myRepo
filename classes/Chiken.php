<?php 
	class Chiken extends Animal{
		private $id;
		public $regInStable;
	
		public function __construct($animalId){
			$this->id = $animalId;
			$this->regInStable = true;
		}

		
	}
 ?>