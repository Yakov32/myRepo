<?php
	use interfaces\AnimalInterface;
	
	class Ship extends Animal implements AnimalInterface{
		public static $countObjects;
			
		protected $id;
		protected $regInStable;

		const MIN_YIELD = 10;
		const MAX_YIELD = 18;

		public  function takeYield(){
		 	return rand(self::MIN_YIELD,self::MAX_YIELD);
		}
	}

 ?>