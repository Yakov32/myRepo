<?php 
	use interfaces\AnimalInterface;
	
	class Cow extends Animal implements AnimalInterface{
		public static $countObjects;
		
		protected $id;
		protected $regInStable;

		const MIN_YIELD = 8;
		const MAX_YIELD = 12;

		public  function takeYield(){
		 	return rand(self::MIN_YIELD,self::MAX_YIELD);
		}
	}

?>