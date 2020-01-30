<?php 
	use interfaces\animalInterface;

	class Chiken extends Animal implements animalInterface{
		public static $countObjects;
			
		protected $id;

		const MIN_YIELD = 0;
		const MAX_YIELD = 1;

		public  function takeYield(){
		 	return rand(self::MIN_YIELD,self::MAX_YIELD);
		}
	}
 ?>