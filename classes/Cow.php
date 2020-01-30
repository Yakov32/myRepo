<?php 
	use interfaces\animalInterface;
	
	class Cow extends Animal implements animalInterface{
		public static $countObjects;
		
		protected $id;

		const MIN_YIELD = 8;
		const MAX_YIELD = 12;

		public  function takeYield(){
		 	return rand(self::MIN_YIELD,self::MAX_YIELD);
		}
	}

?>