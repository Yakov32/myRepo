<?php
	interface animalInterface{
		public function takeYield();


	}
	abstract class Animal{
	
		public function __construct(){
			$className = strtolower(get_class($this));
			$animalId = substr($className,0,2) . $className::$countObjects;
			$className::$countObjects++;

			$this->id = $animalId;
			$this->regInStable = true;
		} 
	}
 ?>