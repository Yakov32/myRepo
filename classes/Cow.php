<?php
	class Cow extends Animal implements animalInterface{
		public static $countObjects;
		
		protected $id;

		public $minYield = 8;
		public $maxYield = 12;

		public  function takeYield(){
		 	return rand($this->minYield,$this->maxYield);
		}	
	}

?>