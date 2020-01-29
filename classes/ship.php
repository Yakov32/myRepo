<?php
	class Ship extends Animal implements animalInterface{
		public static $countObjects;
			
		protected $id;

		public $minYield = 20;
		public $maxYield = 50;

		public  function takeYield(){
		 	return rand($this->minYield,$this->maxYield);
		}
	}

 ?>