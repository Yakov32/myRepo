<?php 
	use interfaces\AnimalInterface;
	
	class Chiken extends Animal implements AnimalInterface{
		public static $countObjects;
			
		protected $id;
		protected $regInStable;

		const MIN_YIELD = 0;
		const MAX_YIELD = 1;

		public  function takeYield(){
		 	return rand(self::MIN_YIELD,self::MAX_YIELD);
		}
	}
 ?>