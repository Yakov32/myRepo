<?php 
	class Chiken extends Animal implements animalInterface{
		public static $countObjects;
			
		protected $id;

		public $minYield = 0;
		public $maxYield = 1;

		public  function takeYield(){
		 	return rand($this->minYield,$this->maxYield);
		}
	}
 ?>