<?php
	use interfaces\AnimalInterface;
	
	class Bee extends Animal implements AnimalInterface{
		public static $countObjects;
			
		protected $id;
		protected $regInStable;

		const MIN_YIELD = 12;
		const MAX_YIELD = 35;

		public function takeYield(){
		 	return rand(self::MIN_YIELD,self::MAX_YIELD);
		}
	} 

 ?>