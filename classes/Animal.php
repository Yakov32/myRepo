<?php
	//Чтобы сделать новый класс животного, просто создайте его в папке classes и сделайте наследником Animal.
	
	abstract class Animal{

		public function __construct(){
			//Разделение ответственности, 'S' из SOLID.
			$idAnimal = idGenerator::generateId($this);

			$this->id = $idAnimal;
			$this->regInStable = true;
		} 
	}
 ?>