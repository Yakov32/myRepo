<?php
	class Cow{
		protected $id;
		public $regInStable;
		//Тут кол-во молока в корове, каждый раз случайно генерируется методом на 14 строке.
		private $milk;

		public function __construct($animalId){
			$this->id = $animalId;
			$this->regInStable = true;
		}

		//Метод генерации кол-ва молока
		public function cowsMilk(){
			$this->milk = rand(8,12);
			return $this->milk;
		}
	}

?>