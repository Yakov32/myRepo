<?php
	use interfaces\animalInterface;
	
	class Ship extends Animal implements animalInterface{
		public static $countObjects;
			
		protected $id;

		const MIN_YIELD = 10;
		const MAX_YIELD = 18;

		public  function takeYield(){
		 	return rand(self::MIN_YIELD,self::MAX_YIELD);
		}
	}

 ?>