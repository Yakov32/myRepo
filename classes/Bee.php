<?php
	class Bee extends Animal implements animalInterface{
		public static $countObjects;
			
		protected $id;

		public $minYield = 50;
		public $maxYield = 250;

		public  function takeYield(){
		 	return rand($this->minYield,$this->maxYield);
		}
	} 

 ?>