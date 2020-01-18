<?php 
	class Chiken{
		private $id;
		public $regInStable;

		//Тут кол-во яиц у курицы, каждый раз случайно генерируется методом на 15 строке..
		private $egg;
		
		public function __construct($animalId){
			$this->id = $animalId;
			$this->regInStable = true;
		}

		//Метод генерации яйца
		public function chikensEgg(){
			$this->egg= rand(0,1);
			return $this->egg;
		}
	}
 ?>