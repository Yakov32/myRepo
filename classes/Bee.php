<?php
	use interfaces\animalInterface;
	class Bee extends Animal implements animalInterface{
		public static $countObjects;
			
		protected $id;

		const MIN_YIELD = 12;
		const MAX_YIELD = 35;

		public  function takeYield(){
		 	return rand(self::MIN_YIELD,self::MAX_YIELD);
		}
	} 

 ?>