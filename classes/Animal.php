<?php
	//Класс Chiken и Cow наследники этого класса.
	class Animal{

		public function generateYield($animal){
			switch ($animal) {
				
				case 'chiken':
					$egg = rand(0,1);
					return $egg;
					break;

				case 'cow':
					$milk = rand(8,12);
					return $milk;
					break;	
				
				default:
					return false;
					break;
			}
		}
	}
 ?>